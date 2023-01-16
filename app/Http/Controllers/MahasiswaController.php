<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('home', compact('mahasiswa'));
    }
    public function tambah()
    {
        return view('tambah', );
    }
    public function store(Request $request)
    {
        Mahasiswa::create($request->except('_token', 'submit'));
        return redirect('/');
    }
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('edit', compact(['mahasiswa']));
    }
    public function update($id, Request $req)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($req->except('_token', 'submit'));
        return redirect('/');
    }
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/');
    }
}