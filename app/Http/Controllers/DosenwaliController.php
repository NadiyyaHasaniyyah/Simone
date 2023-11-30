<?php

namespace App\Http\Controllers;

use App\Models\dosenwali;
use App\Models\mahasiswa;
use App\Models\irs;
use App\Models\khs;
use App\Models\Pkl;
use App\Models\Skripsi;
use Illuminate\Support\Facades\DB;
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
        $id = mahasiswa::find($id)->id;
        $irs = Irs::Where('mhs_id',$id)->get();
        $khs = khs::Where('mhs_id',$id)->get();
        $pkl = pkl::Where('mhs_id',$id)->get();
        $skripsi = skripsi::Where('mhs_id',$id)->get();
        $semester = Irs::Where('mhs_id',$id)->get('semester')->count();
        // $irs = Irs::Where('mhs_id',$mhs->id)->Where('semester',1)->get('flag');
        // dd($semester);
        return view('dosenwali/hasil_pencarian_dsn',['attribute'=>$attribute, 'mhs'=>$mhs, 'irs'=>$irs, 'khs'=>$khs, 'pkl'=>$pkl, 'skripsi'=>$skripsi,'semester'=>$semester, 'id'=> $id]);
    }

    public function hasil_pencarian_dsn_lanj($id, $smt)
    {
        $attribute=Auth::guard('dsn')->user();
        $mhs = mahasiswa::find($id);
        $irs = Irs::Where('mhs_id',$id)->where('semester',$smt)->get();
        $khs = khs::Where('mhs_id',$id)->where('semester',$smt)->get();
        $pkl = pkl::Where('mhs_id',$id)->where('semester',$smt)->get();
        $skripsi = skripsi::Where('mhs_id',$id)->where('semester',$smt)->get();
        // $irs = Irs::Where('mhs_id',$mhs->id)->Where('semester',1)->get('flag');
        // dd($semester);
        return view('dosenwali/semester',['attribute'=>$attribute, 'mhs'=>$mhs, 'irs'=>$irs, 'khs'=>$khs, 'pkl'=>$pkl, 'skripsi'=>$skripsi]);
    }

    public function getMahasiswaBySemester($semester)
    {
        $attribute=Auth::guard('dsn')->user();
        $mhs = mahasiswa::where('dsn_id', $attribute->id)->get();
        // dd($mhs);

        $mahasiswa = Irs::where('semester', $semester)->get();

        // dd($mahasiswa);

        // Anda dapat mengembalikan data dalam format yang sesuai (misalnya, JSON)
        return response()->json($mahasiswa);
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

    public function rejectIRS($id){
        $irs = irs::find($id);

        $irs->update([
            'flag' => '-1',
        ]);
        return redirect()->route('verifikasi_dsn');
    }

    public function rejectKHS($id){
        $khs = khs::find($id);

        $khs->update([
            'flag' => '-1',
        ]);
        return redirect()->route('verifikasi_dsn');
    }

    public function rejectPKL($id){
        $pkl = Pkl::find($id);

        $pkl->update([
            'flag' => '-1',
        ]);
        return redirect()->route('verifikasi_dsn');
    }

    public function rejectSKRIPSI($id){
        $skripsi = Skripsi::find($id);

        $skripsi->update([
            'flag' => '-1',
        ]);
        return redirect()->route('verifikasi_dsn');
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

    public function rekap_pkl_dsn(){
        $attribute = Auth::guard('dsn')->user();
        $mhs = mahasiswa::get();
        $pkl = Pkl::get();

        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        $countsudah = [];
        $countbelum = [];
        $list_pkl_sudah = [];
        $list_pkl_belum = [];

        foreach ($angkatanList as $angkatan) {
            $countsudah[$angkatan] = $this->count_sudah_pkl($angkatan) ?? 0;
            $countbelum[$angkatan] = $this->count_belum_pkl($angkatan) ?? 0;
            $list_pkl_sudah[$angkatan] = $this->list_pkl_sudah($angkatan);
            $list_pkl_belum[$angkatan] = $this->list_pkl_belum($angkatan);
        }

        return view ('dosenwali/rekap_pkl_dsn', [
            'attribute' => $attribute,
            'mhs' => $mhs,
            'pkl' => $pkl,
            'countsudah' => $countsudah,
            'countbelum' => $countbelum,
            'list_sudah' => $list_pkl_sudah,
            'list_belum' => $list_pkl_belum,
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

    public function list_pkl_sudah($angkatan) {
        $attribute=Auth::guard('dsn')->user();
        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->join('pkls', 'mahasiswas.id', '=', 'pkls.mhs_id')
            ->select('mahasiswas.nama', 'mahasiswas.id', 'mahasiswas.angkatan', 'pkls.nilai')
            ->get();

        // dd($mhs);

        return view('dosenwali/list_pkl_sudah', [
            'attribute' => $attribute,
            'mhs' => $mhs,
        ]);
    }

    public function list_pkl_belum($angkatan) {
        $attribute = Auth::guard('dsn')->user();

        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->leftJoin('pkls', 'mahasiswas.id', '=', 'pkls.mhs_id')
            ->whereNull('pkls.mhs_id')
            ->select('mahasiswas.nama', 'mahasiswas.id', 'mahasiswas.angkatan')
            ->get();
        // dd($mhs);

        return view('dosenwali/list_pkl_belum', [
            'attribute' => $attribute,
            'mhs' => $mhs,
        ]);
    }

    public function rekap_skripsi_dsn(){
        $attribute = Auth::guard('dsn')->user();
        $mhs = mahasiswa::get();
        $skripsi = Skripsi::get();

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

        return view('dosenwali/rekap_skripsi_dsn', [
            'attribute' => $attribute,
            'mhs' => $mhs,
            'skripsi' => $skripsi,
            'countsudah' => $countsudah,
            'countbelum' => $countbelum,
            'list_sudah' => $list_skripsi_sudah,
            'list_belum' => $list_skripsi_belum,
        ]);
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

    public function list_skripsi_sudah($angkatan) {
        $attribute=Auth::guard('dpt')->user();
        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->join('skripsis', 'mahasiswas.id', '=', 'skripsis.mhs_id')
            ->select('mahasiswas.nama', 'mahasiswas.id', 'mahasiswas.angkatan', 'skripsis.nilai', 'skripsis.tanggal_lulus')
            ->get();

        return view('dosenwali/list_skripsi_sudah', [
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

        return view('dosenwali/list_skripsi_belum', [
            'attribute' => $attribute,
            'mhs' => $mhs,
        ]);
    }

    public function rekap_mhs(){
        $attribute=Auth::guard('dsn')->user();
        $mhs = mahasiswa::where('dsn_id', $attribute->id)->get();

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

        return view('dosenwali/rekap_mahasiswa_dsn', [
            'mhs'=>$mhs,
            'attribute'=>$attribute,
            'status_count'=>$status_count,
            'mhs_count'=>$mhs_count,
        ]);
    }

    public function count_status($status){
        $attribute=Auth::guard('dsn')->user();
        $status_count = mahasiswa::where('dsn_id', $attribute->id)
            ->where('status', $status)
            ->count();
        return $status_count;

    }

    public function count_mhs($angkatan, $status){
        $attribute=Auth::guard('dsn')->user();
        $mhs_count = mahasiswa::where('dsn_id', $attribute->id)
            ->where('angkatan', $angkatan)
            ->where('status', $status)
            ->count();
        return $mhs_count;

    }

    public function rekap_angkatan($angkatan){
        $attribute=Auth::guard('dsn')->user();
        $mhs = mahasiswa::where('dsn_id', $attribute->id)
            ->where('angkatan', $angkatan)->get();

        $statusList = $mhs->pluck('status')->unique()->toArray();
        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        $angkatan_count = [];

        foreach ($statusList as $status) {
            foreach ($angkatanList as $angkatan) {
                $angkatan_count[$status][$angkatan] = $this->count_angkatan($status, $angkatan) ?? 0;
            }
        }

        return view('dosenwali/rekap_angkatan_dsn', [
            'mhs'=>$mhs,
            'attribute'=>$attribute,
            'angkatan_count'=>$angkatan_count,
            'angkatan'=>$angkatan,
        ]);
    }

    public function count_angkatan($status, $angkatan){
        $attribute=Auth::guard('dsn')->user();
        $angkatan_count = mahasiswa::where('dsn_id', $attribute->id)
            ->where('status', $status)
            ->where('angkatan', $angkatan)
            ->count();
        return $angkatan_count;

    }

    public function count_status_mhs($angkatan, $status){
        $attribute=Auth::guard('dsn')->user();
        $status_count = mahasiswa::where('dsn_id', $attribute->id)
            ->where('angkatan', $angkatan)
            ->where('status', $status)
            ->count();
        return $status_count;

    }

    public function rekap_status($status){
        $attribute=Auth::guard('dsn')->user();
        $mhs = mahasiswa::where('dsn_id', $attribute->id)
            ->where('status', $status)->get();

        $statusList = $mhs->pluck('status')->unique()->toArray();
        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        $status_count = [];

        foreach ($statusList as $status) {
            foreach ($angkatanList as $angkatan) {
                $status_count[$angkatan][$status] = $this->count_status_mhs($angkatan, $status) ?? 0;
            }
        }

        return view('dosenwali/rekap_status_dsn', [
            'mhs'=>$mhs,
            'attribute'=>$attribute,
            'status_count'=>$status_count,
            'status'=>$status,
        ]);
    }

    public function rekap_tahun_status_dsn($angkatan, $status){
        $attribute=Auth::guard('dsn')->user();
        $mhs = mahasiswa::where('dsn_id', $attribute->id)
            ->where('angkatan', $angkatan)
            ->where('status', $status)
            ->get();
        // dd($mhs);

        return view('dosenwali/rekap_tahun_status_dsn', [
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

    public function semester()
    {
        $attribute=Auth::guard('dsn')->user();

        // dd($attribute);
return view('dosenwali/semester',['attribute'=>$attribute]);
    }
}
