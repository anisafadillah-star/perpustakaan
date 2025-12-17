<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BukuController extends Controller
{
    // ===============================
    // TAMPILKAN DATA BUKU
    // ===============================
    public function index()
    {
        return view('buku.index', [
            'title' => 'Perpustakaan | Koleksi Buku',
            'buku' => Buku::latest()->get()
        ]);
    }

    // ===============================
    // SIMPAN BUKU BARU
    // ===============================
    public function store(Request $request)
    {
        $foto = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('buku', 'public');
        }

        Buku::create([
            'kode_buku' => $request->kode_buku,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'stok_total' => $request->stok_total,
            'stok_tersedia' => $request->stok_tersedia,
            'rak_lokasi' => $request->rak_lokasi,
            'status' => $request->status,
            'foto' => $foto
        ]);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');
    }

    // ===============================
    // UPDATE BUKU
    // ===============================
    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);

        if ($request->hasFile('foto')) {
            if ($buku->foto && File::exists(storage_path('app/public/' . $buku->foto))) {
                File::delete(storage_path('app/public/' . $buku->foto));
            }
            $buku->foto = $request->file('foto')->store('buku', 'public');
        }

        $buku->update($request->except('foto'));

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui');
    }

    // ===============================
    // HAPUS BUKU
    // ===============================
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);

        if ($buku->foto && File::exists(storage_path('app/public/' . $buku->foto))) {
            File::delete(storage_path('app/public/' . $buku->foto));
        }

        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
    }
}
