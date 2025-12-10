<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Kegiatan;
use App\Models\SubKegiatan;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PesertaExport;
use App\Imports\PesertaImport;
use Illuminate\Support\Facades\Storage;

class AdminPesertaController extends Controller
{
    /**
     * Tampilkan semua peserta
     */
    public function index(Request $request)
{
    $query = Peserta::with(['kegiatan', 'subKegiatan']);

    // 🔍 Pencarian
    if ($request->filled('search')) {
        $search = $request->input('search');
        $query->where(function ($q) use ($search) {
            $q->where('nama_lengkap', 'like', "%{$search}%")
              ->orWhere('nik', 'like', "%{$search}%")
              ->orWhere('no_kk', 'like', "%{$search}%")
              ->orWhere('kecamatan', 'like', "%{$search}%")
              ->orWhere('kelurahan', 'like', "%{$search}%");
        });
    }

    //  Pengurutan
    $sort_by = $request->input('sort_by', 'nama_lengkap');
    $sort_order = $request->input('sort_order', 'asc');
    $query->orderBy($sort_by, $sort_order);

    //  Pagination
    $pesertas = $query->paginate(10)->appends($request->query());

    return view('admin.peserta.index', compact('pesertas', 'sort_by', 'sort_order'));
}

    /**
     * Tampilkan form tambah peserta
     */
    public function create()
    {
        $kegiatan = Kegiatan::all();
        $subKegiatan = SubKegiatan::all();
        return view('admin.peserta.create', compact('kegiatan', 'subKegiatan'));
    }

    /**
     * Simpan peserta baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'kegiatan_id' => 'required|exists:kegiatan,id',
            'subKegiatan_id' => 'nullable|exists:subKegiatan,id',
            'nik' => 'required|digits:16|unique:peserta,nik',
            'no_kk' => 'required|digits:16',
            'nama_lengkap' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telp' => 'required|string|max:15',
            'kecamatan' => 'required|string|max:50',
            'kelurahan' => 'required|string|max:50',
        ]);

        Peserta::create($request->all());

        return redirect()->route('admin.peserta.index')->with('success', 'Peserta berhasil ditambahkan!');
    }

    /**
     * Tampilkan form edit peserta
     */
    public function edit(Peserta $peserta)
    {
        $kegiatan = Kegiatan::all();
        $subKegiatan = SubKegiatan::all();
        return view('admin.peserta.edit', compact('peserta', 'kegiatan', 'subKegiatan'));
    }

    /**
     * Update peserta
     */
    public function update(Request $request, Peserta $peserta)
    {
        $request->validate([
            'kegiatan_id' => 'required|exists:kegiatan,id',
            'subKegiatan_id' => 'nullable|exists:subKegiatan,id',
            'nik' => 'required|digits:16|unique:peserta,nik', 
            'no_kk' => 'required|digits:16',
            'nama_lengkap' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telp' => 'required|string|max:15',
            'kecamatan' => 'required|string|max:50',
            'kelurahan' => 'required|string|max:50',
        ]);

        $peserta->update($request->all());

        return redirect()->route('admin.peserta.index')->with('success', 'Peserta berhasil diperbarui!');
    }

    /**
     * Hapus peserta
     */
    public function destroy(Peserta $peserta)
    {
        $peserta->delete();
        return redirect()->route('admin.peserta.index')->with('success', 'Peserta berhasil dihapus!');
    }

    /**
     * Export data peserta ke Excel
     */
    public function export()
    {
        return Excel::download(new PesertaExport, 'data_peserta.xlsx');
    }

    /**
     * Import data peserta dari Excel
     */
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);

        Excel::import(new PesertaImport, $request->file('file'));

        return redirect()->route('admin.peserta.index')
            ->with('success', 'Data peserta berhasil diimport!');
    }
}
