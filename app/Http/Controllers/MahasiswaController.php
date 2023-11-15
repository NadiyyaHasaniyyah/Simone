<?php

namespace App\Http\Controllers;
use App\Models\Irs;
use App\Models\Khs;
use App\Models\Pkl;
use App\Models\Regency;
use App\Models\Skripsi;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Support\ValidatedData;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attribute=Auth::guard('mhs')->user();
        if ($attribute->nama == null ||$attribute->email == null ||$attribute->nomor_tlp == null||$attribute->status == null  ||$attribute->jalur_masuk == null  ||$attribute->provinsi == null||$attribute->kabupaten == null || $attribute->alamat == null){
            return redirect()->route('update_mhs');
        }else{
            // dd($attribute);
            return view('mahasiswa/dashboard_mhs',['attribute'=>$attribute]);
        }
    }

    public function irs()
    {
        $attribute=Auth::guard('mhs')->user();
        $irs = Irs::where('mhs_id', $attribute->id)->orderBy('semester')->get();
        return view('mahasiswa/irs_mhs',[
            'attribute'=>$attribute,
            'irs'=>$irs]);

    }

    public function irs_import(Request $request)
    {
        // ddd($request);
        $validateData = $request->validate([
            'semester' => 'required',
            'jumlah_sks'=> 'required',
            'file_irs' => 'required|max:2048',
        ]);

        $validateData['mhs_id'] = Auth::guard('mhs')->user()->id;

        if ($request->hasFile('file_irs')) {
            $validateData['file_irs'] = $request->file('file_irs')->store('importIRS');
        }

        $existingIrs = Irs::where('semester', $validateData['semester'])
                        ->where('mhs_id', $validateData['mhs_id'])
                        ->first();

        if ($existingIrs) {
            return redirect()->route('irs_import')->with('error', 'IRS untuk semester tersebut sudah ada.');
        }

        Irs::create($validateData);

        return redirect()->route('irs_import')->with('success', 'IRS berhasil ditambahkan.');
    }

    public function khs()
    {
        $attribute=Auth::guard('mhs')->user();
        $khs = Khs::where('mhs_id', $attribute->id)->orderBy('semester')->get();

        return view('mahasiswa/khs_mhs',[
            'attribute'=>$attribute,
            'khs'=>$khs]);


    }
    public function khs_import(Request $request)
    {
        // dd($request);
        $attribute=Auth::guard('mhs')->user();
        $validateData = $request->validate([
            'sks_smt' => 'required',
            'sks_komulatif' => 'required',
            'ips' => 'required',
            'ipk' => 'required',
            'semester' => 'required',
            'file_khs' => 'required|max:2048',
        ]);


        // if ($validateData['semester']==1){
        //     $validateData['sks_komulatif']=$validateData['sks_smt'];
        //     $validateData['ipk']=$validateData['ips'];
        // }else{
        //     $sks_komulatif=Khs::where('mhs_id', $attribute->id)->Where('semester',$validateData['semester']-1)->first()->sks_komulatif;
        //     $totalIP = Khs::where('mhs_id', $attribute->id)->sum('ips');
        //     $CountSMT = Khs::where('mhs_id', $attribute->id)->count();

        //     $validateData['sks_komulatif'] = $sks_komulatif+$validateData['sks_smt'];
        //     $validateData['ipk']=($totalIP+$validateData['ips'])/($CountSMT+1);
        // }

        $validateData['mhs_id'] = Auth::guard('mhs')->user()->id;

        if ($request->hasFile('file_khs')) {
            $validateData['file_khs'] = $request->file('file_khs')->store('importKHS');
        }

        $existingIrs = Khs::where('semester', $validateData['semester'])
                        ->where('mhs_id', $validateData['mhs_id'])
                        ->first();

        if ($existingIrs) {
            return redirect()->route('khs_import')->with('error', 'KHS untuk semester tersebut sudah ada.');
        }

        Khs::create($validateData);

        return redirect()->route('khs_import')->with('success', 'KHS berhasil ditambahkan.');

        // $attribute=Auth::guard('mhs')->user();
    }

    public function pkl()
    {
        $attribute=Auth::guard('mhs')->user();
        $pkl = Pkl::all();

        // dd($attribute);
        return view('mahasiswa/pkl_mhs',[
            'attribute'=>$attribute,
            'pkl'=>$pkl]);

    }

    public function pkl_import(Request $request)
    {
        // ddd($request);
        $attribute=Auth::guard('mhs')->user();
        $validateData = $request->validate([

            'semester' => 'required',
            'nilai'=> 'required',
            'file_pkl' => 'required|max:2048',
        ]);

        $validateData['status'] = 'Lulus';

        $validateData['mhs_id'] = Auth::guard('mhs')->user()->id;

        if ($request->hasFile('file_pkl')) {
            $validateData['file_pkl'] = $request->file('file_pkl')->store('importPKL');
        }

        $existingPkl = Pkl::where('mhs_id', $attribute['id'])
                        ->first();

        if ($existingPkl) {
            return redirect()->route('pkl_import')->with('error', 'Data PKL sudah ditambahkan.');
        }

        Pkl::create($validateData);

        return redirect()->route('pkl_import')->with('success', 'Data PKL berhasil ditambahkan.');
    }

    public function skripsi()
    {
        $attribute=Auth::guard('mhs')->user();
        // dd($attribute);
        return view('mahasiswa/skripsi_mhs',['attribute'=>$attribute]);

    }

    public function skripsi_import(Request $request)
    {
        // ddd($request);
        $attribute=Auth::guard('mhs')->user();
        $validateData = $request->validate([

            'semester' => 'required',
            'nilai'=> 'required',
            'tanggal_lulus'=> 'required',
            'file_skripsi' => 'required|max:2048',
        ]);

        $validateData['status'] = 'Lulus';

        $validateData['mhs_id'] = Auth::guard('mhs')->user()->id;

        if ($request->hasFile('file_skripsi')) {
            $validateData['file_skripsi'] = $request->file('file_skripsi')->store('importSKRIPSI');
        }

        $existingSkripsi = Skripsi::where('mhs_id', $attribute['id'])
                        ->first();

        if ($existingSkripsi) {
            return redirect()->route('skripsi_import')->with('error', 'Data Skripsi sudah ditambahkan.');
        }

        Skripsi::create($validateData);
        return redirect()->route('skripsi_import')->with('success', 'Data Skripsi berhasil ditambahkan.');
    }


    // public function update_mhs()
    // {
    //     $attribute=Auth::guard('mhs')->user();
    //     // dd($attribute);
    //     return view('mahasiswa/update_mhs', ['attribute'=>$attribute]);
    // }

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
    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mahasiswa $mahasiswa)
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        // $districts = District::all();
        // $villages = Village::all();


        $attribute=Auth::guard('mhs')->user();
        // dd($attribute);
        return view('mahasiswa/update_mhs', [
            'mahasiswa' => $mahasiswa,
            'attribute'=>$attribute,
            'provinces'=>$provinces,
            'regencies'=>$regencies
        ]);


    }

    public function viewPDF($semester)
{
    $mahasiswa = Auth::guard('mhs')->user();

    if ($mahasiswa) {
        $irs = Irs::where('semester', $semester)
                  ->where('mhs_id', $mahasiswa->id)
                  ->first();
        $khs = khs::where('semester', $semester)
                  ->where('mhs_id', $mahasiswa->id)
                  ->first();

        if ($irs) {
            $pdfPath = public_path('storage/' . $irs->file_irs);

            if (file_exists($pdfPath)) {
                return response()->file($pdfPath);
            }
        }else if ($khs) {
            $pdfPath = public_path('storage/' . $khs->file_khs);

            if (file_exists($pdfPath)) {
                return response()->file($pdfPath);
            }
        }
    }

    return response('File PDF tidak ditemukan', 404);
}




    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mahasiswa $mahasiswa)
{
    // dd($request);
    // $attribute=Auth::guard('mhs')->user();
    // dd(mahasiswa::where('nim', $attribute->nim)->first());

    $provinces = Province::all();
    $regencies = Regency::all();
    $validateData = $request->validate([
        'foto' => 'image|max:1024', // Hilangkan 'file', karena 'image' sudah termasuk 'file'
        'nama' => 'required',
        'email' => 'required',
        'nomor_tlp' => 'required',
        'provinsi' => 'required',
        'kabupaten' => 'required',
        'jalur_masuk' => 'required',
        'alamat' => 'required'
    ]);


    if ($request->hasFile('foto')) {
        $validateData['foto'] = $request->file('foto')->store('updateImages');
    }

    $id_provinsi = $validateData['provinsi'];
    $id_kabupaten = $validateData['kabupaten'];

    $provinceName = Province::find($id_provinsi)->name;
    $regencyName = Regency::find($id_kabupaten)->name;

    $validateData['provinsi'] = $provinceName;
    $validateData['kabupaten'] = $regencyName;

    //dd($validateData);

    $attribute=Auth::guard('mhs')->user();
    mahasiswa::where('id', $attribute->id)->update($validateData);

    return redirect()->route('dashboard_mhs');
}

    public function getKabupaten(Request $request)
{
    $id_provinsi = $request->id_provinsi;
    $kabupatens = Regency::where('province_id', $id_provinsi)->get();
    $options = "<option value=''>Pilih Kabupaten...</option>";

    foreach ($kabupatens as $kabupaten) {
        // Append each new option to the $options string
        $options .= "<option value='$kabupaten->id'>$kabupaten->name</option>";
    }

    // Return the options string as a response
    return response()->json($options);
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroyIRS($semester)
    {
        $mahasiswa = Auth::guard('mhs')->user();
        $Irs = Irs::where('semester', $semester)
                  ->where('mhs_id', $mahasiswa->id)
                  ->first();

        if ($Irs) {
            $Irs->delete();
            return redirect()->route('irs_mhs')->with('success', 'IRS berhasil dihapus.');
        }

    }

    public function destroyKHS($semester)
    {
        $mahasiswa = Auth::guard('mhs')->user();
        $Khs = Khs::where('semester', $semester)
                  ->where('mhs_id', $mahasiswa->id)
                  ->first();

        if ($Khs) {
            $Khs->delete();
            return redirect()->route('khs')->with('success', 'KHS berhasil dihapus.');
        }

    }

    public function irs_edit($semester){
        $attribute=Auth::guard('mhs')->user();
        $irs = Irs::where('mhs_id', $attribute->id)->orderBy('semester')->get();

        $Irs = Irs::where('semester', $semester)
                  ->where('mhs_id', $attribute->id)
                  ->first();

        return view('mahasiswa/irs_edit_mhs',[
            'attribute'=>$attribute,
            'irs'=>$irs,
            'Irs'=>$Irs]);
    }

    public function irs_edit_import(Request $request, $semester){
        $attribute=Auth::guard('mhs')->user();
        $Irs = Irs::where('semester', $semester)
                  ->where('mhs_id', $attribute->id)
                  ->first();

        $validateData = $request->validate([
            'semester' => 'required',
            'jumlah_sks'=> 'required',
            'file_irs' => 'required|max:2048',
        ]);

        if ($request->hasFile('file_irs')) {
            $validateData['file_irs'] = $request->file('file_irs')->store('importIRS');
        }

        Irs::where('id', $Irs->id)->update($validateData);

        return redirect()->route('irs_mhs')->with('success', 'IRS berhasil diubah.');
        // return view('mahasiswa/irs_mhs',[
        //     'attribute'=>$attribute,
        //     'Irs'=>$Irs]);
    }


    public function khs_edit($semester){
        $attribute=Auth::guard('mhs')->user();
        $khs = Khs::where('mhs_id', $attribute->id)->orderBy('semester')->get();

        $Khs = Khs::where('semester', $semester)
                  ->where('mhs_id', $attribute->id)
                  ->first();

        return view('mahasiswa/khs_edit_mhs',[
            'attribute'=>$attribute,
            'khs'=>$khs,
            'Khs'=>$Khs]);
    }

    public function khs_edit_import(Request $request, $semester){
        $attribute=Auth::guard('mhs')->user();
        $Khs = Khs::where('semester', $semester)
                  ->where('mhs_id', $attribute->id)
                  ->first();

        $validateData = $request->validate([
            'semester' => 'required',
            'sks_smt'=> 'required',
            'sks_komulatif'=> 'required',
            'ips'=> 'required',
            'ipk'=> 'required',
            'file_khs' => 'required|max:2048',
        ]);

        if ($request->hasFile('file_khs')) {
            $validateData['file_khs'] = $request->file('file_khs')->store('importKHS');
        }

        Khs::where('id', $Khs->id)->update($validateData);

        return redirect()->route('khs')->with('success', 'KHS berhasil diubah.');
        // return view('mahasiswa/irs_mhs',[
        //     'attribute'=>$attribute,
        //     'Irs'=>$Irs]);
    }

}
