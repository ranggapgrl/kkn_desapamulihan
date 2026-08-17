@extends('layouts.app')

@section('content')

<!-- HEADER SECTION -->
<section class="bg-ink relative overflow-hidden pt-28 lg:pt-32 pb-16 lg:pb-24">
    <div class="absolute inset-0 text-paper/5 bg-topo"></div>

    <!-- Animasi Dekorasi Cahaya -->
    <div class="absolute top-0 right-1/4 w-96 h-96 bg-gold/10 rounded-full blur-3xl -translate-y-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 left-1/4 w-72 h-72 bg-sawah/10 rounded-full blur-3xl translate-y-1/2 pointer-events-none"></div>

    <div data-reveal class="relative max-w-7xl mx-auto px-5 lg:px-10 text-center text-paper">
        <p class="text-gold font-mono text-xs tracking-[0.2em] uppercase mb-4">Struktur Organisasi</p>
        <h1 class="font-display text-4xl lg:text-5xl font-semibold mb-6">Pemerintahan Desa Pamulihan</h1>
        <p class="text-paper/70 max-w-2xl mx-auto text-sm lg:text-base leading-relaxed">
            Mengenal lebih dekat jajaran aparatur pemerintah desa yang berdedikasi melayani masyarakat dan memajukan Desa Pamulihan.
        </p>
    </div>
</section>

<!-- STRUKTUR PEMERINTAHAN -->
<section class="max-w-7xl mx-auto px-5 lg:px-10 py-16 lg:py-24 min-h-screen">
    
    <!-- KARTU KEPALA DESA (Pimpinan Tertinggi di Atas & Tengah) -->
    <div class="flex justify-center mb-12 lg:mb-16">
        @php 
            // Mengambil data Kepala Desa (index ke-0)
            $kades = $desa['pemerintahan'][0]; 
            // Membersihkan tanda kurung siku jika namanya masih "Isi dengan Nama Asli"
            $namaKadesBersih = str_replace(['[', ']'], '', $kades['nama']);
        @endphp
        
        <div data-reveal class="group relative bg-white rounded-[2.5rem] p-8 md:p-12 border border-ink/5 hover:border-gold/30 hover:shadow-2xl hover:shadow-gold/10 transition-all duration-500 hover:-translate-y-3 flex flex-col items-center text-center w-full max-w-md cursor-default overflow-hidden">
            <!-- Background gradien tipis saat dihover -->
            <div class="absolute inset-0 bg-gradient-to-b from-gold/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            
            <!-- Avatar Besar -->
            <div class="w-36 h-36 relative overflow-hidden rounded-full ring-4 ring-paper-alt shadow-xl group-hover:ring-gold/40 transition-all duration-500 mb-6 bg-paper-alt flex items-center justify-center z-10">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($namaKadesBersih) }}&background=1B3358&color=FBF8F1&size=256&font-family=Poppins" 
                     alt="{{ $kades['nama'] }}" 
                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
            </div>
            
            <span class="inline-block px-5 py-2 bg-gold/15 text-gold-dark text-xs md:text-sm font-bold uppercase tracking-widest rounded-full mb-4 relative z-10">
                {{ $kades['jabatan'] }}
            </span>
            <h3 class="font-display text-2xl md:text-3xl font-bold text-ink mb-1 relative z-10 group-hover:text-gold-dark transition-colors">
                {{ $kades['nama'] }}
            </h3>
        </div>
    </div>

    <!-- GRID PERANGKAT DESA LAINNYA -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 lg:gap-8">
        @foreach($desa['pemerintahan'] as $index => $pejabat)
            {{-- Mulai dari index 1, karena index 0 (Kades) sudah ditampilkan di atas --}}
            @if($index > 0)
                @php 
                    $namaPejabatBersih = str_replace(['[', ']'], '', $pejabat['nama']);
                @endphp
                
                <div data-reveal style="transition-delay: {{ ($index % 4) * 100 }}ms"
                     class="group relative bg-white rounded-3xl p-6 md:p-8 border border-ink/5 hover:border-ink/20 hover:shadow-xl hover:shadow-ink/5 transition-all duration-500 hover:-translate-y-2 flex flex-col items-center text-center overflow-hidden cursor-default">
                    
                    <!-- Avatar Reguler -->
                    <div class="w-24 h-24 relative overflow-hidden rounded-full ring-4 ring-paper-alt shadow-md group-hover:ring-ink/15 transition-all duration-500 mb-5 bg-paper-alt flex items-center justify-center">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($namaPejabatBersih) }}&background=E5E7EB&color=1B3358&size=256&font-family=Poppins" 
                             alt="{{ $pejabat['nama'] }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>

                    <span class="inline-block px-4 py-1.5 bg-paper-alt text-inktext/70 text-[10px] md:text-xs font-bold uppercase tracking-wider rounded-full mb-3 group-hover:bg-ink/5 group-hover:text-ink transition-colors">
                        {{ $pejabat['jabatan'] }}
                    </span>
                    <h4 class="font-display text-lg font-bold text-ink leading-snug group-hover:text-ink-light transition-colors">
                        {{ $pejabat['nama'] }}
                    </h4>
                </div>
            @endif
        @endforeach
    </div>

</section>

@endsection