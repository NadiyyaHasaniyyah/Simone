<?php

namespace App\Http\Controllers;

use App\Models\dosenwali;
use App\Models\mahasiswa;
use App\Models\irs;
use App\Models\khs;
use App\Models\Pkl;
use App\Models\Skripsi;
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

    public function hasil_pencarian_dsn($id)
    {
        $attribute=Auth::guard('dsn')->user();
        $mhs = mahasiswa::find($id);
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


    // hanya untuk view dan emnampilkan data
       public function verifikasi()
    {
        $attribute=Auth::guard('dsn')->user();
        $mhs = mahasiswa::where('dsn_id', $attribute->id)->get();
        $irs = irs::get();
        $khs = khs::get();
        $pkl = Pkl::get();
        $skripsi = Skripsi::get();

        // dd($irs);
        return view('dosenwali/verifikasi_dsn',['attribute'=>$attribute, 'mhs'=>$mhs, 'irs'=>$irs, 'khs'=>$khs, 'pkl'=>$pkl, 'skripsi'=>$skripsi]);
    }

    // route klik button verif oleh dsn
    public function verifikasiIRS($id)
    {
        $irs = irs::find($id);

        $irs->update([
            'flag' => '1',
        ]);

        return redirect()->route('verifikasi_dsn')->with('success', 'IRS berhasil diverifikasi');

    }

    public function verifikasiKHS($id)
    {
        $khs = khs::find($id);

        $khs->update([
            'flag' => '1',
        ]);

        return redirect()->route('verifikasi_dsn')->with('success', 'KHS berhasil diverifikasi');

    }

    public function verifikasiPKL($id)
    {
        $pkl = Pkl::find($id);

        $pkl->update([
            'flag' => '1',
        ]);

        return redirect()->route('verifikasi_dsn')->with('success', 'PKL berhasil diverifikasi');

    }
    public function verifikasiSKRIPSI($id)
    {
        $skripsi = Skripsi::find($id);

        $skripsi->update([
            'flag' => '1',
        ]);

        return redirect()->route('verifikasi_dsn')->with('success', 'Skripsi berhasil diverifikasi');

    }

    public function viewPDF($id)
    {
        $irs = irs::find($id);
        $khs = khs::find($id);
        $pkl = Pkl::find($id);
        $skripsi = Skripsi::find($id);

        if ($irs) {
            $pdfPath = public_path('storage/' . $irs->file_irs);

            if (file_exists($pdfPath)) {
                return response()->file($pdfPath, [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'inline; filename="' . $irs->file_irs . '"',
                ]);
            }
        }

        elseif ($khs) {
            $pdfPath = public_path('storage/' . $khs->file_khs);

            if (file_exists($pdfPath)) {
                return response()->file($pdfPath, [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'inline; filename="' . $khs->file_khs . '"',
                ]);
            }
        }

        elseif ($pkl) {
            $pdfPath = public_path('storage/' . $pkl->file_pkl);

            if (file_exists($pdfPath)) {
                return response()->file($pdfPath, [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'inline; filename="' . $pkl->file_pkl . '"',
                ]);
            }
        }

        elseif ($skripsi) {
            $pdfPath = public_path('storage/' . $skripsi->file_skripsi);

            if (file_exists($pdfPath)) {
                return response()->file($pdfPath, [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'inline; filename="' . $skripsi->file_skripsi . '"',
                ]);
            }
        }

        // }
    }


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
