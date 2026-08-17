@php
    $iconPaths = [
        'Pertanian'      => 'M12 3v18M12 3c-3 2-5 5-5 9s2 7 5 9M12 3c3 2 5 5 5 9s-2 7-5 9M5 12h14',
        'Peternakan'     => 'M12 21c-4 0-7-2.5-7-6 0-2 1-3.5 2-5-1-1-2-2.5-2-4a3 3 0 016 0c1-1 2-1 3-1s2 0 3 1a3 3 0 016 0c0 1.5-1 3-2 4 1 1.5 2 3 2 5 0 3.5-3 6-7 6z',
        'Seni & Budaya'  => 'M9 18V5l12-2v13M9 18a3 3 0 11-6 0 3 3 0 016 0zm12-2a3 3 0 11-6 0 3 3 0 016 0z',
        'UMKM'           => 'M3 9l1-5h16l1 5M3 9v10a1 1 0 001 1h16a1 1 0 001-1V9M3 9h18M9 13h6',
        'Infrastruktur'  => 'M4 21V9l8-6 8 6v12M9 21v-6h6v6M4 9h16',
    ];
    $icon = $iconPaths[$item['kategori']] ?? 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z';

    $gambarUrl = !empty($item['gambar']) ? asset('images/potensi/' . $item['gambar']) : '';
    $punyaFoto = $gambarUrl !== '';
@endphp

<div data-reveal style="transition-delay: {{ ($delay ?? 0) * 90 }}ms"
     role="button"
     tabindex="0"
     aria-label="Lihat detail verifikasi {{ $item['nama'] }}"
     onclick="openPotensiModal('{{ addslashes($item['nama']) }}', '{{ addslashes($item['kategori']) }}', '{{ addslashes($item['deskripsi']) }}', '{{ addslashes($gambarUrl) }}')"
     onkeydown="if(event.key==='Enter'||event.key===' '){event.preventDefault();openPotensiModal('{{ addslashes($item['nama']) }}', '{{ addslashes($item['kategori']) }}', '{{ addslashes($item['deskripsi']) }}', '{{ addslashes($gambarUrl) }}')}"
     class="group bg-paper border border-ink/10 rounded-2xl overflow-hidden hover:-translate-y-1 hover:border-gold/50 hover:shadow-lg hover:shadow-ink/5 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-gold/60 cursor-pointer flex flex-col h-full">

    {{-- Foto (jika ada). Jika belum ada foto, tidak render apa-apa di sini — ikon kategori di bawah tetap jadi identitas visual kartu. --}}
    @if ($punyaFoto)
        <div class="h-40 w-full overflow-hidden relative">
            <img src="{{ $gambarUrl }}"
                 alt="{{ $item['nama'] }}"
                 loading="lazy"
                 onerror="this.closest('div').style.display='none'"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <span class="absolute top-3 right-3 inline-flex items-center gap-1 bg-white/90 backdrop-blur-sm text-[11px] font-semibold text-ink px-2.5 py-1 rounded-full shadow-sm">
                <svg class="w-3 h-3 text-[#25D366]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                Terverifikasi
            </span>
        </div>
    @endif

    <div class="p-6 flex flex-col flex-grow">
        <div class="flex items-start justify-between mb-5">
            <div class="w-11 h-11 rounded-lg bg-sawah/10 text-sawah flex items-center justify-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $icon }}"/></svg>
            </div>
            <span class="inline-block text-xs font-semibold text-sawah bg-sawah/10 rounded-full px-3 py-1">{{ $item['kategori'] }}</span>
        </div>

        <h3 class="font-display text-xl font-semibold text-ink mb-2 group-hover:text-gold-dark transition-colors duration-300">{{ $item['nama'] }}</h3>
        <p class="text-sm text-inktext/70 leading-relaxed flex-grow">{{ $item['deskripsi'] }}</p>

        <div class="mt-5 pt-4 border-t border-ink/10 flex items-center justify-between text-sm font-semibold text-ink group-hover:text-gold-dark transition-colors duration-300">
            @unless ($punyaFoto)
                <span class="inline-flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-[#25D366]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    Lihat Detail Verifikasi
                </span>
            @else
                <span>Lihat Detail Verifikasi</span>
            @endunless
            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </div>
    </div>
</div>