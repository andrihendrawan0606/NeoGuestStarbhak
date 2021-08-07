<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaliMurid;

class WalimuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $walimurid = WaliMurid::paginate(5);
        return view('datakunjungan.datawalimurid.index', compact('walimurid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Note : Kalo lu mau bisa bikin input data tamu di admin pake ini tapi gua saranin admin gausah buat input data tamu karena ya biar tamu isi sendiri di form tamu 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Ini juga buat ngirim data
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $walimurid = Walikelas::paginate(5);
        return view('...', compact('walimurid')); 
        // Note : kalo ini mau di pake usahain tampilan halamannya lebih bagus dari index
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
