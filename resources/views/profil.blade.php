@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden pt-36 pb-14 lg:pt-40 lg:pb-20 border-b border-emerald-100/80">
    <div class="absolute inset-0 text-emerald-900/5 bg-topo pointer-events-none"></div>
    <div class="absolute right-10 top-10 h-40 w-40 rounded-full bg-amber-200/50 blur-3xl"></div>
    <div data-reveal class="relative max-w-7xl mx-auto px-5 lg:px-10 text-center">
        <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-4">Profil Desa</p>
        <h1 class="font-display text-slate-800 text-3xl lg:text-5xl font-bold leading-tight">Mengenal {{ $desa['nama_desa'] }}</h1>
    </div>
</section>

<section class="max-w-6xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
    <div data-reveal class="rounded-[2rem] border border-emerald-100 bg-white/80 p-7 lg:p-10 shadow-[0_20px_60px_-35px_rgba(15,118,110,0.25)]">
        <p class="font-mono text-[11px] text-emerald-700 tracking-[0.22em] uppercase mb-4">Sejarah</p>
        <h2 class="font-display text-2xl lg:text-4xl font-bold text-slate-800 mb-6">Sejarah Singkat</h2>
        <div class="text-slate-600 leading-relaxed space-y-4 text-base lg:text-lg">
            @foreach (explode("\n\n", $desa['profil']['sejarah']) as $paragraf)
                <p>{{ $paragraf }}</p>
            @endforeach
        </div>
    </div>

    <div data-reveal style="transition-delay: 120ms" class="mt-14 grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="rounded-[1.75rem] border border-emerald-100 bg-white/80 p-6 text-center shadow-sm">
            <p class="text-[11px] uppercase tracking-[0.18em] text-slate-500 mb-2">Tahun Berdiri</p>
            <p class="font-display text-2xl font-bold text-slate-800">{{ $desa['profil']['tahun_berdiri'] }}</p>
        </div>
        <div class="rounded-[1.75rem] border border-emerald-100 bg-white/80 p-6 text-center shadow-sm">
            <p class="text-[11px] uppercase tracking-[0.18em] text-slate-500 mb-2">Kepala Desa</p>
            <p class="font-display text-2xl font-bold text-slate-800">{{ $desa['profil']['kepala_desa'] }}</p>
        </div>
        <div class="rounded-[1.75rem] border border-emerald-100 bg-white/80 p-6 text-center shadow-sm">
            <p class="text-[11px] uppercase tracking-[0.18em] text-slate-500 mb-2">Klasifikasi</p>
            <p class="font-display text-lg font-bold text-slate-800">{{ $desa['profil']['klasifikasi'] }}</p>
        </div>
    </div>
</section>

@include('partials.divider')

<section class="bg-white/60 border-y border-emerald-100/80">
    <div class="max-w-6xl mx-auto px-5 lg:px-10 py-16 lg:py-24 grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16">
        <div data-reveal class="rounded-[2rem] border border-emerald-100 bg-white p-7 lg:p-10 shadow-[0_22px_45px_-35px_rgba(15,23,42,0.28)]">
            <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-3">Arah Pembangunan</p>
            <h2 class="font-display text-2xl lg:text-4xl font-bold text-slate-800 mb-4">Visi</h2>
            <p class="text-slate-600 leading-relaxed text-base lg:text-lg">{{ $desa['profil']['visi'] }}</p>
        </div>
        <div data-reveal style="transition-delay: 120ms" class="rounded-[2rem] border border-emerald-100 bg-white p-7 lg:p-10 shadow-[0_22px_45px_-35px_rgba(15,23,42,0.28)]">
            <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-3">Langkah Nyata</p>
            <h2 class="font-display text-2xl lg:text-4xl font-bold text-slate-800 mb-4">Misi</h2>
            <ol class="space-y-4">
                @foreach ($desa['profil']['misi'] as $i => $misi)
                    <li class="flex gap-3">
                        <span class="font-mono text-emerald-700 shrink-0">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="text-slate-600 leading-relaxed">{{ $misi }}</span>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>

<section class="max-w-4xl mx-auto px-5 py-16 lg:py-24">
    <div class="rounded-[2rem] border border-emerald-100 bg-white/80 p-8 lg:p-12 text-center shadow-[0_30px_70px_-38px_rgba(15,118,110,0.28)]">
        <p class="font-mono text-[11px] text-emerald-700 tracking-[0.22em] uppercase mb-3">Kelompok KKN</p>
        <h3 class="font-display text-2xl lg:text-4xl font-bold text-slate-800 mb-4">Ingin Mengenal Tim KKN Kami?</h3>
        <p class="text-slate-600 mb-8 max-w-md mx-auto">Lihat daftar mahasiswa pengabdi dari kelompok Pamulihan 1, 2, dan 3.</p>
        <a href="{{ route('kelompok') }}" class="inline-block bg-emerald-700 hover:bg-emerald-800 text-white font-bold px-8 py-3.5 rounded-full transition-colors shadow-lg shadow-emerald-200/60">
            Lihat Anggota Kelompok
        </a>
    </div>
</section>

@endsection