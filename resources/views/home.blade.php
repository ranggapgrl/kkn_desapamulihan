@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden pt-32 pb-16 lg:pt-40 lg:pb-20 border-b border-slate-200">
    <div class="absolute inset-0 text-sawah/[0.06] bg-kontur pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-5 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-8 items-center">
            <div class="lg:col-span-7" data-reveal style="transition-delay: 80ms">
                <div class="inline-flex items-center gap-2 rounded-md border border-sawah/25 bg-paper-alt px-3 py-1.5 text-[11px] font-semibold uppercase tracking-[0.22em] text-ink elevation-tag">
                    <span class="h-2 w-2 rounded-full bg-gold"></span>
                    {{ $desa['kecamatan'] }}, {{ $desa['kabupaten'] }} &middot; 911 MDPL
                </div>
                <h1 class="mt-6 font-display text-ink text-[2.4rem] sm:text-5xl lg:text-6xl font-bold leading-[1.05] tracking-tight mb-6">
                    Membangun<br>
                    <span class="text-sawah-dark">{{ $desa['nama_desa'] }}</span><br>
                    dari punggung perbukitan.
                </h1>
                <p class="max-w-xl text-base lg:text-lg leading-relaxed text-inktext/75 mb-8">
                    {{ $desa['tagline'] }}
                </p>

                <div class="flex flex-wrap items-center gap-4 mb-8">
                    <a href="{{ route('profil') }}" class="inline-flex items-center bg-ink hover:bg-sawah-dark text-white font-semibold px-6 py-3.5 rounded-md shadow-sm transition-colors duration-200">
                        Jelajahi Profil
                    </a>
                    <a href="{{ route('potensi') }}" class="inline-flex items-center gap-2 rounded-md border border-ink/20 bg-paper-alt px-5 py-3.5 font-semibold text-ink hover:border-gold/60 hover:text-gold-dark transition-colors">
                        Lihat Potensi
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>

                <div class="flex flex-wrap gap-3 text-sm text-inktext/70">
                    <span class="rounded-md border border-ink/10 bg-paper-alt px-3 py-1.5">Desa Tangguh</span>
                    <span class="rounded-md border border-ink/10 bg-paper-alt px-3 py-1.5">Potensi Lokal</span>
                    <span class="rounded-md border border-ink/10 bg-paper-alt px-3 py-1.5">Pelayanan Publik</span>
                </div>
            </div>

            <div class="lg:col-span-5" data-reveal style="transition-delay: 180ms">
                <div class="relative">
                    <div class="relative overflow-hidden rounded-md border border-ink/10 bg-paper-alt p-2 shadow-[0_20px_50px_-24px_rgba(24,45,67,0.35)]">
                        <img src="{{ asset('images/pamulihan-1.jpg') }}" alt="{{ $desa['nama_desa'] }}" class="h-[440px] w-full rounded-sm object-cover">
                    </div>

                    <div class="absolute -bottom-6 left-4 right-4 rounded-md border border-ink/10 bg-paper-alt/95 p-4 shadow-lg backdrop-blur-sm">
                        <div class="flex items-center justify-between gap-4">
                            <div>
                                <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-slate-500">Visi</p>
                                <p class="font-display text-lg font-bold text-ink mt-1">{{ $desa['profil']['visi'] }}</p>
                            </div>
                            <div class="rounded-md bg-sawah/10 p-3 text-sawah-dark shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 12h14M12 5v14"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-reveal style="transition-delay: 260ms" class="mt-16 lg:mt-20 grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($desa['statistik'] as $stat)
                <div class="section-shell rounded-md border border-ink/10 p-5">
                    <p class="font-display font-bold text-3xl lg:text-4xl text-ink counter" data-target="{{ $stat['nilai'] }}">0</p>
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-sawah-dark mt-2">{{ $stat['satuan'] }}</p>
                    <p class="text-sm text-inktext/70 mt-1">{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('partials.divider')

<section class="max-w-7xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div data-reveal class="order-2 lg:order-1">
            <p class="text-sawah font-semibold text-sm tracking-wide uppercase mb-3">Tentang Kami</p>
            <h2 class="font-display text-3xl lg:text-5xl font-semibold text-ink leading-tight mb-5">
                Selayang Pandang {{ $desa['nama_desa'] }}
            </h2>
            <div class="text-inktext/75 leading-relaxed space-y-4">
                @foreach (explode("\n\n", $desa['profil']['sejarah']) as $paragraf)
                    <p>{{ $paragraf }}</p>
                @endforeach
            </div>
            <a href="{{ route('profil') }}" class="inline-flex items-center gap-2 mt-6 text-gold-dark font-semibold hover:gap-3 transition-all">
                Baca Selengkapnya
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        <div data-reveal style="transition-delay: 120ms" class="order-1 lg:order-2">
            <div class="section-shell rounded-[2rem] border border-ink/10 p-6 lg:p-8 shadow-[0_20px_80px_-35px_rgba(26,34,44,0.35)]">
                <div class="grid grid-cols-2 gap-5">
                    <div class="rounded-2xl bg-sawah/10 p-5">
                        <p class="text-[11px] uppercase tracking-[0.2em] text-sawah-dark">Berdiri</p>
                        <p class="font-display text-3xl font-bold text-ink mt-3">{{ $desa['profil']['tahun_berdiri'] }}</p>
                    </div>
                    <div class="rounded-2xl bg-gold/10 p-5">
                        <p class="text-[11px] uppercase tracking-[0.2em] text-gold-dark">Kepala Desa</p>
                        <p class="font-display text-2xl font-bold text-ink mt-3">{{ $desa['profil']['kepala_desa'] }}</p>
                    </div>
                    <div class="col-span-2 rounded-2xl bg-ink/5 p-5">
                        <p class="text-[11px] uppercase tracking-[0.2em] text-inktext/55">Klasifikasi Desa</p>
                        <p class="font-display text-2xl font-bold text-ink mt-3">{{ $desa['profil']['klasifikasi'] }}</p>
                    </div>
                    <div class="col-span-2 rounded-2xl border border-ink/10 bg-white p-5">
                        <p class="text-[11px] uppercase tracking-[0.2em] text-inktext/55">Visi</p>
                        <p class="text-inktext/75 leading-relaxed mt-3">{{ $desa['profil']['visi'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-ink relative overflow-hidden">
    <div class="absolute inset-0 text-gold/5 bg-kontur"></div>
    <div data-reveal class="relative max-w-3xl mx-auto px-5 lg:px-10 py-16 lg:py-20 text-center">
        <svg class="w-9 h-9 text-gold/60 mx-auto mb-5" fill="currentColor" viewBox="0 0 24 24"><path d="M7.17 6C4.86 6 3 7.86 3 10.17c0 2.06 1.6 3.75 3.62 3.93-.36 1.6-1.5 2.9-3.12 3.55l.94 1.35c2.7-1.05 4.56-3.6 4.56-6.83V6H7.17zm10 0c-2.31 0-4.17 1.86-4.17 4.17 0 2.06 1.6 3.75 3.62 3.93-.36 1.6-1.5 2.9-3.12 3.55l.94 1.35c2.7-1.05 4.56-3.6 4.56-6.83V6h-1.83z"/></svg>
        <p class="font-display text-paper text-xl lg:text-2xl leading-relaxed">
            Kami ucapkan selamat datang bagi siapapun yang ingin bersinergi memajukan desa. Harapan kami, potensi pertanian dan peternakan warga terus meningkat mutu dan produksinya, berkelanjutan untuk generasi berikutnya.
        </p>
        <p class="text-gold font-semibold mt-6">{{ $desa['profil']['kepala_desa'] }}</p>
        <p class="text-paper/55 text-sm">Kepala Desa {{ $desa['nama_desa'] }}</p>
    </div>
</section>

<section class="bg-paper-alt border-y border-ink/10">
    <div class="max-w-7xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-6" data-reveal>
            <div>
                <p class="text-sawah-dark font-semibold text-sm tracking-widest uppercase mb-3">Sektor Ekonomi & Alam</p>
                <h2 class="font-display text-4xl lg:text-5xl font-bold text-ink">Potensi Unggulan Desa</h2>
            </div>

            <a href="{{ url('/potensi') }}" class="inline-flex items-center gap-2 text-ink hover:text-gold-dark font-semibold transition-colors group pb-2 md:pb-3 border-b-2 border-transparent hover:border-gold/50">
                Lihat Semua Potensi
                <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @php
                $previewPotensi = array_slice($desa['potensi'], 0, 3);
            @endphp

            @foreach($previewPotensi as $index => $item)
                <a href="{{ url('/potensi') }}" data-reveal style="transition-delay: {{ $index * 90 }}ms"
                   class="group block rounded-[1.75rem] border border-ink/10 bg-white p-7 shadow-[0_18px_50px_-30px_rgba(32,39,48,0.4)] transition-all hover:-translate-y-1 hover:shadow-[0_24px_60px_-28px_rgba(32,39,48,0.55)]">
                    <p class="font-mono text-xs text-gold-dark mb-5">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }} / {{ str_pad(count($desa['potensi']), 2, '0', STR_PAD_LEFT) }}</p>
                    <span class="inline-block px-3 py-1.5 rounded-full border border-ink/10 bg-ink/[0.03] text-[10px] font-semibold uppercase tracking-[0.15em] text-inktext/65">
                        {{ $item['kategori'] }}
                    </span>
                    <h3 class="font-display text-2xl font-bold text-ink mt-5 group-hover:text-gold-dark transition-colors">{{ $item['nama'] }}</h3>
                    <p class="text-sm text-inktext/70 leading-relaxed mt-3 mb-5">{{ $item['deskripsi'] }}</p>
                    <div class="inline-flex items-center font-semibold text-ink">
                        Pelajari Selengkapnya
                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
    <div data-reveal class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
        <div>
            <p class="text-sawah font-semibold text-sm tracking-wide uppercase mb-3">Informasi Terkini</p>
            <h2 class="font-display text-3xl lg:text-4xl font-semibold text-ink">Berita Desa Terbaru</h2>
        </div>
        <a href="{{ route('berita') }}" class="text-gold-dark font-semibold hover:underline">Lihat Semua Berita &rarr;</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
        @foreach ($desa['berita'] as $i => $berita)
            <article data-reveal style="transition-delay: {{ $i * 90 }}ms" class="group rounded-[1.5rem] border border-ink/10 bg-white p-7 shadow-[0_18px_50px_-34px_rgba(32,39,48,0.5)] transition-all hover:-translate-y-1 hover:shadow-[0_24px_60px_-28px_rgba(32,39,48,0.55)]">
                <p class="font-mono text-xs text-gold-dark mb-4 pb-4 border-b border-ink/10">{{ $berita['tanggal'] }}</p>
                <h3 class="font-display text-xl font-bold text-ink mb-3 leading-snug group-hover:text-gold-dark transition-colors">{{ $berita['judul'] }}</h3>
                <p class="text-sm text-inktext/70 leading-relaxed">{{ $berita['ringkasan'] }}</p>
            </article>
        @endforeach
    </div>
</section>

@include('partials.divider')

<section class="max-w-7xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
        <div data-reveal>
            <p class="text-sawah font-semibold text-sm tracking-wide uppercase mb-3">Geografis</p>
            <h2 class="font-display text-3xl lg:text-4xl font-semibold text-ink leading-tight mb-5">
                Lokasi Kantor {{ $desa['nama_desa'] }}
            </h2>
            <p class="text-inktext/75 leading-relaxed mb-5">
                Kantor desa berada di kawasan perbukitan pada koordinat perkiraan <span class="font-mono text-ink">{{ $desa['kontak']['koordinat']['lat'] }}, {{ $desa['kontak']['koordinat']['lng'] }}</span>.
            </p>
            <p class="text-inktext/70 leading-relaxed">{{ $desa['kontak']['alamat'] }}</p>
        </div>

        <div data-reveal style="transition-delay: 120ms" class="overflow-hidden rounded-[2rem] border border-ink/10 h-72 lg:h-80 shadow-[0_24px_70px_-40px_rgba(32,39,48,0.5)]">
            <iframe
                class="w-full h-full"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                src="https://maps.google.com/maps?q={{ $desa['kontak']['koordinat']['lat'] }},{{ $desa['kontak']['koordinat']['lng'] }}&z=13&output=embed">
            </iframe>
        </div>
    </div>
</section>

@endsection