<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Instruktur;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    // Menampilkan semua data jadwal
    public function index()
    {
        $jadwal = Jadwal::with(['peserta', 'instruktur'])->paginate(10);
        return view('jadwal.index', compact('jadwal'));
    }

    // Form tambah jadwal
    public function create()
    {
        $peserta = Peserta::all();
        $instruktur = Instruktur::all();
        return view('jadwal.create', compact('peserta', 'instruktur'));
    }
    

    // Simpan data ke database
    public function store(Request $request)
    {
        $request->validate([
            'peserta_id' => 'required',
            'instruktur_id' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'status' => 'required|in:terjadwal,selesai',
        ]);

        Jadwal::create($request->all());

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan');
    }

    // Tampilkan detail jadwal (opsional)
    public function show($id)
    {
        $jadwal = Jadwal::with(['peserta', 'instruktur'])->findOrFail($id);
        return view('jadwal.show', compact('jadwal'));
    }

    // Form edit jadwal
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $peserta = Peserta::all();
        $instruktur = Instruktur::all();
        return view('jadwal.edit', compact('jadwal', 'peserta', 'instruktur'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'peserta_id' => 'required',
            'instruktur_id' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'status' => 'required|in:terjadwal,selesai',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($request->all());

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui');
    }

    // Hapus data
    public function destroy($id)
    {
        Jadwal::destroy($id);
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus');
    }
}
