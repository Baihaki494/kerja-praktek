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
        if (ob_get_contents()) ob_end_clean();

    try{
        $peserta = Peserta::findOrFail($id);
        $url = route('absensi.scan', ['id' => $peserta->id]);
        $qrCode = QrCode::format('svg')
        ->size(300)
        ->margin(1)
        ->errorCorrection('H')
        ->generate($url);

        return response($qrCode)
        ->header('Content-Type', 'image/svg+xml')
        ->header('Content-Disposition', 'attachment; filename="qr_absensi_'.$peserta->id.'.svg"');  
        
     } catch (\Exception $e) {
        return "Gagal mengunduh: " . $e->getMessage();

         }
    }
}
