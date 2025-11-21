<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Instruktur;

class InstrukturController extends Controller
{
    // Index method to list instructurs
    public function index(): View
    {
        $instruktur = Instruktur::latest()->paginate(5);
        return view('instruktur.index',compact('instruktur'));
    }

    // Show the form for creating a new instructur
    public function create(): View
    {
        return view('instruktur.create');
    }

    // Store a newly created instructur in storage
    public function store(Request $request): RedirectResponse
    {
        // Validate the form
        $request->validate([
            'nama' => 'required',
            'pengalaman' => 'required',
            'no_hp' => 'required',
        ]);

        Instruktur::create([
            'nama' => $request->nama,
            'pengalaman' => $request->pengalaman,
            'no_hp' => $request->no_hp,
        ]);

        // Redirect to index
        return redirect()->route('instruktur.index')->with(['success' => 'Data successfully saved!']);
    }

    // Display the specified instructur
    public function show(string $id): View
    {
        $instruktur = Instruktur::findOrFail($id);
        return view('instruktur.show', compact('instruktur'));
    }

    // Show the form for editing the specified instructur
    public function edit(string $id): View
    {
        $instruktur = Instruktur::findOrFail($id);
        return view('instruktur.edit', compact('instruktur'));
    }

    // Update the specified instructur in storage
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'pengalaman' => 'required',
            'no_hp' => 'required',
        ]);

        $instruktur = Instruktur::findOrFail($id);
        $instruktur->update([
            'nama' => $request->nama,
            'pengalaman' => $request->pengalaman,
            'no_hp' => $request->no_hp,
        ]);

        // Redirect to index
        return redirect()->route('instruktur.index')->with(['success' => 'Data successfully updated!']);
    }

    // Remove the specified instructur from storage
    public function destroy(string $id): RedirectResponse
    {
        $instruktur = Instruktur::findOrFail($id);
        $instruktur->delete();

        // Redirect to index
        return redirect()->route('instruktur.index')->with(['success' => 'Data successfully deleted!']);
    }
}