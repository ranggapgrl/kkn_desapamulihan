@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden pt-32 lg:pt-36 pb-12 lg:pb-16 border-b border-emerald-100/80">
    <div class="absolute inset-0 text-emerald-900/5 bg-kontur pointer-events-none"></div>
    <div class="absolute right-10 top-10 h-40 w-40 rounded-full bg-amber-200/50 blur-3xl"></div>
    <div data-reveal class="relative max-w-3xl mx-auto px-5 lg:px-10">
        <a href="{{ route('berita') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-sawah-dark hover:gap-2.5 transition-all mb-5">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
            Kembali ke Berita &amp; Galeri
        </a>
        <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-3">{{ $berita['tanggal'] }}</p>
        <h1 class="font-display text-slate-800 text-2xl lg:text-4xl font-bold leading-snug">{{ $berita['judul'] }}</h1>
    </div>
</section>

@php
    $gambarUrl = !empty($berita['gambar']) ? asset('images/berita/' . $berita['gambar']) : '';
@endphp

@if ($gambarUrl)
    <section class="max-w-3xl mx-auto px-5 lg:px-10 -mt-4 lg:-mt-6" data-reveal>
        <div class="rounded-2xl overflow-hidden border border-ink/10 shadow-lg shadow-ink/5">
            <img src="{{ $gambarUrl }}"
                 alt="{{ $berita['judul'] }}"
                 loading="lazy"
                 onerror="this.closest('section').style.display='none'"
                 class="w-full h-56 sm:h-72 lg:h-96 object-cover">
        </div>
        @if (!empty($berita['keterangan_foto']))
            <p class="text-xs text-inktext/50 italic mt-2.5 px-1">{{ $berita['keterangan_foto'] }}</p>
        @endif
    </section>
@endif

<section class="max-w-3xl mx-auto px-5 lg:px-10 py-16 lg:py-20" data-reveal>

    <div class="bg-paper-alt border border-ink/10 rounded-2xl p-5 mb-10 flex items-start gap-3">
        <div class="w-8 h-8 rounded-full bg-[#25D366]/15 flex items-center justify-center text-[#25D366] shrink-0 mt-0.5">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
        </div>
        <div>
            <p class="text-xs font-bold text-ink uppercase tracking-wider mb-1">Informasi Terverifikasi</p>
            <p class="text-sm text-inktext/75 leading-relaxed">{{ $berita['sumber'] ?? 'Dipublikasikan resmi oleh Pemerintah Desa Pamulihan berdasarkan data dan kejadian faktual di lapangan.' }}</p>
        </div>
    </div>

    <div class="prose prose-slate max-w-none">
        @php
            $isiArtikel = !empty($berita['isi']) ? $berita['isi'] : ($berita['ringkasan'] ?? '');
        @endphp
        @foreach (explode("\n\n", $isiArtikel) as $paragraf)
            <p class="text-base leading-relaxed text-slate-700 mb-5">{{ $paragraf }}</p>
        @endforeach
    </div>

    <div class="mt-12 pt-8 border-t border-emerald-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <p class="text-sm text-slate-500">Dipublikasikan oleh Pemerintah Desa Pamulihan.</p>
        <a href="{{ route('berita') }}" class="inline-flex items-center gap-2 rounded-xl border border-ink/15 bg-paper-alt/80 px-5 py-3 font-semibold text-ink hover:border-gold/50 hover:text-gold-dark transition-colors">
            Lihat Berita Lainnya
        </a>
    </div>
</section>

@endsection