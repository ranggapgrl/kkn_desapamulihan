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
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@500;600;700;800&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        /* Palet "Portal Resmi" — navy institusional + aksen emas tipis,
                           mengganti skala bawaan Tailwind supaya seluruh halaman ikut berubah. */
                        emerald: {
                            50: '#eef2f7', 100: '#d7e0ec', 200: '#b0c1d9', 300: '#84a0c2',
                            400: '#5a7ea8', 500: '#3c6087', 600: '#2a4a6b', 700: '#1f3a56',
                            800: '#182d43', 900: '#132434', 950: '#0c1720',
                        },
                        slate: {
                            50: '#f8f9fa', 100: '#eef0f2', 200: '#dde1e5', 300: '#c1c7cd',
                            400: '#9aa3ac', 500: '#717b86', 600: '#565f69', 700: '#434b54',
                            800: '#2f353c', 900: '#1e2227', 950: '#131619',
                        },
                        amber: {
                            50: '#fdf8ec', 100: '#f8ecc9', 200: '#eeda93', 300: '#dfbf5c',
                            400: '#cda23a', 500: '#b3852a', 600: '#8f6820', 700: '#70511a',
                            800: '#523c14', 900: '#38290e',
                        },
                        ink: { DEFAULT: '#182d43', light: '#3c6087', dark: '#0c1720' },
                        gold: { DEFAULT: '#b3852a', dark: '#70511a', light: '#eeda93' },
                        sawah: { DEFAULT: '#3c6087', dark: '#1f3a56', light: '#b0c1d9' },
                        bata: { DEFAULT: '#8a2e2e', dark: '#5c1f1f', light: '#c98c8c' },
                        paper: { DEFAULT: '#f7f8fa', alt: '#ffffff' },
                        inktext: '#2f353c',
                        mist: '#eef2f7',
                    },
                    fontFamily: {
                        display: ['"Libre Franklin"', 'sans-serif'],
                        body: ['"Inter"', 'sans-serif'],
                        mono: ['"IBM Plex Mono"', 'monospace'],
                    },
                    boxShadow: {
                        soft: '0 22px 60px -30px rgba(24, 45, 67, 0.35)',
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