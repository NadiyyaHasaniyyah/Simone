<?php

namespace App\Http\Controllers;
use App\Models\Province;
use App\Models\Regency;
use App\Models\mahasiswa;
use App\Models\Irs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attribute=Auth::guard('mhs')->user();
        if ($attribute->nama == null ||$attribute->email_pribadi == null ||$attribute->nomor_tlp == null||$attribute->status == null  ||$attribute->jalur_masuk == null  ||$attribute->provinsi == null||$attribute->kabupaten == null || $attribute->alamat == null){
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
        // dd($irs);
        // dd($attribute);
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

        Irs::create($validateData);

        return redirect()->route('dashboard_mhs');

        // $attribute=Auth::guard('mhs')->user();
    }

    public function khs()
    {
        $attribute=Auth::guard('mhs')->user();
        // dd($attribute);
        return view('mahasiswa/khs_mhs',['attribute'=>$attribute]);

    }

    public function pkl()
    {
        $attribute=Auth::guard('mhs')->user();
        // dd($attribute);
        return view('mahasiswa/pkl_mhs',['attribute'=>$attribute]);

    }

    public function skripsi()
    {
        $attribute=Auth::guard('mhs')->user();
        // dd($attribute);
        return view('mahasiswa/skripsi_mhs',['attribute'=>$attribute]);

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

        if ($irs) {
            $pdfPath = public_path('storage/' . $irs->file_irs);

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
        'email_pribadi' => 'required',
        'nomor_tlp' => 'required',
        'provinsi' => 'required',
        'kabupaten' => 'required',
        'status' => 'required',
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
    public function destroy(mahasiswa $mahasiswa)
    {
        //
    }

}
