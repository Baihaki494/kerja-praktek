<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Response;

class AbsensiController extends Controller
{
    // Saat QR code di-scan
    public function scan($id)
    {
        $peserta = Peserta::findOrFail($id);

        if ($peserta->hadir) {
            return view('absensi.already', compact('peserta'));
        }

        $peserta->update(['hadir' => true]);

        return view('absensi.success', compact('peserta'));
    }

    // Unduh QR code sebagai PNG
    public function download($id)
    {
        $peserta = Peserta::findOrFail($id);
        $url = route('absensi.scan', $peserta->id);
        $image = QrCode::format('svg')->size(300)->generate($url);

        return Response::make($image, 200, [
            'Content-Type' => 'image/svg',
            'Content-Disposition' => 'attachment; filename="qr_absensi_'.$peserta->id.'.svg"',
        ]);
    }
}
