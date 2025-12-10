<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SubKegiatan;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class AdminSubKegiatanController extends Controller
{
    // Index Sub Kegiatan
    public function index(Request $request)
{
    $query = SubKegiatan::with('kegiatan');

    // 🔍 Fitur pencarian
    if ($request->filled('search')) {
        $search = $request->input('search');
        $query->where('kode_subKegiatan', 'like', "%{$search}%")
              ->orWhere('nama_subKegiatan', 'like', "%{$search}%");
    }

    // 🔽 Pengurutan
    $sort = $request->get('sort', 'kode_subKegiatan');
    $direction = $request->get('direction', 'asc');
    $query->orderBy($sort, $direction);

    // 🔢 Pagination (gunakan hasil query di atas!)
    $subKegiatan = $query->paginate(10)->appends($request->query());

    // ✅ Tambahkan ini untuk mencegah error Undefined variable $allSubKegiatan
    $allsubKegiatan = SubKegiatan::select('id', 'nama_subKegiatan')->get();

    return view('admin.subKegiatan.index', compact('subKegiatan', 'sort', 'direction', 'allsubKegiatan'));
}


    // Create Sub Kegiatan
    public function create()
    {
        // Ambil semua kegiatan untuk dropdown di form
        $kegiatan = Kegiatan::all();
        return view('admin.subKegiatan.create', compact('kegiatan'));
    }

    // Store Sub Kegiatan
    public function store(Request $request)
    {
        $request->validate([
            'kode_subKegiatan' => 'required|unique:subKegiatan',
            'nama_subKegiatan' => 'required',
            'kegiatan_id' => 'required|exists:kegiatan,id',
        ]);

        SubKegiatan::create($request->all());

        return redirect()->route('admin.subKegiatan.index')
            ->with('success', 'Sub Kegiatan berhasil ditambahkan');
    }

    // Edit Sub Kegiatan
    public function edit(SubKegiatan $subKegiatan)
    {
        $kegiatan = Kegiatan::all(); // untuk select dropdown
        return view('admin.subKegiatan.edit', compact('subKegiatan', 'kegiatan'));
    }

    // Update Sub Kegiatan
    public function update(Request $request, SubKegiatan $subKegiatan)
    {
        $request->validate([
            'kode_subKegiatan' => 'required|unique:subKegiatan,kode_subKegiatan,' . $subKegiatan->id,
            'nama_subKegiatan' => 'required',
            'kegiatan_id' => 'required|exists:kegiatan,id',
        ]);

        $subKegiatan->update($request->all());

        return redirect()->route('admin.subKegiatan.index')
            ->with('success', 'Sub Kegiatan berhasil diperbarui');
    }

    // Delete Sub Kegiatan
    public function destroy(SubKegiatan $subKegiatan)
    {
        $subKegiatan->delete();
        return redirect()->route('admin.subKegiatan.index')
            ->with('success', 'Sub Kegiatan berhasil dihapus');
    }
}
