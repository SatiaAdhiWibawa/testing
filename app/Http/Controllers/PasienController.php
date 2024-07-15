<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Pasien;

class PasienController extends Controller
{
    // FUNCTION INDEX
    public function index()
    {
        return Inertia::render('Pasien/Index', [
            'pasien' => Pasien::all(),
        ]);
    }


    // FUNCTION CREATE
    public function create()
    {
        return Inertia::render('Pasien/Create');
    }


    // FUNCTION STORE
    public function store(Request $request)
    {
        $request->validate([
            'nama'          => ['required'],
            'email'         => ['required'],
            'usia'          => ['required'],
            'alamat'        => ['required'],
            'riwayat_medis' => ['required'],
            'password'      => ['required'],
        ]);

        $data             = $request->all();
        $data['password'] = bcrypt($request->password);

        Pasien::create($data);

        return redirect()->route('pasien.index')->with('success', 'Pasien created.');
    }

    // FUNCTION EDIT
    public function edit(Pasien $pasien)
    {
        return Inertia::render('Pasien/Edit', [
            'pasien' => $pasien,
        ]);
    }

    // FUNCTION UPDATE
    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama'          => ['required'],
            'email'         => ['required'],
            'usia'          => ['required'],
            'alamat'        => ['required'],
            'riwayat_medis' => ['required'],
            'password'      => ['required'],
        ]);

        $data             = $request->all();
        $data['password'] = bcrypt($request->password);

        $pasien->update($data);

        return redirect()->route('pasien.index')->with('success', 'Pasien updated.');
    }

    // FUNCTION DESTROY
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();

        return redirect()->route('pasien.index')->with('success', 'Pasien deleted.');
    }
}
