@component('mail::message')
# Halo {{ $peserta->nama_lengkap }} 👋

Terima kasih telah mendaftar pada kegiatan **{{ $peserta->kegiatan->nama_kegiatan }}**.

📅 Jadwal: {{ $peserta->kegiatan->tanggal_mulai_kegiatan->format('d M Y') }}  
📍 Lokasi: {{ $peserta->kegiatan->lokasi_kegiatan }}

Kami akan menghubungi Anda untuk informasi selanjutnya.  
Sampai jumpa di kegiatan!

@component('mail::button', ['url' => url('/')])
Kunjungi Website
@endcomponent

Salam,  
**Tim Panitia**
@endcomponent
