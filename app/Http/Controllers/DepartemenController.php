<?php

namespace App\Http\Controllers;

use App\Models\departemen;
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
