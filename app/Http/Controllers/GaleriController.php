<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('admin.layouts.galeri', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layouts.add-galeri');
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

        $file = $request->file('image')->store('galeri', 'public');
        Galeri::create([
            'image'=>$file,
            'name'=>$request->name,
            'desc'=> $request->desc
        ]);

        return redirect()->route('galeri')->with('success', 'Galeri Berhasil ditambahkan');
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
        $galeri = Galeri::findOrFail($id);
        return view('admin.layouts.edit-galeri', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $galeri = Galeri::findOrFail($id);
        $request->validate([
            'image'=>'required|mimes:png,jpg,jpeg',
            'name'=>'required',
            'desc'=>'required',
        ]);

        if ($request->hasFile('image')) {
            if ($galeri->image) {
                Storage::delete('public/' . $galeri->image);
            }

            $file = $request->file('image')->store('galeri', 'public');
            $galeri->image = $file;
        }

        $galeri->name = $request->name;
        $galeri->desc = $request->desc;
        $galeri->save();

        return redirect()->route('galeri');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galeri = Galeri::findOrFail($id);
        if ($galeri->image) {
            Storage::delete('public/' . $galeri->image);
        }
        $galeri->delete();
        return redirect()->route('galeri')->with('success', 'Galeri berhasil dihapus');
    }
}
