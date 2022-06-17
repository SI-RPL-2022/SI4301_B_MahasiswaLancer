<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;

class BiodataMHSController extends Controller
{
    public function index()
    {
     
        return view('Mahasiswa.biodata');
        
    }

    public function update(Request $request)
    {

        $user = User::findorfail(Auth::id());

        $user['no_hp'] = $request->no_hp;
        $user['deskripsi'] = $request->deskripsi;
        $user['keahlian'] = $request->keahlian;

        $user->update();

        // dd($user['no_hp']);

        return redirect()->back()->with('success', 'User berhasil dibuat.');

    }
}