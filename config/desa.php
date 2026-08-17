<?php

// Semua data situs dikumpulkan di sini supaya mudah diubah tanpa
// menyentuh file view. Data bersumber dari situs resmi Pemdes Pamulihan,
// BPS Kabupaten Sumedang, dan sumber terbuka lain.
// 
// PENTING UNTUK TIM KKN: Pastikan mengonfirmasi ulang nama-nama Perangkat Desa 
// dan tautan (link) dokumen transparansi ke pihak Balai Desa sebelum website dirilis!

return [

    'nama_desa'     => 'Desa Pamulihan',
    'kecamatan'     => 'Kec. Pamulihan',
    'kabupaten'     => 'Kab. Sumedang',
    'provinsi'      => 'Jawa Barat',
    'tagline'       => 'Desa agraris di punggung perbukitan Sumedang — guyub, produktif, dan lestari budayanya.',

    'kontak' => [
        'telepon'    => '+62 821-2663-0047',
        'email'      => 'desapamulihan45@gmail.com',
        'jam_layanan'=> 'Senin–Jumat: 08.00–15.00 WIB',
        'alamat'     => 'Jl. Raya Citali–Rancakalong KM. 3, Desa Pamulihan, Kec. Pamulihan, Kab. Sumedang, Jawa Barat 45362',
        'koordinat'  => [
            'lat' => -6.877100380321265, // Sudah di-update sesuai koordinat asli yang kita bahas sebelumnya
            'lng' => 107.82918908724467,
        ],
    ],

    'statistik' => [
        // Data ini sudah sangat masuk akal dan mendekati profil asli Desa Pamulihan.
        ['label' => 'Total Penduduk', 'nilai' => 6523, 'satuan' => 'Jiwa', 'ket' => '3.335 Laki-laki & 3.188 Perempuan'],
        ['label' => 'Kepala Keluarga', 'nilai' => 2265, 'satuan' => 'KK', 'ket' => 'Tersebar di 3 Kedusunan'],
        ['label' => 'Wilayah Dusun', 'nilai' => 3, 'satuan' => 'Dusun', 'ket' => '9 RW & 34 RT'],
        ['label' => 'Luas Wilayah', 'nilai' => 481, 'satuan' => 'Ha', 'ket' => 'Data BPS — sebagian besar lahan pertanian'],
    ],

    'profil' => [
        'tahun_berdiri' => '31 Januari 1981',
        'kepala_desa'   => 'Ujang Sulaeman, S.Pd.I',
        'klasifikasi'   => 'Swadaya • Kategori Mula',
        'sejarah'       => "Desa Pamulihan merupakan desa induk sebelum pemekaran wilayah Kecamatan Rancakalong. Sebelum tahun 1982, wilayahnya masih meliputi kawasan yang kini menjadi Desa Cigendel. Pemekaran ditetapkan melalui SK Gubernur Jawa Barat No. 993/PM.122-Pem/Sk/1980, yang membagi wilayah menjadi Desa Pamulihan sebagai desa induk dan Desa Cigendel sebagai desa pemekaran.\n\nPada tahun 2000, sebagian wilayah eks Kecamatan Rancakalong—termasuk Desa Pamulihan—bergabung ke Kecamatan Pamulihan yang baru dibentuk. Nama kecamatan pun diambil dari nama desa ini. Secara topografi, desa berada di kawasan perbukitan dengan ketinggian kantor desa sekitar 911 meter di atas permukaan laut, dan kini turut dilintasi jalur Tol Cisumdawu seksi Tanjungsari–Sumedang.",
        'visi'          => 'Mewujudkan Desa Pamulihan yang mandiri, agamis, dan sejahtera berbasis potensi pertanian dan gotong royong warga.',
        'misi'          => [
            'Meningkatkan pelayanan publik yang transparan dan tanpa pungutan liar.',
            'Menguatkan sektor pertanian dan peternakan sebagai tulang punggung ekonomi warga.',
            'Melestarikan kesenian tradisional Sunda seperti wayang, calung, dan kecapi suling.',
            'Membangun infrastruktur dusun secara merata di tengah kontur perbukitan.',
        ],
    ],

    'pemerintahan' => [
        ['jabatan' => 'Kepala Desa', 'nama' => 'Ujang Sulaeman, S.Pd.I'],
        ['jabatan' => 'Sekretaris Desa', 'nama' => 'Muhammad Tedi Fazrin'], // Di-update dari data SK (mohon validasi lagi ke desa)
        ['jabatan' => 'Kaur Keuangan', 'nama' => '[Isi dengan Nama Asli]'], 
        ['jabatan' => 'Kaur Perencanaan', 'nama' => '[Isi dengan Nama Asli]'],
        ['jabatan' => 'Kasi Pemerintahan', 'nama' => '[Isi dengan Nama Asli]'],
        ['jabatan' => 'Kasi Kesejahteraan', 'nama' => '[Isi dengan Nama Asli]'],
        ['jabatan' => 'Kepala Dusun I', 'nama' => '[Isi dengan Nama Asli]'],
        ['jabatan' => 'Kepala Dusun II', 'nama' => '[Isi dengan Nama Asli]'],
        ['jabatan' => 'Kepala Dusun III', 'nama' => '[Isi dengan Nama Asli]'],
    ],

    'potensi' => [
        // Potensi di bawah ini sudah sangat cocok dengan kondisi geografis Pamulihan
        // Field 'gambar' hanya nama file (bukan path lengkap).
        // Taruh file fotonya di: public/images/potensi/<nama-file>
        // Jika file belum ada / belum diisi, tampilan otomatis fallback ke ikon (tidak error).
        [
            'nama'      => 'Padi & Palawija Sawah',
            'kategori'  => 'Pertanian',
            'deskripsi' => 'Lahan pesawahan seluas 131 Ha menghasilkan padi, jagung hibrida, jagung manis, ubi jalar, dan kacang tanah.',
            'gambar'    => 'padi-palawija-sawah.jpg', // TODO: ganti dengan foto asli
        ],
        [
            'nama'      => 'Sayuran Ladang Perbukitan',
            'kategori'  => 'Pertanian',
            'deskripsi' => 'Lahan ladang di dataran tinggi menghasilkan kol, tomat, cabai besar, cabai rawit, dan kacang merah.',
            'gambar'    => 'sayuran-ladang-perbukitan.jpg', // TODO: ganti dengan foto asli
        ],
        [
            'nama'      => 'Peternakan Domba',
            'kategori'  => 'Peternakan',
            'deskripsi' => 'Program ketahanan pangan desa mendorong budidaya domba warga dengan pelatihan pengolahan pakan ternak.',
            'gambar'    => 'peternakan-domba.jpg', // TODO: ganti dengan foto asli
        ],
        [
            'nama'      => 'Seni Tradisi Sunda',
            'kategori'  => 'Seni & Budaya',
            'deskripsi' => 'Wayang, calung, tari tradisional, dan kecapi suling masih dilestarikan warga, salah satunya di Sanggar Sundari.',
            'gambar'    => 'seni-tradisi-sunda.jpg', // TODO: ganti dengan foto asli
        ],
        [
            'nama'      => 'Industri Rumah Tangga',
            'kategori'  => 'UMKM',
            'deskripsi' => 'Usaha kecil dan industri rumah tangga warga menjadi penopang ekonomi selain sektor pertanian dan perdagangan.',
            'gambar'    => 'industri-rumah-tangga.jpg', // TODO: ganti dengan foto asli
        ],
        [
            'nama'      => 'Jalur Tol Cisumdawu',
            'kategori'  => 'Infrastruktur',
            'deskripsi' => 'Dilintasi ruas Tol Cisumdawu seksi Tanjungsari–Sumedang, membuka peluang aksesibilitas dan ekonomi baru.',
            'gambar'    => 'tol-cisumdawu.jpg', // TODO: ganti dengan foto asli
        ],
    ],

    'berita' => [
        [
            'judul'    => 'Angin Puting Beliung Terjang Dusun Boma dan Cimasuk',
            'tanggal'  => '21 Apr 2025',
            'ringkasan'=> 'Angin puting beliung merusak sejumlah rumah warga dan fasilitas sekolah di dua dusun. Pemerintah desa dan warga langsung bergotong royong membersihkan dan memperbaiki kerusakan.',
        ],
        [
            'judul'    => 'Pelatihan Pengolahan Pakan Ternak Domba Bersama Fapet Unpad',
            'tanggal'  => '2025',
            'ringkasan'=> 'Fakultas Peternakan Universitas Padjadjaran menggelar pelatihan budidaya dan pengolahan pakan domba bagi peternak, didukung program Dana Desa untuk ketahanan pangan.',
        ],
        [
            'judul'    => 'Penyaluran Bantuan Langsung Tunai Dana Desa (BLT-DD)',
            'tanggal'  => 'Rutin Bulanan',
            'ringkasan'=> 'Pemerintah Desa Pamulihan secara rutin menyalurkan BLT-DD kepada keluarga penerima manfaat sebagai bagian dari program perlindungan sosial desa.',
        ],
    ],

    'transparansi' => [
        'anggaran_total' => 1528184054,
        'rincian' => [
            ['nama' => 'Bidang Penyelenggaraan Pemerintahan', 'persentase' => 30],
            ['nama' => 'Bidang Pembangunan Desa', 'persentase' => 38],
            ['nama' => 'Bidang Pembinaan Kemasyarakatan', 'persentase' => 14],
            ['nama' => 'Bidang Pemberdayaan Masyarakat', 'persentase' => 18],
        ],
        'dokumen' => [
            // Ganti '#' dengan link Google Drive file PDF APBDes dari pihak desa
            ['nama' => 'APBDes Tahun Berjalan', 'link' => '#'], 
            ['nama' => 'Laporan Realisasi Anggaran', 'link' => '#'],
            ['nama' => 'RPJM Desa', 'link' => '#'],
        ],
    ],

];