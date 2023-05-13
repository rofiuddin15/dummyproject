<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pelanggaran::all(); // manggil semua data
        return view('pelanggaran.index', compact('data')); // manggil view bersama data
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggaran.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save = Pelanggaran::create([
            'nama_pelanggaran' => $request->nama,
        ]);

        if ($save) {
            return redirect()->route('pelanggaran.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Pelanggaran::findOrFail($id);
        return view('pelanggaran.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Pelanggaran::findOrFail($id);
        return view('pelanggaran.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Pelanggaran::findOrFail($id);

        $data->nama_pelanggaran = $request->nama;
        $data->status = $request->status;

        $data->update();

        if ($data) {
            return redirect()->route('pelanggaran.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggaran $pelanggaran)
    {
        //
    }
}
