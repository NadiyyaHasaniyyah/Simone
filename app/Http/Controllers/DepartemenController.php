<?php

namespace App\Http\Controllers;

use App\Models\departemen;
use App\Models\mahasiswa;
use App\Models\Pkl;
use Illuminate\Support\Facades\DB;
use App\Models\Skripsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attribute=Auth::guard('dpt')->user();
        // dd($attribute);
        return view('departemen/dashboard_dpt',['attribute'=>$attribute]);
    }

    public function rekap_pkl()
    {
        $attribute = Auth::guard('dpt')->user();
        $mhs = mahasiswa::get();
        $pkl = Pkl::get();

        // dd($mhs);

        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        $countsudah = [];
        $countbelum = [];
        $list_pkl_sudah = [];

        foreach ($angkatanList as $angkatan) {
            $countsudah[$angkatan] = $this->count_sudah_pkl($angkatan) ?? 0;
            $countbelum[$angkatan] = $this->count_belum_pkl($angkatan) ?? 0;
            $list_pkl_sudah[$angkatan] = $this->list_pkl_sudah($angkatan);
            $list_pkl_belum[$angkatan] = $this->list_pkl_belum($angkatan);
        }

        return view('departemen/rekap_pkl', [
            'attribute' => $attribute,
            'mhs' => $mhs,
            'pkl' => $pkl,
            'countsudah' => $countsudah,
            'countbelum' => $countbelum,
            'list_sudah' => $list_pkl_sudah,
            'list_belum' => $list_pkl_belum,
        ]);
    }
    public function rekap_mahasiswa()
    {
        $attribute=Auth::guard('dpt')->user();
        // dd($attribute);
        return view('departemen/rekap_mahasiswa');
    }

    public function rekap_skripsi()
    {
        $attribute = Auth::guard('dpt')->user();
        $mhs = mahasiswa::get();
        $skripsi = Skripsi::get();

        // dd($mhs);

        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        $countsudah = [];
        $countbelum = [];
        $list_skripsi_sudah = [];
        $list_skripsi_belum = [];

        foreach ($angkatanList as $angkatan) {
            $countsudah[$angkatan] = $this->count_sudah_skripsi($angkatan) ?? 0;
            $countbelum[$angkatan] = $this->count_belum_skripsi($angkatan) ?? 0;
            $list_skripsi_sudah[$angkatan] = $this->list_skripsi_sudah($angkatan);
            $list_skripsi_belum[$angkatan] = $this->list_skripsi_belum($angkatan);
        }

        return view('departemen/rekap_skripsi', [
            'attribute' => $attribute,
            'mhs' => $mhs,
            'skripsi' => $skripsi,
            'countsudah' => $countsudah,
            'countbelum' => $countbelum,
            'list_sudah' => $list_skripsi_sudah,
            'list_belum' => $list_skripsi_belum,
        ]);
    }

    public function count_sudah_pkl($angkatan)
    {
        $jumlahMahasiswaLulusPKL = Mahasiswa::where('angkatan', $angkatan)
            ->join('pkls', 'mahasiswas.id', '=', 'pkls.mhs_id')
            ->count();

        return $jumlahMahasiswaLulusPKL;
    }

    public function count_belum_pkl($angkatan)
    {
        $jumlahMahasiswaBelumPKL = Mahasiswa::where('angkatan', $angkatan)
            ->whereNotExists(function ($query) {
                $query->select(DB::raw(1))
                    ->from('pkls')
                    ->whereRaw('mahasiswas.id = pkls.mhs_id');
            })
            ->count();

        return $jumlahMahasiswaBelumPKL;
    }

    public function count_sudah_skripsi($angkatan)
    {
        $jumlahMahasiswaLulusSKRIPSI = Mahasiswa::where('angkatan', $angkatan)
            ->join('skripsis', 'mahasiswas.id', '=', 'skripsis.mhs_id')
            ->count();

        return $jumlahMahasiswaLulusSKRIPSI;
    }

    public function count_belum_skripsi($angkatan)
    {
        $jumlahMahasiswaBelumSKRIPSI = Mahasiswa::where('angkatan', $angkatan)
            ->whereNotExists(function ($query) {
                $query->select(DB::raw(1))
                    ->from('skripsis')
                    ->whereRaw('mahasiswas.id = skripsis.mhs_id');
            })
            ->count();

        return $jumlahMahasiswaBelumSKRIPSI;
    }

    public function list_pkl_sudah($angkatan) {
        $attribute=Auth::guard('dpt')->user();
        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->join('pkls', 'mahasiswas.id', '=', 'pkls.mhs_id')
            ->select('mahasiswas.nama', 'mahasiswas.id', 'mahasiswas.angkatan', 'pkls.nilai')
            ->get();

        // dd($mhs);

        return view('departemen/list_pkl_sudah', [
            'attribute' => $attribute,
            'mhs' => $mhs,
        ]);
    }

    public function list_pkl_belum($angkatan) {
        $attribute = Auth::guard('dpt')->user();

        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->leftJoin('pkls', 'mahasiswas.id', '=', 'pkls.mhs_id')
            ->whereNull('pkls.mhs_id')
            ->select('mahasiswas.nama', 'mahasiswas.id', 'mahasiswas.angkatan')
            ->get();
        // dd($mhs);

        return view('departemen/list_pkl_belum', [
            'attribute' => $attribute,
            'mhs' => $mhs,
        ]);
    }

    public function list_skripsi_sudah($angkatan) {
        $attribute=Auth::guard('dpt')->user();
        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->join('skripsis', 'mahasiswas.id', '=', 'skripsis.mhs_id')
            ->select('mahasiswas.nama', 'mahasiswas.id', 'mahasiswas.angkatan', 'skripsis.nilai', 'skripsis.tanggal_lulus')
            ->get();

        return view('departemen/list_skripsi_sudah', [
            'attribute' => $attribute,
            'mhs' => $mhs,
        ]);
    }

    public function list_skripsi_belum($angkatan) {
        $attribute = Auth::guard('dpt')->user();

        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->leftJoin('skripsis', 'mahasiswas.id', '=', 'skripsis.mhs_id')
            ->whereNull('skripsis.mhs_id')
            ->select('mahasiswas.nama', 'mahasiswas.id', 'mahasiswas.angkatan')
            ->get();
        // dd($mhs);

        return view('departemen/list_skripsi_belum', [
            'attribute' => $attribute,
            'mhs' => $mhs,
        ]);
    }

    public function rekap_mhs(){
        $attribute=Auth::guard('dpt')->user();
        $mhs = mahasiswa::get();

        $statusList = $mhs->pluck('status')->unique()->toArray();
        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();

        $status_count = [];
        $mhs_count = [];

        foreach ($statusList as $status) {
            $status_count[$status] = $this->count_status($status) ?? 0;
            foreach ($angkatanList as $angkatan) {
                $mhs_count[$angkatan][$status] = $this->count_mhs($angkatan, $status) ?? 0;
            }
        }

        // dd($mhs_count);

        return view('departemen/rekap_mahasiswa', [
            'mhs'=>$mhs,
            'attribute'=>$attribute,
            'status_count'=>$status_count,
            'mhs_count'=>$mhs_count,
        ]);
    }

    public function count_status($status){
        $status_count = mahasiswa::where('status', $status)
            ->count();
        return $status_count;

    }

    public function count_mhs($angkatan, $status){
        $mhs_count = mahasiswa::where('angkatan', $angkatan)
            ->where('status', $status)
            ->count();
        return $mhs_count;

    }

    public function rekap_angkatan($angkatan){
        $attribute=Auth::guard('dpt')->user();
        $mhs = mahasiswa::where('angkatan', $angkatan)->get();

        $statusList = $mhs->pluck('status')->unique()->toArray();
        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        $angkatan_count = [];

        foreach ($statusList as $status) {
            foreach ($angkatanList as $angkatan) {
                $angkatan_count[$status][$angkatan] = $this->count_angkatan($status, $angkatan) ?? 0;
            }
        }

        return view('departemen/rekap_angkatan', [
            'mhs'=>$mhs,
            'attribute'=>$attribute,
            'angkatan_count'=>$angkatan_count,
            'angkatan'=>$angkatan,
        ]);
    }

    public function rekap_status($status){
        $attribute=Auth::guard('dpt')->user();
        $mhs = mahasiswa::where('status', $status)->get();

        $statusList = $mhs->pluck('status')->unique()->toArray();
        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        $status_count = [];

        foreach ($statusList as $status) {
            foreach ($angkatanList as $angkatan) {
                $status_count[$angkatan][$status] = $this->count_status_mhs($angkatan, $status) ?? 0;
            }
        }

        return view('departemen/rekap_status', [
            'mhs'=>$mhs,
            'attribute'=>$attribute,
            'status_count'=>$status_count,
            'status'=>$status,
        ]);
    }

    public function count_angkatan($status, $angkatan){
        $angkatan_count = mahasiswa::where('status', $status)
            ->where('angkatan', $angkatan)
            ->count();
        return $angkatan_count;

    }

    public function count_status_mhs($angkatan, $status){
        $status_count = mahasiswa::where('angkatan', $angkatan)
            ->where('status', $status)
            ->count();
        return $status_count;

    }

    public function rekap_tahun_status($angkatan, $status){
        $attribute=Auth::guard('dpt')->user();
        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->where('status', $status)
            ->get();
        // dd($mhs);

        return view('departemen/rekap_tahun_status', [
            'mhs'=>$mhs,
            'attribute'=>$attribute,
            'angkatan'=>$angkatan,
            'status'=>$status,
        ]);
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
    public function show(departemen $departemen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(departemen $departemen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, departemen $departemen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(departemen $departemen)
    {
        //
    }
}
