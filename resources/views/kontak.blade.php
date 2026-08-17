@extends('layouts.app')

@section('content')

{{-- Tambahkan pt-24 lg:pt-28 agar tidak tertutup navbar --}}
<section class="bg-ink relative overflow-hidden pt-24 lg:pt-28 pb-12 lg:pb-16">
    <div class="absolute inset-0 text-paper/5 bg-topo"></div>
    <div data-reveal class="relative max-w-7xl mx-auto px-5 lg:px-10 text-center">
        <p class="text-gold font-mono text-xs tracking-[0.2em] uppercase mb-3">Kami Siap Membantu</p>
        <h1 class="font-display text-paper text-3xl lg:text-4xl font-semibold">Kontak Kami</h1>
    </div>
</section>

<section class="max-w-6xl mx-auto px-5 lg:px-10 py-16 lg:py-24 grid grid-cols-1 lg:grid-cols-5 gap-12">

    <div class="lg:col-span-2 space-y-6" data-reveal>
        <div class="flex gap-4">
            <div class="w-11 h-11 rounded-full bg-gold/15 flex items-center justify-center text-gold-dark shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <div>
                <p class="font-semibold text-ink mb-1">Alamat Kantor</p>
                <p class="text-sm text-inktext/70 leading-relaxed">{{ $desa['kontak']['alamat'] }}</p>
            </div>
        </div>
        <div class="flex gap-4">
            <div class="w-11 h-11 rounded-full bg-gold/15 flex items-center justify-center text-gold-dark shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </div>
            <div>
                <p class="font-semibold text-ink mb-1">Telepon</p>
                <p class="text-sm text-inktext/70">{{ $desa['kontak']['telepon'] }}</p>
            </div>
        </div>
        <div class="flex gap-4">
            <div class="w-11 h-11 rounded-full bg-gold/15 flex items-center justify-center text-gold-dark shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <div>
                <p class="font-semibold text-ink mb-1">Email</p>
                <p class="text-sm text-inktext/70">{{ $desa['kontak']['email'] }}</p>
            </div>
        </div>
        <div class="flex gap-4">
            <div class="w-11 h-11 rounded-full bg-gold/15 flex items-center justify-center text-gold-dark shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div>
                <p class="font-semibold text-ink mb-1">Jam Layanan</p>
                <p class="text-sm text-inktext/70">{{ $desa['kontak']['jam_layanan'] }}</p>
            </div>
        </div>

        <div class="rounded-xl overflow-hidden border border-ink/10 h-56">
            <iframe
                class="w-full h-full"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                src="https://maps.google.com/maps?q={{ $desa['kontak']['koordinat']['lat'] }},{{ $desa['kontak']['koordinat']['lng'] }}&z=13&output=embed">
            </iframe>
        </div>
    </div>

    <div class="lg:col-span-3 bg-paper-alt border border-ink/10 rounded-xl p-7 lg:p-10" data-reveal style="transition-delay: 120ms">
        <h2 class="font-display text-2xl font-semibold text-ink mb-1">Kirim Pesan</h2>
        <p class="text-sm text-inktext/60 mb-7">Pesan akan dikirim langsung ke email desa.</p>

        <form action="mailto:{{ $desa['kontak']['email'] }}" method="post" enctype="text/plain" class="space-y-5">
            <div>
                <label class="block text-sm font-medium text-ink mb-1.5">Nama Lengkap</label>
                <input type="text" name="nama" required
                       class="w-full border border-ink/15 rounded-lg px-4 py-3 bg-paper focus:outline-none focus:ring-2 focus:ring-gold/60">
            </div>
            <div>
                <label class="block text-sm font-medium text-ink mb-1.5">Email</label>
                <input type="email" name="email" required
                       class="w-full border border-ink/15 rounded-lg px-4 py-3 bg-paper focus:outline-none focus:ring-2 focus:ring-gold/60">
            </div>
            <div>
                <label class="block text-sm font-medium text-ink mb-1.5">Pesan</label>
                <textarea name="pesan" rows="5" required
                          class="w-full border border-ink/15 rounded-lg px-4 py-3 bg-paper focus:outline-none focus:ring-2 focus:ring-gold/60"></textarea>
            </div>
            <button type="submit" class="w-full sm:w-auto bg-ink hover:bg-ink-light text-paper font-semibold px-7 py-3.5 rounded transition-colors">
                Kirim Pesan
            </button>
        </form>
    </div>
</section>

@endsection