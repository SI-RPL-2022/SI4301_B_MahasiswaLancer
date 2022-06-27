<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Jasa;
use App\Models\file;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StatusPekerjaanMHSController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function pesanan(){

        $jasa = Jasa::where('userId',Auth::user()->id)->get();

        $transaksi = [];
        $rekap = array();

        foreach ($jasa as $jasa_each)
        {
            foreach (Transaksi::where('jasa_id',$jasa_each->id)->where('status_pesanan','Menunggu Konfirmasi')->get() as $related_transaction)
            {
                array_push($transaksi, $related_transaction);
            }
        }

        // dd($transaksi);
        $i = 0;
        foreach ($transaksi as $transaksi_each)
        {
            // dd($transaksi_each);
            $jasa = Jasa::findorfail($transaksi_each['jasa_id']);
            $client = User::findorfail($jasa->userId)->name;

            $rekap[$i]['order_id'] = $transaksi_each->id;
            $rekap[$i]['jasa'] = $jasa->judul;
            $rekap[$i]['client'] = $client;
            $rekap[$i]['deadline'] = $transaksi_each->deadline;
            $rekap[$i]['link_pendukung'] = $transaksi_each->link_pendukung;
            $rekap[$i]['deskripsi'] = $transaksi_each->deskripsi;
            $i +=1;
        }
        
        return view('Mahasiswa.pesanan',['rekap'=>$rekap]);
    }

    public function tolak(Request $request){
        $transaksi = Transaksi::findorfail($request->id);
        $transaksi['status_pesanan'] = 'Ditolak';
        $transaksi->save();
        
        return redirect()->back();
    }
    
    public function terima(Request $request)
    {
        $transaksi = Transaksi::findorfail($request->id);
        $transaksi['status_pesanan'] = 'Menunggu Pembayaran';
        $transaksi->save();
        
        return redirect()->back();
    }

    public function status(){

        $jasa = Jasa::where('userId',Auth::user()->id)->get();

        $transaksi = [];
        $rekap = array();

        foreach ($jasa as $jasa_each)
        {
            foreach (Transaksi::where('jasa_id',$jasa_each->id)->get() as $related_transaction)
            {
                array_push($transaksi, $related_transaction);
            }
        }

        // dd($transaksi);
        $i = 0;
        foreach ($transaksi as $transaksi_each)
        {
            // dd($transaksi_each);
            // $transaksi_each->status_pesanan == 'Ditolak' || 
            if ($transaksi_each->status_pesanan == 'Menunggu Konfirmasi'){
                continue;
            }

            $jasa = Jasa::findorfail($transaksi_each['jasa_id']);
            $client = User::findorfail($jasa->userId)->name;

            $rekap[$i]['order_id'] = $transaksi_each->id;
            $rekap[$i]['jasa'] = $jasa->judul;
            $rekap[$i]['client'] = $client;
            $rekap[$i]['deadline'] = $transaksi_each->deadline;
            $rekap[$i]['status_pesanan'] = $transaksi_each->status_pesanan;
            $i +=1;
        }
        
        return view('Mahasiswa.statusPekerjaan',['rekap'=>$rekap]);
    }

    public function upload(Request $request){
        // dd($request);
        $transaksi = Transaksi::findorfail($request['id']);
        $transaksi['status_pesanan'] = 'Konfirmasi Hasil';
        $transaksi['link_pengerjaan'] = $request['link_pengerjaan'];
        // dd($transaksi);
        $transaksi->save();
        
        return redirect()->back();
    }
}