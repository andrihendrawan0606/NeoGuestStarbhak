<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\WaliMurid;

class PostWalimurid extends Controller
{

    public function index()
    {
    return view('lokasi viewnya');
    }

    public function postWalimurid(Request $request)
    {
        $request->validate([
            'nama_walimurid' => 'required|max:50',
            'nama_siswa' => 'required|max:50',
            'kelas' => 'required',
            'keperluan' => 'required|max:300',
            'tujuan' => 'required|max:100',
            'suhu_tubuh' => 'required',
        ],[
            'required' => 'Input Tidak boleh kosong!',
            'max' => 'Tidak boleh lebih'
        ]);

        WaliMurid::create([
            'nama_walimurid' => $request->nama_walimurid,
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'keperluan' => $request->keperluan,
            'tujuan' => $request->tujuan,
            'status' => 'proses',
            'created_at' => Carbon::now(),
            'tgl_post' => Carbon::now(),
            ]);

            return redirect()->back()->with('pesan','Anda boleh masuk Selamat datang di SMK TARUNA BHAKTI'); // Note : ini bosa di ubah routenya cok kalo mau pindah halaman 
    }
}
