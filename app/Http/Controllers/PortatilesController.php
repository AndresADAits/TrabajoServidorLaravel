<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portatiles;

class PortatilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $portatiles=Portatiles::all();
        return view('portatil.index',compact('portatiles')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('portatil.create');
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
    $this->validate(
     $request,[ 
         'nombre'=>'required', 
         'marca'=>'required', 
         'ram'=>'required', 
         'tgrafica'=>'required', 
         'precio'=>'required', 
         ]);

        Portatiles::create($request->all());

        return redirect()->route('portatil.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $portatiles=Portatiles::find($id);
        return  view('portatil.show',compact('portatiles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $portatiles=Portatiles::find($id);
        return view('portatil.edit',compact('portatiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
   $this->validate($request,[ 'nombre'=>'required',
    'marca'=>'required',
     'ram'=>'required',
      'tgrafica'=>'required',
         'precio'=>'required']);

        Portatiles::find($id)->update($request->all());
        return redirect()->route('portatil.index')->with('success','Registro actualizado satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                //
         Portatiles::find($id)->delete();
        return redirect()->route('portatil.index')->with('success','Registro eliminado satisfactoriamente');
    }
}