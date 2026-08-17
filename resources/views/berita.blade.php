@extends('layouts.app')

@section('content')

{{-- Tambahkan pt-24 lg:pt-28 agar tidak tertutup navbar --}}
<section class="bg-ink relative overflow-hidden pt-24 lg:pt-28 pb-12 lg:pb-16">
    <div class="absolute inset-0 text-paper/5 bg-topo"></div>
    <div data-reveal class="relative max-w-7xl mx-auto px-5 lg:px-10 text-center">
        <p class="text-gold font-mono text-xs tracking-[0.2em] uppercase mb-3">Informasi Terkini</p>
        <h1 class="font-display text-paper text-3xl lg:text-4xl font-semibold">Berita &amp; Galeri Desa</h1>
    </div>
</section>

<section class="max-w-6xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($desa['berita'] as $i => $berita)
            <article data-reveal style="transition-delay: {{ $i * 90 }}ms" class="border border-ink/10 rounded-xl overflow-hidden hover:-translate-y-1 hover:shadow-lg hover:shadow-ink/5 transition-all">
                <div class="h-40 bg-gradient-to-br from-ink to-sawah flex items-center justify-center">
                    <span class="text-paper/40 font-mono text-xs uppercase tracking-widest">Berita</span>
                </div>
                <div class="p-6">
                    <p class="text-xs font-mono text-gold-dark mb-2">{{ $berita['tanggal'] }}</p>
                    <h3 class="font-display text-lg font-semibold text-ink mb-2 leading-snug">{{ $berita['judul'] }}</h3>
                    <p class="text-sm text-inktext/65 leading-relaxed">{{ $berita['ringkasan'] }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>

@endsection