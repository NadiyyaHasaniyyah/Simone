<?php

namespace App\Http\Controllers;

use App\Models\Pkl;
// use Illuminate\Support\Facades\DB;
use App\Models\Skripsi;
use App\Models\operator;
use App\Models\dosenwali;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\LazyCollection;
use App\Http\Requests\StoreoperatorRequest;
use App\Http\Requests\UpdateoperatorRequest;
use TCPDF;
use Mpdf\Mpdf;

class OperatorController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attribute=Auth::guard('opt')->user();

        // dd($attribute);
        return view('operator/dashboard_opt',['attribute'=>$attribute]);
    }
    public function generate()
    {
        $operator=Auth::guard('opt')->user();
        $mahasiswa=mahasiswa::all();
        $dosen = dosenwali::all();
        return view('operator.generate', ['operator'=>$operator,
            'mahasiswa'=>$mahasiswa,
            'dosen'=>$dosen]);
    }

    public function managemen()
    {
        $operator=Auth::guard('opt')->user();
        $mhs=mahasiswa::all();
        $dsn = dosenwali::all();
        return view('operator.managemen', ['operator'=>$operator,
            'mhs'=>$mhs,
            'dsn'=>$dsn]);
    }

    public function managemenView(Request $request, $id)
    {
        // $request->validate([
        //     'status' => 'required|in:aktif,cuti,mangkir,drop out,meninggal,undur diri,lulus',
        // ]);

        // $mhs = Mahasiswa::find($id);

        // $mhs->update([
        //     'status' => $request->status,
        // ]);

        $operator=Auth::guard('opt')->user();
        $mhs=mahasiswa::find($id);
        return view('operator.managemenView', ['operator'=>$operator,
            'mhs'=>$mhs]);
    }

    public function updateManagemen(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'id' => 'required',
            'email' => 'required',
            'nomor_tlp' => 'required',
            'status' => 'required',
        ]);

        $mhs = Mahasiswa::find($id);

        Mahasiswa::where('id',$id)->update($validateData);
        return redirect()->route('managemen')->with('success', 'Data berhasil dirubah');
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
        // ddd($request);
        // return $request->file('file')->store('ImportData');

        $dosen = dosenwali::all();
        $validateData = $request->validate([
            'file' => 'required|max:2048',
        ]);


        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = 'mhs' . '.' . $fileExtension;
            $validateData['file'] = $file->storeAs('ImportDataMhs', $fileName);
        }

        // dd($validateData);

        return redirect()->route('generate', ['dosen'=>$dosen]);
    }

        public function import_manual(Request $request)
    {
        $dosen = dosenwali::all();
        $validateData = $request->validate([
            'nama' => 'required',
            'id' => 'required',
            'angkatan' => 'required',
            'dsn_id' => 'required',
            // 'email' => 'required',
        ]);

        $validateData['password'] = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $validateData['status'] = 'Aktif';

        mahasiswa::create($validateData);
        return redirect()->route('import_manual', ['dosen'=>$dosen]);
    }

    // REKAP
    public function rekap_pkl_opt()
    {
        $attribute = Auth::guard('opt')->user();
        $mhs = mahasiswa::get();
        $pkl = Pkl::get();

        // dd($mhs);

        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        rsort($angkatanList);

        $countsudah = [];
        $countbelum = [];
        $list_pkl_sudah = [];

        foreach ($angkatanList as $angkatan) {
            $countsudah[$angkatan] = $this->count_sudah_pkl($angkatan) ?? 0;
            $countbelum[$angkatan] = $this->count_belum_pkl($angkatan) ?? 0;
            $list_pkl_sudah[$angkatan] = $this->list_pkl_sudah($angkatan);
            $list_pkl_belum[$angkatan] = $this->list_pkl_belum($angkatan);
        }

        return view('operator/rekap_pkl_opt', [
            'attribute' => $attribute,
            'mhs' => $mhs,
            'pkl' => $pkl,
            'countsudah' => $countsudah,
            'countbelum' => $countbelum,
            'list_sudah' => $list_pkl_sudah,
            'list_belum' => $list_pkl_belum,
            'angkatanList' => $angkatanList
        ]);
    }

    public function rekap_skripsi_opt()
    {
        $attribute = Auth::guard('opt')->user();
        $mhs = mahasiswa::get();
        $skripsi = Skripsi::get();

        // dd($mhs);

        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        rsort($angkatanList);
        dd($angkatanList);

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

        return view('operator/rekap_skripsi', [
            'attribute' => $attribute,
            'mhs' => $mhs,
            'skripsi' => $skripsi,
            'countsudah' => $countsudah,
            'countbelum' => $countbelum,
            'list_sudah' => $list_skripsi_sudah,
            'list_belum' => $list_skripsi_belum,
            'angkatanList' => $angkatanList,
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
        $attribute=Auth::guard('opt')->user();
        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->join('pkls', 'mahasiswas.id', '=', 'pkls.mhs_id')
            ->select('mahasiswas.nama', 'mahasiswas.id', 'mahasiswas.angkatan', 'pkls.nilai')
            ->get();

        return view('operator/list_pkl_sudah', [
            'attribute' => $attribute,
            'mhs' => $mhs,
        ]);
    }

    public function list_pkl_belum($angkatan) {
        $attribute = Auth::guard('opt')->user();

        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->leftJoin('pkls', 'mahasiswas.id', '=', 'pkls.mhs_id')
            ->whereNull('pkls.mhs_id')
            ->select('mahasiswas.nama', 'mahasiswas.id', 'mahasiswas.angkatan')
            ->get();


        // dd($mhs);

        return view('operator/list_pkl_belum', [
            'attribute' => $attribute,
            'mhs' => $mhs,

        ]);
    }

    public function rekap_skripsi()
    {
        $attribute = Auth::guard('opt')->user();
        $mhs = mahasiswa::get();
        $skripsi = Skripsi::get();

        // dd($mhs);

        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        rsort($angkatanList);

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

        return view('operator/rekap_skripsi', [
            'attribute' => $attribute,
            'mhs' => $mhs,
            'skripsi' => $skripsi,
            'countsudah' => $countsudah,
            'countbelum' => $countbelum,
            'list_sudah' => $list_skripsi_sudah,
            'list_belum' => $list_skripsi_belum,
            'angkatanList' => $angkatanList,
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
        $attribute=Auth::guard('opt')->user();
        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->rightJoin('skripsis', 'mahasiswas.id', '=', 'skripsis.mhs_id')
            ->select('mahasiswas.nama', 'mahasiswas.id', 'mahasiswas.angkatan', 'skripsis.nilai', 'skripsis.tanggal_lulus')
            ->get();

        return view('operator/list_skripsi_sudah', [
            'attribute' => $attribute,
            'mhs' => $mhs,
        ]);
    }

    public function list_skripsi_belum($angkatan) {
        $attribute = Auth::guard('opt')->user();

        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->leftJoin('skripsis', 'mahasiswas.id', '=', 'skripsis.mhs_id')
            ->whereNull('skripsis.mhs_id')
            ->select('mahasiswas.nama', 'mahasiswas.id', 'mahasiswas.angkatan')
            ->get();
        // dd($mhs);

        return view('operator/list_skripsi_belum', [
            'attribute' => $attribute,
            'mhs' => $mhs,
        ]);
    }



    public function rekap_mhs(){
        $attribute=Auth::guard('opt')->user();
        $mhs = mahasiswa::get();

        $statusList = $mhs->pluck('status')->unique()->toArray();
        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        rsort($angkatanList);

        $status_count = [];
        $mhs_count = [];

        foreach ($statusList as $status) {
            $status_count[$status] = $this->count_status($status) ?? 0;
            foreach ($angkatanList as $angkatan) {
                $mhs_count[$angkatan][$status] = $this->count_mhs($angkatan, $status) ?? 0;
            }
        }

        // dd($mhs_count);

        return view('operator/rekap_mahasiswa_opt', [
            'mhs'=>$mhs,
            'attribute'=>$attribute,
            'status_count'=>$status_count,
            'mhs_count'=>$mhs_count,
            'angkatanList' => $angkatanList,
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
        $attribute=Auth::guard('opt')->user();
        $mhs = mahasiswa::where('angkatan', $angkatan)->get();

        $statusList = $mhs->pluck('status')->unique()->toArray();
        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        $angkatan_count = [];

        foreach ($statusList as $status) {
            foreach ($angkatanList as $angkatan) {
                $angkatan_count[$status][$angkatan] = $this->count_angkatan($status, $angkatan) ?? 0;
            }
        }

        return view('operator/rekap_angkatan_opt', [
            'mhs'=>$mhs,
            'attribute'=>$attribute,
            'angkatan_count'=>$angkatan_count,
            'angkatan'=>$angkatan,
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

    public function rekap_status($status){
        $attribute=Auth::guard('opt')->user();
        $mhs = mahasiswa::where('status', $status)->get();

        $statusList = $mhs->pluck('status')->unique()->toArray();
        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        $status_count = [];

        foreach ($statusList as $status) {
            foreach ($angkatanList as $angkatan) {
                $status_count[$angkatan][$status] = $this->count_status_mhs($angkatan, $status) ?? 0;
            }
        }

        return view('operator/rekap_status', [
            'mhs'=>$mhs,
            'attribute'=>$attribute,
            'status_count'=>$status_count,
            'status'=>$status,
        ]);
    }

    public function rekap_tahun_status_opt($angkatan, $status){
        $attribute=Auth::guard('opt')->user();
        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->where('status', $status)
            ->get();
        // dd($mhs);

        return view('operator/rekap_tahun_status', [
            'mhs'=>$mhs,
            'attribute'=>$attribute,
            'angkatan'=>$angkatan,
            'status'=>$status,
        ]);
    }

    public function cetakPDFbelumPKL($angkatan){
        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->leftJoin('pkls', 'mahasiswas.id', '=', 'pkls.mhs_id')
            ->whereNull('pkls.mhs_id')
            ->select('mahasiswas.nama', 'mahasiswas.id', 'mahasiswas.angkatan')
            ->get();

        $pdf = PDF::loadView('operator/Cetak/list_pkl_belum', ['mhs' => $mhs]);
        return $pdf->stream();
    }

    public function cetakPDFsudahPKL($angkatan){
        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->join('pkls', 'mahasiswas.id', '=', 'pkls.mhs_id')
            ->select('mahasiswas.nama', 'mahasiswas.id', 'mahasiswas.angkatan', 'pkls.nilai')
            ->get();
        $pdf = PDF::loadView('operator/Cetak/list_pkl_sudah', ['mhs' => $mhs]);
        return $pdf->stream();
    }

    public function cetakPDFbelumskripsi($angkatan){
        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->leftJoin('skripsis', 'mahasiswas.id', '=', 'skripsis.mhs_id')
            ->whereNull('skripsis.mhs_id')
            ->select('mahasiswas.nama', 'mahasiswas.id', 'mahasiswas.angkatan')
            ->get();

        $pdf = PDF::loadView('operator/Cetak/list_skripsi_belum', ['mhs' => $mhs]);
        return $pdf->stream();
    }

    public function cetakPDFsudahskripsi($angkatan){
        $attribute=Auth::guard('opt')->user();
        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->rightJoin('skripsis', 'mahasiswas.id', '=', 'skripsis.mhs_id')
            ->select('mahasiswas.nama', 'mahasiswas.id', 'mahasiswas.angkatan', 'skripsis.nilai', 'skripsis.tanggal_lulus')
            ->get();

            $pdf = PDF::loadView('operator/Cetak/list_skripsi_sudah', ['mhs' => $mhs]);
            return $pdf->stream();
    }

    public function cetakPKL(){
        $mhs = mahasiswa::get();
        $pkl = Pkl::get();

        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        $countsudah = [];
        $countbelum = [];

        foreach ($angkatanList as $angkatan) {
            $countsudah[$angkatan] = $this->count_sudah_pkl($angkatan) ?? 0;
            $countbelum[$angkatan] = $this->count_belum_pkl($angkatan) ?? 0;
        }

        $pdf = PDF::loadView('operator/Cetak/rekap_pkl', [
            'mhs'=>$mhs,
            'pkl'=>$pkl,
            'countsudah'=>$countsudah,
            'countbelum'=>$countbelum,
        ]);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    public function cetakSkripsi(){
        $mhs = mahasiswa::get();
        $skripsi = Skripsi::get();

        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        $countsudah = [];
        $countbelum = [];

        foreach ($angkatanList as $angkatan) {
            $countsudah[$angkatan] = $this->count_sudah_skripsi($angkatan) ?? 0;
            $countbelum[$angkatan] = $this->count_belum_skripsi($angkatan) ?? 0;
        }

        $pdf = PDF::loadView('operator/Cetak/rekap_skripsi', [
            'mhs'=>$mhs,
            'skripsi'=>$skripsi,
            'countsudah'=>$countsudah,
            'countbelum'=>$countbelum,
        ]);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    public function cetakMhs(){
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

        $pdf = PDF::loadView('operator/Cetak/rekap_mhs', [
            'mhs'=>$mhs,
            'status_count'=>$status_count,
            'mhs_count'=>$mhs_count,
        ]);
        return $pdf->stream();
    }

    public function cetakAngkatan($angkatan){
        $mhs = mahasiswa::where('angkatan', $angkatan)->get();

        $statusList = $mhs->pluck('status')->unique()->toArray();
        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        $angkatan_count = [];

        foreach ($statusList as $status) {
            foreach ($angkatanList as $angkatan) {
                $angkatan_count[$status][$angkatan] = $this->count_angkatan($status, $angkatan) ?? 0;
            }
        }

        $pdf = PDF::loadView('operator/Cetak/rekap_angkatan', [
            'mhs'=>$mhs,
            'angkatan_count'=>$angkatan_count,
            'angkatan'=>$angkatan,
        ]);
        return $pdf->stream();
    }

    public function cetakStatus($status){
        $mhs = mahasiswa::where('status', $status)->get();

        $statusList = $mhs->pluck('status')->unique()->toArray();
        $angkatanList = $mhs->pluck('angkatan')->unique()->toArray();
        $status_count = [];

        foreach ($statusList as $status) {
            foreach ($angkatanList as $angkatan) {
                $status_count[$angkatan][$status] = $this->count_status_mhs($angkatan, $status) ?? 0;
            }
        }

        $pdf = PDF::loadView('operator/Cetak/rekap_status', [
            'mhs'=>$mhs,
            'status_count'=>$status_count,
            'status'=>$status,
        ]);
        return $pdf->stream();
    }

    public function cetakTahunStatus($angkatan, $status){
        $mhs = mahasiswa::where('angkatan', $angkatan)
            ->where('status', $status)
            ->get();

        $pdf = PDF::loadView('operator/Cetak/rekap_tahun_status', [
            'mhs'=>$mhs,
            'angkatan'=>$angkatan,
            'status'=>$status,
        ]);
        return $pdf->stream();
    }


    /**
     * Display the specified resource.
        */
        public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */



    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }


}
