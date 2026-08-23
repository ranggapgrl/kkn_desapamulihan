@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden pt-32 lg:pt-36 pb-12 lg:pb-16 border-b border-emerald-100/80">
    <div class="absolute inset-0 text-emerald-900/5 bg-kontur pointer-events-none"></div>
    <div data-reveal class="relative max-w-3xl mx-auto px-5 lg:px-10">
        <a href="{{ route('berita') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-sawah-dark hover:gap-2.5 transition-all mb-5">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
            Kembali ke Berita &amp; Galeri
        </a>
        <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-3">{{ $berita['tanggal'] }}</p>
        <h1 class="font-display text-slate-800 text-2xl lg:text-4xl font-bold leading-snug">{{ $berita['judul'] }}</h1>
    </div>
</section>

<section class="max-w-3xl mx-auto px-5 lg:px-10 py-16 lg:py-20" data-reveal>
    <div class="prose prose-slate max-w-none">
        @foreach (explode("\n\n", $berita['isi']) as $paragraf)
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
