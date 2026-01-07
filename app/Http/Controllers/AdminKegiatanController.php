<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class AdminKegiatanController extends Controller
{
    public function index(Request $request)
{
    $query = Kegiatan::query();

    // 🔍 Pencarian
    if ($request->filled('search')) {
        $search = $request->input('search');
        $query->where('kode_kegiatan', 'like', "%{$search}%")
              ->orWhere('nama_kegiatan', 'like', "%{$search}%")
              ->orWhere('lokasi_kegiatan', 'like', "%{$search}%");
    }

    // 🔽 Sorting
    $sort = $request->get('sort', 'kode_kegiatan');
    $direction = $request->get('direction', 'asc');
    $query->orderBy($sort, $direction);

    // 🔢 Pagination
    $kegiatan = $query->paginate(10)->appends($request->query());

    return view('admin.kegiatan.index', compact('kegiatan', 'sort', 'direction'));
}


    public function create()
    {
        return view('admin.kegiatan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_kegiatan'        => 'required|unique:kegiatan,kode_kegiatan',
            'nama_kegiatan'        => 'required|string|max:255',
            'tanggal_mulai_kegiatan' => 'required|date',
            'tanggal_selesai_kegiatan' => 'required|date',
            'lokasi_kegiatan'      => 'nullable|string|max:255',
            'jam_mulai_kegiatan'   => 'required|date_format:H:i',
            'jam_selesai_kegiatan' => 'required|date_format:H:i',
            'deskripsi_kegiatan'   => 'nullable|string',
            'kuota_kegiatan'       => 'nullable|integer',
            'limit_kuota_kegiatan' => 'nullable|integer',
            'status_kegiatan'      => 'nullable|boolean',
            'link_full_kegiatan'   => 'nullable|url',
            'link_short_kegiatan'  => 'nullable|url',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . '_' . $file->getClientOriginalName();
            // Simpan ke folder public/assets/img/kegiatan
            $file->move(public_path('assets/img/kegiatan'), $nama_file);
            $validated['gambar'] = $nama_file;
        }

        \App\Models\Kegiatan::create($validated);

        return redirect()->route('admin.kegiatan.index')
                         ->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function show($id)
{
    $kegiatan = Kegiatan::with('subKegiatan')->findOrFail($id);
    return view('frontend.kegiatan.show', compact('kegiatan'));
}


    public function edit(Kegiatan $kegiatan)
    {
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }

    public function update(Request $request, Kegiatan $kegiatan)
    {
        $validated = $request->validate([
            'kode_kegiatan'        => 'required|unique:kegiatan,kode_kegiatan,' . $kegiatan->id . ',id',
            'nama_kegiatan'        => 'required|string|max:255',
            'tanggal_mulai_kegiatan' => 'required|date',
            'tanggal_selesai_kegiatan' => 'required|date',
            'lokasi_kegiatan'      => 'nullable|string|max:255',
            'jam_mulai_kegiatan'   => 'required|date_format:H:i',
            'jam_selesai_kegiatan' => 'required|date_format:H:i',
            'deskripsi_kegiatan'   => 'nullable|string',
            'kuota_kegiatan'       => 'nullable|integer',
            'limit_kuota_kegiatan' => 'nullable|integer',
            'status_kegiatan'      => 'nullable|boolean',
            'link_full_kegiatan'   => 'nullable|url',
            'link_short_kegiatan'  => 'nullable|url',
            'gambar'               => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($kegiatan->gambar && file_exists(public_path('assets/img/kegiatan/' . $kegiatan->gambar))) {
                unlink(public_path('assets/img/kegiatan/' . $kegiatan->gambar));
            }
    
            $file = $request->file('gambar');
            $nama_file = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/kegiatan'), $nama_file);
            $validated['gambar'] = $nama_file;
        }
        
        $kegiatan->update($validated);

        return redirect()->route('admin.kegiatan.index')
                         ->with('success', 'Kegiatan berhasil diperbarui.');
    }

    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();

        return redirect()->route('admin.kegiatan.index')
                         ->with('success', 'Kegiatan berhasil dihapus.');
    }
}

