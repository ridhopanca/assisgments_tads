<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fakultas;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Fakultas';
        $fakultascase = Fakultas::all();
        return view('fakultas.index', compact('fakultascase','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Fakultas';
        return view('fakultas.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_fakultas' => 'required|max:255',
        ]);
        $show = Fakultas::create($validatedData);
   
        return redirect('/fakultas')->with('success', 'Fakultas data is successfully saved');
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
        $title = 'Edit Fakultas';
        $fakultascase = Fakultas::findOrFail($id);
        return view('fakultas.edit', compact('fakultascase','title'));
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
        $validatedData = $request->validate([
            'nama_fakultas' => 'required|max:255',
        ]);
        Fakultas::whereId($id)->update($validatedData);

        return redirect('/fakultas')->with('success', 'Fakultas data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fakultascase = Fakultas::findOrFail($id);
        $fakultascase->delete();

        return redirect('/fakultas')->with('success', 'Fakultas data is successfully deleted');
    }
}
