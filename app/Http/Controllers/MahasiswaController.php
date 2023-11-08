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
        if ($attribute->nim == null || $attribute->nama == null ||$attribute->email == null ||$attribute->fakultas == null ||$attribute->departemen == null ||$attribute->status == null ||$attribute->provinsi == null||$attribute->kabupaten == null ||$attribute->jalur_masuk == null || $attribute->alamat == null){
            return redirect()->route('update_mhs');
        }else{
            // dd($attribute);
            return view('mahasiswa/dashboard_mhs',['attribute'=>$attribute]);
        }
    }

    public function irs()
    {
        $attribute=Auth::guard('mhs')->user();
        // dd($attribute);
        return view('mahasiswa/irs_mhs',['attribute'=>$attribute]);

    }

    public function irs_import(Request $request)
    {
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
        // Ambil objek mahasiswa dari Auth
        $mahasiswa = Auth::guard('mhs')->user();
    
        // Pastikan objek mahasiswa ditemukan
        if ($mahasiswa) {
            $irs = Irs::where('semester', $semester)
                      ->where('mhs_id', $mahasiswa->id) // Pastikan kolom yang sesuai di sini adalah "mhs_id"
                      ->first();
    
            // Pastikan IRS ditemukan
            if ($irs) {
                $pdfPath = public_path($irs->file_irs);
    
                // Pastikan file PDF ada
                if (file_exists($pdfPath)) {
                    // Tampilkan file PDF
                    return response()->file($pdfPath);
                }
            }
        }
    
        // Jika objek mahasiswa tidak ditemukan, IRS tidak ditemukan, atau file PDF tidak ada, tampilkan pesan error
        return response('File PDF tidak ditemukan', 404);
    }
    



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mahasiswa $mahasiswa)
{
    // dd($request);
    $provinces = Province::all();
    $regencies = Regency::all();
    $validateData = $request->validate([
        'foto' => 'image|max:1024', // Hilangkan 'file', karena 'image' sudah termasuk 'file'
        'nama' => 'required',
        'email' => 'required',
        'provinsi' => 'required',
        'kabupaten' => 'required',
        'status' => 'required',
        'angkatan' => 'required',
        'jalur_masuk' => 'required',
        'alamat' => 'required'
    ]);

    // dd($data);

    if ($request->hasFile('foto')) {
        $validateData['foto'] = $request->file('foto')->store('updateImages');
    }

    $id_provinsi = $validateData['provinsi'];
    $id_kabupaten = $validateData['kabupaten'];

    $provinceName = Province::find($id_provinsi)->name;
    $regencyName = Regency::find($id_kabupaten)->name;

    $validateData['provinsi'] = $provinceName;
    $validateData['kabupaten'] = $regencyName;

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
