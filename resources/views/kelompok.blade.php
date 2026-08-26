@extends('layouts.app')
@section('title', 'Tim KKN Pamulihan')

@section('content')

@php
    $dataKelompok = [
        'pamulihan-1' => [
            'nama_kelompok' => 'Pamulihan 1',
            'anggota' => [
                ['nama' => 'Haichal Rahmat Putra', 'nim' => '230102053', 'jurusan' => 'Teknik Informatika', 'angkatan' => '2023', 'divisi' => 'Ketua Kelompok', 'kontak' => '081357075895', 'foto' => 'kelompok1/haikal.png'],
                ['nama' => 'Amira Muthi Ghassani', 'nim' => '230313031', 'jurusan' => 'Manajemen', 'angkatan' => '2023', 'divisi' => 'Divisi Logistik', 'kontak' => '081221994936', 'foto' => 'kelompok1/amira.jpg'],
                ['nama' => "Fa'iq Naufal Zulfauzi", 'nim' => '230207046', 'jurusan' => 'Psikologi', 'angkatan' => '2023', 'divisi' => 'Divisi Humas', 'kontak' => '085703707658', 'foto' => 'kelompok1/faiq.jpg'],
                ['nama' => 'Mia Aqilah Khaerunnisa', 'nim' => '220209010', 'jurusan' => 'Kriya Tekstil dan Fashion', 'angkatan' => '2022', 'divisi' => 'Divisi Acara', 'kontak' => '088222304886', 'foto' => 'kelompok1/mia.jpg'],
                ['nama' => 'Mutia Zahra', 'nim' => '230104034', 'jurusan' => 'Teknologi Pangan', 'angkatan' => '2023', 'divisi' => 'Divisi PDD', 'kontak' => '088218843817', 'foto' => 'kelompok1/mutia.jpg'],
                ['nama' => 'Nadia Kusniawati', 'nim' => '230211082', 'jurusan' => 'Administrasi Publik', 'angkatan' => '2023', 'divisi' => 'Sekretaris', 'kontak' => '087736571601', 'foto' => 'kelompok1/nadia.JPG'],
                ['nama' => 'Nayla Zahara', 'nim' => '230208118', 'jurusan' => 'Ilmu Komunikasi', 'angkatan' => '2023', 'divisi' => 'Divisi Humas', 'kontak' => '083818717870', 'foto' => 'kelompok1/nayla.jpg'],
                ['nama' => 'Nazhara Dwi Lestari', 'nim' => '230106092', 'jurusan' => 'Farmasi', 'angkatan' => '2023', 'divisi' => 'Bendahara', 'kontak' => '089604168189', 'foto' => 'kelompok1/esta.jpg'],
                ['nama' => 'Ramdhani Muhammad Ibrahim', 'nim' => '230417057', 'jurusan' => 'Komunikasi dan Penyiaran Islam', 'angkatan' => '2023', 'divisi' => 'Divisi PDD', 'kontak' => '089652263847', 'foto' => 'kelompok1/ramdani.JPG'],
                ['nama' => 'Rangga Pagar Alam', 'nim' => '230102112', 'jurusan' => 'Teknik Informatika', 'angkatan' => '2023', 'divisi' => 'Divisi Logistik', 'kontak' => '0895355237181', 'foto' => 'kelompok1/rangga.JPG'],
                ['nama' => 'Ujang Kurniawan', 'nim' => '230312096', 'jurusan' => 'Akuntansi', 'angkatan' => '2023', 'divisi' => 'Divisi Acara', 'kontak' => '081282798173', 'foto' => 'kelompok1/ujang.jpg'],
            ]
        ],
        'pamulihan-2' => [
            'nama_kelompok' => 'Pamulihan 2',
            'anggota' => [
                ['nama' => 'Nama Ketua Kel 2', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Ketua Kelompok', 'kontak' => '-', 'foto' => 'kelompok2/default.jpg'],
                ['nama' => 'Anggota 2 Kel 2', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok2/default.jpg'],
                ['nama' => 'Anggota 3 Kel 2', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok2/default.jpg'],
                ['nama' => 'Anggota 4 Kel 2', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok2/default.jpg'],
                ['nama' => 'Anggota 5 Kel 2', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok2/default.jpg'],
                ['nama' => 'Anggota 6 Kel 2', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok2/default.jpg'],
                ['nama' => 'Anggota 7 Kel 2', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok2/default.jpg'],
                ['nama' => 'Anggota 8 Kel 2', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok2/default.jpg'],
                ['nama' => 'Anggota 9 Kel 2', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok2/default.jpg'],
                ['nama' => 'Anggota 10 Kel 2', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok2/default.jpg'],
                ['nama' => 'Anggota 11 Kel 2', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok2/default.jpg'],
            ]
        ],
        'pamulihan-3' => [
            'nama_kelompok' => 'Pamulihan 3',
            'anggota' => [
                ['nama' => 'Nama Ketua Kel 3', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Ketua Kelompok', 'kontak' => '-', 'foto' => 'kelompok3/default.jpg'],
                ['nama' => 'Anggota 2 Kel 3', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok3/default.jpg'],
                ['nama' => 'Anggota 3 Kel 3', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok3/default.jpg'],
                ['nama' => 'Anggota 4 Kel 3', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok3/default.jpg'],
                ['nama' => 'Anggota 5 Kel 3', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok3/default.jpg'],
                ['nama' => 'Anggota 6 Kel 3', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok3/default.jpg'],
                ['nama' => 'Anggota 7 Kel 3', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok3/default.jpg'],
                ['nama' => 'Anggota 8 Kel 3', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok3/default.jpg'],
                ['nama' => 'Anggota 9 Kel 3', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok3/default.jpg'],
                ['nama' => 'Anggota 10 Kel 3', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok3/default.jpg'],
                ['nama' => 'Anggota 11 Kel 3', 'nim' => '-', 'jurusan' => 'Jurusan', 'angkatan' => '2023', 'divisi' => 'Anggota', 'kontak' => '-', 'foto' => 'kelompok3/default.jpg'],
            ]
        ],
    ];
@endphp

<section class="relative overflow-hidden pt-36 lg:pt-40 pb-14 lg:pb-20 border-b border-emerald-100/80">
    <div class="absolute inset-0 text-emerald-900/5 bg-kontur pointer-events-none"></div>
    <div class="absolute right-10 top-10 h-40 w-40 rounded-full bg-amber-200/50 blur-3xl"></div>

    <div data-reveal class="relative max-w-7xl mx-auto px-5 lg:px-10 text-center">
        {{-- Identitas Kampus --}}
        <div class="inline-flex items-center gap-2 bg-white border border-emerald-100 text-emerald-700 text-xs font-bold px-4 py-2 rounded-full shadow-sm mb-4">
            <span class="w-2 h-2 rounded-full bg-amber-500"></span>
            KKN Reguler 2026 • Universitas Muhammadiyah Bandung
        </div>

        <p class="text-emerald-700 font-mono text-[11px] tracking-[0.22em] uppercase mb-3">Tim Pengabdi</p>
        <h1 class="font-display text-slate-800 text-4xl lg:text-5xl font-bold">Mahasiswa KKN Pamulihan</h1>
        <p class="text-slate-600 mt-4 max-w-2xl mx-auto">
            Kenali lebih dekat mahasiswa/i <strong>Universitas Muhammadiyah Bandung (UMB)</strong> yang tergabung dalam
            program Kuliah Kerja Nyata (KKN) Reguler Tahun 2026, yang terbagi dalam 3 kelompok kerja untuk
            memajukan Desa Pamulihan, Kecamatan Pamulihan.
        </p>

        {{-- Strip Identitas Kampus --}}
        <div class="max-w-md mx-auto mt-8 bg-white border border-emerald-100 rounded-2xl px-6 py-4 flex items-center justify-center gap-4 shadow-sm">
            <img src="{{ asset('images/umblogo.png') }}" alt="Logo Universitas Muhammadiyah Bandung"
                 class="h-12 w-12 object-contain"
                 onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=UMB&background=0f766e&color=F8FAFC&size=128&font-family=Poppins';">
            <div class="text-left">
                <div class="font-bold text-slate-800 text-sm">Universitas Muhammadiyah Bandung</div>
                <div class="text-xs text-slate-500">Lembaga Penelitian &amp; Pengabdian Masyarakat (LPPM) — KKN Reguler 2026</div>
            </div>
        </div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-5 lg:px-10 py-16 lg:py-24 min-h-screen">
    <div class="flex flex-wrap justify-center gap-3 md:gap-4 mb-12" id="tab-buttons">
        @foreach($dataKelompok as $id => $kelompok)
            <button onclick="switchTab('{{ $id }}')"
                    id="btn-{{ $id }}"
                    class="tab-btn px-6 py-3 rounded-full font-semibold text-sm transition-all duration-300 {{ $loop->first ? 'bg-emerald-700 text-white shadow-lg shadow-emerald-200/80 scale-105' : 'bg-white text-slate-600 hover:bg-emerald-50 hover:text-emerald-800 border border-emerald-100' }}">
                {{ $kelompok['nama_kelompok'] }}
            </button>
        @endforeach
    </div>

    <div class="relative min-h-[500px]">
        @foreach($dataKelompok as $id => $kelompok)
            <div id="content-{{ $id }}"
                 class="tab-content transition-all duration-500 {{ $loop->first ? 'opacity-100 translate-y-0 relative z-10' : 'opacity-0 translate-y-4 absolute top-0 left-0 w-full pointer-events-none' }}">

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach($kelompok['anggota'] as $orang)
                        <div onclick="openModal('{{ $orang['nama'] }}', '{{ $orang['nim'] }}', '{{ $orang['jurusan'] }}', '{{ $orang['angkatan'] }}', '{{ $orang['divisi'] }}', '{{ $orang['kontak'] }}', '{{ $orang['foto'] }}')"
                             class="bg-white border border-emerald-100 rounded-[1.75rem] overflow-hidden hover:-translate-y-2 hover:shadow-[0_22px_50px_-35px_rgba(15,118,110,0.3)] transition-all duration-300 group flex flex-col h-full cursor-pointer relative pt-8">

                            <div class="flex justify-center mb-4">
                                <div class="w-32 h-32 relative overflow-hidden rounded-full ring-4 ring-white shadow-md group-hover:ring-emerald-200 transition-all duration-300 bg-slate-100">
                                    <img src="{{ asset('images/' . $orang['foto']) }}"
                                         alt="Foto {{ $orang['nama'] }}"
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                         onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name={{ urlencode($orang['nama']) }}&background=0f766e&color=F8FAFC&size=256&font-family=Poppins';">
                                </div>
                            </div>

                            <div class="px-6 pb-6 text-center flex flex-col flex-grow">
                                <div class="mb-auto">
                                    <span class="inline-block px-4 py-1.5 bg-emerald-50 text-emerald-800 text-xs font-bold rounded-full mb-3">
                                        {{ $orang['divisi'] }}
                                    </span>
                                    <h4 class="font-display text-lg font-bold text-slate-800 mb-1 line-clamp-1" title="{{ $orang['nama'] }}">
                                        {{ $orang['nama'] }}
                                    </h4>
                                    <p class="text-sm font-medium text-slate-600 line-clamp-1" title="{{ $orang['jurusan'] }}">
                                        {{ $orang['jurusan'] }}
                                    </p>
                                </div>
                                <p class="text-xs text-slate-500 mt-4 pt-4 border-t border-slate-100 flex items-center justify-center gap-1 group-hover:text-emerald-700 transition-colors">
                                    Lihat Detail
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    {{-- Footer Identitas Kampus --}}
    <div class="mt-16 max-w-3xl mx-auto text-center bg-emerald-50/70 border border-emerald-100 rounded-2xl px-6 py-8">
        <img src="{{ asset('images/umblogo.png') }}" alt="Logo Universitas Muhammadiyah Bandung"
             class="h-14 w-14 object-contain mx-auto mb-3"
             onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=UMB&background=0f766e&color=F8FAFC&size=128&font-family=Poppins';">
        <p class="font-bold text-slate-800">Program Kuliah Kerja Nyata (KKN) Reguler Tahun 2026</p>
        <p class="text-sm text-slate-500 mt-1">Universitas Muhammadiyah Bandung — ditempatkan di Desa Pamulihan, Kecamatan Pamulihan</p>
    </div>
</section>

<div id="member-modal" class="fixed inset-0 z-[100] flex items-center justify-center bg-slate-900/60 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 px-5">
    <div class="absolute inset-0" onclick="closeModal()"></div>

    <div class="bg-white relative w-full max-w-md rounded-[2rem] shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300" id="modal-box">
        <button onclick="closeModal()" class="absolute top-4 right-4 w-8 h-8 flex items-center justify-center bg-white/25 hover:bg-white rounded-full text-slate-800 transition-colors z-20">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <div class="w-full relative pt-12 pb-8 flex flex-col items-center justify-center text-center px-6 overflow-hidden">
            <img id="modal-bg-img" src="" class="absolute inset-0 w-full h-full object-cover blur-xl scale-110 opacity-70" alt="">
            <div class="absolute inset-0 bg-gradient-to-b from-emerald-900/70 via-emerald-900/85 to-slate-900"></div>

            <div class="w-32 h-32 relative overflow-hidden rounded-full ring-4 ring-white shadow-xl mb-5 z-10 bg-slate-100">
                <img id="modal-img" src="" alt="Foto Anggota" class="w-full h-full object-cover">
            </div>

            <div class="z-10 relative">
                <span id="modal-divisi" class="inline-block px-3 py-1 bg-emerald-100 text-emerald-800 text-xs font-bold rounded-full mb-2"></span>
                <h3 id="modal-nama" class="font-display text-2xl font-bold text-white leading-tight"></h3>
                <p class="text-emerald-200 text-xs mt-1">Universitas Muhammadiyah Bandung • KKN Reguler 2026</p>
            </div>
        </div>

        <div class="p-6 space-y-4">
            <div>
                <p class="text-xs uppercase tracking-wider text-slate-500 font-semibold mb-1">Nomor Induk Mahasiswa (NIM)</p>
                <p id="modal-nim" class="text-slate-800 font-medium"></p>
            </div>
            <div>
                <p class="text-xs uppercase tracking-wider text-slate-500 font-semibold mb-1">Program Studi &amp; Angkatan</p>
                <p id="modal-jurusan" class="text-slate-800 font-medium"></p>
            </div>

            <div class="pt-4 border-t border-slate-200">
                <a id="modal-wa" href="#" target="_blank" class="flex items-center justify-center gap-2 w-full bg-[#25D366] hover:bg-[#1EBE5D] text-white font-semibold px-6 py-3 rounded-xl transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.101.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 3.825 0 6.938 3.112 6.938 6.937 0 3.825-3.113 6.938-6.938 6.938z"/></svg>
                    Hubungi via WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    function switchTab(targetId) {
        const buttons = document.querySelectorAll('.tab-btn');
        const contents = document.querySelectorAll('.tab-content');

        buttons.forEach(btn => {
            btn.classList.remove('bg-emerald-700', 'text-white', 'shadow-lg', 'shadow-emerald-200/80', 'scale-105');
            btn.classList.add('bg-white', 'text-slate-600', 'border', 'border-emerald-100', 'hover:bg-emerald-50', 'hover:text-emerald-800');
        });

        contents.forEach(content => {
            content.classList.remove('opacity-100', 'translate-y-0', 'relative', 'z-10');
            content.classList.add('opacity-0', 'translate-y-4', 'absolute', 'pointer-events-none');
        });

        const activeBtn = document.getElementById('btn-' + targetId);
        activeBtn.classList.remove('bg-white', 'text-slate-600', 'border', 'border-emerald-100', 'hover:bg-emerald-50', 'hover:text-emerald-800');
        activeBtn.classList.add('bg-emerald-700', 'text-white', 'shadow-lg', 'shadow-emerald-200/80', 'scale-105');

        const activeContent = document.getElementById('content-' + targetId);
        activeContent.classList.remove('opacity-0', 'translate-y-4', 'absolute', 'pointer-events-none');
        activeContent.classList.add('opacity-100', 'translate-y-0', 'relative', 'z-10');
    }

    function openModal(nama, nim, jurusan, angkatan, divisi, kontak, foto) {
        document.getElementById('modal-nama').innerText = nama;
        document.getElementById('modal-divisi').innerText = divisi;
        document.getElementById('modal-jurusan').innerText = jurusan + ' (Angkatan ' + angkatan + ')';
        document.getElementById('modal-nim').innerText = nim;

        const img = document.getElementById('modal-img');
        const bgImg = document.getElementById('modal-bg-img');

        const fotoUrl = "{{ asset('images/') }}/" + foto;
        img.src = fotoUrl;
        bgImg.src = fotoUrl;

        img.onerror = function() {
            const fallbackUrl = 'https://ui-avatars.com/api/?name=' + encodeURIComponent(nama) + '&background=0f766e&color=F8FAFC&size=512&font-family=Poppins';
            this.src = fallbackUrl;
            bgImg.src = fallbackUrl;
        };

        const waBtn = document.getElementById('modal-wa');
        if (kontak && kontak !== '-') {
            let waNumber = kontak;
            if (waNumber.startsWith('0')) {
                waNumber = '62' + waNumber.substring(1);
            }
            waBtn.href = 'https://wa.me/' + waNumber;
            waBtn.classList.remove('hidden');
        } else {
            waBtn.classList.add('hidden');
        }

        const modal = document.getElementById('member-modal');
        const modalBox = document.getElementById('modal-box');

        modal.classList.remove('opacity-0', 'pointer-events-none');
        modal.classList.add('opacity-100');

        modalBox.classList.remove('scale-95');
        modalBox.classList.add('scale-100');
    }

    function closeModal() {
        const modal = document.getElementById('member-modal');
        const modalBox = document.getElementById('modal-box');

        modal.classList.remove('opacity-100');
        modal.classList.add('opacity-0', 'pointer-events-none');

        modalBox.classList.remove('scale-100');
        modalBox.classList.add('scale-95');
    }
</script>

@endsection