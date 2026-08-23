@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden pt-36 lg:pt-40 pb-14 lg:pb-20 border-b border-emerald-100/80">
    <div class="absolute inset-0 text-emerald-900/5 bg-kontur pointer-events-none"></div>
    <div class="absolute left-8 top-12 h-44 w-44 rounded-full bg-emerald-200/40 blur-3xl"></div>

    <div data-reveal class="relative max-w-7xl mx-auto px-5 lg:px-10 text-center">
        <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-4">Struktur Organisasi</p>
        <h1 class="font-display text-slate-800 text-4xl lg:text-5xl font-bold mb-6">Pemerintahan Desa Pamulihan</h1>
        <p class="text-slate-600 max-w-2xl mx-auto text-sm lg:text-base leading-relaxed">
            Mengenal lebih dekat jajaran aparatur pemerintah desa yang berdedikasi melayani masyarakat dan memajukan Desa Pamulihan.
        </p>
    </div>
</section>

<section class="max-w-7xl mx-auto px-5 lg:px-10 py-16 lg:py-24 min-h-screen">
    <div class="flex justify-center mb-12 lg:mb-16">
        @php
            $kades = $desa['pemerintahan'][0];
            $namaKadesBersih = str_replace(['[', ']'], '', $kades['nama']);
        @endphp

        <div data-reveal class="group relative bg-white/85 rounded-[2.5rem] p-8 md:p-12 border border-emerald-100 shadow-[0_28px_70px_-38px_rgba(15,118,110,0.35)] transition-all duration-500 hover:-translate-y-2 flex flex-col items-center text-center w-full max-w-md overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-emerald-50 to-transparent opacity-80"></div>

            <div class="w-36 h-36 relative overflow-hidden rounded-full ring-4 ring-white shadow-xl mb-6 bg-slate-100 flex items-center justify-center z-10">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($namaKadesBersih) }}&background=0f766e&color=F8FAFC&size=256&font-family=Poppins"
                     alt="{{ $kades['nama'] }}"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            </div>

            <span class="inline-block px-5 py-2 bg-emerald-100 text-emerald-800 text-xs md:text-sm font-bold uppercase tracking-widest rounded-full mb-4 relative z-10">
                {{ $kades['jabatan'] }}
            </span>
            <h3 class="font-display text-2xl md:text-3xl font-bold text-slate-800 mb-1 relative z-10">
                {{ $kades['nama'] }}
            </h3>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 lg:gap-8">
        @foreach($desa['pemerintahan'] as $index => $pejabat)
            @if($index > 0)
                @php
                    $namaPejabatBersih = str_replace(['[', ']'], '', $pejabat['nama']);
                @endphp

                <div data-reveal style="transition-delay: {{ ($index % 4) * 100 }}ms"
                     class="group relative bg-white/85 rounded-[1.8rem] p-6 md:p-8 border border-emerald-100 shadow-[0_18px_50px_-35px_rgba(15,23,42,0.22)] transition-all duration-500 hover:-translate-y-2 flex flex-col items-center text-center overflow-hidden">
                    <div class="w-24 h-24 relative overflow-hidden rounded-full ring-4 ring-white shadow-md mb-5 bg-slate-100 flex items-center justify-center">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($namaPejabatBersih) }}&background=E2E8F0&color=0F172A&size=256&font-family=Poppins"
                             alt="{{ $pejabat['nama'] }}"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>

                    <span class="inline-block px-4 py-1.5 bg-slate-100 text-slate-600 text-[10px] md:text-xs font-bold uppercase tracking-wider rounded-full mb-3">
                        {{ $pejabat['jabatan'] }}
                    </span>
                    <h4 class="font-display text-lg font-bold text-slate-800 leading-snug">
                        {{ $pejabat['nama'] }}
                    </h4>
                </div>
            @endif
        @endforeach
    </div>
</section>

@endsection