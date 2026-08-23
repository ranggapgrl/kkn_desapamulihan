@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden pt-32 lg:pt-36 pb-12 lg:pb-16 border-b border-emerald-100/80">
    <div class="absolute inset-0 text-emerald-900/5 bg-topo pointer-events-none"></div>
    <div class="absolute left-10 top-10 h-40 w-40 rounded-full bg-emerald-200/40 blur-3xl"></div>
    <div data-reveal class="relative max-w-7xl mx-auto px-5 lg:px-10 text-center">
        <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-3">Informasi Terkini</p>
        <h1 class="font-display text-slate-800 text-3xl lg:text-5xl font-bold">Berita &amp; Galeri Desa</h1>
    </div>
</section>

<section class="max-w-6xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($desa['berita'] as $i => $berita)
            <article data-reveal style="transition-delay: {{ $i * 90 }}ms" class="group rounded-[1.75rem] overflow-hidden border border-emerald-100 bg-white/85 shadow-[0_25px_50px_-35px_rgba(15,118,110,0.3)] hover:-translate-y-1 transition-all duration-300">
                <div class="h-40 bg-gradient-to-br from-emerald-800 via-emerald-700 to-emerald-500 flex items-center justify-center">
                    <span class="text-white/40 font-mono text-[10px] uppercase tracking-[0.22em]">Berita</span>
                </div>
                <div class="p-6">
                    <p class="text-[11px] font-mono text-emerald-700 mb-2">{{ $berita['tanggal'] }}</p>
                    <h3 class="font-display text-xl font-semibold text-slate-800 mb-3 leading-snug group-hover:text-emerald-700 transition-colors">{{ $berita['judul'] }}</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">{{ $berita['ringkasan'] }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>

@endsection