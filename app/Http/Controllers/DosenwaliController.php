<?php

namespace App\Http\Controllers;

use App\Models\dosenwali;
use App\Models\mahasiswa;
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

    public function pencarian()
    {
        $attribute=Auth::guard('dsn')->user();
        // dd($attribute);
        return view('dosenwali/pencarian_dsn',['attribute'=>$attribute]);
    }

    public function search(Request $request)
    {
        $attribute=Auth::guard('dsn')->user();
        $keyword = $request->keyword;

        $mhs = Auth::guard('mhs')->user();
        $mahasiswa = mahasiswa::where('nama', 'like', "%" . $keyword . "%")->paginate(10);
        dd($mhs);

        return view('dosenwali/pencarian_dsn', ['mahasiswa' => $mahasiswa, 'attribute'=>$attribute, 'mhs'=>$mhs]);
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
