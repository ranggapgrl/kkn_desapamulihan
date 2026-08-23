{{-- Tiga motif divider — default "kontur" (ciri khas situs, garis ketinggian
     perbukitan Pamulihan), "terasering" (sawah berundak), atau "kawung" (selingan batik) --}}
@php
    $motif = $motif ?? 'kontur';
@endphp

@if ($motif === 'kawung')
    <div class="w-full overflow-hidden leading-none select-none" aria-hidden="true">
        <svg class="w-full h-6 text-gold/40" preserveAspectRatio="none" viewBox="0 0 400 24" xmlns="http://www.w3.org/2000/svg">
            <pattern id="kawung" width="40" height="24" patternUnits="userSpaceOnUse">
                <circle cx="10" cy="12" r="6" fill="none" stroke="currentColor" stroke-width="1.2"/>
                <circle cx="30" cy="12" r="6" fill="none" stroke="currentColor" stroke-width="1.2"/>
                <circle cx="10" cy="0" r="6" fill="none" stroke="currentColor" stroke-width="1.2"/>
                <circle cx="10" cy="24" r="6" fill="none" stroke="currentColor" stroke-width="1.2"/>
                <circle cx="30" cy="0" r="6" fill="none" stroke="currentColor" stroke-width="1.2"/>
                <circle cx="30" cy="24" r="6" fill="none" stroke="currentColor" stroke-width="1.2"/>
            </pattern>
            <rect width="400" height="24" fill="url(#kawung)"/>
        </svg>
    </div>
@elseif ($motif === 'terasering')
    <div class="w-full overflow-hidden leading-none select-none" aria-hidden="true">
        <svg class="w-full h-7 text-paper-alt" preserveAspectRatio="none" viewBox="0 0 400 28" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 28 L40 8 L80 28 L120 8 L160 28 L200 8 L240 28 L280 8 L320 28 L360 8 L400 28 Z" fill="currentColor"/>
        </svg>
    </div>
@else
    {{-- Garis kontur — merepresentasikan lapisan ketinggian punggung perbukitan tempat desa berdiri --}}
    <div class="w-full overflow-hidden leading-none select-none bg-paper" aria-hidden="true">
        <svg class="w-full h-10 text-sawah/25" preserveAspectRatio="none" viewBox="0 0 800 40" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 30 Q 100 10, 200 26 T 400 22 T 600 30 T 800 18" fill="none" stroke="currentColor" stroke-width="1.4"/>
            <path d="M0 18 Q 120 34, 240 16 T 460 24 T 660 12 T 800 28" fill="none" stroke="currentColor" stroke-width="1.4" class="text-gold/25"/>
        </svg>
    </div>
@endif