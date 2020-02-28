<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movil;

class MovilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $moviles=Movil::orderBy('id','DESC')->paginate(3);
        return view('movil.index',compact('moviles')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('movil.create');
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
        $this->validate($request,[ 'modelo'=>'required', 'marca'=>'required', 'rom'=>'required', 'ram'=>'required', 'bateria'=>'required', 'precio'=>'required']);
        Movil::create($request->all());
        return redirect()->route('movil.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $moviles=Movil::find($id);
        return  view('movil.show',compact('moviles'));
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
        $movil=Movil::find($id);
        return view('movil.edit',compact('movil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)    {
        //
        $this->validate($request,[ 'modelo'=>'required', 'marca'=>'required', 'rom'=>'required', 'ram'=>'required', 'bateria'=>'required', 'precio'=>'required']);

        Movil::find($id)->update($request->all());
        return redirect()->route('movil.index')->with('success','Registro actualizado satisfactoriamente');

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
         Movil::find($id)->delete();
        return redirect()->route('movil.index')->with('success','Registro eliminado satisfactoriamente');
    }
}