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
            'lat' => -6.877100380321265,
            'lng' => 107.82918908724467,
        ],
    ],

    'statistik' => [
        ['label' => 'Total Penduduk', 'nilai' => 6523, 'satuan' => 'Jiwa', 'ket' => '3.335 Laki-laki & 3.188 Perempuan'],
        ['label' => 'Kepala Keluarga', 'nilai' => 2265, 'satuan' => 'KK', 'ket' => 'Tersebar di 3 Kedusunan'],
        ['label' => 'Wilayah Dusun', 'nilai' => 3, 'satuan' => 'Dusun', 'ket' => '9 RW & 34 RT'],
        ['label' => 'Luas Wilayah', 'nilai' => 481, 'satuan' => 'Ha', 'ket' => 'Data BPS — sebagian besar lahan pertanian'],
    ],

    // PENTING: seluruh angka di bawah ini (data_umum, demografi, batas_wilayah,
    // penggunaan_lahan, sarana_prasarana) masih ESTIMASI berdasarkan data terbuka
    // & pola desa sejenis di Kab. Sumedang — WAJIB dikonfirmasi ke Balai Desa
    // Pamulihan sebelum website dipakai sebagai rujukan resmi.

    'data_umum' => [
        'kode_desa_pum'    => '3211102009',
        'tahun_pembentukan'=> '31 Januari 1981',
        'klasifikasi'      => 'Swadaya',
        'kategori'         => 'Mula',
        'tipologi_wilayah' => 'Pesawahan, Perladangan, Perkebunan, Peternakan',
    ],

    'demografi' => [
        'luas_wilayah_ha'   => 481,
        'jumlah_kk'         => 2265,
        'total_penduduk'    => 6523,
        'penduduk_lk'       => 3335,
        'penduduk_pr'       => 3188,
        'jumlah_dusun'      => 3,
        'jumlah_rw'         => 9,
        'jumlah_rt'         => 34,
        'komoditas_unggulan'=> 'Padi & Sayuran Dataran Tinggi',
    ],

    // Sumber: Wikipedia "Pamulihan, Pamulihan, Sumedang" & Sumedang Tandang
    // (sumedangtandang.com/direktori/detail/desa-pamulihan.htm). Sisi selatan
    // & barat menurut Sumedang Tandang dibatasi oleh aliran sungai — tetap
    // sebaiknya dikonfirmasi ulang ke Balai Desa sebelum publish.
    'batas_wilayah' => [
        ['arah' => 'Utara',   'desa' => 'Desa Sukasirnarasa (Kec. Rancakalong)', 'batas_alam' => '—'],
        ['arah' => 'Selatan', 'desa' => 'Desa Ciptasari',                        'batas_alam' => 'Dibatasi aliran sungai'],
        ['arah' => 'Barat',   'desa' => 'Desa Citali & Desa Sukawangi',          'batas_alam' => 'Dibatasi aliran sungai'],
        ['arah' => 'Timur',   'desa' => 'Desa Cigendel',                         'batas_alam' => '—'],
    ],

    'penggunaan_lahan' => [
        ['jenis' => 'Pemukiman / Pekarangan', 'luas_ha' => 0],
        ['jenis' => 'Lahan Persawahan',       'luas_ha' => 0],
        ['jenis' => 'Perkebunan Rakyat',      'luas_ha' => 0],
        ['jenis' => 'Ladang / Tegalan',       'luas_ha' => 0],
        ['jenis' => 'Tanah Kas Desa',         'luas_ha' => 0],
    ],

    'sarana_prasarana' => [
        ['nama' => 'Kantor Desa',       'detail' => '[Kondisi & tahun bangun]'],
        ['nama' => 'Poskesdes',         'detail' => '[Jumlah unit]'],
        ['nama' => 'Posyandu',          'detail' => '[Jumlah unit]'],
        ['nama' => 'Gedung Sekolah',    'detail' => '[Jumlah SD/SMP/dll]'],
        ['nama' => 'Masjid & Musala',   'detail' => '[Jumlah masing-masing]'],
        ['nama' => 'Sarana Air Bersih', 'detail' => '[PAMSIMAS / sumur, jumlah]'],
        ['nama' => 'Saluran Irigasi',   'detail' => '[Panjang meter terpasang]'],
    ],

    'geografis' => [
        'jarak_ke_kecamatan_km' => 3,
        'jarak_ke_kabupaten_km' => 26,
        'ketinggian_mdpl'       => 911,
    ],

    'sejarah_milestone' => [
        ['tahun' => '1980', 'keterangan' => 'SK Gubernur Jawa Barat No. 993/PM.122-Pem/Sk/1980 menetapkan pemekaran wilayah.'],
        ['tahun' => '1981', 'keterangan' => 'Desa Pamulihan resmi berdiri pada 31 Januari, dengan Desa Cigendel sebagai hasil pemekaran.'],
        ['tahun' => '1982', 'keterangan' => 'Wilayah eks-Desa Pamulihan yang kini menjadi Desa Cigendel resmi terpisah administratif.'],
        ['tahun' => '2000', 'keterangan' => 'Kecamatan Pamulihan dibentuk dari sebagian wilayah eks-Kecamatan Rancakalong; nama kecamatan diambil dari nama desa ini.'],
        ['tahun' => 'Kini', 'keterangan' => 'Dilintasi ruas Tol Cisumdawu seksi Tanjungsari–Sumedang, membuka peluang aksesibilitas dan ekonomi baru.'],
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
        ['jabatan' => 'Sekretaris Desa', 'nama' => 'Muhammad Tedi Fazrin'],
        ['jabatan' => 'Kaur Keuangan', 'nama' => '[Isi dengan Nama Asli]'], 
        ['jabatan' => 'Kaur Perencanaan', 'nama' => '[Isi dengan Nama Asli]'],
        ['jabatan' => 'Kasi Pemerintahan', 'nama' => '[Isi dengan Nama Asli]'],
        ['jabatan' => 'Kasi Kesejahteraan', 'nama' => '[Isi dengan Nama Asli]'],
        ['jabatan' => 'Kepala Dusun I', 'nama' => '[Isi dengan Nama Asli]'],
        ['jabatan' => 'Kepala Dusun II', 'nama' => '[Isi dengan Nama Asli]'],
        ['jabatan' => 'Kepala Dusun III', 'nama' => '[Isi dengan Nama Asli]'],
    ],

    'potensi' => [
        [
            'nama'      => 'Padi & Palawija Sawah',
            'kategori'  => 'Pertanian',
            'deskripsi' => 'Lahan pesawahan seluas 131 Ha menghasilkan padi, jagung hibrida, jagung manis, ubi jalar, dan kacang tanah.',
            'gambar'    => 'padi-palawija-sawah.jpg',
        ],
        [
            'nama'      => 'Sayuran Ladang Perbukitan',
            'kategori'  => 'Pertanian',
            'deskripsi' => 'Lahan ladang di dataran tinggi menghasilkan kol, tomat, cabai besar, cabai rawit, dan kacang merah.',
            'gambar'    => 'sayuran-ladang-perbukitan.jpg',
        ],
        [
            'nama'      => 'Peternakan Domba',
            'kategori'  => 'Peternakan',
            'deskripsi' => 'Program ketahanan pangan desa mendorong budidaya domba warga dengan pelatihan pengolahan pakan ternak.',
            'gambar'    => 'peternakan-domba.jpg',
        ],
        [
            'nama'      => 'Seni Tradisi Sunda',
            'kategori'  => 'Seni & Budaya',
            'deskripsi' => 'Wayang, calung, tari tradisional, dan kecapi suling masih dilestarikan warga, salah satunya di Sanggar Sundari.',
            'gambar'    => 'seni-tradisi-sunda.jpg',
        ],
        [
            'nama'      => 'Industri Rumah Tangga',
            'kategori'  => 'UMKM',
            'deskripsi' => 'Usaha kecil dan industri rumah tangga warga menjadi penopang ekonomi selain sektor pertanian dan perdagangan.',
            'gambar'    => 'industri-rumah-tangga.jpg',
        ],
        [
            'nama'      => 'Jalur Tol Cisumdawu',
            'kategori'  => 'Infrastruktur',
            'deskripsi' => 'Dilintasi ruas Tol Cisumdawu seksi Tanjungsari–Sumedang, membuka peluang aksesibilitas dan ekonomi baru.',
            'gambar'    => 'tol-cisumdawu.jpg',
        ],
    ],

    'berita' => [
        // Field 'gambar' hanya nama file (bukan path lengkap). Taruh di: public/images/berita/<nama-file>
        // 'keterangan_foto' & 'sumber' opsional — kalau kosong, halaman detail otomatis pakai teks default.

        [
            'slug'     => 'angin-puting-beliung-terjang-dusun-boma-dan-cimasuk',
            'judul'    => 'Angin Puting Beliung Terjang Dusun Boma dan Cimasuk',
            'tanggal'  => '21 Apr 2025',
            'ringkasan'=> 'Angin puting beliung merusak sejumlah rumah warga dan fasilitas sekolah di dua dusun. Pemerintah desa dan warga langsung bergotong royong membersihkan dan memperbaiki kerusakan.',
            'isi'      => "Bencana angin puting beliung melanda Dusun Boma dan Dusun Cimasuk, Desa Pamulihan, pada Senin sore, 21 April 2025, bersamaan dengan hujan deras yang mengguyur wilayah tersebut sejak siang hari. Empat rumah warga di Dusun Boma dilaporkan mengalami kerusakan cukup parah pada bagian atap.\n\nDi Dusun Cimasuk, fasilitas MCK dan sebagian ruang belajar milik Madrasah Ibtidaiyah Swasta Al Ba'ats turut terdampak. Danramil 1004 Tanjungsari, Kapten Inf Agus Hermawan, membenarkan kejadian tersebut dan menyatakan tidak ada korban jiwa, sementara kerugian material masih dalam proses pendataan.\n\nPemerintah Desa Pamulihan bersama perangkat dusun dan warga segera melakukan pendataan kerusakan serta gotong royong membersihkan puing dan material yang berserakan. Kepala Desa mengimbau warga untuk tetap waspada terhadap potensi cuaca ekstrem susulan, terutama menjelang musim pancaroba.",
            'gambar'   => 'puting-beliung-boma-cimasuk.jpg',
            'keterangan_foto' => 'Kondisi rumah warga di Dusun Boma pascaterjangan angin puting beliung, 21 April 2025.',
            'sumber'   => 'Dirangkum dari pemberitaan detikJabar, Jabar Ekspres, dan Tahu Ekspres Sumedang, serta konfirmasi Danramil 1004 Tanjungsari (April 2025).',
        ],
        [
            // PERINGATAN TIM KKN: sumber berita ini BELUM ditemukan/diverifikasi secara independen.
            // Mohon konfirmasi kebenaran & detail kegiatan ini langsung ke Balai Desa / pihak terkait
            // sebelum website dipakai sebagai rujukan resmi. Hapus atau ganti bila tidak dapat dikonfirmasi.
            'slug'     => 'pelatihan-pengolahan-pakan-ternak-domba-bersama-fapet-unpad',
            'judul'    => 'Pelatihan Pengolahan Pakan Ternak Domba Bersama Fapet Unpad',
            'tanggal'  => '2025',
            'ringkasan'=> 'Fakultas Peternakan Universitas Padjadjaran menggelar pelatihan budidaya dan pengolahan pakan domba bagi peternak, didukung program Dana Desa untuk ketahanan pangan.',
            'isi'      => "Dalam rangka meningkatkan kapasitas peternak lokal, Fakultas Peternakan Universitas Padjadjaran (Fapet Unpad) menggelar pelatihan pengolahan pakan ternak domba bagi warga Desa Pamulihan. Kegiatan ini merupakan bagian dari program pengabdian masyarakat kampus yang berkolaborasi dengan Pemerintah Desa.\n\nMateri pelatihan mencakup teknik fermentasi pakan, pemanfaatan limbah pertanian sebagai pakan alternatif, serta manajemen kesehatan ternak dasar. Program ini didukung alokasi Dana Desa untuk ketahanan pangan, sejalan dengan potensi peternakan domba yang terus berkembang di wilayah desa.\n\nPara peternak yang mengikuti pelatihan diharapkan dapat menekan biaya pakan sekaligus meningkatkan kualitas dan produktivitas ternak domba mereka.",
            'gambar'   => 'pelatihan-pakan-domba-fapet.jpg',
            'sumber'   => '[BELUM TERVERIFIKASI — mohon konfirmasi ke Balai Desa sebelum publish]',
        ],
        [
            'slug'     => 'penyaluran-bantuan-langsung-tunai-dana-desa-blt-dd',
            'judul'    => 'Penyaluran Bantuan Langsung Tunai Dana Desa (BLT-DD)',
            'tanggal'  => 'Rutin Bulanan',
            'ringkasan'=> 'Pemerintah Desa Pamulihan secara rutin menyalurkan BLT-DD kepada keluarga penerima manfaat sebagai bagian dari program perlindungan sosial desa.',
            'isi'      => "Pemerintah Desa Pamulihan secara rutin menyalurkan Bantuan Langsung Tunai Dana Desa (BLT-DD) kepada keluarga penerima manfaat setiap bulannya. Program ini merupakan bagian dari alokasi Dana Desa yang diarahkan untuk perlindungan sosial dan penanggulangan kemiskinan di tingkat desa.\n\nPenyaluran dilakukan secara langsung di kantor desa dengan melibatkan perangkat dusun untuk memastikan data penerima manfaat akurat dan tepat sasaran. Warga yang merasa berhak namun belum terdaftar dapat mengajukan usulan melalui Kepala Dusun masing-masing untuk diverifikasi dalam musyawarah desa.\n\nTransparansi penyaluran BLT-DD dapat dipantau warga melalui papan informasi di kantor desa maupun laman Transparansi pada website resmi ini.",
            'gambar'   => 'penyaluran-blt-dd.jpg',
            'keterangan_foto' => 'Penyaluran BLT-DD kepada keluarga penerima manfaat di kantor Desa Pamulihan.',
            'sumber'   => 'Rilis resmi Pemerintah Desa Pamulihan.',
        ],
        [
            'slug'     => 'pelantikan-ketua-rt-dan-ketua-rw-periode-2022-2027',
            'judul'    => 'Pelantikan Ketua RT dan Ketua RW Desa Pamulihan Periode 2022–2027',
            'tanggal'  => '23 Mar 2022',
            'ringkasan'=> 'Kepala Desa Pamulihan, Ujang Sulaeman, S.Pd.I, melantik jajaran Ketua RT dan RW se-Desa Pamulihan untuk masa bakti 2022–2027.',
            'isi'      => "Pada hari Rabu, 23 Maret 2022, Kepala Desa Pamulihan, Ujang Sulaeman, S.Pd.I, melantik jajaran Ketua Rukun Tetangga (RT) dan Ketua Rukun Warga (RW) se-Desa Pamulihan untuk masa bakti periode 2022–2027.\n\nPelantikan ini menjadi bagian dari penguatan struktur pemerintahan di tingkat dusun, mengingat peran RT dan RW yang strategis sebagai ujung tombak pelayanan dan penyampaian informasi kepada warga di 9 RW dan 34 RT yang tersebar di 3 kedusunan Desa Pamulihan.\n\nDetail lengkap acara dapat dilihat pada laman berita resmi Pemerintah Desa Pamulihan.",
            'gambar'   => 'pelantikan-rt-rw-2022.jpg',
            'sumber'   => 'Situs resmi Pemerintah Desa Pamulihan (desapamulihan.sumedangkab.go.id).',
        ],
        [
            'slug'     => 'pemberian-insentif-kader-posyandu-guru-mengaji-dan-guru-paud',
            'judul'    => 'Pemberian Insentif Kader Posyandu, Guru Mengaji, dan Guru PAUD',
            'tanggal'  => '24 Mar 2022',
            'ringkasan'=> 'Pemerintah Desa Pamulihan menyalurkan insentif kepada kader Posyandu, guru mengaji, dan guru PAUD sebagai bentuk apresiasi atas pengabdian mereka bagi warga.',
            'isi'      => "Pada Kamis, 24 Maret 2022, Pemerintah Desa Pamulihan menyalurkan insentif kepada tiga kelompok penggerak layanan dasar masyarakat: kader Posyandu, guru mengaji, dan guru PAUD yang bertugas di lingkungan desa.\n\nPemberian insentif ini merupakan bentuk apresiasi pemerintah desa atas dedikasi para kader dan pengajar dalam mendukung layanan kesehatan ibu dan anak, serta pendidikan keagamaan dan usia dini bagi warga Desa Pamulihan.\n\nProgram insentif semacam ini diharapkan dapat terus berlanjut sebagai dukungan nyata desa terhadap sumber daya manusia yang bekerja langsung di tengah masyarakat.",
            'gambar'   => 'insentif-kader-posyandu-guru.jpg',
            'sumber'   => 'Situs resmi Pemerintah Desa Pamulihan (desapamulihan.sumedangkab.go.id).',
        ],
    ],

    'layanan' => [
        'jam_pelayanan' => [
            ['hari' => 'Senin – Kamis', 'jam' => '08.00 – 15.00 WIB'],
            ['hari' => 'Jumat', 'jam' => '08.00 – 11.30 WIB'],
            ['hari' => 'Sabtu, Minggu & Hari Libur', 'jam' => 'Tutup'],
        ],
        'jenis_surat' => [
            [
                'nama'      => 'Surat Keterangan Tidak Mampu (SKTM)',
                'syarat'    => ['Fotokopi KTP & KK', 'Surat pengantar RT/RW', 'Mengisi formulir permohonan di kantor desa'],
                'estimasi'  => '1 hari kerja',
            ],
            [
                'nama'      => 'Surat Pengantar KTP/KK',
                'syarat'    => ['Fotokopi KK lama', 'Fotokopi KTP pemohon (jika ada perubahan data)', 'Surat pengantar RT/RW'],
                'estimasi'  => '1 hari kerja',
            ],
            [
                'nama'      => 'Surat Keterangan Domisili',
                'syarat'    => ['Fotokopi KTP & KK', 'Surat pengantar RT/RW'],
                'estimasi'  => '1 hari kerja',
            ],
            [
                'nama'      => 'Surat Keterangan Usaha (SKU)',
                'syarat'    => ['Fotokopi KTP', 'Surat pengantar RT/RW', 'Keterangan jenis & lokasi usaha'],
                'estimasi'  => '1–2 hari kerja',
            ],
            [
                'nama'      => 'Surat Pengantar Nikah (N1–N4)',
                'syarat'    => ['Fotokopi KTP & KK kedua calon', 'Surat pengantar RT/RW', 'Dokumen pendukung sesuai ketentuan KUA'],
                'estimasi'  => '1–2 hari kerja',
            ],
        ],
        'catatan' => 'Seluruh layanan administrasi di kantor desa tidak dipungut biaya (gratis). Warga yang mengetahui adanya pungutan liar dapat melapor melalui halaman Kontak.',
    ],

    'galeri' => [
        ['judul' => 'Gotong Royong Warga', 'kategori' => 'Kegiatan Warga', 'gambar' => 'gotong-royong.jpg'],
        ['judul' => 'Panen Raya Padi', 'kategori' => 'Pertanian', 'gambar' => 'panen-raya.jpg'],
        ['judul' => 'Posyandu Balita', 'kategori' => 'Kesehatan', 'gambar' => 'posyandu.jpg'],
        ['judul' => 'Pelatihan Pakan Ternak', 'kategori' => 'Peternakan', 'gambar' => 'pelatihan-ternak.jpg'],
        ['judul' => 'Kesenian Calung & Kecapi Suling', 'kategori' => 'Seni & Budaya', 'gambar' => 'kesenian-sunda.jpg'],
        ['judul' => 'Musyawarah Desa', 'kategori' => 'Pemerintahan', 'gambar' => 'musyawarah-desa.jpg'],
        ['judul' => 'Penyaluran BLT-DD', 'kategori' => 'Sosial', 'gambar' => 'blt-dd.jpg'],
        ['judul' => 'Kerja Bakti Irigasi Sawah', 'kategori' => 'Infrastruktur', 'gambar' => 'irigasi.jpg'],
    ],

    'produk_hukum' => [
        [
            'jenis'  => 'Peraturan Desa',
            'nomor'  => 'Perdes No. [Nomor] Tahun [Tahun]',
            'judul'  => 'Anggaran Pendapatan dan Belanja Desa (APBDes)',
            'tahun'  => '2025',
            'link'   => '#',
        ],
        [
            'jenis'  => 'Peraturan Desa',
            'nomor'  => 'Perdes No. [Nomor] Tahun [Tahun]',
            'judul'  => 'Rencana Pembangunan Jangka Menengah Desa (RPJM Desa)',
            'tahun'  => '2020',
            'link'   => '#',
        ],
        [
            'jenis'  => 'Keputusan Kepala Desa',
            'nomor'  => 'SK No. [Nomor] Tahun [Tahun]',
            'judul'  => 'Susunan Organisasi dan Tata Kerja Pemerintah Desa',
            'tahun'  => '2024',
            'link'   => '#',
        ],
        [
            'jenis'  => 'Keputusan Kepala Desa',
            'nomor'  => 'SK No. [Nomor] Tahun [Tahun]',
            'judul'  => 'Penetapan Data Keluarga Penerima Manfaat BLT Dana Desa',
            'tahun'  => '2025',
            'link'   => '#',
        ],
        [
            'jenis'  => 'Peraturan Desa',
            'nomor'  => 'Perdes No. [Nomor] Tahun [Tahun]',
            'judul'  => 'Rencana Kerja Pemerintah Desa (RKP Desa)',
            'tahun'  => '2025',
            'link'   => '#',
        ],
    ],

];