<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sejarah;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sejarah = Sejarah::all();
        return view('admin.layouts.sejarah', compact('sejarah'));
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
        $sejarah = Sejarah::findOrFail($id);
        return view('admin.layouts.edit-sejarah', compact('sejarah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sejarah = Sejarah::findOrFail($id);
        $request->validate([
            'sejarah_1'=>'required',
            'sejarah_2'=>'required',
            'sejarah_3'=>'required',
        ]);
        
        $sejarah->update([
            'sejarah_1'=> $request->sejarah_1,
            'sejarah_2'=> $request->sejarah_2,
            'sejarah_3'=> $request->sejarah_3,
        ]);

        return redirect()->route('sejarah')->with('success', 'Sejarah Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
