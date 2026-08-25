@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden pt-36 lg:pt-40 pb-14 lg:pb-20 border-b border-ink/10">
    <div class="absolute inset-0 text-ink/5 bg-kontur pointer-events-none"></div>
    <div class="absolute right-10 top-10 h-40 w-40 rounded-full bg-gold/15 blur-3xl"></div>

    <div data-reveal class="relative max-w-7xl mx-auto px-5 lg:px-10 text-center">
        <p class="text-ink font-mono text-[11px] tracking-[0.22em] uppercase mb-4">Dokumentasi</p>
        <h1 class="font-display text-slate-800 text-4xl lg:text-5xl font-bold mb-6">Galeri Desa</h1>
        <p class="text-slate-600 max-w-2xl mx-auto text-sm lg:text-base leading-relaxed">
            Dokumentasi kegiatan warga, pemerintahan, dan potensi Desa {{ $desa['nama_desa'] }} dari waktu ke waktu.
        </p>
    </div>
</section>

<section class="max-w-7xl mx-auto px-5 lg:px-10 py-16 lg:py-24">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($desa['galeri'] as $i => $foto)
            @php
                $gambarUrl = !empty($foto['gambar']) ? asset('images/galeri/' . $foto['gambar']) : '';
                $punyaFoto = $gambarUrl !== '';
            @endphp

            <div data-reveal style="transition-delay: {{ ($i % 4) * 90 }}ms"
                 class="group rounded-2xl overflow-hidden border border-ink/10 bg-white shadow-sm hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                <div class="aspect-[4/3] w-full relative overflow-hidden bg-mist">
                    @if ($punyaFoto)
                        <img src="{{ $gambarUrl }}"
                             alt="{{ $foto['judul'] }}"
                             loading="lazy"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @endif
                    <div class="absolute inset-0 flex-col items-center justify-center text-ink/30 {{ $punyaFoto ? 'hidden' : 'flex' }}">
                        <svg class="w-10 h-10 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M14 8h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span class="text-xs font-medium">Foto menyusul</span>
                    </div>
                </div>
                <div class="p-4">
                    <span class="inline-block text-[10px] font-semibold uppercase tracking-wider text-sawah-dark bg-sawah/10 rounded-full px-2.5 py-1 mb-2">{{ $foto['kategori'] }}</span>
                    <h3 class="font-display font-semibold text-ink text-sm leading-snug">{{ $foto['judul'] }}</h3>
                </div>
            </div>
        @endforeach
    </div>

    <div data-reveal class="mt-10 flex items-start gap-3 rounded-2xl border border-gold/30 bg-gold/10 px-5 py-4 text-sm text-ink max-w-2xl mx-auto">
        <svg class="w-5 h-5 text-gold-dark shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
        <p>Foto dokumentasi asli akan ditambahkan bertahap. Taruh file foto di <code class="font-mono text-xs bg-white/60 px-1.5 py-0.5 rounded">public/images/galeri/</code> dengan nama file sesuai <code class="font-mono text-xs bg-white/60 px-1.5 py-0.5 rounded">config/desa.php</code>.</p>
    </div>
</section>

@endsection
