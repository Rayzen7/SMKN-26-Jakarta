<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visi_Misi;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisi = Visi_Misi::all();
        return view('admin.layouts.visi-misi', compact('visimisi'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $visimisi = Visi_Misi::findOrFail($id);
        return view('admin.layouts.edit-visimisi', compact('visimisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $visimisi = Visi_Misi::findOrFail($id);
        $request->validate([
            'visi'=>'required',
            'misi'=>'required',
        ]);
        
        $visimisi->update([
            'visi'=> $request->visi,
            'misi'=> $request->misi,
        ]);

        return redirect()->route('visimisi')->with('success', 'Visi Misi Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
