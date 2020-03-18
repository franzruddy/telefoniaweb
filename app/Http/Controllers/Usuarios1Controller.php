<?php

namespace App\Http\Controllers;

use App\Usuarios1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class Usuarios1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['usuarios1']=Usuarios1::paginate(5);

        return view ('usuarios1.index',$datos);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('usuarios1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $datosUsuarios1=request()->all();
        $datosUsuarios1=request()->except('_token');

        if ($request->hasFile('Foto')){
            $datosUsuarios1['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Usuarios1::insert($datosUsuarios1);
        
        //return response()->json($datosUsuarios1);
        return redirect('usuarios1')->with('Mensaje','Usuario agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios1  $usuarios1
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios1 $usuarios1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios1  $usuarios1
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuarios1=Usuarios1::findOrFail($id);
        return view ('usuarios1.edit',compact('usuarios1'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios1  $usuarios1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuarios1=request()->except(['_token','_method']);

        if ($request->hasFile('Foto')){

            $usuarios1=Usuarios1::findOrFail($id);
            Storage::delete('public/'.$usuarios1->Foto);

            $datosUsuarios1['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Usuarios1::where('id','=',$id)->update($datosUsuarios1);

        
        
        //$usuarios1=Usuarios1::findOrFail($id);
        //return view ('usuarios1.edit',compact('usuarios1'));  

        return redirect('usuarios1')->with('Mensaje','Usuario modificado con exito');    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios1  $usuarios1
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuarios1=Usuarios1::findOrFail($id);

        if(Storage::delete('public/'.$usuarios1->Foto)){
        Usuarios1::destroy($id);
        } 


        
        return redirect('usuarios1')->with('Mensaje','Usuario Eliminado');
    }
}
