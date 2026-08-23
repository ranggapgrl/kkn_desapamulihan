@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden pt-32 lg:pt-36 pb-12 lg:pb-16 border-b border-emerald-100/80">
    <div class="absolute inset-0 text-emerald-900/5 bg-kontur pointer-events-none"></div>
    <div data-reveal class="relative max-w-7xl mx-auto px-5 lg:px-10 text-center">
        <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-3">Kami Siap Membantu</p>
        <h1 class="font-display text-slate-800 text-3xl lg:text-5xl font-bold">Kontak Kami</h1>
    </div>
</section>

<section class="max-w-6xl mx-auto px-5 lg:px-10 py-16 lg:py-24 grid grid-cols-1 lg:grid-cols-5 gap-12">
    <div class="lg:col-span-2 space-y-6" data-reveal>
        <div class="flex gap-4 rounded-[1.5rem] border border-emerald-100 bg-white/80 p-5 shadow-sm">
            <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-700 shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <div>
                <p class="font-semibold text-slate-800 mb-1">Alamat Kantor</p>
                <p class="text-sm text-slate-600 leading-relaxed">{{ $desa['kontak']['alamat'] }}</p>
            </div>
        </div>

        <div class="flex gap-4 rounded-[1.5rem] border border-emerald-100 bg-white/80 p-5 shadow-sm">
            <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-700 shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </div>
            <div>
                <p class="font-semibold text-slate-800 mb-1">Telepon</p>
                <p class="text-sm text-slate-600">{{ $desa['kontak']['telepon'] }}</p>
            </div>
        </div>

        <div class="flex gap-4 rounded-[1.5rem] border border-emerald-100 bg-white/80 p-5 shadow-sm">
            <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-700 shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <div>
                <p class="font-semibold text-slate-800 mb-1">Email</p>
                <p class="text-sm text-slate-600">{{ $desa['kontak']['email'] }}</p>
            </div>
        </div>

        <div class="flex gap-4 rounded-[1.5rem] border border-emerald-100 bg-white/80 p-5 shadow-sm">
            <div class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-700 shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div>
                <p class="font-semibold text-slate-800 mb-1">Jam Layanan</p>
                <p class="text-sm text-slate-600">{{ $desa['kontak']['jam_layanan'] }}</p>
            </div>
        </div>

        <div class="rounded-[1.5rem] overflow-hidden border border-emerald-100 shadow-lg h-56 bg-white">
            <iframe
                class="w-full h-full"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                src="https://maps.google.com/maps?q={{ $desa['kontak']['koordinat']['lat'] }},{{ $desa['kontak']['koordinat']['lng'] }}&z=13&output=embed">
            </iframe>
        </div>
    </div>

    <div class="lg:col-span-3 bg-white/80 border border-emerald-100 rounded-[2rem] p-7 lg:p-10 shadow-[0_30px_70px_-38px_rgba(15,118,110,0.3)]" data-reveal style="transition-delay: 120ms">
        <h2 class="font-display text-2xl font-semibold text-slate-800 mb-1">Kirim Pesan</h2>
        <p class="text-sm text-slate-600 mb-7">Pesan akan dikirim langsung ke email desa.</p>

        @if (session('status'))
            <div class="mb-6 flex items-start gap-3 rounded-xl border border-sawah/30 bg-sawah/10 px-4 py-3.5 text-sm text-ink">
                <svg class="w-5 h-5 text-sawah-dark shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>{{ session('status') }}</span>
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 flex items-start gap-3 rounded-xl border border-bata/30 bg-bata/10 px-4 py-3.5 text-sm text-bata-dark">
                <svg class="w-5 h-5 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                <div>
                    <p class="font-semibold mb-1">Pesan belum terkirim:</p>
                    <ul class="list-disc list-inside space-y-0.5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <form action="{{ route('kontak.kirim') }}" method="post" class="space-y-5">
            @csrf

            {{-- Honeypot anti-spam: disembunyikan dari pengguna asli lewat CSS, bot pengisi form otomatis biasanya tetap mengisinya --}}
            <div class="absolute -left-[9999px]" aria-hidden="true">
                <label>Jangan isi kolom ini</label>
                <input type="text" name="website" tabindex="-1" autocomplete="off">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Nama Lengkap</label>
                <input type="text" name="nama" required value="{{ old('nama') }}"
                       class="w-full border border-slate-200 rounded-xl px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-emerald-200">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Email</label>
                <input type="email" name="email" required value="{{ old('email') }}"
                       class="w-full border border-slate-200 rounded-xl px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-emerald-200">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1.5">Pesan</label>
                <textarea name="pesan" rows="5" required
                          class="w-full border border-slate-200 rounded-xl px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-emerald-200">{{ old('pesan') }}</textarea>
            </div>
            <button type="submit" class="w-full sm:w-auto bg-emerald-700 hover:bg-emerald-800 text-white font-semibold px-7 py-3.5 rounded-md transition-colors shadow-sm">
                Kirim Pesan
            </button>
        </form>
    </div>
</section>

@endsection