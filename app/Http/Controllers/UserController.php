<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sejarah;
use App\Models\Visi_Misi;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $sejarah = Sejarah::all();
        $visimisi = Visi_Misi::all();
        $berita = Berita::all();
        $galeri = Galeri::all();
        return view('dashboard', compact('sejarah', 'visimisi', 'berita', 'galeri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        $hash = Hash::check($request->password, $user->password);

        if ($user && $hash) {
            Auth::login($user);
            if (Auth::check()) {
                return redirect()->route('sejarah')->with('success', 'Masuk Berhasil');
            } else {
                return back()->with('error', 'Email/Password anda salah');
            }
        }

        return back()->with('error', 'Email/Password anda salah');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->route('dashboard')->with('success', 'Keluar Berhasil');
    }
}
