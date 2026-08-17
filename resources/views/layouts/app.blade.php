<!DOCTYPE html>
<html lang="id" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judulHalaman ?? 'Beranda' }} — {{ $desa['nama_desa'] }}</title>
    <meta name="description" content="{{ $desa['tagline'] }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Memanggil Font Poppins dan JetBrains Mono -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@500;600&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ink: { DEFAULT: '#1B3358', light: '#2B4A73', dark: '#122340' },
                        gold: { DEFAULT: '#D8A13B', dark: '#B8842A', light: '#F0D9A6' },
                        sawah: { DEFAULT: '#5B7553', light: '#7C9970' },
                        maroon: { DEFAULT: '#7A3B2E' },
                        paper: { DEFAULT: '#FBF8F1', alt: '#F3EEE0' },
                        inktext: '#22303F',
                    },
                    fontFamily: {
                        // Font Poppins diterapkan sebagai font utama (display dan body)
                        display: ['"Poppins"', 'sans-serif'],
                        body: ['"Poppins"', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                }
            }
        }
    </script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-paper text-inktext font-body antialiased">

    @include('partials.navbar')

    <main>
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>