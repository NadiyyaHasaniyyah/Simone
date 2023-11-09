<?php

namespace App\Http\Controllers;

use App\Models\operator;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\LazyCollection;
use App\Http\Requests\StoreoperatorRequest;
use App\Http\Requests\UpdateoperatorRequest;
use App\Models\mahasiswa;
use Illuminate\Http\Request;


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
        $mahasiswa=mahasiswa::all();
        return view('operator.generate',['mahasiswa'=>$mahasiswa]);
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

        $validateData = $request->validate([
            'file' => 'required|max:2048',
        ]);

        // ddd($validateData);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = 'mhs' . '.' . $fileExtension;
            $validateData['file'] = $file->storeAs('ImportDataMhs', $fileName);

            // $validateData['file'] = $request->file('file')->store('ImportDataMhs');

        }

        // $attribute=Auth::guard('opt')->user();
        return redirect()->route('generate');
    }

    public function import_manual(Request $request)
    {

        $validateData = $request->validate([
            'nama' => 'required',
            'id' => 'required',
            'angkatan' => 'required',
            'dsn_id' => 'required',
            'email' => 'required',
        ]);
        $validateData['password']='$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $validateData['status']='Aktif';
        // dd($validateData);

        mahasiswa::create($validateData);
        return redirect()->route('generate');
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
