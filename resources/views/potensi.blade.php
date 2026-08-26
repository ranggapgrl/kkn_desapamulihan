@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden pt-36 lg:pt-40 pb-14 lg:pb-20 border-b border-emerald-100/80">
    <div class="absolute inset-0 text-emerald-900/5 bg-kontur pointer-events-none"></div>
    <div class="absolute right-10 top-10 h-40 w-40 rounded-full bg-amber-200/50 blur-3xl"></div>

    <div data-reveal class="relative max-w-7xl mx-auto px-5 lg:px-10 text-center">
        <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-4">Kekayaan Alam &amp; Warga</p>
        <h1 class="font-display text-slate-800 text-4xl lg:text-5xl font-bold mb-6">Potensi Desa Pamulihan</h1>
        <p class="text-slate-600 max-w-2xl mx-auto text-sm lg:text-base leading-relaxed">
            Kekayaan sumber daya alam, ekonomi lokal, dan industri unggulan yang menjadi pilar kemandirian ekonomi Desa Pamulihan.
        </p>
    </div>
</section>

<section class="max-w-7xl mx-auto px-5 lg:px-10 py-16 lg:py-24 min-h-screen">
    <div data-reveal class="mb-20">
        <p class="text-emerald-700 font-semibold text-sm tracking-widest uppercase mb-4">Komoditas Unggulan</p>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-slate-800 mb-6">Padi &amp; Palawija Sawah</h2>
        <p class="text-slate-600 text-lg leading-relaxed max-w-4xl mb-12">
            Lahan pesawahan di Desa Pamulihan merupakan tulang punggung perekonomian utama masyarakat. Lahan ini dikelola secara optimal untuk menghasilkan komoditas pokok seperti padi, jagung hibrida, jagung manis, ubi jalar, hingga kacang tanah yang berkualitas.
        </p>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 mb-16">
            <div class="bg-white/90 border border-emerald-100 rounded-[1.6rem] p-6 text-center shadow-soft hover:-translate-y-1 transition-transform duration-300">
                <div class="w-12 h-12 mx-auto bg-emerald-100 text-emerald-700 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                </div>
                <h4 class="font-display text-xl font-bold text-slate-800 mb-1">131 Ha</h4>
                <p class="text-xs text-slate-500 uppercase tracking-wider font-semibold">Luas Lahan</p>
            </div>
            <div class="bg-white/90 border border-emerald-100 rounded-[1.6rem] p-6 text-center shadow-soft hover:-translate-y-1 transition-transform duration-300">
                <div class="w-12 h-12 mx-auto bg-amber-100 text-amber-700 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h4 class="font-display text-xl font-bold text-slate-800 mb-1">Mayoritas</h4>
                <p class="text-xs text-slate-500 uppercase tracking-wider font-semibold">Warga Petani</p>
            </div>
            <div class="bg-white/90 border border-emerald-100 rounded-[1.6rem] p-6 text-center shadow-soft hover:-translate-y-1 transition-transform duration-300">
                <div class="w-12 h-12 mx-auto bg-slate-100 text-slate-700 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                </div>
                <h4 class="font-display text-xl font-bold text-slate-800 mb-1">Lokal</h4>
                <p class="text-xs text-slate-500 uppercase tracking-wider font-semibold">Distribusi Wilayah</p>
            </div>
            <div class="bg-white/90 border border-emerald-100 rounded-[1.6rem] p-6 text-center shadow-soft hover:-translate-y-1 transition-transform duration-300">
                <div class="w-12 h-12 mx-auto bg-emerald-50 border border-emerald-100 text-emerald-700 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                </div>
                <h4 class="font-display text-xl font-bold text-slate-800 mb-1">Terjaga</h4>
                <p class="text-xs text-slate-500 uppercase tracking-wider font-semibold">Kualitas Panen</p>
            </div>
        </div>

        <div class="bg-slate-900 rounded-[2rem] p-8 md:p-12 shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-500/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>

            <div class="flex items-center gap-3 mb-2 relative z-10">
                <div class="w-10 h-10 rounded-full bg-emerald-500/20 flex items-center justify-center text-emerald-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                </div>
                <h3 class="font-display text-2xl font-bold text-white">Siklus Pertanian Pamulihan</h3>
            </div>
            <p class="text-slate-300 text-sm mb-10 relative z-10">Proses pengelolaan lahan pesawahan dan palawija dari awal hingga panen.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 relative z-10">
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-colors">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-amber-300 font-mono font-bold text-lg">01</span>
                        <h4 class="font-bold text-white">Pengolahan Lahan</h4>
                    </div>
                    <p class="text-slate-300 text-sm leading-relaxed">Pembajakan dan penggemburan tanah menggunakan traktor atau alat tradisional untuk mempersiapkan media tanam.</p>
                </div>
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-colors">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-amber-300 font-mono font-bold text-lg">02</span>
                        <h4 class="font-bold text-white">Penyemaian &amp; Tanam</h4>
                    </div>
                    <p class="text-slate-300 text-sm leading-relaxed">Pemilihan bibit padi dan palawija unggul, dilanjutkan dengan proses penanaman bibit secara serentak.</p>
                </div>
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-colors">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-amber-300 font-mono font-bold text-lg">03</span>
                        <h4 class="font-bold text-white">Perawatan (Irigasi)</h4>
                    </div>
                    <p class="text-slate-300 text-sm leading-relaxed">Pengaturan sirkulasi air, pemberian pupuk, dan pembersihan hama untuk menjaga kualitas tanaman.</p>
                </div>
            </div>
        </div>
    </div>

    <div data-reveal class="mb-24">
        <p class="text-emerald-700 font-semibold text-sm tracking-widest uppercase mb-4">Sektor Primer Utama</p>
        <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-800 mb-6">Peternakan Domba &amp; Sayuran</h2>
        <p class="text-slate-600 text-lg leading-relaxed max-w-4xl mb-12">
            Selain pesawahan, Desa Pamulihan juga memiliki kontur dataran tinggi yang sangat ideal untuk sayuran ladang perbukitan dan program ketahanan pangan desa melalui sektor peternakan domba.
        </p>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <div class="lg:col-span-5 relative overflow-hidden bg-emerald-50 rounded-[2rem] p-10 flex flex-col items-center justify-center text-center h-full min-h-[300px] border border-emerald-100">
                <img src="{{ asset('images/potensi/ladang.jpg') }}"
                     alt="Peternakan & Ladang"
                     class="absolute inset-0 w-full h-full object-cover">

                <div class="absolute inset-0 bg-emerald-50/60"></div>

                <div class="relative z-10 w-20 h-20 bg-emerald-700 text-white rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-emerald-200/60">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10"></path></svg>
                </div>
                <h4 class="relative z-10 font-display text-2xl font-bold text-slate-800 mb-2">Peternakan &amp; Ladang</h4>
                <p class="relative z-10 text-slate-600 text-sm">Program Ketahanan Pangan Pamulihan</p>
            </div>

            <div class="lg:col-span-7 space-y-4">
                <div class="bg-white/90 border border-emerald-100 rounded-2xl p-6 flex items-center gap-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-700 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 uppercase tracking-wider font-bold mb-1">Komoditas Sayuran</p>
                        <h5 class="font-display text-lg font-bold text-slate-800">Kol, Tomat, Cabai Besar &amp; Rawit, Kacang Merah</h5>
                    </div>
                </div>
                <div class="bg-white/90 border border-emerald-100 rounded-2xl p-6 flex items-center gap-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-700 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.514c.224 0 .445.05.642.148l2.044 1.022"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 uppercase tracking-wider font-bold mb-1">Fokus Peternakan</p>
                        <h5 class="font-display text-lg font-bold text-slate-800">Budidaya Domba Unggulan</h5>
                    </div>
                </div>
                <div class="bg-white/90 border border-emerald-100 rounded-2xl p-6 flex items-center gap-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-700 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 uppercase tracking-wider font-bold mb-1">Edukasi Warga</p>
                        <h5 class="font-display text-lg font-bold text-slate-800">Pelatihan Pengolahan Pakan Ternak</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="mb-10" data-reveal>
            <p class="text-emerald-700 font-semibold text-sm tracking-widest uppercase mb-4">Potensi Pendukung Desa</p>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-slate-800 mb-4">Sumber Daya &amp; Infrastruktur</h2>
            <p class="text-slate-600 text-lg leading-relaxed max-w-4xl">
                Selain sektor agraris, Desa Pamulihan didukung oleh aktivitas UMKM, kekayaan seni tradisi Sunda, serta posisi strategis yang dilintasi oleh jalur infrastruktur nasional.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Card 1: Seni Tradisi Sunda --}}
            <div data-reveal style="transition-delay: 100ms"
                onclick="openPotensiModal('Seni Tradisi Sunda', 'Seni & Budaya', 'Wayang, calung, tari tradisional, dan kecapi suling masih dilestarikan warga, salah satunya di Sanggar Sundari.', '{{ asset('images/potensi/seni-tradisi-sunda.jpg') }}')"
                class="group relative bg-white rounded-3xl border border-emerald-100 hover:border-emerald-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 cursor-pointer flex flex-col h-full overflow-hidden">

                <div class="h-44 w-full overflow-hidden bg-emerald-50">
                    <img src="{{ asset('images/potensi/seni-tradisi-sunda.jpg') }}"
                         alt="Seni Tradisi Sunda"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>

                <div class="p-8 flex flex-col flex-grow">
                    <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider mb-2">Pelestarian Lokal</span>
                    <h3 class="font-display text-xl font-bold text-slate-800 mb-3 group-hover:text-emerald-700 transition-colors">Seni Tradisi Sunda</h3>
                    <p class="text-sm text-slate-600 line-clamp-3 mb-6 flex-grow">Wayang, calung, tari tradisional, dan kecapi suling masih dilestarikan warga, salah satunya di Sanggar Sundari.</p>
                    <div class="mt-auto pt-4 border-t border-emerald-100 text-xs font-semibold text-slate-400 group-hover:text-slate-600 transition-colors flex items-center">
                        Klik untuk detail <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </div>
            </div>

            {{-- Card 2: Industri Rumah Tangga --}}
            <div data-reveal style="transition-delay: 200ms"
                onclick="openPotensiModal('Industri Rumah Tangga', 'UMKM', 'Usaha kecil dan industri rumah tangga warga menjadi penopang ekonomi selain sektor pertanian dan perdagangan.', '{{ asset('images/potensi/industri-rumah-tangga.jpg') }}')"
                class="group relative bg-white rounded-3xl border border-emerald-100 hover:border-emerald-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 cursor-pointer flex flex-col h-full overflow-hidden">

                <div class="h-44 w-full overflow-hidden bg-emerald-50">
                    <img src="{{ asset('images/potensi/industri-rumah-tangga.jpg') }}"
                         alt="Industri Rumah Tangga"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>

                <div class="p-8 flex flex-col flex-grow">
                    <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider mb-2">Pemberdayaan Ekonomi</span>
                    <h3 class="font-display text-xl font-bold text-slate-800 mb-3 group-hover:text-emerald-700 transition-colors">Industri Rumah Tangga</h3>
                    <p class="text-sm text-slate-600 line-clamp-3 mb-6 flex-grow">Usaha kecil dan industri rumah tangga warga menjadi penopang ekonomi selain sektor pertanian dan perdagangan.</p>
                    <div class="mt-auto pt-4 border-t border-emerald-100 text-xs font-semibold text-slate-400 group-hover:text-slate-600 transition-colors flex items-center">
                        Klik untuk detail <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </div>
            </div>

            {{-- Card 3: Jalur Tol Cisumdawu --}}
            <div data-reveal style="transition-delay: 300ms"
                onclick="openPotensiModal('Jalur Tol Cisumdawu', 'Infrastruktur', 'Dilintasi ruas Tol Cisumdawu seksi Tanjungsari–Sumedang, membuka peluang aksesibilitas dan ekonomi baru.', '{{ asset('images/potensi/tol-cisumdawu.jpg') }}')"
                class="group relative bg-white rounded-3xl border border-emerald-100 hover:border-emerald-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 cursor-pointer flex flex-col h-full overflow-hidden">

                <div class="h-44 w-full overflow-hidden bg-emerald-50">
                    <img src="{{ asset('images/potensi/tol-cisumdawu.jpg') }}"
                         alt="Jalur Tol Cisumdawu"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>

                <div class="p-8 flex flex-col flex-grow">
                    <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider mb-2">Akses Strategis Nasional</span>
                    <h3 class="font-display text-xl font-bold text-slate-800 mb-3 group-hover:text-emerald-700 transition-colors">Jalur Tol Cisumdawu</h3>
                    <p class="text-sm text-slate-600 line-clamp-3 mb-6 flex-grow">Dilintasi ruas Tol Cisumdawu seksi Tanjungsari–Sumedang, membuka peluang aksesibilitas dan ekonomi baru.</p>
                    <div class="mt-auto pt-4 border-t border-emerald-100 text-xs font-semibold text-slate-400 group-hover:text-slate-600 transition-colors flex items-center">
                        Klik untuk detail <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div id="potensi-modal" class="fixed inset-0 z-[100] flex items-center justify-center bg-slate-900/50 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 px-5">
    <div class="absolute inset-0" onclick="closePotensiModal()"></div>

    <div class="bg-white relative w-full max-w-xl rounded-[2rem] shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300 max-h-[90vh] flex flex-col" id="potensi-modal-box">
        <button onclick="closePotensiModal()" class="absolute top-5 right-5 w-9 h-9 flex items-center justify-center bg-white/80 hover:bg-white rounded-full text-slate-700 shadow-md transition-colors z-20">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <div class="relative shrink-0 h-56 lg:h-64 overflow-hidden bg-slate-900">
            <img id="modal-potensi-gambar" src="" alt="" class="absolute inset-0 w-full h-full object-cover">

            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-slate-900/10"></div>

            <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-7 z-10">
                <span id="modal-potensi-kategori" class="inline-block px-3 py-1 bg-white/15 backdrop-blur-sm text-white text-xs font-bold uppercase tracking-wider rounded-full mb-2"></span>
                <h3 id="modal-potensi-nama" class="font-display text-2xl lg:text-3xl font-bold text-white leading-tight"></h3>
            </div>
        </div>

        <div class="p-7 lg:p-8 space-y-5 overflow-y-auto">
            <div class="bg-emerald-50 border border-emerald-100 rounded-2xl p-5">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                    <p class="text-xs font-bold text-slate-700 uppercase tracking-wider">Status Validasi</p>
                </div>
                <p class="text-sm font-medium text-slate-600 ml-5">Telah diverifikasi sesuai dengan kondisi faktual dan potensi wilayah Desa Pamulihan.</p>
            </div>

            <div>
                <p class="text-xs uppercase tracking-wider text-slate-500 font-semibold mb-2">Uraian Potensi Desa</p>
                <p id="modal-potensi-deskripsi" class="text-slate-700 leading-relaxed text-[15px]"></p>
            </div>

            <div class="pt-2 border-t border-emerald-100">
                <button onclick="closePotensiModal()" class="w-full bg-emerald-700 hover:bg-emerald-800 text-white font-semibold px-6 py-3.5 rounded-xl transition-colors">
                    Tutup Detail
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function openPotensiModal(nama, kategori, deskripsi, gambar) {
        document.getElementById('modal-potensi-nama').innerText = nama;
        document.getElementById('modal-potensi-kategori').innerText = kategori;
        document.getElementById('modal-potensi-deskripsi').innerText = deskripsi;

        const imgEl = document.getElementById('modal-potensi-gambar');
        imgEl.src = gambar;
        imgEl.alt = nama;

        const modal = document.getElementById('potensi-modal');
        const modalBox = document.getElementById('potensi-modal-box');

        modal.classList.remove('opacity-0', 'pointer-events-none');
        modal.classList.add('opacity-100');

        modalBox.classList.remove('scale-95');
        modalBox.classList.add('scale-100');
    }

    function closePotensiModal() {
        const modal = document.getElementById('potensi-modal');
        const modalBox = document.getElementById('potensi-modal-box');

        modal.classList.remove('opacity-100');
        modal.classList.add('opacity-0', 'pointer-events-none');

        modalBox.classList.remove('scale-100');
        modalBox.classList.add('scale-95');
    }
</script>

@endsection