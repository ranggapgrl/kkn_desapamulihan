@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden pt-36 pb-14 lg:pt-40 lg:pb-20 border-b border-emerald-100/80">
    <div class="absolute inset-0 text-emerald-900/5 bg-kontur pointer-events-none"></div>
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

        @if (!empty($desa['sejarah_milestone']))
            <div class="mt-10 pt-8 border-t border-emerald-100/80">
                <p class="text-xs font-semibold uppercase tracking-[0.16em] text-slate-500 mb-6">Milestone Sejarah</p>
                <ol class="relative border-l-2 border-sawah/25 pl-6 space-y-7">
                    @foreach ($desa['sejarah_milestone'] as $m)
                        <li class="relative">
                            <span class="absolute -left-[1.85rem] top-1 h-3.5 w-3.5 rounded-full bg-gold border-4 border-paper-alt"></span>
                            <p class="font-display font-semibold text-ink text-lg">{{ $m['tahun'] }}</p>
                            <p class="text-slate-600 text-sm leading-relaxed mt-0.5">{{ $m['keterangan'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        @endif
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

{{-- Data Umum & Statistik Demografi — data rujukan paling sering dicari mahasiswa KKN --}}
<section class="max-w-6xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
    <div data-reveal class="text-center mb-12">
        <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-3">Informasi Pokok</p>
        <h2 class="font-display text-2xl lg:text-4xl font-bold text-slate-800">Data Umum Desa</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div data-reveal class="rounded-[1.75rem] border border-emerald-100 bg-white/85 overflow-hidden shadow-sm">
            <p class="px-6 pt-5 pb-3 text-xs font-semibold uppercase tracking-[0.16em] text-slate-500">Identitas Administrasi</p>
            <dl class="divide-y divide-emerald-100/80 text-sm">
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Nama Desa</dt><dd class="font-semibold text-slate-800 text-right">{{ $desa['nama_desa'] }}</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Kecamatan</dt><dd class="font-semibold text-slate-800 text-right">{{ $desa['kecamatan'] }}</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Kabupaten</dt><dd class="font-semibold text-slate-800 text-right">{{ $desa['kabupaten'] }}</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Provinsi</dt><dd class="font-semibold text-slate-800 text-right">{{ $desa['provinsi'] }}</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Kode Desa (PUM)</dt><dd class="font-semibold text-slate-800 text-right">{{ $desa['data_umum']['kode_desa_pum'] }}</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Tahun Pembentukan</dt><dd class="font-semibold text-slate-800 text-right">{{ $desa['data_umum']['tahun_pembentukan'] }}</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Klasifikasi Desa</dt><dd class="font-semibold text-slate-800 text-right">{{ $desa['data_umum']['klasifikasi'] }}</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Kategori Desa</dt><dd class="font-semibold text-slate-800 text-right">{{ $desa['data_umum']['kategori'] }}</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Tipologi Wilayah</dt><dd class="font-semibold text-slate-800 text-right">{{ $desa['data_umum']['tipologi_wilayah'] }}</dd></div>
            </dl>
        </div>

        <div data-reveal style="transition-delay: 100ms" class="rounded-[1.75rem] border border-emerald-100 bg-white/85 overflow-hidden shadow-sm">
            <p class="px-6 pt-5 pb-3 text-xs font-semibold uppercase tracking-[0.16em] text-slate-500">Statistik Demografi</p>
            <dl class="divide-y divide-emerald-100/80 text-sm">
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Luas Wilayah</dt><dd class="font-semibold text-slate-800 text-right">{{ number_format($desa['demografi']['luas_wilayah_ha'], 0, ',', '.') }} Ha</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Jumlah Kepala Keluarga (KK)</dt><dd class="font-semibold text-slate-800 text-right">{{ number_format($desa['demografi']['jumlah_kk'], 0, ',', '.') }} KK</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Jumlah Total Penduduk</dt><dd class="font-semibold text-slate-800 text-right">{{ number_format($desa['demografi']['total_penduduk'], 0, ',', '.') }} Jiwa</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Penduduk Laki-laki</dt><dd class="font-semibold text-slate-800 text-right">{{ number_format($desa['demografi']['penduduk_lk'], 0, ',', '.') }} Jiwa</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Penduduk Perempuan</dt><dd class="font-semibold text-slate-800 text-right">{{ number_format($desa['demografi']['penduduk_pr'], 0, ',', '.') }} Jiwa</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Jumlah Wilayah Dusun</dt><dd class="font-semibold text-slate-800 text-right">{{ $desa['demografi']['jumlah_dusun'] }} Dusun</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Jumlah Rukun Warga (RW)</dt><dd class="font-semibold text-slate-800 text-right">{{ $desa['demografi']['jumlah_rw'] }} RW</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Jumlah Rukun Tetangga (RT)</dt><dd class="font-semibold text-slate-800 text-right">{{ $desa['demografi']['jumlah_rt'] }} RT</dd></div>
                <div class="flex justify-between px-6 py-3"><dt class="text-slate-500">Komoditas Unggulan</dt><dd class="font-semibold text-slate-800 text-right">{{ $desa['demografi']['komoditas_unggulan'] }}</dd></div>
            </dl>
        </div>
    </div>
</section>

{{-- Batas Wilayah --}}
<section class="bg-white/60 border-y border-emerald-100/80">
    <div class="max-w-6xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
        <div data-reveal class="text-center mb-12">
            <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-3">Geografis</p>
            <h2 class="font-display text-2xl lg:text-4xl font-bold text-slate-800">Batas Administratif</h2>
            <p class="text-slate-600 mt-3 max-w-xl mx-auto text-sm lg:text-base">
                Kantor desa berjarak sekitar {{ $desa['geografis']['jarak_ke_kecamatan_km'] }} Km ke kecamatan dan {{ $desa['geografis']['jarak_ke_kabupaten_km'] }} Km ke pusat kabupaten, pada ketinggian ±{{ $desa['geografis']['ketinggian_mdpl'] }} mdpl.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($desa['batas_wilayah'] as $i => $b)
                <div data-reveal style="transition-delay: {{ $i * 80 }}ms" class="rounded-[1.5rem] border border-emerald-100 bg-white p-5 text-center shadow-sm">
                    <p class="text-[11px] font-semibold uppercase tracking-[0.16em] text-gold-dark mb-2">{{ $b['arah'] }}</p>
                    <p class="font-display font-semibold text-slate-800 leading-snug">{{ $b['desa'] }}</p>
                    <p class="text-xs text-slate-500 mt-1.5">{{ $b['batas_alam'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Penggunaan Lahan --}}
<section class="max-w-5xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
    <div data-reveal class="text-center mb-12">
        <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-3">Pemanfaatan Lahan</p>
        <h2 class="font-display text-2xl lg:text-4xl font-bold text-slate-800">Penggunaan Lahan</h2>
    </div>

    @php
        $totalLahan = collect($desa['penggunaan_lahan'])->sum('luas_ha') ?: 1;
    @endphp

    <div data-reveal class="space-y-4">
        @foreach ($desa['penggunaan_lahan'] as $lahan)
            @php $persen = round(($lahan['luas_ha'] / $totalLahan) * 100); @endphp
            <div>
                <div class="flex justify-between text-sm mb-1.5">
                    <span class="font-medium text-slate-700">{{ $lahan['jenis'] }}</span>
                    <span class="font-mono text-slate-500">{{ number_format($lahan['luas_ha'], 2, ',', '.') }} Ha</span>
                </div>
                <div class="h-2.5 rounded-full bg-mist overflow-hidden">
                    <div class="h-full rounded-full bg-sawah" style="width: {{ max($persen, 3) }}%"></div>
                </div>
            </div>
        @endforeach
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

<section class="max-w-6xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
    <div data-reveal class="text-center mb-12">
        <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-3">Fasilitas Desa</p>
        <h2 class="font-display text-2xl lg:text-4xl font-bold text-slate-800">Sarana &amp; Prasarana Desa</h2>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @foreach ($desa['sarana_prasarana'] as $i => $s)
            <div data-reveal style="transition-delay: {{ $i * 60 }}ms" class="rounded-[1.5rem] border border-emerald-100 bg-white/85 p-5 shadow-sm">
                <p class="font-display font-semibold text-slate-800 text-sm leading-snug">{{ $s['nama'] }}</p>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">{{ $s['detail'] }}</p>
            </div>
        @endforeach
    </div>
</section>

<section class="max-w-4xl mx-auto px-5 py-16 lg:py-24">
    <div class="rounded-[2rem] border border-emerald-100 bg-white/80 p-8 lg:p-12 text-center shadow-[0_30px_70px_-38px_rgba(15,118,110,0.28)]">
        <p class="font-mono text-[11px] text-emerald-700 tracking-[0.22em] uppercase mb-3">Kelompok KKN</p>
        <h3 class="font-display text-2xl lg:text-4xl font-bold text-slate-800 mb-4">Ingin Mengenal Tim KKN Kami?</h3>
        <p class="text-slate-600 mb-8 max-w-md mx-auto">Lihat daftar mahasiswa pengabdi dari kelompok Pamulihan 1, 2, dan 3.</p>
        <a href="{{ route('kelompok') }}" class="inline-block bg-emerald-700 hover:bg-emerald-800 text-white font-bold px-8 py-3.5 rounded-full transition-colors shadow-md">
            Lihat Anggota Kelompok
        </a>
    </div>
</section>

@endsection