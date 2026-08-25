<!DOCTYPE html>
<html lang="id" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judulHalaman ?? 'Beranda' }} — {{ $desa['nama_desa'] }}</title>
    <meta name="description" content="{{ $desa['tagline'] }}">

    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    {{-- Open Graph & Twitter Card — supaya link situs tampil rapi saat dibagikan ke WhatsApp/Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $desa['nama_desa'] }}">
    <meta property="og:title" content="{{ $judulHalaman ?? 'Beranda' }} — {{ $desa['nama_desa'] }}">
    <meta property="og:description" content="{{ $desa['tagline'] }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('apple-touch-icon.png') }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ $judulHalaman ?? 'Beranda' }} — {{ $desa['nama_desa'] }}">
    <meta name="twitter:description" content="{{ $desa['tagline'] }}">
    <meta name="twitter:image" content="{{ asset('apple-touch-icon.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500;600;700;800&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        /* Palet "Sawah Emas" — krem hangat, hijau sawah cerah, emas padi.
                           Mengganti skala bawaan Tailwind supaya seluruh halaman ikut berubah. */
                        emerald: {
                            50: '#f0f7ea', 100: '#dcecc9', 200: '#b8d999', 300: '#8ec066',
                            400: '#6ba43f', 500: '#4f8a2c', 600: '#3d6f22', 700: '#31581c',
                            800: '#284717', 900: '#213b14', 950: '#101f09',
                        },
                        slate: {
                            50: '#faf8f3', 100: '#f2ede1', 200: '#e2d8c2', 300: '#c9b892',
                            400: '#a68f5c', 500: '#8a7248', 600: '#6e5a38', 700: '#57472c',
                            800: '#3f3420', 900: '#2b2416', 950: '#1a1610',
                        },
                        amber: {
                            50: '#fffaeb', 100: '#fef0c2', 200: '#fdda7a', 300: '#fbc23e',
                            400: '#f5a81f', 500: '#e08a10', 600: '#b96b0c', 700: '#94530f',
                            800: '#784413', 900: '#653a15',
                        },
                        ink: { DEFAULT: '#3f3420', light: '#6e5a38', dark: '#2b2416' },
                        gold: { DEFAULT: '#e08a10', dark: '#94530f', light: '#fdda7a' },
                        sawah: { DEFAULT: '#4f8a2c', dark: '#31581c', light: '#b8d999' },
                        bata: { DEFAULT: '#b5502f', dark: '#7a3620', light: '#dba084' },
                        paper: { DEFAULT: '#fffaf0', alt: '#ffffff' },
                        inktext: '#3f3420',
                        mist: '#f5f1e0',
                    },
                    fontFamily: {
                        display: ['"Sora"', 'sans-serif'],
                        body: ['"Inter"', 'sans-serif'],
                        mono: ['"IBM Plex Mono"', 'monospace'],
                    },
                    boxShadow: {
                        soft: '0 22px 60px -30px rgba(224, 138, 16, 0.35)',
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="min-h-screen bg-paper text-slate-800 font-body antialiased selection:bg-amber-200 selection:text-slate-900">

    @include('partials.navbar')

    <main>
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>