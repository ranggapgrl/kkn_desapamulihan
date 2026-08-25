@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden pt-36 lg:pt-40 pb-14 lg:pb-20 border-b border-ink/10">
    <div class="absolute inset-0 text-ink/5 bg-kontur pointer-events-none"></div>
    <div class="absolute right-10 top-10 h-40 w-40 rounded-full bg-gold/15 blur-3xl"></div>

    <div data-reveal class="relative max-w-7xl mx-auto px-5 lg:px-10 text-center">
        <p class="text-ink font-mono text-[11px] tracking-[0.22em] uppercase mb-4">Administrasi Kependudukan</p>
        <h1 class="font-display text-slate-800 text-4xl lg:text-5xl font-bold mb-6">Layanan Publik</h1>
        <p class="text-slate-600 max-w-2xl mx-auto text-sm lg:text-base leading-relaxed">
            Informasi jadwal pelayanan dan syarat pengurusan surat-menyurat di Kantor Desa {{ $desa['nama_desa'] }}.
        </p>
    </div>
</section>

<section class="max-w-6xl mx-auto px-5 lg:px-10 py-16 lg:py-24 space-y-16">

    {{-- Jadwal Pelayanan --}}
    <div data-reveal>
        <p class="text-ink font-semibold text-sm tracking-widest uppercase mb-3">Jadwal Pelayanan</p>
        <h2 class="font-display text-2xl lg:text-3xl font-bold text-slate-800 mb-8">Jam Buka Kantor Desa</h2>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
            @foreach ($desa['layanan']['jam_pelayanan'] as $jadwal)
                <div class="rounded-2xl border border-ink/10 bg-white p-6 shadow-sm">
                    <div class="w-11 h-11 rounded-xl bg-mist text-ink flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <p class="font-bold text-slate-800">{{ $jadwal['hari'] }}</p>
                    <p class="text-sm text-slate-500 mt-1">{{ $jadwal['jam'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Syarat Surat --}}
    <div data-reveal>
        <p class="text-ink font-semibold text-sm tracking-widest uppercase mb-3">Syarat & Prosedur</p>
        <h2 class="font-display text-2xl lg:text-3xl font-bold text-slate-800 mb-8">Jenis Surat yang Bisa Diurus</h2>

        <div class="space-y-5">
            @foreach ($desa['layanan']['jenis_surat'] as $i => $surat)
                <div data-reveal style="transition-delay: {{ $i * 60 }}ms" class="rounded-2xl border border-ink/10 bg-white p-6 md:p-7 shadow-sm">
                    <div class="flex flex-col md:flex-row md:items-start justify-between gap-4 mb-4">
                        <h3 class="font-display font-bold text-slate-800 text-lg">{{ $surat['nama'] }}</h3>
                        <span class="inline-flex items-center gap-1.5 self-start rounded-full bg-sawah/10 text-sawah-dark text-xs font-semibold px-3 py-1.5 shrink-0">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            Estimasi {{ $surat['estimasi'] }}
                        </span>
                    </div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-2">Berkas yang dibawa:</p>
                    <ul class="grid sm:grid-cols-2 gap-x-6 gap-y-1.5">
                        @foreach ($surat['syarat'] as $item)
                            <li class="flex items-start gap-2 text-sm text-slate-600">
                                <svg class="w-4 h-4 text-ink mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Catatan --}}
    <div data-reveal class="rounded-2xl border border-gold/30 bg-gold/10 px-6 py-5 flex items-start gap-3">
        <svg class="w-5 h-5 text-gold-dark shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
        <p class="text-sm text-ink leading-relaxed">{{ $desa['layanan']['catatan'] }}</p>
    </div>

    <div data-reveal class="text-center">
        <p class="text-sm text-slate-500 mb-4">Ada pertanyaan soal berkas atau prosedur surat tertentu?</p>
        <a href="{{ route('kontak') }}" class="inline-flex items-center bg-ink hover:bg-ink-dark text-white font-semibold px-6 py-3 rounded-full shadow-sm transition-colors">
            Hubungi Kantor Desa
        </a>
    </div>
</section>

@endsection
