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
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Poppins:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        /* Palet "Netral Minimalis" — dominan putih/abu muda, dengan biru,
                           hijau, dan emas didesaturasi sebagai aksen tipis (teks/garis/badge). */
                        emerald: {
                            50: '#f4f7f6', 100: '#e6ece9', 200: '#cdd9d3', 300: '#a9bdb0',
                            400: '#7f9a85', 500: '#5f7a5f', 600: '#4a614a', 700: '#3d4f3e',
                            800: '#334133', 900: '#2b362b', 950: '#161d16',
                        },
                        slate: {
                            50: '#f8f9fa', 100: '#f1f3f4', 200: '#e2e6e9', 300: '#c7ced4',
                            400: '#9aa5ae', 500: '#71808c', 600: '#586573', 700: '#47525d',
                            800: '#333d47', 900: '#242b32', 950: '#14181d',
                        },
                        amber: {
                            50: '#faf7f0', 100: '#f2ead4', 200: '#e3cfa0', 300: '#d1b06e',
                            400: '#c19b52', 500: '#ad8a4d', 600: '#8c6f3c', 700: '#6f5730',
                            800: '#584527', 900: '#493a22',
                        },
                        ink: { DEFAULT: '#2c4356', light: '#3d5a73', dark: '#1e2f3d' },
                        gold: { DEFAULT: '#ad8a4d', dark: '#8c6f3c', light: '#d4c090' },
                        sawah: { DEFAULT: '#5f7a5f', dark: '#4a614a', light: '#a9bdb0' },
                        bata: { DEFAULT: '#a85c48', dark: '#7d4335', light: '#dba896' },
                        paper: { DEFAULT: '#ffffff', alt: '#f7f8f9' },
                        inktext: '#2c333a',
                        mist: '#eef1f3',
                    },
                    fontFamily: {
                        display: ['"Space Grotesk"', 'sans-serif'],
                        body: ['"Poppins"', 'sans-serif'],
                        mono: ['"IBM Plex Mono"', 'monospace'],
                    },
                    boxShadow: {
                        soft: '0 22px 60px -30px rgba(61, 90, 115, 0.25)',
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