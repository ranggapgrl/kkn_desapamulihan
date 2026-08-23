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
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        /* Palet "Punggung Perbukitan" — mengganti skala bawaan Tailwind
                           supaya seluruh halaman ikut berubah tanpa perlu menulis ulang tiap kelas. */
                        emerald: {
                            50: '#eef4f0', 100: '#d9e6dd', 200: '#b3cec0', 300: '#87b09d',
                            400: '#5c917a', 500: '#3e7660', 600: '#2f5f4c', 700: '#264c3e',
                            800: '#1f3d32', 900: '#183028', 950: '#101f1a',
                        },
                        slate: {
                            50: '#f7f5f0', 100: '#efeade', 200: '#ded5c2', 300: '#bcb09a',
                            400: '#8e8370', 500: '#6c6353', 600: '#524b3f', 700: '#3f3a31',
                            800: '#2c2822', 900: '#1d1a16', 950: '#131110',
                        },
                        amber: {
                            50: '#fdf6e7', 100: '#f9e8c2', 200: '#f1d089', 300: '#e6b657',
                            400: '#d99e37', 500: '#c08326', 600: '#9c6a1f', 700: '#7a5219',
                            800: '#583b13', 900: '#3c290d',
                        },
                        ink: { DEFAULT: '#1e2a20', light: '#48594b', dark: '#121a14' },
                        gold: { DEFAULT: '#c08326', dark: '#7a5219', light: '#f1d089' },
                        sawah: { DEFAULT: '#3e7660', dark: '#264c3e', light: '#b3cec0' },
                        bata: { DEFAULT: '#8a4a34', dark: '#63341f', light: '#c98a6c' },
                        paper: { DEFAULT: '#f5f0e4', alt: '#fffdf9' },
                        inktext: '#3a352c',
                        mist: '#eef1e9',
                    },
                    fontFamily: {
                        display: ['"Fraunces"', 'serif'],
                        body: ['"Plus Jakarta Sans"', 'sans-serif'],
                        mono: ['"IBM Plex Mono"', 'monospace'],
                    },
                    boxShadow: {
                        soft: '0 22px 60px -30px rgba(38, 76, 62, 0.4)',
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