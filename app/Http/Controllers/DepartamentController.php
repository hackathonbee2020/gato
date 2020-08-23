<?php

namespace App\Http\Controllers;

use App\Http\Requests\Departament\StoreRequest;
use App\Models\Departament;
use Illuminate\Http\Request;

class DepartamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departaments =  Departament::all();
       // dd($departaments);
        return view('pages.departaments.index', compact('departaments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.departaments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {   
        $dep = new Departament();
        $dep->name= $request->input('name');
        $dep->status= $request->input('status');
        $dep->client_id= '1451c907-4027-4df0-b1e1-1d9ff3a03d6e';
        $dep->save();

        return redirect('departaments')->with('success', 'Departamento adicionado com sucesso!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('pages.departaments.edit', compact('id'));
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
        $dep = Departament::find($id);
        $dep->name= $request->input('name');
        $dep->status= $request->input('status');
        $dep->client_id= '1451c907-4027-4df0-b1e1-1d9ff3a03d6e';
        $dep->save();

        return redirect('departaments')->with('success', 'Departamento adicionado com sucesso!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departaments =  Departament::find($id);
        $departaments->destroy($id);

        return redirect()->back()->with('success', 'Departamento excluído com sucesso!');
    }
}
