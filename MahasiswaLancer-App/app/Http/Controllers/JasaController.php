<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Mahasiswa.jasa');
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
        $konsultasi = [];
        $transaksi = [];

        $validated = $request->validate([
            'customer_id' => ['required'],
            'psikolog' => ['required'],
            'tanggal' => ['required'],
            'nama' => ['required', 'string', 'max:255'],
            'no_rek_asal' => ['required', 'max:255'],
            'no_rek_tujuan' => ['required', 'max:255'],
            'bukti_transaksi' => ['required', 'image','file'],
        ]);

        $psikolog = Psikolog::findorFail($request->psikolog);

        $konsultasi['customer_id'] = $request->customer_id;
        $konsultasi['psikolog_id'] = $psikolog->id;
        $konsultasi['tanggal'] = $request->tanggal;
        $konsultasi['status'] = 'Belum Konsultasi';

        $post_konsultasi = Konsultasi::create($konsultasi);
        // dd($post_konsultasi);

        $bukti_transaksi = time().'_'.$request->nama.'.'.$request->bukti_transaksi->extension();

        $transaksi['konsultasi_id'] = $post_konsultasi->id;
        $transaksi['customer_id'] = $request->customer_id;
        $transaksi['status'] = 'Menunggu Konfirmasi';
        $transaksi['nominal'] = $psikolog->fee;
        $transaksi['nama_rekening_asal'] = $request->nama;
        $transaksi['no_rekening_asal'] = $request->no_rek_asal;
        $transaksi['no_rekening_tujuan'] = $request->no_rek_tujuan;
        $transaksi['bukti_transaksi'] = $request->file('bukti_transaksi')->storeAs('bukti-transaksi',$bukti_transaksi);

        Transaksi::create($transaksi);

        return redirect()->route('dashboard-user')->with('success', 'User berhasil diubah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function show(Jasa $jasa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function edit(Jasa $jasa, $id)
    {
        return view('Mahasiswa.editjasa');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jasa $jasa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jasa  $jasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jasa $jasa)
    {
        //
    }
}
