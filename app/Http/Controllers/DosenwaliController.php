<?php

namespace App\Http\Controllers;

use App\Models\dosenwali;
use App\Models\mahasiswa;
use App\Models\irs;
use App\Models\khs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenwaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attribute=Auth::guard('dsn')->user();
        // dd($attribute);
        return view('dosenwali/dashboard_dsn',['attribute'=>$attribute]);
    }

    public function pencarian_dsn()
    {
        $attribute=Auth::guard('dsn')->user();
        $mhs = mahasiswa::where('dsn_id', $attribute->id)->get();
        // dd($mhs);
        return view('dosenwali/pencarian_dsn',['attribute'=>$attribute, 'mhs'=>$mhs]);
    }

    public function hasil_pencarian_dsn()
    {
        $attribute=Auth::guard('dsn')->user();
        $mhs = mahasiswa::where('dsn_id', $attribute->id)->get();
        // dd($mhs);
        return view('dosenwali/hasil_pencarian_dsn',['attribute'=>$attribute, 'mhs'=>$mhs]);
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;


        $attribute=Auth::guard('dsn')->user();
        $mhs = mahasiswa::where('dsn_id', $attribute->id)->get();

        return view('dosenwali/pencarian_dsn', ['attribute'=>$attribute, 'mhs'=>$mhs]);
    }

       public function verifikasi()
    {
        $attribute=Auth::guard('dsn')->user();
        $mhs = mahasiswa::where('dsn_id', $attribute->id)->get();
        $irs = irs::get();
        $khs = khs::get();

        // dd($mhs);
        return view('dosenwali/verifikasi_dsn',['attribute'=>$attribute, 'mhs'=>$mhs, 'irs'=>$irs, 'khs'=>$khs]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dosenwali $dosenwali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dosenwali $dosenwali)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dosenwali $dosenwali)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dosenwali $dosenwali)
    {
        //
    }
}
