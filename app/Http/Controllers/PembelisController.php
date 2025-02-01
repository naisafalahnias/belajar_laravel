<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;

class PembelisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = Pembeli::all();
        return view('pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,  [
            'nama_pembeli' => 'required|max:30',
            'jenis_kelamin' => 'required',
            'telepon' => 'required|max:13',

        ]);

        $pembeli                   = new Pembeli;
        $pembeli->nama_pembeli     = $request->nama_pembeli;
        $pembeli->jenis_kelamin    = $request->jenis_kelamin;
        $pembeli->telepon          = $request->telepon;
        $pembeli->save();

        return redirect()->route('pembeli.index')->with('success', 'Data Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembeli')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembeli = Pembeli::findOrfail($id);
        return view('pembeli.edit', compact('pembeli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,  [
            'nama_pembeli' => 'required|max:30',
            'jenis_kelamin' => 'required',
            'telepon' => 'required|max:13',

        ]);
        
        $pembeli                   = Pembeli::findOrfail($id);
        $pembeli->nama_pembeli     = $request->nama_pembeli;
        $pembeli->jenis_kelamin    = $request->jenis_kelamin;
        $pembeli->telepon          = $request->telepon;
        $pembeli->save();

        return redirect()->route('pembeli.index')->with('success', 'Data Berhasil Diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->delete();
        return redirect()->route('pembeli.index')->with('success', 'Data Berhasil Dihapus');
    }
}
