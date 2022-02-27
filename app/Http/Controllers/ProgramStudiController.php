<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramStudi;
use App\Fakultas;
use Illuminate\Support\Facades\DB;
class ProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Program Studi';
        $programstudi = DB::table('program_studis')
                            ->select('program_studis.id','program_studis.nama_program_studi','program_studis.fakultas_id','fakultas.nama_fakultas')
                            ->leftJoin('fakultas','program_studis.fakultas_id' , '=', 'fakultas.id')
                            ->get();
        return view('programstudi.index', compact('programstudi','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Program Studi';
        $fakultas = Fakultas::all();
        return view('programstudi.create', compact('title','fakultas'));
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
            'nama_program_studi' => 'required|max:255',
            'fakultas_id' => 'required|numeric',
        ]);
        if ($validatedData) {
            $show = ProgramStudi::create($validatedData);
            return redirect('/programstudi')->with('success', 'Program studi data is successfully saved');
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
        $title = 'Edit Program Studi';
        $programstudi = ProgramStudi::findOrFail($id);
        $fakultas = Fakultas::all();
        return view('programstudi.edit', compact('programstudi','title', 'fakultas'));
    }

    public function fakultas($id)
    {
        $programstudi = DB::table('program_studis')->where('fakultas_id', $id)->get();
        return $programstudi;
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
            'nama_program_studi' => 'required|max:255',
            'fakultas_id' => 'required|numeric',
        ]);
        if ($validatedData) {
            ProgramStudi::whereId($id)->update($validatedData);
            return redirect('/programstudi')->with('success', 'Program studi data is successfully updated');
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
        $programstudicase = ProgramStudi::findOrFail($id);
        $programstudicase->delete();

        return redirect('/programstudi')->with('success', 'Program studi data is successfully deleted');
    }
}
