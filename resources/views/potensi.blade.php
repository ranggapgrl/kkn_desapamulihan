@extends('layouts.app')

@section('content')

<!-- HEADER SECTION -->
<section class="bg-ink relative overflow-hidden pt-28 lg:pt-32 pb-16 lg:pb-24">
    <div class="absolute inset-0 text-paper/5 bg-topo"></div>
    
    <div class="absolute top-0 right-0 w-96 h-96 bg-gold/10 rounded-full blur-3xl translate-x-1/3 -translate-y-1/3"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-sawah/10 rounded-full blur-3xl -translate-x-1/2 translate-y-1/2"></div>

    <div data-reveal class="relative max-w-7xl mx-auto px-5 lg:px-10 text-center text-paper">
        <p class="text-gold font-mono text-xs tracking-[0.2em] uppercase mb-4">Kekayaan Alam & Warga</p>
        <h1 class="font-display text-4xl lg:text-5xl font-semibold mb-6">Potensi Desa Pamulihan</h1>
        <p class="text-paper/70 max-w-2xl mx-auto text-sm lg:text-base leading-relaxed">
            Kekayaan sumber daya alam, ekonomi lokal, dan industri unggulan yang menjadi pilar kemandirian ekonomi Desa Pamulihan.
        </p>
    </div>
</section>

