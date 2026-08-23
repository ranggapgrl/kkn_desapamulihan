@extends('layouts.app')

@section('content')

@php
    $dataAnakTidakSekolah = [
        ['dusun' => 'Dusun 1 (Pamulihan)', 'rentang' => '-', 'jumlah' => 0, 'status' => 'Aman', 'warna_status' => 'bg-blue-500'],
        ['dusun' => 'Dusun 2 (Citali)', 'rentang' => '-', 'jumlah' => 0, 'status' => 'Aman', 'warna_status' => 'bg-emerald-500'],
        ['dusun' => 'Dusun 3 (Sukasirna)', 'rentang' => '-', 'jumlah' => 0, 'status' => 'Aman', 'warna_status' => 'bg-slate-400'],
        ['dusun' => 'Dusun 4 (Haurngombong)', 'rentang' => '7 - 15 Tahun', 'jumlah' => 5, 'status' => 'Sedang dalam pendataan', 'warna_status' => 'bg-amber-500'],
    ];

    $totalAnak = array_sum(array_column($dataAnakTidakSekolah, 'jumlah'));
    $linkPdfDummy = "https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf";
@endphp

<section class="relative overflow-hidden pt-36 lg:pt-40 pb-14 lg:pb-20 border-b border-emerald-100/80">
    <div class="absolute inset-0 text-emerald-900/5 bg-kontur pointer-events-none"></div>
    <div class="absolute right-8 top-12 h-44 w-44 rounded-full bg-amber-200/50 blur-3xl"></div>

    <div data-reveal class="relative max-w-7xl mx-auto px-5 lg:px-10 text-center">
        <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-4">Data Terbuka (Open Data)</p>
        <h1 class="font-display text-slate-800 text-4xl lg:text-5xl font-bold mb-6">Transparansi Publik</h1>
        <p class="text-slate-600 max-w-2xl mx-auto text-sm lg:text-base leading-relaxed">
            Wujud komitmen Pemerintah Desa Pamulihan dalam memberikan keterbukaan informasi anggaran dan data sosial warga.
        </p>
    </div>
</section>

