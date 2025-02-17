<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        return view('admin.layouts.berita', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layouts.add-berita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required|mimes:png,jpg,jpeg',
            'name'=>'required',
            'desc'=>'required',
        ]);

        $file = $request->file('image')->store('berita', 'public');
        Berita::create([
            'image'=>$file,
            'name'=>$request->name,
            'desc'=> $request->desc
        ]);

        return redirect()->route('berita')->with('success', 'Berita Berhasil ditambahkan');
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
        $berita = Berita::findOrFail($id);
        return view('admin.layouts.edit-berita', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $berita = Berita::findOrFail($id);
        $request->validate([
            'image'=>'required|mimes:png,jpg,jpeg',
            'name'=>'required',
            'desc'=>'required',
        ]);

        if ($request->hasFile('image')) {
            if ($berita->image) {
                Storage::delete('public/' . $berita->image);
            }

            $file = $request->file('image')->store('berita', 'public');
            $berita->image = $file;
        }

        $berita->name = $request->name;
        $berita->desc = $request->desc;
        $berita->save();

        return redirect()->route('berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);
        if ($berita->image) {
            Storage::delete('public/' . $berita->image);
        }
        $berita->delete();
        return redirect()->route('berita');
    }
}
