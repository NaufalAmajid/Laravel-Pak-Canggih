<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){
        //Menampilkan Data
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('halaman_mahasiswa',['data_mahasiswa' => $mahasiswa]);
    }
}
