<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(): View
    {
        $barangs = Barang::latest()->paginate(5);
        return view('barangs.index', compact('barangs'));
    }

    public function create(): View
    {
        return view('barangs.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'namabarang' => 'required',
            'hargabarang' => 'required',
            'stok' => 'required',
            'tanggalmasuk' => 'required',
            'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        //upload foto
        $foto = $request->file('foto');
        $foto->storeAs('public/barangs', $foto->hashName());

        //create barang
        Barang::create([
            'namabarang'     => $request->namabarang,
            'hargabarang'     => $request->hargabarang,
            'stok'     => $request->stok,
            'tanggalmasuk'   => $request->tanggalmasuk,
            'foto' => $foto->hashName()
        ]);

        //redirect to index
        return redirect()->route('barangs.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get barang by ID
        $barang = Barang::findOrFail($id);

        //render view with barang
        return view('barangs.show', compact('barang'));
    }

    public function edit(string $id): View
    {
        //get barang by ID
        $barang = Barang::findOrFail($id);

        //render view with barang
        return view('barangs.edit', compact('barang'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'namabarang' => 'required',
            'kategori' => 'required',
            'hargabarang' => 'required',
            'stok' => 'required',
            'tanggalmasuk' => 'required',
            'foto' => 'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        //get barang by ID
        $barang = Barang::findOrFail($id);

        //check if foto is uploaded
        if ($request->hasFile('foto')) {

            //upload new foto
            $foto = $request->file('foto');
            $foto->storeAs('public/barangs', $foto->hashName());

            //delete old foto
            Storage::delete('public/barangs/'.$barang->foto);

            //update barang with new foto
            $barang->update([
                'namabarang'     => $request->namabarang,
                'hargabarang'     => $request->hargabarang,
                'stok'     => $request->stok,
                'tanggalmasuk'   => $request->tanggalmasuk,
                'foto' => $foto->hashName()
                ]);

        } else {

            //update barang without foto
            $barang->update([
                'namabarang'     => $request->namabarang,
                'hargabarang'     => $request->hargabarang,
                'stok'     => $request->stok,
                'tanggalmasuk'   => $request->tanggalmasuk
            ]);
        }

        //update kategori
        if ($barang->kategori) {
            $barang->kategori->update(['kategori' => $request->kategori]);
        } else {
            $barang->kategori()->create(['kategori'=> $request->kategori]);
        }

        //redirect to index
        return redirect()->route('barangs.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get barang by ID
        $barang = Barang::findOrFail($id);

        //delete image
        Storage::delete('public/barangs/'. $barang->foto);

        //delete barang
        $barang->delete();

        //redirect to index
        return redirect()->route('barangs.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function storeKategori(Request $request)
    {
        $kategori = new Kategori();
        $kategori->barang_id = $request->barang_id;
        $kategori->kategori = $request->kategori;
        $kategori->save();

        return redirect()->back();
    }
}
