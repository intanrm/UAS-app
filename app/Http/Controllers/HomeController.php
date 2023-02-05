<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function berita()
    {
        $berita = Berita::paginate(6);
        return view('berita', compact('berita'));
    }
    public function Hberita($id)
    {
        $kategori = Kategori::all();
        foreach ($kategori as $key) {
            $kat = $key->id;
        }
        $berita = Berita::find($id);
        return view('halaman_berita', compact('berita','kat'));
    }
}
