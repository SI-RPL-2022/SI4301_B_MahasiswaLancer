<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Jasa;
use App\Models\file;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;
use Symfony\Contracts\Service\Attribute\Required;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menunggu_konfirmasi = Transaksi::where('User_id',Auth::user()->id)->where('status_pesanan','Menunggu Konfirmasi')->get();
        foreach ($menunggu_konfirmasi as $menunggu_konfirmasi_each)
        {
            $jasa = Jasa::findorfail($menunggu_konfirmasi_each->jasa_id);
            $menunggu_konfirmasi_each['judul jasa'] = $jasa->judul;
            $menunggu_konfirmasi_each['nama_mahasiswa'] = User::findorfail($jasa->userId)->name;
        }
        
        $menunggu_pembayaran = Transaksi::where('User_id',Auth::user()->id)->where('status_pesanan','Menunggu Pembayaran')->get();
        foreach ($menunggu_pembayaran as $menunggu_pembayaran_each)
        {
            $jasa = Jasa::findorfail($menunggu_pembayaran_each->jasa_id);
            $menunggu_pembayaran_each['judul jasa'] = $jasa->judul;
            $menunggu_pembayaran_each['nama_mahasiswa'] = User::findorfail($jasa->userId)->name;

            // $menunggu_pembayaran_each['judul_jasa'] = Jasa::findorfail($menunggu_pembayaran_each->jasa_id)->judul;
            // $menunggu_pembayaran_each['nama_mahasiswa'] = User::findorfail($menunggu_pembayaran_each->User_id)->name;
        }
        
        $dalam_pengerjaan = Transaksi::where('User_id',Auth::user()->id)->where('status_pesanan','Dalam Pengerjaan')->get();
        foreach ($dalam_pengerjaan as $dalam_pengerjaan_each)
        {
            $jasa = Jasa::findorfail($dalam_pengerjaan_each->jasa_id);
            $dalam_pengerjaan_each['judul jasa'] = $jasa->judul;
            $dalam_pengerjaan_each['nama_mahasiswa'] = User::findorfail($jasa->userId)->name;

            // $dalam_pengerjaan_each['judul_jasa'] = Jasa::findorfail($dalam_pengerjaan_each->jasa_id)->judul;
            // $dalam_pengerjaan_each['nama_mahasiswa'] = User::findorfail($dalam_pengerjaan_each->User_id)->name;
        }
        
        $konfirmasi_hasil = Transaksi::where('User_id',Auth::user()->id)->where('status_pesanan','Konfirmasi Hasil')->get();
        foreach ($konfirmasi_hasil as $konfirmasi_hasil_each)
        {
            $jasa = Jasa::findorfail($konfirmasi_hasil_each->jasa_id);
            $konfirmasi_hasil_each['judul jasa'] = $jasa->judul;
            $konfirmasi_hasil_each['nama_mahasiswa'] = User::findorfail($jasa->userId)->name;

            // $konfirmasi_hasil_each['judul_jasa'] = Jasa::findorfail($konfirmasi_hasil_each->jasa_id)->judul;
            // $konfirmasi_hasil_each['nama_mahasiswa'] = User::findorfail($konfirmasi_hasil_each->User_id)->name;
        }
        
        $selesai = Transaksi::where('User_id',Auth::user()->id)->where('status_pesanan','Selesai')->get();
        foreach ($selesai as $selesai_each)
        {
            $jasa = Jasa::findorfail($selesai_each->jasa_id);
            $selesai_each['judul jasa'] = $jasa->judul;
            $selesai_each['nama_mahasiswa'] = User::findorfail($jasa->userId)->name;

            // $selesai_each['judul_jasa'] = Jasa::findorfail($selesai_each->jasa_id)->judul;
            // $selesai_each['nama_mahasiswa'] = User::findorfail($selesai_each->User_id)->name;
        }
        $ditolak = Transaksi::where('User_id',Auth::user()->id)->where('status_pesanan','Ditolak')->get();
        foreach ($ditolak as $ditolak_each)
        {
            $jasa = Jasa::findorfail($ditolak_each->jasa_id);
            $ditolak_each['judul jasa'] = $jasa->judul;
            $ditolak_each['nama_mahasiswa'] = User::findorfail($jasa->userId)->name;

            // $ditolak_each['judul_jasa'] = Jasa::findorfail($ditolak_each->jasa_id)->judul;
            // $ditolak_each['nama_mahasiswa'] = User::findorfail($ditolak_each->User_id)->name;
        }
        // dd($menunggu_konfirmasi);
        return view('Client.StatusPengerjaan',[
            'menunggu_konfirmasi'=>$menunggu_konfirmasi,
            'menunggu_pembayaran'=>$menunggu_pembayaran,
            'dalam_pengerjaan'=>$dalam_pengerjaan,
            'konfirmasi_hasil'=>$konfirmasi_hasil,
            'selesai'=>$selesai,
            'ditolak'=>$ditolak
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(int $id)
    {
        $tampil_jasa = Jasa::findorfail($id);
        $tampil_user = User::findorfail($tampil_jasa['userId']);
        // dd($tampil_jasa);

        $tampil_jasa_cover = file::where('jasa_id',$id)->get('alamat_gambar')->first();
        // dd($tampil_jasa_cover);

        // $cover = file::where('jasa_id',$jasa_each['id'])->first();

        // dd($tampil_user);
        return view('Client.konfirmasiPesanan',['cover'=>$tampil_jasa_cover, 'user'=>$tampil_user, 'detail_jasa'=>$tampil_jasa]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_jasa' => ['required'],
            'judul' => ['required'],
            'email' => ['required'],
            'no_hp' => ['required'],
            'deskripsi' => ['required'],
            'tanggal' => ['required'],
            'link' => ['required']
        ]);

        $transaksi = new Transaksi();
        $transaksi->jasa_id = $validated['id_jasa'];
        $transaksi->User_id = Auth::user()->id;
        $transaksi->nama = $validated['judul'];
        $transaksi->email = $validated['email'];
        $transaksi->no_hp = $validated['no_hp'];
        $transaksi->deskripsi = $validated['deskripsi'];
        $transaksi->deadline = $validated['tanggal'];
        $transaksi->link_pendukung = $validated['link'];
        $transaksi->status_pesanan = 'Menunggu Konfirmasi';

        // dd($transaksi);
        // $idJasa = Jasa::insertJasa($dataJasa);
            // $id_jasa = Jasa::create($jasa);
        $transaksi->save();

        // dd($nama_mahasiswa);
        
        // return view('Client.pesananTerkirim',['jasa'=>$jasa,'nama_mahasiswa'=>$nama_mahasiswa]);

        return redirect()->route('berhasilpesan',['id' => $transaksi->jasa_id]);
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransaksiRequest  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }

    // -----
    public function viewberhasilpesan(int $id)
    {
        $jasa = Jasa::findorfail($id);
        $nama_mahasiswa = User::findorfail($jasa->userId)->name;
        $tampil_jasa_cover = file::where('jasa_id',$id)->get('alamat_gambar')->first();
        return view('Client.pesananTerkirim',['jasa'=>$jasa,'nama_mahasiswa'=>$nama_mahasiswa,'tampil_jasa_cover'=>$tampil_jasa_cover]);
    }

    // ------
    public function pembayaran(int $id){
        // dd($id);
        $transaksi = Transaksi::findorfail($id);
        $jasa = Jasa::findorfail($transaksi->jasa_id);
        $nama_mahasiswa = User::findorfail($jasa->userId)->name;
        $tampil_jasa_cover = file::where('jasa_id',$transaksi->jasa_id)->get('alamat_gambar')->first();

        $rekap['order_id'] = $transaksi->id;
        $rekap['nama'] = $transaksi->nama;
        $rekap['email'] = $transaksi->email;
        $rekap['harga'] = $jasa->harga;
        $rekap['cover'] = $tampil_jasa_cover->alamat_gambar;
        $rekap['jasa'] = $jasa->judul;
        $rekap['mahasiswa'] = $nama_mahasiswa;
        // dd($rekap);
        
        return view('Client.pembayaran',['rekap'=>$rekap]);
    }

    public function metode_bayar(int $id){
        $transaksi = Transaksi::findorfail($id);
        $jasa = Jasa::findorfail($transaksi->jasa_id);

        return view('Client.methodeBayar',['harga'=>$jasa->harga,'id'=>$id]);
    }

    public function bayar_berhasil(int $id){
        // dd($id);
        $transaksi = Transaksi::findorfail($id);
        $jasa = Jasa::findorfail($transaksi->jasa_id);
        $nama_mahasiswa = User::findorfail($jasa->userId)->name;
        $tampil_jasa_cover = file::where('jasa_id',$transaksi->jasa_id)->get('alamat_gambar')->first();

        $rekap['order_id'] = $transaksi->id;
        $rekap['nama'] = $transaksi->nama;
        $rekap['email'] = $transaksi->email;
        $rekap['harga'] = $jasa->harga;
        $rekap['cover'] = $tampil_jasa_cover->alamat_gambar;
        $rekap['jasa'] = $jasa->judul;
        $rekap['mahasiswa'] = $nama_mahasiswa;
        return view('Client.pembayaranBerhasil',['rekap'=>$rekap]);
    }

    // ------
    public function batalkan(Request $request)
    {
        $transaksi = Transaksi::findorfail($request->id);

        // $transaksi['status_pesanan'] = 'Ditolak';
        
        $transaksi->delete();
        return redirect()->back()->with('success', 'User berhasil dihapus.');
    }

    public function bayar(Request $request)
    {
        // dd($request->id);
        $transaksi = Transaksi::findorfail($request->id);
        $transaksi['status_pesanan'] = 'Dalam Pengerjaan';
        $transaksi->save();
        
        return redirect()->route('pembayaranberhasil',[$request->id]);
    }

    public function terima(Request $request)
    {
        $transaksi = Transaksi::findorfail($request->id);
        $transaksi['status_pesanan'] = 'Selesai';
        $transaksi->save();
        
        return redirect()->back()->with('success', 'User berhasil dihapus.');
    }

    public function revisi(Request $request)
    {
        $transaksi = Transaksi::findorfail($request->id);
        $transaksi['status_pesanan'] = 'Dalam Pengerjaan';
        $transaksi->save();
        
        return redirect()->back()->with('success', 'User berhasil dihapus.');
    }
}
