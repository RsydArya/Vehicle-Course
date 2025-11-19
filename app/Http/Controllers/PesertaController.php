<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import model product
use App\Models\Peserta;

//import return type View
use Illuminate\View\View;
class PesertaController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index() : View
    {
        $peserta = Peserta::latest()->paginate(5);
        return view('pages.index',compact('peserta'));
    }

    /**
     * create
     * 
     * @return View
     */
    public function create():View
    {
        return view('pages.create');
    }

    /**
     * store
     * 
     * @param mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama'      =>'required',
            'no_hp'      =>'required',
            'alamat'       =>'required',
            'paket'           =>'required',
            'status_pembayaran'            =>'required',
        ]);

        Peserta::create([
            'nama'               =>$request->nama,
            'no_hp'              =>$request->no_hp,
            'alamat'      =>$request->alamat,
            'paket'     =>$request->paket,
            'status_pembayaran'     =>$request->status_pembayaran,
        ]);

        //Redirect to index
        return redirect()->route('pages.index')->with(['success' => 'Data successfully saved!']);
    }

    /**
     * show
     * 
     * @param mixed $id
     * @return View
     */
    public function show(string $id):View
    {
        $peserta = Peserta::findOrFail($id);
        return view('pages.show',compact('peserta'));
    }

    /**
     * edit
     * 
     * @param mixed $id
     * @return View
     */
    public function edit(string $id):View
    {
        $peserta = Peserta::findOrFail($id);
        return view('pages.edit',compact('peserta'));
    }

    /**
     * update
     * 
     * @param mixed $request
     * @param mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id):RedirectResponse
    {
        //validate form
        $request->validate([
            'nama'      =>'required',
            'no_hp'      =>'required',
            'alamat'       =>'required',
            'paket'           =>'required',
            'status_pembayaran'            =>'required',
        ]);

        $peserta = Peserta::findOrFail($id);

        $peserta->update([
            'nama'               =>$request->nama,
            'no_hp'              =>$request->no_hp,
            'alamat'      =>$request->alamat,
            'paket'     =>$request->paket,
            'status_pembayaran'     =>$request->status_pembayaran,
        ]);

        //redirect to index
        return redirect()->route('pages.index')->with(['success' => 'Data successfully updated!']);
    }

    /**
     * destroy
     * @param mixed $id
     * @return RedirectResponse
     */
    public function destroy($id):RedirectResponse
    {
        $peserta = Peserta::findOrFail($id);
        $peserta->delete();

        //redirect to index
        return redirect()->route('pages.index')->with(['success'=>'Data successfully deleted! :(']);
    }

}
