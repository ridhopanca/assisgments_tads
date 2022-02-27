<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $cmhs = DB::table('mahasiswa')->count();
        $cps = DB::table('program_studis')->count();
        $cfk = DB::table('fakultas')->count();
        return view('home', compact('title','cmhs','cfk','cps'));
    }
}
