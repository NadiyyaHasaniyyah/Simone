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
use App\Models\dosenwali;


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
            'email' => 'required',
        ]);

        $validateData['password'] = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $validateData['status'] = 'Aktif';

        mahasiswa::create($validateData);
        return redirect()->route('import_manual', ['dosen'=>$dosen]);
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
