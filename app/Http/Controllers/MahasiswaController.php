<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramStudi;
use App\Fakultas;
use App\Mahasiswa;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Mahasiswa';
        $mahasiswa = DB::table('mahasiswa')
                            ->select('mahasiswa.id','mahasiswa.nama','mahasiswa.fakultas_id','mahasiswa.alamat','mahasiswa.no_telp','mahasiswa.program_studi_id','fakultas.nama_fakultas','program_studis.nama_program_studi')
                            ->leftJoin('fakultas','mahasiswa.fakultas_id' , '=', 'fakultas.id')
                            ->leftJoin('program_studis','mahasiswa.program_studi_id' , '=', 'program_studis.id')
                            ->get();
        return view('mahasiswa.index', compact('mahasiswa','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Mahasiswa';
        $fakultas = Fakultas::all();
        return view('mahasiswa.create', compact('title','fakultas'));
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
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'no_telp' => 'required',
            'fakultas_id' => 'required|numeric',
            'program_studi_id' => 'required|numeric',
        ]);

        if ($validatedData) {
            $show = Mahasiswa::create($validatedData);
            return redirect('/mahasiswa')->with('success', 'Mahasiswa data is successfully saved');
        }else{
            Redirect::back()->withErrors(['msg' => 'Harap lengkapi data']);
        }
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
        $title = 'Edit Mahasiswa';
        $mahasiswa = Mahasiswa::findOrFail($id);
        $fakultas = Fakultas::all();
        return view('Mahasiswa.edit', compact('mahasiswa','title', 'fakultas', ));
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
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'no_telp' => 'required',
            'fakultas_id' => 'required|numeric',
            'program_studi_id' => 'required|numeric',
        ]);
        if ($validatedData) {
            Mahasiswa::whereId($id)->update($validatedData);
            return redirect('/mahasiswa')->with('success', 'Mahasiswa data is successfully updated');
        }else{
            Redirect::back()->withErrors(['msg' => 'Harap lengkapi data']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programstudicase = Mahasiswa::findOrFail($id);
        $programstudicase->delete();

        return redirect('/mahasiswa')->with('success', 'Mahasiswa data is successfully deleted');
    }
}