<!-- MAIN CONTENT -->
<section class="max-w-7xl mx-auto px-5 lg:px-10 py-16 lg:py-24 min-h-screen">

    <!-- 1. KOMODITAS UNGGULAN (Meniru gaya "Gula Merah Kelapa" Mekartani) -->
    <div data-reveal class="mb-20">
        <p class="text-sawah-dark font-semibold text-sm tracking-widest uppercase mb-4">Komoditas Unggulan</p>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-ink mb-6">Padi & Palawija Sawah</h2>
        <p class="text-inktext/75 text-lg leading-relaxed max-w-4xl mb-12">
            Lahan pesawahan di Desa Pamulihan merupakan tulang punggung perekonomian utama masyarakat. Lahan ini dikelola secara optimal untuk menghasilkan komoditas pokok seperti padi, jagung hibrida, jagung manis, ubi jalar, hingga kacang tanah yang berkualitas.
        </p>

        <!-- 4 Kotak Info Singkat -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 mb-16">
            <!-- Info 1 -->
            <div class="bg-white border border-ink/5 rounded-3xl p-6 text-center shadow-lg shadow-ink/5 hover:-translate-y-1 transition-transform duration-300">
                <div class="w-12 h-12 mx-auto bg-sawah/20 text-sawah-dark rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                </div>
                <h4 class="font-display text-xl font-bold text-ink mb-1">131 Ha</h4>
                <p class="text-xs text-inktext/60 uppercase tracking-wider font-semibold">Luas Lahan</p>
            </div>
            <!-- Info 2 -->
            <div class="bg-white border border-ink/5 rounded-3xl p-6 text-center shadow-lg shadow-ink/5 hover:-translate-y-1 transition-transform duration-300">
                <div class="w-12 h-12 mx-auto bg-gold/20 text-gold-dark rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h4 class="font-display text-xl font-bold text-ink mb-1">Mayoritas</h4>
                <p class="text-xs text-inktext/60 uppercase tracking-wider font-semibold">Warga Petani</p>
            </div>
            <!-- Info 3 -->
            <div class="bg-white border border-ink/5 rounded-3xl p-6 text-center shadow-lg shadow-ink/5 hover:-translate-y-1 transition-transform duration-300">
                <div class="w-12 h-12 mx-auto bg-ink/10 text-ink rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                </div>
                <h4 class="font-display text-xl font-bold text-ink mb-1">Lokal</h4>
                <p class="text-xs text-inktext/60 uppercase tracking-wider font-semibold">Distribusi Wilayah</p>
            </div>
            <!-- Info 4 -->
            <div class="bg-white border border-ink/5 rounded-3xl p-6 text-center shadow-lg shadow-ink/5 hover:-translate-y-1 transition-transform duration-300">
                <div class="w-12 h-12 mx-auto bg-paper-alt border border-ink/10 text-ink rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                </div>
                <h4 class="font-display text-xl font-bold text-ink mb-1">Terjaga</h4>
                <p class="text-xs text-inktext/60 uppercase tracking-wider font-semibold">Kualitas Panen</p>
            </div>
        </div>

        <!-- Alur Produksi (Dark Block) -->
        <div class="bg-ink rounded-[2rem] p-8 md:p-12 shadow-2xl relative overflow-hidden">
            <!-- Dekorasi Garis -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-gold/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>

            <div class="flex items-center gap-3 mb-2 relative z-10">
                <div class="w-10 h-10 rounded-full bg-gold/20 flex items-center justify-center text-gold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                </div>
                <h3 class="font-display text-2xl font-bold text-paper">Siklus Pertanian Pamulihan</h3>
            </div>
            <p class="text-paper/60 text-sm mb-10 relative z-10">Proses pengelolaan lahan pesawahan dan palawija dari awal hingga panen.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 relative z-10">
                <!-- Step 1 -->
                <div class="bg-paper-alt/10 border border-paper/10 rounded-2xl p-6 hover:bg-paper-alt/20 transition-colors">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-gold font-mono font-bold text-lg">01</span>
                        <h4 class="font-bold text-paper">Pengolahan Lahan</h4>
                    </div>
                    <p class="text-paper/70 text-sm leading-relaxed">Pembajakan dan penggemburan tanah menggunakan traktor atau alat tradisional untuk mempersiapkan media tanam.</p>
                </div>
                <!-- Step 2 -->
                <div class="bg-paper-alt/10 border border-paper/10 rounded-2xl p-6 hover:bg-paper-alt/20 transition-colors">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-gold font-mono font-bold text-lg">02</span>
                        <h4 class="font-bold text-paper">Penyemaian & Tanam</h4>
                    </div>
                    <p class="text-paper/70 text-sm leading-relaxed">Pemilihan bibit padi dan palawija unggul, dilanjutkan dengan proses penanaman bibit secara serentak.</p>
                </div>
                <!-- Step 3 -->
                <div class="bg-paper-alt/10 border border-paper/10 rounded-2xl p-6 hover:bg-paper-alt/20 transition-colors">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-gold font-mono font-bold text-lg">03</span>
                        <h4 class="font-bold text-paper">Perawatan (Irigasi)</h4>
                    </div>
                    <p class="text-paper/70 text-sm leading-relaxed">Pengaturan sirkulasi air, pemberian pupuk, dan pembersihan hama untuk menjaga kualitas tanaman.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. SEKTOR PRIMER KEDUA (Meniru gaya "Pertanian Sawah" Mekartani) -->
    <div data-reveal class="mb-24">
        <p class="text-sawah-dark font-semibold text-sm tracking-widest uppercase mb-4">Sektor Primer Utama</p>
        <h2 class="font-display text-3xl md:text-4xl font-bold text-ink mb-6">Peternakan Domba & Sayuran</h2>
        <p class="text-inktext/75 text-lg leading-relaxed max-w-4xl mb-12">
            Selain pesawahan, Desa Pamulihan juga memiliki kontur dataran tinggi yang sangat ideal untuk sayuran ladang perbukitan dan program ketahanan pangan desa melalui sektor peternakan domba.
        </p>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <!-- Gambar / Kartu Besar Kiri -->
            <div class="lg:col-span-5 bg-sawah/20 rounded-[2rem] p-10 flex flex-col items-center justify-center text-center h-full min-h-[300px] border border-sawah/30">
                <div class="w-20 h-20 bg-sawah-dark text-paper rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-sawah/30">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10"></path></svg>
                </div>
                <h4 class="font-display text-2xl font-bold text-ink mb-2">Peternakan & Ladang</h4>
                <p class="text-inktext/70 text-sm">Program Ketahanan Pangan Pamulihan</p>
            </div>

            <!-- List Data Kanan -->
            <div class="lg:col-span-7 space-y-4">
                <!-- Data Row 1 -->
                <div class="bg-white border border-ink/5 rounded-2xl p-6 flex items-center gap-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-paper-alt rounded-xl flex items-center justify-center text-ink shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs text-inktext/50 uppercase tracking-wider font-bold mb-1">Komoditas Sayuran</p>
                        <h5 class="font-display text-lg font-bold text-ink">Kol, Tomat, Cabai Besar & Rawit, Kacang Merah</h5>
                    </div>
                </div>
                <!-- Data Row 2 -->
                <div class="bg-white border border-ink/5 rounded-2xl p-6 flex items-center gap-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-paper-alt rounded-xl flex items-center justify-center text-ink shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.514c.224 0 .445.05.642.148l2.044 1.022"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs text-inktext/50 uppercase tracking-wider font-bold mb-1">Fokus Peternakan</p>
                        <h5 class="font-display text-lg font-bold text-ink">Budidaya Domba Unggulan</h5>
                    </div>
                </div>
                <!-- Data Row 3 -->
                <div class="bg-white border border-ink/5 rounded-2xl p-6 flex items-center gap-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-paper-alt rounded-xl flex items-center justify-center text-ink shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs text-inktext/50 uppercase tracking-wider font-bold mb-1">Edukasi Warga</p>
                        <h5 class="font-display text-lg font-bold text-ink">Pelatihan Pengolahan Pakan Ternak</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. POTENSI PENDUKUNG DESA (Meniru Grid "Sumbedaya Pendukung") -->
    <div>
        <div class="mb-10" data-reveal>
            <p class="text-sawah-dark font-semibold text-sm tracking-widest uppercase mb-4">Potensi Pendukung Desa</p>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-ink mb-4">Sumber Daya & Infrastruktur</h2>
            <p class="text-inktext/75 text-lg leading-relaxed max-w-4xl">
                Selain sektor agraris, Desa Pamulihan didukung oleh aktivitas UMKM, kekayaan seni tradisi Sunda, serta posisi strategis yang dilintasi oleh jalur infrastruktur nasional.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Kartu 1: Seni Tradisi Sunda -->
            <div data-reveal style="transition-delay: 100ms" onclick="openPotensiModal('Seni Tradisi Sunda', 'Seni & Budaya', 'Wayang, calung, tari tradisional, dan kecapi suling masih dilestarikan warga, salah satunya di Sanggar Sundari.')" class="group relative bg-white rounded-3xl p-8 border border-ink/5 hover:border-gold/30 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 cursor-pointer flex flex-col h-full">
                <div class="w-14 h-14 rounded-2xl bg-paper-alt flex items-center justify-center text-ink group-hover:bg-ink group-hover:text-gold transition-colors mb-6">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
                </div>
                <span class="text-[10px] font-bold text-gold-dark uppercase tracking-wider mb-2">Pelestarian Lokal</span>
                <h3 class="font-display text-xl font-bold text-ink mb-3 group-hover:text-gold-dark transition-colors">Seni Tradisi Sunda</h3>
                <p class="text-sm text-inktext/70 line-clamp-3 mb-6 flex-grow">Wayang, calung, tari tradisional, dan kecapi suling masih dilestarikan warga, salah satunya di Sanggar Sundari.</p>
                <!-- Klik indikator -->
                <div class="mt-auto pt-4 border-t border-ink/5 text-xs font-semibold text-ink/40 group-hover:text-ink transition-colors flex items-center">
                    Klik untuk detail <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>

            <!-- Kartu 2: UMKM -->
            <div data-reveal style="transition-delay: 200ms" onclick="openPotensiModal('Industri Rumah Tangga', 'UMKM', 'Usaha kecil dan industri rumah tangga warga menjadi penopang ekonomi selain sektor pertanian dan perdagangan.')" class="group relative bg-white rounded-3xl p-8 border border-ink/5 hover:border-gold/30 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 cursor-pointer flex flex-col h-full">
                <div class="w-14 h-14 rounded-2xl bg-paper-alt flex items-center justify-center text-ink group-hover:bg-ink group-hover:text-gold transition-colors mb-6">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"></path></svg>
                </div>
                <span class="text-[10px] font-bold text-gold-dark uppercase tracking-wider mb-2">Pemberdayaan Ekonomi</span>
                <h3 class="font-display text-xl font-bold text-ink mb-3 group-hover:text-gold-dark transition-colors">Industri Rumah Tangga</h3>
                <p class="text-sm text-inktext/70 line-clamp-3 mb-6 flex-grow">Usaha kecil dan industri rumah tangga warga menjadi penopang ekonomi selain sektor pertanian dan perdagangan.</p>
                <div class="mt-auto pt-4 border-t border-ink/5 text-xs font-semibold text-ink/40 group-hover:text-ink transition-colors flex items-center">
                    Klik untuk detail <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>

            <!-- Kartu 3: Infrastruktur -->
            <div data-reveal style="transition-delay: 300ms" onclick="openPotensiModal('Jalur Tol Cisumdawu', 'Infrastruktur', 'Dilintasi ruas Tol Cisumdawu seksi Tanjungsari–Sumedang, membuka peluang aksesibilitas dan ekonomi baru.')" class="group relative bg-white rounded-3xl p-8 border border-ink/5 hover:border-gold/30 hover:shadow-xl transition-all duration-300 hover:-translate-y-2 cursor-pointer flex flex-col h-full">
                <div class="w-14 h-14 rounded-2xl bg-paper-alt flex items-center justify-center text-ink group-hover:bg-ink group-hover:text-gold transition-colors mb-6">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <span class="text-[10px] font-bold text-gold-dark uppercase tracking-wider mb-2">Akses Strategis Nasional</span>
                <h3 class="font-display text-xl font-bold text-ink mb-3 group-hover:text-gold-dark transition-colors">Jalur Tol Cisumdawu</h3>
                <p class="text-sm text-inktext/70 line-clamp-3 mb-6 flex-grow">Dilintasi ruas Tol Cisumdawu seksi Tanjungsari–Sumedang, membuka peluang aksesibilitas dan ekonomi baru.</p>
                <div class="mt-auto pt-4 border-t border-ink/5 text-xs font-semibold text-ink/40 group-hover:text-ink transition-colors flex items-center">
                    Klik untuk detail <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>

        </div>
    </div>

