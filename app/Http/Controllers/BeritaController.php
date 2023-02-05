<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        foreach ($kategori as $key) {
            $kat = $key->id;
        }
    //    return $kat;
        $berita = Berita::paginate(6);
        return view('berita.berita', compact('berita','kat'));
    }
    public function create()
    {
        $kategori = Kategori::all();
        return view('berita.createBerita', compact('kategori'));
    }
    public function store(Request $request)
    {
        $berita = Berita::Create([
            'judul' => $request->judul,
            'kategori_id' => $request->kategori_id,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('berita.index');
    }
    public function show($id)
    {
        $kategori = Kategori::all();
        foreach ($kategori as $key) {
            $kat = $key->id;
        }
        $berita = Berita::find($id);
        return view('berita.showBerita', compact('kategori', 'berita','kat'));
    }
    public function update(Request $request, $id)
    {
       Berita::find($id)->update([
            'judul' => $request->judul,
            'kategori_id' => $request->kategori_id,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('berita.index');
    }
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();

        return redirect()->route('berita.index');
    }
}