<section class="max-w-6xl mx-auto px-5 lg:px-10 py-16 lg:py-24 min-h-screen space-y-24">
    <div>
        <div data-reveal class="bg-white/85 rounded-[2rem] p-8 md:p-12 text-center shadow-[0_25px_70px_-35px_rgba(15,118,110,0.2)] border border-emerald-100 mb-8 relative overflow-hidden group max-w-4xl mx-auto">
            <div class="absolute inset-0 bg-gradient-to-br from-emerald-50 to-transparent pointer-events-none"></div>

            <p class="text-slate-600 font-semibold tracking-widest uppercase text-xs md:text-sm mb-3">Total Anggaran Pengeluaran (APBDes)</p>
            <h2 class="font-display text-4xl md:text-6xl font-bold text-slate-800 mb-6 group-hover:scale-105 transition-transform duration-500">
                Rp {{ number_format($desa['transparansi']['anggaran_total'], 0, ',', '.') }}
            </h2>

            <div class="inline-flex items-center gap-2 px-5 py-2 bg-emerald-100 text-emerald-800 rounded-full text-xs font-bold uppercase tracking-wider">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Tahun Anggaran Berjalan
            </div>
        </div>

        <div data-reveal class="max-w-4xl mx-auto">
            <h3 class="font-display text-2xl font-bold text-slate-800 mb-6">Rincian Bidang Alokasi</h3>

            <div class="space-y-6">
                @php $total = $desa['transparansi']['anggaran_total']; @endphp
                @foreach($desa['transparansi']['rincian'] as $item)
                    @php $nominal = ($item['persentase'] / 100) * $total; @endphp

                    <div class="bg-white/80 rounded-[1.5rem] p-6 md:p-8 border border-emerald-100 shadow-sm hover:border-emerald-200 transition-all duration-300">
                        <div class="flex flex-col md:flex-row md:items-end justify-between mb-5 gap-3">
                            <div>
                                <h4 class="font-bold text-slate-800 text-lg">{{ $item['nama'] }}</h4>
                                <p class="text-sm text-slate-600 mt-1">Alokasi: <span class="font-bold text-slate-800">{{ $item['persentase'] }}%</span> dari total</p>
                            </div>
                            <div class="text-left md:text-right">
                                <p class="font-display text-xl font-bold text-slate-800">Rp {{ number_format($nominal, 0, ',', '.') }}</p>
                            </div>
                        </div>

                        <div class="w-full bg-slate-100 rounded-full h-3 overflow-hidden">
                            <div class="progress-bar bg-gradient-to-r from-emerald-500 to-emerald-700 h-3 rounded-full relative" style="width: 0%" data-width="{{ $item['persentase'] }}%"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div data-reveal class="bg-white/85 border border-emerald-100 rounded-[2rem] p-6 md:p-10 shadow-[0_22px_60px_-35px_rgba(15,23,42,0.2)] relative overflow-hidden">
        <div class="flex flex-col md:flex-row md:items-start justify-between gap-6 mb-8">
            <div class="flex items-start gap-4">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-800 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v6"></path></svg>
                </div>
                <div>
                    <h3 class="font-display text-2xl font-bold text-slate-800 mb-1">Data Anak Tidak Sekolah</h3>
                    <p class="text-sm text-slate-600">Rekapitulasi pemantauan sosial warga usia sekolah yang putus/tidak sekolah di Desa Pamulihan.</p>
                </div>
            </div>

            <div class="bg-emerald-50 border border-emerald-200 rounded-xl py-3 px-6 flex items-center gap-4 shrink-0">
                <div class="text-emerald-700">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <div>
                    <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500 mb-0.5">Total Keseluruhan</p>
                    <p class="font-display text-2xl font-bold text-slate-800">{{ $totalAnak }} <span class="text-sm font-medium text-slate-600">Anak</span></p>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto pb-4">
            <table class="w-full min-w-[700px] text-left border-collapse">
                <thead>
                    <tr class="border-y border-slate-200 bg-slate-50/80">
                        <th class="py-4 px-4 text-xs font-bold uppercase tracking-widest text-slate-500">No</th>
                        <th class="py-4 px-4 text-xs font-bold uppercase tracking-widest text-slate-500">Wilayah (Dusun)</th>
                        <th class="py-4 px-4 text-xs font-bold uppercase tracking-widest text-slate-500 text-center">Rentang Usia</th>
                        <th class="py-4 px-4 text-xs font-bold uppercase tracking-widest text-slate-500 text-center">Jumlah</th>
                        <th class="py-4 px-4 text-xs font-bold uppercase tracking-widest text-slate-500">Status Penanganan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataAnakTidakSekolah as $index => $row)
                    <tr class="border-b border-slate-200 hover:bg-slate-50/80 transition-colors">
                        <td class="py-5 px-4 text-sm font-semibold text-slate-500">{{ $index + 1 }}</td>
                        <td class="py-5 px-4 text-sm font-bold text-slate-800">{{ $row['dusun'] }}</td>
                        <td class="py-5 px-4 text-sm font-medium text-slate-600 text-center">{{ $row['rentang'] }}</td>
                        <td class="py-5 px-4 text-base font-bold text-slate-800 text-center">{{ $row['jumlah'] }}</td>
                        <td class="py-5 px-4">
                            @if($row['jumlah'] == 0)
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-slate-100 rounded-md text-xs font-medium text-slate-500">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $row['warna_status'] }}"></span> -
                                </span>
                            @else
                                <span class="inline-flex items-center px-3 py-1 bg-amber-100 text-amber-800 rounded-md text-xs font-bold uppercase tracking-wide">
                                    {{ $row['status'] }}
                                </span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6 flex items-center justify-center gap-2 text-xs text-slate-500 bg-slate-50 py-3 rounded-lg">
            <svg class="w-4 h-4 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            Data sosial diperbarui secara berkala oleh Pemerintah Desa bekerja sama dengan kader setempat.
        </div>
    </div>

    <div data-reveal>
        <p class="text-emerald-700 font-semibold text-sm tracking-widest uppercase mb-2">Unduhan Resmi</p>
        <h3 class="font-display text-3xl md:text-4xl font-bold text-slate-800 mb-4">Dokumen Profil &amp; APBDes</h3>
        <p class="text-slate-600 mb-8 max-w-2xl">Dokumen resmi Desa Pamulihan dapat dibaca langsung melalui website atau diunduh dalam format PDF untuk transparansi menyeluruh.</p>

        <a href="{{ $linkPdfDummy }}" target="_blank" class="inline-flex items-center gap-2 bg-emerald-700 hover:bg-emerald-800 text-white font-semibold px-6 py-3 rounded-xl transition-all shadow-lg shadow-emerald-200/80 mb-10">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
            Download PDF
        </a>

        <div class="bg-white border border-emerald-100 rounded-[1.75rem] overflow-hidden shadow-[0_28px_75px_-40px_rgba(15,118,110,0.28)]">
            <div class="bg-slate-50 border-b border-slate-200 px-4 md:px-6 py-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-red-100 text-red-500 rounded-lg flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-800 text-sm">Profil-dan-APBDes-Pamulihan.pdf</h4>
                        <p class="text-xs text-slate-500">Dokumen Resmi Desa • Format PDF</p>
                    </div>
                </div>

                <a href="{{ $linkPdfDummy }}" target="_blank" class="hidden md:flex items-center gap-1.5 text-sm font-semibold text-emerald-700 hover:text-emerald-800 transition-colors">
                    Buka di tab baru
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                </a>
            </div>

            <div class="w-full h-[500px] md:h-[700px] bg-[#323639] relative">
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <p class="text-white/30 text-sm">Memuat dokumen...</p>
                </div>
                <iframe src="{{ $linkPdfDummy }}#toolbar=1&navpanes=0&scrollbar=0" class="w-full h-full relative z-10" frameborder="0"></iframe>
            </div>

            <div class="bg-slate-50 text-center py-3 border-t border-slate-200">
                <p class="text-xs text-slate-500">Jika PDF tidak tampil, silakan <a href="{{ $linkPdfDummy }}" class="text-emerald-700 font-semibold hover:underline">unduh dokumen</a> atau buka di tab baru.</p>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(() => {
            const bars = document.querySelectorAll('.progress-bar');
            bars.forEach(bar => {
                const width = bar.getAttribute('data-width');
                bar.style.width = width;
                bar.style.transition = 'width 1.5s cubic-bezier(0.22, 1, 0.36, 1)';
            });
        }, 150);
    });
</script>

@endsection