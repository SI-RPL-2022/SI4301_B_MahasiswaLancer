<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Jasa;
use App\Models\file;
use App\Models\User;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    public function landingpage()
    {
        $jasa = Jasa::all();
        foreach ($jasa as $jasa_each){
            $cover = file::where('jasa_id',$jasa_each['id'])->first();
            $jasa_each['cover'] = $cover['alamat_gambar'];

            $user = User::findorfail($jasa_each['userId']);

            $nama = $user->name;
            $profil = $user->profile_photo_url;
            $jasa_each['user'] = $nama;
            $jasa_each['profil'] = $profil;
        }
        // dd($jasa);
        return view('LandingPage',['jasas'=>$jasa]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $jasa = Jasa::where('userId',$id)->get();
        // User::where('status', 'VIP')->get();
        // dd($jasa);
        foreach ($jasa as $jasa_each){
            $gambar = file::where('jasa_id',$jasa_each['id'])->first();
            $jasa_each['gambar'] = $gambar['alamat_gambar'];
        }
        // $gambar = file::where('jasa_id',$jasa['id'])->first();
        // dd($jasa);
        return view('Mahasiswa.jasa',['jasas'=>$jasa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mahasiswa.tambahjasa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd();
        $validated = $request->validate([
            'judul' => ['required'],
            'harga' => ['required'],
            'deskripsi' => ['required'],
            'gambar' => ['required'],
            'gambar.*' => ['image']
        ]);

        

        $dataJasa = array(
            Auth::id(),
            $request->judul,
            $request->harga,
            $request->deskripsi
        );

        $idJasa = Jasa::insertJasa($dataJasa);

        // dd($request->file('gambar'));
        $files = [];
        if($request->hasfile('gambar'))
        {
            $counter = 0;
            foreach($request->file('gambar') as $image)
            {
                $name = time().rand(1,50).'.'.$image->extension();
                $image->move('image/', $name);  

                $files[] = $name;  
                $file= new file();
                $file->alamat_gambar = $files[$counter];
                $file->jasa_id = $idJasa;

                $counter +=1;
                
                $file->save();
            }
        }

        

        return redirect()->route('jasa')->with('success', 'User berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    // Jasa $jasa
    public function show(Jasa $jasa, int $id)
    {
        $tampil_jasa = Jasa::findorfail($id);
        $tampil_user = User::findorfail($tampil_jasa['userId']);
        // dd($tampil_jasa);

        $tampil_jasa_cover = file::where('jasa_id',$id)->get('alamat_gambar');
        // dd($tampil_jasa_cover);

        $jasa = Jasa::all()->take(4);
        // $cover = file::where('jasa_id',$jasa_each['id'])->first();
        
        foreach ($jasa as $jasa_each){
            $cover = file::where('jasa_id',$jasa_each['id'])->first();
            $jasa_each['cover'] = $cover['alamat_gambar'];

            $user = User::findorfail($jasa_each['userId']);

            $nama = $user->name;
            $profil = $user->profile_photo_url;
            $jasa_each['user'] = $nama;
            $jasa_each['profil'] = $profil;
        }
        // dd($jasa);
        return view('Client.detailjasa',['jasas'=>$jasa, 'cover'=>$tampil_jasa_cover, 'user'=>$tampil_user, 'detail_jasa'=>$tampil_jasa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function edit(Jasa $jasa, int $id)
    {
        $jasa = Jasa::findorfail($id);
        // dd($jasa);
        return view('Mahasiswa.editjasa',['jasa'=>$jasa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'gambar',
            'gambar.*' => ['image']
        ]);

        // dd($request);
        $id = $request->id;
        $jasa = Jasa::findorfail($id);

        $jasa['judul'] = $request->judul;
        $jasa['harga'] = (int) $request->harga;
        $jasa['deskripsi'] = $request->deskripsi;

        $jasa->update();

        $files = [];
        if($request->hasfile('gambar'))
        {
            
            foreach($request->file('gambar') as $image)
            {
                $name = time().rand(1,50).'.'.$image->extension();
                $image->move('image/', $name);  

                $files[] = $name;  
                $file= new file();
                $file->alamat_gambar = $files[0];
                $file->jasa_id = $id;
                
                $file->save();
            }
        }
        
        return redirect()->back()->with('success', 'User berhasil dibuat.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $jasa = Jasa::findorfail($request->id);

        $jasa->delete();
        return redirect()->back()->with('success', 'User berhasil dihapus.');
    }
}
