@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden pt-36 lg:pt-40 pb-14 lg:pb-20 border-b border-emerald-100/80">
    <div class="absolute inset-0 text-emerald-900/5 bg-kontur pointer-events-none"></div>
    <div class="absolute right-10 top-10 h-40 w-40 rounded-full bg-amber-200/50 blur-3xl"></div>

    <div data-reveal class="relative max-w-7xl mx-auto px-5 lg:px-10 text-center">
        <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-4">Dasar Hukum &amp; Kebijakan Desa</p>
        <h1 class="font-display text-slate-800 text-4xl lg:text-5xl font-bold mb-6">Produk Hukum Desa</h1>
        <p class="text-slate-600 max-w-2xl mx-auto text-sm lg:text-base leading-relaxed">
            Kumpulan Peraturan Desa (Perdes) dan Keputusan Kepala Desa yang menjadi landasan hukum penyelenggaraan pemerintahan di {{ $desa['nama_desa'] }}.
        </p>
    </div>
</section>

<section class="max-w-5xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
    <div data-reveal class="mb-8 flex items-start gap-3 rounded-2xl border border-gold/30 bg-gold/10 px-5 py-4 text-sm text-ink">
        <svg class="w-5 h-5 text-gold-dark shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
        <p>Nomor dan tautan dokumen di bawah ini masih menunggu konfirmasi resmi dari Balai Desa. Tombol unduh akan aktif setelah tautan dokumen diperbarui.</p>
    </div>

    <div class="space-y-4">
        @foreach ($desa['produk_hukum'] as $i => $dok)
            <div data-reveal style="transition-delay: {{ $i * 60 }}ms" class="rounded-2xl border border-emerald-100 bg-white/85 p-6 shadow-sm flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
                <div class="w-12 h-12 rounded-xl bg-sawah/10 text-sawah-dark flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>

                <div class="flex-1">
                    <span class="inline-block text-[11px] font-semibold uppercase tracking-[0.14em] text-gold-dark bg-gold/10 rounded-full px-2.5 py-1 mb-2">
                        {{ $dok['jenis'] }}
                    </span>
                    <h3 class="font-display font-semibold text-ink text-lg leading-snug">{{ $dok['judul'] }}</h3>
                    <p class="text-sm text-slate-500 mt-1">{{ $dok['nomor'] }} &middot; Tahun {{ $dok['tahun'] }}</p>
                </div>

                @if ($dok['link'] && $dok['link'] !== '#')
                    <a href="{{ $dok['link'] }}" target="_blank" class="inline-flex items-center gap-2 rounded-full bg-sawah text-white text-sm font-semibold px-5 py-2.5 shrink-0 hover:bg-sawah-dark transition-colors">
                        Lihat Dokumen
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </a>
                @else
                    <span class="inline-flex items-center gap-2 rounded-full bg-slate-100 text-slate-400 text-sm font-semibold px-5 py-2.5 shrink-0 cursor-not-allowed" title="Dokumen belum tersedia">
                        Segera Tersedia
                    </span>
                @endif
            </div>
        @endforeach
    </div>

    <div data-reveal class="mt-12 text-center">
        <p class="text-sm text-slate-500 mb-4">Butuh dokumen atau produk hukum yang belum tercantum di sini?</p>
        <a href="{{ route('kontak') }}" class="inline-flex items-center bg-ink hover:bg-sawah-dark text-white font-semibold px-6 py-3 rounded-full shadow-sm transition-colors">
            Hubungi Kantor Desa
        </a>
    </div>
</section>

@endsection
