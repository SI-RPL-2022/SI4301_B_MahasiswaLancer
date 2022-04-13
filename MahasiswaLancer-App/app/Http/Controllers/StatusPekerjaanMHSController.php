<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusPekerjaanMHSController extends Controller
{
    public function index()
    {
     
        return view('Mahasiswa.statusPekerjaan');
        
    }
}