</section>

<!-- MODAL DETAIL POTENSI (Tetap dipertahankan) -->
<div id="potensi-modal" class="fixed inset-0 z-[100] flex items-center justify-center bg-ink/50 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 px-5">
    <div class="absolute inset-0" onclick="closePotensiModal()"></div>
    
    <div class="bg-paper relative w-full max-w-xl rounded-[2rem] shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300 max-h-[90vh] flex flex-col" id="potensi-modal-box">
        
        <button onclick="closePotensiModal()" class="absolute top-5 right-5 w-9 h-9 flex items-center justify-center bg-white/80 hover:bg-white rounded-full text-ink shadow-md transition-colors z-20">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <!-- Header Fallback Ikon Bergradasi -->
        <div class="relative shrink-0 h-56 lg:h-64 overflow-hidden bg-gradient-to-br from-ink to-[#152846] flex items-center justify-center">
            <div class="absolute inset-0 opacity-10 bg-topo"></div>
            <div class="relative z-10 w-16 h-16 rounded-full bg-gold/20 flex items-center justify-center text-gold ring-4 ring-gold/10">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            
            <div class="absolute inset-0 bg-gradient-to-t from-ink/90 via-ink/10 to-transparent"></div>

            <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-7">
                <span id="modal-potensi-kategori" class="inline-block px-3 py-1 bg-white/15 backdrop-blur-sm text-paper text-xs font-bold uppercase tracking-wider rounded-full mb-2"></span>
                <h3 id="modal-potensi-nama" class="font-display text-2xl lg:text-3xl font-bold text-white leading-tight"></h3>
            </div>
        </div>

        <div class="p-7 lg:p-8 space-y-5 overflow-y-auto">
            <div class="bg-paper-alt border border-ink/5 rounded-2xl p-5">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-2 h-2 rounded-full bg-[#25D366]"></div>
                    <p class="text-xs font-bold text-ink uppercase tracking-wider">Status Validasi</p>
                </div>
                <p class="text-sm font-medium text-inktext/80 ml-5">Telah diverifikasi sesuai dengan kondisi faktual dan potensi wilayah Desa Pamulihan.</p>
            </div>

            <div>
                <p class="text-xs uppercase tracking-wider text-inktext/50 font-semibold mb-2">Uraian Potensi Desa</p>
                <p id="modal-potensi-deskripsi" class="text-ink leading-relaxed text-[15px]"></p>
            </div>
            
            <div class="pt-2 border-t border-ink/5">
                <button onclick="closePotensiModal()" class="w-full bg-ink hover:bg-ink-light text-paper font-semibold px-6 py-3.5 rounded-xl transition-colors">
                    Tutup Detail
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function openPotensiModal(nama, kategori, deskripsi) {
        document.getElementById('modal-potensi-nama').innerText = nama;
        document.getElementById('modal-potensi-kategori').innerText = kategori;
        document.getElementById('modal-potensi-deskripsi').innerText = deskripsi;

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