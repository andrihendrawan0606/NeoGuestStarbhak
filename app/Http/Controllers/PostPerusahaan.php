<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Perusahaan;

class PostPerusahaan extends Controller
{
    public function index()
    {
    return view('lokasi viewnya');
    }

    public function postPerusahaan(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required|max:50',
            'jumlah_anggota' => 'required|min:1',
            'nama_penanggungjawab' => 'required|max:30',
            'keperluan' => 'required|max:300',
            'tujuan' => 'required|max:100',
            'suhu_tubuh' => 'required',
        ],[
            'required' => 'Input Tidak boleh kosong!',
            'min' => 'Tidak boleh kurang',
            'max' => 'Tidak boleh lebih'
        ]);

        Perusahaan::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'jumlah_anggota' => $request->jumah_anggota,
            'nama_penanggungjawab' => $request->nama_penanggungjawab,
            'keperluan' => $request->keperluan,
            'tujuan' => $request->tujuan,
            'status' => 'proses',
            'created_at' => Carbon::now(),
            'tgl_post' => Carbon::now(),
            ]);

            return redirect()->back()->with('pesan','Anda boleh masuk Selamat datang di SMK TARUNA BHAKTI'); // Note : ini bosa di ubah routenya cok kalo mau pindah halaman 
    }
}
