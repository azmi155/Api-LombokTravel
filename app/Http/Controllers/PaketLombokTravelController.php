<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaketLombokTravels;

class PaketLombokTravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PaketLombokTravels::all();
        return response()->json($data);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new PaketLombokTravels;
        $data->nama_paket = $request->nama_paket;
        $data->durasi = $request->durasi;
        $data->tujuan = $request->tujuan;
        $data->fasilitas = $request->fasilitas;
        $data->harga = $request->harga;
        $data->save();
        return response()->json(['msg'=>'Succesed']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PaketLombokTravels::where('id',$id)->get();
    return response ($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = PaketLombokTravels::where('id',$id)->first();
       $data->nama_paket = $request->nama_paket;
       $data->durasi = $request->durasi;
       $data->tujuan = $request->tujuan;
       $data->fasilitas = $request->fasilitas;
       $data->harga = $request->harga;
       $data->save();
       return response()->json(['msg'=>'Succesed']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PaketLombokTravels::where('id',$id)->first();
    $data->delete();

    return response('Berhasil Menghapus Data');
    }
}
