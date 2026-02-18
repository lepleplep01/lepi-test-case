@extends('layouts.app')
@section('title', 'Jasa Digital Marketing Agency - BDD')
@section('content')

    {{-- Hero Section --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <section class="bg-white pt-[120px] pb-20 md:pb-24">

        <div class="grid grid-cols-1 md:grid-cols-3 max-w-[1200px] mx-auto items-center">

            <!-- KIRI -->
            <div class="hidden md:flex justify-center">
                <img src="https://bolehdicoba.com/wp-content/uploads/2024/06/Group-40451-1.png"
                    class="w-full max-w-[360px] object-contain">
            </div>

            <!-- TENGAH -->
            <div class="text-center px-4">
                <h6 class="font-outfitserif text-bdd-footer text-[18px] mb-5">
                    GROW WITH US
                </h6>

                <h1
                    class="font-outfitserif text-[42px] md:text-[64px] font-semibold text-[#222] leading-[1.15] mb-6 max-w-2xl mx-auto">
                    Expand your brand through measurable Digital Strategies
                </h1>

                <p class="font-outfitserif text-[#666] text-base md:text-lg max-w-2xl mx-auto mb-8 leading-relaxed">
                    At BDD, we are players in the integrated digital marketing game, devoted to the pursuit of collective
                    sustainable growth that ensures lasting success. Our mission is to elevate your business to new heights
                    by exploring actionable possibilities.
                </p>

                <a href="{{ route('about') }}" class="btn-primary">
                    <span>Get to Know Us!</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- KANAN -->
            <div class="hidden md:flex justify-center">
                <img src="https://bolehdicoba.com/wp-content/uploads/2024/06/Group-40452-1.png"
                    class="w-full max-w-[360px] object-contain">
            </div>

        </div>

    </section>


    {{-- Client Logos Section --}}
    <section class="py-20 md:py-24 bg-white border-bdd-dark" x-data="{ activeTab: 'fashion' }">
        <div class="max-w-[1200px] mx-auto px-4">
            <div class="bg-white rounded-3xl border-2 border-bdd-dark p-8 md:p-15 overflow-hidden relative">
                <h3 class="font-outfitserif text-2xl md:text-[1.5rem] text-center text-[#222] mb-10">Over <span
                        class="font-outfitserif  text-bdd-green">800+</span> Business growing with Boleh Dicoba Digital</h3>
                <div class="flex items-center justify-center gap-4 md:gap-8 border-b border-gray-200 mb-10 pb-0">
                    @foreach (['fashion' => 'Fashion', 'fnb' => 'FnB', 'beauty' => 'Beauty', 'lifestyle' => 'Lifestyle', 'startup' => 'Startup & Other', 'corporate' => 'FMCGs & Corporations'] as $k => $v)
                        <button @click="activeTab='{{ $k }}'"
                            :class="activeTab === '{{ $k }}' ? 'border-bdd-blue text-bdd-blue' :
                                'border-transparent text-[#888] hover:text-[#222]'"
                            class="pb-3 text-[18px] font-medium border-b-2 whitespace-nowrap transition">{{ $v }}</button>
                    @endforeach
                </div>

                {{-- Fashion Logos --}}
                <div x-show="activeTab==='fashion'" x-transition x-data x-init="$nextTick(() => {
                    if (!window.fashionSwiper) {
                        window.fashionSwiper = new Swiper('.fashionSwiper', {
                            slidesPerView: '6',
                            spaceBetween: 15,
                            loop: true,
                            speed: 5000,
                            autoplay: {
                                delay: 0,
                                disableOnInteraction: false
                            },
                            freeMode: true,
                            freeModeMomentum: false,
                        });
                    }
                })"
                    class="swiper-container fashionSwiper py-4">
                    <div class="swiper-wrapper">
                        @foreach (['Hoops', 'M231', 'calla', 'love-fair', 'cottonink', 'eiger', 'MKS-1', 'Spotec', 'brodo', 'Jiniso', 'dauky', 'elzatta', 'mayoutfit', 'Viola', 'Ripcurl', 'NCR', 'CRSL', 'Sophie-Martin'] as $logo)
                            <div class="swiper-slide flex justify-center items-center w-auto">
                                <img src="https://bolehdicoba.com/wp-content/uploads/2024/03/Property-1{{ $logo }}.png"
                                    alt="{{ $logo }}"
                                    class="h-10 md:h-12 object-contain opacity-100 hover:opacity-100 transition">
                            </div>
                        @endforeach
                    </div>
                </div>


                {{-- FnB Logos --}}
                <div x-show="activeTab==='fnb'" x-transition x-data x-init="$nextTick(() => {
                    if (!window.fnbSwiper) {
                        window.fnbSwiper = new Swiper('.fnbSwiper', {
                            slidesPerView: '3', // otomatis sesuai lebar logo
                            spaceBetween: 10,
                            loop: true, // terus berulang
                            speed: 5000,
                            autoplay: {
                                delay: 0, // tanpa jeda
                                disableOnInteraction: false
                            },
                            freeMode: true,
                            freeModeMomentum: false
                        });
                    }
                })"
                    class="swiper-container fnbSwiper py-4">
                    <div class="swiper-wrapper">
                        @foreach (['Sukha', 'Holycow', 'Richeese', 'Boca-Rica', 'Primaflakes'] as $logo)
                            <div class="swiper-slide flex justify-center items-center w-auto">
                                <img src="https://bolehdicoba.com/wp-content/uploads/2024/03/Property-1{{ $logo }}.png"
                                    alt="{{ $logo }}"
                                    class="h-10 md:h-12 object-contain opacity-100 hover:opacity-100 transition">
                            </div>
                        @endforeach
                    </div>
                </div>


                {{-- Beauty Logos --}}
                <div x-show="activeTab==='beauty'" x-transition x-data x-init="$nextTick(() => {
                    if (!window.beautySwiper) {
                        window.beautySwiper = new Swiper('.beautySwiper', {
                            slidesPerView: '6', // lebar otomatis sesuai logo
                            spaceBetween: 10, // jarak antar logo
                            loop: true, // loop terus-menerus
                            speed: 5000, // kecepatan scroll
                            autoplay: {
                                delay: 0, // scroll terus tanpa jeda
                                disableOnInteraction: false
                            },
                            freeMode: true, // smooth scroll continuous
                            freeModeMomentum: false // hentikan momentum agar scroll konsisten
                        });
                    }
                })"
                    class="swiper-container beautySwiper py-4">
                    <div class="swiper-wrapper">
                        @foreach (['Npure', 'Studio-Tropik', 'ESQA', 'shinzui', 'evangeline', 'HMNS', 'Kitshy', 'Kiva', 'dear-me-beauty', 'rose-all-day', 'elsheskin', 'hayyu-clinic', 'nadifa-clinic', 'layr', 'fordive', 'emina', 'BG-Skin'] as $logo)
                            <div class="swiper-slide inline-flex items-center w-auto">
                                <img src="https://bolehdicoba.com/wp-content/uploads/2024/03/Property-1{{ $logo }}.png"
                                    alt="{{ $logo }}"
                                    class="h-10 md:h-12 w-auto object-contain opacity-100 hover:opacity-100 transition">
                            </div>
                        @endforeach
                    </div>
                </div>


                {{-- Lifestyle Logos --}}
                <div x-show="activeTab==='lifestyle'" x-transition x-data x-init="$nextTick(() => {
                    if (!window.lifestyleSwiper) {
                        window.lifestyleSwiper = new Swiper('.lifestyleSwiper', {
                            slidesPerView: '6', // jumlah logo terlihat
                            spaceBetween: 10, // jarak antar logo
                            loop: true, // carousel terus berulang
                            speed: 5000, // kecepatan scroll
                            autoplay: {
                                delay: 0, // scroll terus tanpa jeda
                                disableOnInteraction: false
                            },
                            freeMode: true, // smooth scroll continuous
                            freeModeMomentum: false // hentikan momentum agar scroll konsisten
                        });
                    }
                })"
                    class="swiper-container lifestyleSwiper py-4">
                    <div class="swiper-wrapper">
                        @foreach (['Domibed', 'UBS-lifestyle', 'Desty', 'Lotus-archi', 'Mom-Uung', 'mama-Bear', 'Moro', 'Eyesight', 'Satu-momen', 'Digimo', 'infarm', 'Seolmi', 'Slimsure', 'Moell'] as $logo)
                            <div class="swiper-slide flex justify-center items-center">
                                <img src="https://bolehdicoba.com/wp-content/uploads/2024/03/Property-1{{ $logo }}.png"
                                    alt="{{ $logo }}"
                                    class="h-10 md:h-12 object-contain opacity-100 hover:opacity-100 transition">
                            </div>
                        @endforeach
                    </div>
                </div>


                {{-- Startup Logos --}}
                <div x-show="activeTab==='startup'" x-transition x-data x-init="$nextTick(() => {
                    if (!window.startupSwiper) {
                        window.startupSwiper = new Swiper('.startupSwiper', {
                            slidesPerView: '6', // lebar otomatis sesuai logo
                            spaceBetween: 15, // jarak antar logo
                            loop: true, // scroll terus berulang
                            speed: 5000, // kecepatan scroll
                            autoplay: {
                                delay: 0, // scroll tanpa jeda
                                disableOnInteraction: false
                            },
                            freeMode: true, // smooth scroll continuous
                            freeModeMomentum: false // hentikan momentum agar scroll konsisten
                        });
                    }
                })"
                    class="swiper-container startupSwiper py-4">
                    <div class="swiper-wrapper">
                        @foreach (['Domibed', 'Prosleep', 'Hawkeye', 'kasanoa', 'UBS-lifestyle', 'Deltomed', 'Lotus-archi', 'Satu-momen', 'Ivory-Bridal', 'mahatex', 'Octopus', 'Eyesight', 'NP-Cunsult', 'Digitravel'] as $logo)
                            <div class="swiper-slide inline-flex items-center w-auto">
                                <img src="https://bolehdicoba.com/wp-content/uploads/2024/03/Property-1{{ $logo }}.png"
                                    alt="{{ $logo }}"
                                    class="h-10 md:h-12 w-auto object-contain opacity-100 hover:opacity-100 transition">
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Corporate Logos --}}
                <div x-show="activeTab==='corporate'" x-transition x-data x-init="$nextTick(() => {
                    if (!window.corporateSwiper) {
                        window.corporateSwiper = new Swiper('.corporateSwiper', {
                            slidesPerView: '6', // lebar otomatis sesuai logo
                            spaceBetween: 15, // jarak antar logo
                            loop: true, // scroll terus berulang
                            speed: 5000, // kecepatan scroll
                            autoplay: {
                                delay: 0, // scroll tanpa jeda
                                disableOnInteraction: false
                            },
                            freeMode: true, // smooth scroll continuous
                            freeModeMomentum: false // hentikan momentum agar scroll konsisten
                        });
                    }
                })"
                    class="swiper-container corporateSwiper py-4">
                    <div class="swiper-wrapper">
                        @foreach (['Axa', 'UNHCR', 'IDX', 'Logitech', 'tokocrypto', 'Gowork', 'Jobstreet', 'Grab', 'Djarum', 'Sidomuncul', 'Grand-duta', 'Sido-muncul-natural', 'deltomedd', 'Amoda', 'DNVB', 'Tsurvey', 'NPC-office', 'Kantor-Gunawa'] as $logo)
                            <div class="swiper-slide inline-flex items-center w-auto">
                                <img src="https://bolehdicoba.com/wp-content/uploads/2024/03/Property-1{{ $logo }}.png"
                                    alt="{{ $logo }}"
                                    class="h-10 md:h-12 w-auto object-contain opacity-100 hover:opacity-100 transition">
                            </div>
                        @endforeach
                    </div>
                </div>
    </section>

    


    {{-- Stats / We On Numbers --}}
    <section class="py-20 md:py-24 bg-[#f7f4f2]">
        <div class="max-w-[1200px] mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                <div class="text-left pt-3">
                    <p class="text-bdd-green text-xs font-semibold uppercase tracking-[0.2em] mb-4">WE ON NUMBERS</p>
                    <h3 class="font-outfitserif text-3xl md:text-[2.4rem] text-[#222] mb-4 leading-tight">We Establish an
                        Ecosystem to Enhance
                        Brand Growth.</h3>
                    <p class="text-[#666] text-sm max-w-[38rem] mb-14 leading-relaxed">Beyond conventional marketing norms,
                        we craft innovative strategies infused with data-driven insights to create comprehensive campaigns
                        that resonate with target audiences for 800+ clients.</p>
                </div>

                {{-- Right: cards grid to match target layout --}}
                <div class="stats-right-grid">
                    @php
                        $cards = [
                            [
                                'label' => '800+',
                                'meta' => 'Clients Growing',
                                'color' => '#8A7C9B',
                                'col' => 'span 3',
                                'row' => 'span 1',
                            ],
                            [
                                'label' => '140+',
                                'meta' => 'Teams of Professional',
                                'color' => '#FFCB87',
                                'col' => 'span 2',
                                'row' => 'span 1',
                            ],
                            [
                                'label' => '50+',
                                'meta' => 'Meta & Google Certified Professional',
                                'color' => '#88A7DA',
                                'col' => 'span 2',
                                'row' => 'span 1',
                            ],
                            [
                                'label' => '400 Mio+',
                                'meta' => 'Online Engagement Performance',
                                'color' => '#76CFC3',
                                'col' => 'span 3',
                                'row' => 'span 1',
                            ],
                            [
                                'label' => 'USD 15 Mio+',
                                'meta' => 'Advertising Spend',
                                'color' => '#FD8E85',
                                'col' => 'span 3',
                                'row' => 'span 1',
                            ],
                            [
                                'label' => '+And',
                                'meta' => 'Many More',
                                'color' => '#EEE9DF',
                                'col' => 'span 2',
                                'row' => 'span 1',
                            ],
                        ];
                    @endphp

                    <div class="grid grid-cols-5 gap-5">
                        @foreach ($cards as $c)
                            <div class="stat-card reveal-visible"
                                style="grid-column: {{ $c['col'] }}; grid-row: {{ $c['row'] }}; --accent: {{ $c['color'] }};">
                                <div class="stat-card-inner">
                                    <div class="stat-number font-outfitserif">{{ $c['label'] }}</div>
                                    <div class="stat-meta text-[11px] font-outfitserif text-[#666]">{{ $c['meta'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
    </section>


    {{-- Purple Gradient Hover Effect for Stats Cards --}}
    <style>
        /* stat card base with purple gradient hover effect */
        .stat-card {
            background: #fff;
            border: 1.5px solid #222;
            border-radius: 12px;
            position: relative;
            overflow: hidden;
            box-shadow: 3px 3px 0px #222;
            transition: transform 0.2s ease, box-shadow 0.3s ease;
            isolation: isolate;
            min-height: 115px;
            display: flex;
            align-items: center;
        }

        /* pseudo-element untuk efek ungu dari kanan ke kiri */
        .stat-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #a855f7, #7e22ce, #6b21a5);
            z-index: -1;
            transition: transform 0.75s ease;
            transform: translateX(100%);
            /* mulai di kanan (tersembunyi) */
            will-change: transform;
        }

        /* warna gradien berbeda untuk setiap card sesuai Brand BDD */
        .stat-card:nth-child(1)::before {
            background: #8A7C9B;
        }

        .stat-card:nth-child(2)::before {
            background: #FFCB87;
        }

        .stat-card:nth-child(3)::before {
            background: #88A7DA;
        }

        .stat-card:nth-child(4)::before {
            background: #76CFC3;
        }

        .stat-card:nth-child(5)::before {
            background: #FD8E85;
        }

        .stat-card:nth-child(6)::before {
            background: #F4F2F0;
            transform: translateX(0);
        }

        /* saat hover, warna teks tetap hitam sesuai request user */
        .stat-card:not(:nth-child(6)):hover .stat-number,
        .stat-card:not(:nth-child(6)):hover .stat-meta {
            color: #111 !important;
        }

        /* saat hover, ungu meluncur dari kanan ke kiri sampai penuh */
        .stat-card:not(:nth-child(6)):hover::before {
            transform: translateX(0);
        }

        /* konten tetap terbaca saat hover */
        .stat-card-inner {
            position: relative;
            z-index: 1;
            padding: 24px 22px;
            text-align: left;
            transition: color 0.3s ease;
            width: 100%;
        }

        .stat-card .stat-number {
            font-size: 2.1rem;
            font-weight: 700;
            color: #111;
            line-height: 1;
            transition: color 0.3s ease;
            margin-bottom: 14px;
        }

        .stat-card .stat-meta {
            margin-top: 0;
            color: #666;
            transition: color 0.3s ease;
            line-height: 1.35;
            font-size: 0.85rem;
            max-width: 180px;
        }

        /* vertical accent stripe on right side */
        .stat-card::after {
            content: '';
            position: absolute;
            right: -8px;
            top: 12%;
            height: 76%;
            width: 14px;
            border-radius: 6px;
            background: var(--accent, #7b6cc4);
            z-index: 10;
            transition: background 0.75s ease;
        }

        /* stripe colors match brand - card 1 */
        .stat-card:nth-child(1)::after {
            background: #8A7C9B;
        }

        /* stripe card 2 */
        .stat-card:nth-child(2)::after {
            background: #FFCB87;
        }

        /* stripe card 3 */
        .stat-card:nth-child(3)::after {
            background: #88A7DA;
        }

        /* stripe card 4 */
        .stat-card:nth-child(4)::after {
            background: #76CFC3;
        }

        /* stripe card 5 */
        .stat-card:nth-child(5)::after {
            background: #FD8E85;
        }

        /* stripe card 6 */
        .stat-card:nth-child(6)::after {
            background: #EEE9DF;
        }



        /* partner badges hover */
        .partner-badge {
            transition: transform 220ms ease, box-shadow 220ms ease;
        }

        .partner-badge:hover {
            transform: translateY(-6px) scale(1.02);
        }

        /* reveal animation */
        .reveal {
            opacity: 0;
            transform: translateY(12px);
            transition: opacity 420ms cubic-bezier(.2, .9, .2, 1), transform 420ms cubic-bezier(.2, .9, .2, 1);
        }

        .reveal.reveal-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* achievement card hover */
        .card-hover {
            transition: transform 260ms ease, box-shadow 260ms ease;
        }

        .card-hover:hover {
            transform: translateY(-6px);
        }
    </style>

    <script>
        (function() {
            var revealObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal-visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15
            });

            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.reveal').forEach(function(el) {
                    revealObserver.observe(el);
                });
            });
        })();
    </script>



    {{-- Achievements --}}


    <x-achievements-custom />


    {{-- Why Choose Us --}}
    <section class="py-20 md:py-24 bg-white">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                {{-- Image Column --}}
                <div class="relative order-2 lg:order-1">
                    <img src="https://bolehdicoba.com/wp-content/uploads/2024/06/Group-40343-7.png" alt="Why Choose Us"
                        class="w-full h-auto rounded-3xl shadow-lg">
                </div>

                {{-- Content Column --}}
                <div class="order-1 lg:order-2">
                    <p class="font-outfit text-[#999] text-[11px] font-semibold uppercase tracking-[0.25em] mb-4">
                        WHY CHOOSE US
                    </p>

                    <h2
                        class="font-outfit text-[32px] md:text-[42px] lg:text-[44px] text-[#222] mb-6 leading-[1.2]">
                        It's not about how much budget you spent, but how you spend them.
                    </h2>

                    <p class="font-outfit text-[#666] text-[16px] md:text-base mb-5 leading-[1.3]">
                        Embracing a focus of sustainable growth, we prioritise cultivating long-term partnerships, ensuring
                        your brand’s growth aligns with effective practices. Together, we create a positive impact that goes
                        beyond immediate gains, making a meaningful difference in the lives of your customers and the market
                        you serve.
                    </p>

                    {{-- Accordion --}}
                    <div x-data="{ active: null }" class="space-y-0">
                        @php
                            $whyItems = [
                                [
                                    'Meaningful Growth',
                                    'https://bolehdicoba.com/wp-content/uploads/2024/03/Group-40532.png',
                                    'Trust the process in elevating your business by enhancing every step of the way, guided by a team of professionals.',
                                ],
                                [
                                    'Collaborative Partnership',
                                    'https://bolehdicoba.com/wp-content/uploads/2024/03/Group-40530-1.png',
                                    'Company values meet potential augmentation, create an exciting connection towards propitious business development.',
                                ],
                                [
                                    'Perceptive Exploration',
                                    'https://bolehdicoba.com/wp-content/uploads/2024/03/Group-40529.png',
                                    "We're not just a player in this industry; we're visionaries. Watch our unique exploration and discover what others overlook.",
                                ],
                            ];
                        @endphp

                        @foreach ($whyItems as $i => $item)
                            <div class="relative bg-[#f8f9fa] transition-all duration-300"
                                :class="active === {{ $i }} ? 'bg-white' : ''">

                                {{-- Garis Vertikal di Kiri - Selalu Terlihat --}}
                                <div class="absolute left-0 top-0 bottom-0 w-[3px] transition-all duration-300"
                                    :class="active === {{ $i }} ? 'bg-[#4A90E2]' : 'bg-[#e0e0e0]'"></div>

                                <button @click="active = active === {{ $i }} ? null : {{ $i }}"
                                    class="flex items-center w-full py-6 px-8 text-left group transition-all duration-200 relative">
                                    <div class="flex items-center gap-5">
                                        <div class="w-[52px] h-[52px] flex items-center justify-center flex-shrink-0 transition-transform duration-300"
                                            :class="active === {{ $i }} && 'scale-110'">
                                            <img src="{{ $item[1] }}" alt="{{ $item[0] }}"
                                                class="w-full h-full object-contain">
                                        </div>
                                        <h4 class="font-outfit font-semibold text-[#1a1a1a] text-[18px] md:text-[19px] transition-colors duration-200 leading-tight"
                                            :class="active === {{ $i }} && 'text-[#4A90E2]'">
                                            {{ $item[0] }}
                                        </h4>
                                    </div>
                                </button>

                                <div x-show="active === {{ $i }}"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                                    x-transition:enter-end="opacity-100 transform translate-y-0"
                                    x-transition:leave="transition ease-in duration-200"
                                    x-transition:leave-start="opacity-100 transform translate-y-0"
                                    x-transition:leave-end="opacity-0 transform -translate-y-2" x-cloak
                                    style="display: none;">
                                    <div class="px-8 pb-6 pt-0">
                                        <p class="font-outfit text-[15px] text-[#666] leading-[1.75] pl-[72px]">
                                            {{ $item[2] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>


    {{-- Services with Sticky Card Stacking Animation --}}

    <section class="py-20 md:py-24 bg-white" id="services-section">
        <div class="max-w-[1200px] mx-auto px-4">
            <!-- Flex container: 2 kolom -->
            <div class="flex flex-col md:flex-row md:justify-between gap-8 md:gap-12">

                <!-- Bagian Kiri: OUR SERVICES + Heading (tetap di atas) -->
                <div class="md:w-1/2 text-left">
                    <p
                        class="font-outfitserif text-bdd-dark[#7B6CC4] text-xs font-semibold uppercase tracking-[0.2em] mb-4 scroll-animate">
                        OUR SERVICES
                    </p>
                    <h3 class="font-outfitserif text-2xl md:text-[2.2rem] text-[#111] leading-tight mb-3 scroll-animate">
                        We Offer a Wide Services<br>
                        Aimed to Support your<br>
                        Business
                    </h3>
                </div>

                <!-- Bagian Kanan: Deskripsi dengan margin-top agar lebih turun -->
                <div class="md:w-1/2 text-left md:text-left">
                    <p class="font-outfitserif text-[#666] text-xm leading-relaxed scroll-animate md:mt-30">
                        It may surprise you, but digital marketing is not a single strategy,<br>
                        it covers a lot of spectrum, but don't worry, we got you!
                    </p>
                </div>
            </div>

            <div class="services-stack">
                @php
                    $services = [
                        [
                            'Digital Advertising',
                            'Reach your optimum growth through Digital Advertising with actionable and impactful strategies.',
                            route('services.digital-advertising'),
                            'https://bolehdicoba.com/wp-content/uploads/2024/07/Frame-770432-2.png',
                            '#C8D6EE',
                        ],
                        [
                            'Creative Content & Live Shopping',
                            'Performance creative brings the data- and tech-driven process\r\nthat designed to amplify the impact of the creative itself',
                            route('services.performance-creative'),
                            'https://bolehdicoba.com/wp-content/uploads/2024/07/Group-40596-1.png',
                            '#222222',
                        ],
                        [
                            'Web Development & Maintenance',
                            'We design and develop the most suitable website for your business to help you sell your products and services effectively.',
                            route('services.website-development'),
                            'https://bolehdicoba.com/wp-content/uploads/2024/07/Group-40597-1.png',
                            '#C0E9E3',
                        ],
                        [
                            'Search Engine Optimization',
                            'SEO is a long term investment in marketing to drive organic traffic and skyrocket website rank.',
                            route('services.seo'),
                            'https://bolehdicoba.com/wp-content/uploads/2024/07/Group-40598-1.png',
                            '#C9C2D1',
                        ],
                        [
                            'Professional Services',
                            'Growth Hack is the art of choosing the right audience, offer and strategy. Will you trust us to guide you through it?',
                            route('services.professional-service'),
                            'https://bolehdicoba.com/wp-content/uploads/2024/07/Group-40599-1.png',
                            '#FECBC7',
                        ],
                        [
                            'Community Program Development',
                            'We help the business to retain customers, and encourages them to explore more of your products and services.',
                            route('services.community-program'),
                            'https://bolehdicoba.com/wp-content/uploads/2024/07/Group-40600-1.png',
                            '#FFE7C8',
                        ],
                        [
                            'Digital Marketing Training by Boleh Belajar',
                            'Tailored training program guided by industry experts and professionals.',
                            route('services.training'),
                            'https://bolehdicoba.com/wp-content/uploads/2024/07/Group-40601-1.png',
                            '#F1EDE5',
                        ],
                    ];
                @endphp
                @foreach ($services as $idx => $s)
                    <div class="service-sticky-card mb-6"
                        style="background: {{ $s[4] }}; top: {{ 90 + $idx * 20 }}px; z-index: {{ 10 + $idx }};"
                        data-card-index="{{ $idx }}">
                        <div class="grid grid-cols-1 md:grid-cols-2 items-center min-h-[350px] md:min-h-[420px]">
                            {{-- Text side --}}
                            <div
                                class="p-8 md:p-12 text-left order-2 md:order-1 {{ $s[4] === '#222222' ? 'text-white' : '' }}">
                                <h4
                                    class="font-outfitserif font-bold text-3xl md:text-[2.5rem] lg:text-[3.2rem] {{ $s[4] === '#222222' ? 'text-white' : 'text-[#222]' }} mb-5 leading-tight">
                                    {{ $s[0] }}</h4>
                                <p
                                    class="font-outfitserif {{ $s[4] === '#222222' ? 'text-gray-300' : 'text-[#444]' }} text-[0.95rem] md:text-base mb-10 leading-relaxed max-w-md">
                                    {{ $s[1] }}
                                </p>
                                <a href="{{ $s[2] }}" class="btn-primary">
                                    See Detail Service
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                            {{-- Image side --}}
                            <div class="order-1 md:order-2 flex items-center justify-center p-6 md:p-10">
                                <img src="{{ $s[3] }}" alt="{{ $s[0] }}" class="w-full max-w-md">
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- Spacer so last card can fully unstick --}}
                <div style="height: 40px;"></div>
            </div>
        </div>
    </section>


    <!-- Custom Style untuk Pagination -->
    <style>
        .swiper-pagination {
            position: relative;
            margin-top: 20px;
            bottom: auto !important;
            /* override posisi absolut default */
        }

        .swiper-pagination-bullet {
            background: #ccc;
            opacity: 1;
            width: 6px;
            height: 6px;
            margin: 0 4px;
        }

        .swiper-pagination-bullet-active {
            background: #000 !important;
        }
    </style>

    <!-- Our Space Section -->
    <section class="py-20 md:py-24 bg-white">
        <div class="max-w-[1200px] mx-auto px-4">
            <h2 class="font-outfitserif text-2xl md:text-[2rem] text-[#222] text-center mb-3">Our Space - Where Ideas
                Take Flight
            </h2>
            <p class="font-outfit text-[#666] text-sm text-center max-w-xl mx-auto mb-10">Step into BDD's Agency — where
                strategy meets imagination. A space designed for collaboration, innovation, and bringing bold ideas to life.
            </p>

            <!-- Swiper Container -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach (['K65C5783', 'K65C6068', 'K65C7243', 'K65C7343', 'K65C5474', 'rgqymvpzefbfms03pbfj', 'grzuzsktcxecllzxxr6r', 'eeeqhfqzu3t14ddvxkkl'] as $img)
                        <div class="swiper-slide">
                            <div class="aspect-rectangle overflow-hidden rounded-sm">
                                <img src="https://bolehdicoba.com/wp-content/uploads/2025/02/{{ $img }}-scaled.webp"
                                    alt="BDD Office"
                                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination (dots) di dalam container, tapi dengan CSS diatur ke bawah -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Initialize Swiper -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.mySwiper', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: false, // tidak loop agar pagination sesuai jumlah slide
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true, // dots bisa diklik
                },
                // Tidak ada navigation, tidak ada autoplay
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 12,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 16,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                    },
                }
            });
        });
    </script>



    <!-- Swiper CSS (pastikan sudah ada di atas, jika belum tambahkan) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Custom Style untuk Pagination (sama seperti sebelumnya) -->
    <style>
        .swiper-pagination {
            position: relative;
            margin-top: 20px;
            bottom: auto !important;
        }

        .swiper-pagination-bullet {
            background: #ccc;
            opacity: 1;
            width: 8px;
            height: 8px;
            margin: 0 4px;
        }

        .swiper-pagination-bullet-active {
            background: #000 !important;
        }
    </style>

    <!-- Live Studio Section dengan Swiper -->
    <section class="py-20 md:py-24 bg-[#f7f4f2]">
        <div class="max-w-[1200px] mx-auto px-4">
            <h2 class="font-outfitserif text-2xl md:text-[2rem] text-[#222] text-center mb-3">Our Live Studio – Lights,
                Camera, Conversion!</h2>
            <p class="font-outfit text-[#666] text-sm text-center max-w-2xl mx-auto mb-10">BDD's state-of-the-art studio is
                built for high-impact live streaming and content production. From brands to creators, we turn every session
                into a performance that sells.</p>

            <!-- Swiper Container -->
            <div class="swiper liveSwiper">
                <div class="swiper-wrapper">
                    @foreach (['rpjytqsehhtnzfuubk5h', 'ai30bdaygyygklwd0qzo', 'hszihff55j6xx2lriyly', 'kqczncp8weskziezifev', 'lynpf4051tpbo6imi2jb', 'm3hibq7thfioruqzkbrk', 'm5r9ehqcse4ryvnxyybj', 'owfdizawyrmrrzenlpf6', 'vh4optmciqrjpqm2eyc2', 'wzbisivbh2k6sqiejtes'] as $img)
                        <div class="swiper-slide">
                            <div class="aspect-square overflow-hidden rounded-sm">
                                <img src="https://bolehdicoba.com/wp-content/uploads/2025/02/{{ $img }}-scaled.webp"
                                    alt="BDD Studio"
                                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination (dots) -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Swiper JS (pastikan sudah ada di footer) -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper untuk Live Studio -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.liveSwiper', {
                slidesPerView: 2, // mobile: 2 slide (sesuai grid-cols-2 asli)
                spaceBetween: 12,
                loop: false,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 12,
                    },
                    768: {
                        slidesPerView: 3, // tablet: 3 slide
                        spaceBetween: 16,
                    },
                    1024: {
                        slidesPerView: 4, // desktop: 4 slide (bisa diubah ke 5 jika mau)
                        spaceBetween: 20,
                    },
                }
            });
        });
    </script>

    {{-- Programs --}}
    <section class="py-20 md:py-24 bg-[#f7f4f2]">
        <div class="max-w-[1200px] mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div>
                    <p class="font-outfitserif text-bdd-green text-xs font-semibold uppercase tracking-[0.2em] mb-3">OUR
                        PROGRAM</p>
                    <h3 class="font-outfitserif text-2xl md:text-[1.85rem] text-[#222] mb-4 leading-snug">We Offer More
                        Than
                        Meets The Eye</h3>
                    <p class="text-[#666] text-sm mb-8 leading-relaxed">As your go-to digital marketing partner to
                        support
                        your brand business, we manage to provide integrated programmes within the company to
                        resonate our
                        values externally, as we keep on spreading our wings to influence the industry.</p>
                    <div x-data="{ active: 0 }" class="space-y-3">
                        @php $programs = [['Events', 'NEW!', 'https://bolehdicoba.com/wp-content/uploads/2024/03/Group-40249.png', 'As one of the players in the industry, being dexterous and adaptive are keys. Generating and expanding networks has become one of our values, as lists of events and collaborations from our notable media and partners are displayed.', 'https://bolehdicoba.com/program/events/'], ['Breakfast Club', '', 'https://bolehdicoba.com/wp-content/uploads/2024/03/Group-40251.png', '"GOOD FOOD ENDS WITH GOOD TALK" - Geoffrey Neighor. We bring you one of the most relaxed yet productive sharing sessions during breakfast time.', 'https://bolehdicoba.com/program/breakfast-club/'], ['Bulletin Report by BDD', '', 'https://bolehdicoba.com/wp-content/uploads/2024/03/Group-40252-1.png', 'Throughout our journey in the industry since its establishment in 2017, we have encountered numerous challenges and collaborated with brands from various industries.', 'https://bolehdicoba.com/program/bulletin/']]; @endphp
                        @foreach ($programs as $i => $p)
                            <div
                                class="border-2 border-[#222] rounded-xl bg-white overflow-hidden shadow-[3px_3px_0px_#222]">
                                <button @click="active=active==={{ $i }}?null:{{ $i }}"
                                    class="flex items-center justify-between w-full p-4 text-left">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ $p[2] }}" alt="{{ $p[0] }}" class="w-8 h-8">
                                        <h4 class="font-semibold text-sm text-[#222]">{{ $p[0] }}</h4>
                                        @if ($p[1])
                                            <span
                                                class="px-2 py-0.5 text-[10px] font-bold bg-[#FC5649] text-white rounded-full">{{ $p[1] }}</span>
                                        @endif
                                    </div>
                                    <svg class="w-5 h-5 text-bdd-blue transition-all duration-300" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14"
                                            x-show="active !== {{ $i }}" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                    </svg>
                                </button>
                                <div x-show="active==={{ $i }}" x-collapse
                                    x-transition:enter="transition ease-out duration-200 transform"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in duration-150 transform"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 -translate-y-1">
                                    <div class="px-4 pb-4">
                                        <p class="text-sm text-[#666] mb-3 leading-relaxed">{{ $p[3] }}
                                        </p>
                                        <a href="{{ $p[4] }}"
                                            class="inline-flex items-center gap-1 text-xs font-semibold text-bdd-blue hover:underline">
                                            Explore More
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <img src="https://bolehdicoba.com/wp-content/uploads/2024/06/Group-40343-8.png" alt="Our Program"
                        class="w-full rounded-2xl">
                </div>
            </div>
        </div>
    </section>


    {{-- Case Studies --}}
    <section class="py-16 md:py-24 bg-white overflow-hidden">
        <div class="max-w-[1200px] mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-20">
                <!-- Left Content: Title & Button -->
                <div class="w-full lg:w-[32%] flex flex-col justify-center">
                    <p class="font-outfitserif text-[#7b6cc4] text-[10px] font-bold uppercase tracking-[0.2em] mb-4">CASE
                        STUDY</p>
                    <h3 class="font-outfitserif text-3xl md:text-[2.5rem] font-semibold text-[#222] leading-tight mb-10">
                        Explore more about our partner success stories</h3>

                    <a href="{{ route('case-study') }}"
                        class="inline-flex items-center justify-between gap-3 px-6 py-3.5 bg-bdd-gold text-[#222] font-bold text-sm border-2 border-[#222] rounded-lg shadow-[4px_4px_0px_#222] hover:shadow-[1px_1px_0px_#222] hover:translate-x-[2px] hover:translate-y-[2px] transition-all w-fit">
                        See More Success Stories
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <!-- Right Content: Slider -->
                <div class="w-full lg:w-[68%] relative">

                    <div class="swiper caseStudySwiper overflow-hidden">
                        <div class="swiper-wrapper">
                            @php
                                $cases = [
                                    [
                                        'title' =>
                                            'Offline-Focused, Digitally-Activated: How Click & Collect Delivered 30% of Monthly Web Revenue',
                                        'desc' =>
                                            'Unlock growth by activating untapped eCommerce features like Click & Collect.',
                                        'img' =>
                                            'https://bolehdicoba.com/wp-content/uploads/2025/04/Colorbox-Post-Featured.webp',
                                        'logo' =>
                                            'https://bolehdicoba.com/wp-content/uploads/2025/04/colorbox-logo.png',
                                        'cat' => 'Digital Advertising',
                                    ],
                                    [
                                        'title' =>
                                            'Consistently crushed expectations with an average ROAS of 10x per month, soaring past our 8x target.',
                                        'desc' =>
                                            'Discover how our actionable strategies works brilliantly for Logitech.',
                                        'img' =>
                                            'https://bolehdicoba.com/wp-content/uploads/2024/04/Rectangle-9899-3.png',
                                        'logo' =>
                                            'https://bolehdicoba.com/wp-content/uploads/2024/04/Group-40398-1.png',
                                        'cat' => 'Digital Advertising',
                                    ],
                                    [
                                        'title' =>
                                            'Generated a monthly three-fold increase in the quantity and quality of leads.',
                                        'desc' => 'Axa Insurance Indonesia achieved a remarkable threefold increase.',
                                        'img' =>
                                            'https://bolehdicoba.com/wp-content/uploads/2024/04/Rectangle-9899.png',
                                        'logo' => 'https://bolehdicoba.com/wp-content/uploads/2024/04/image-301-1.png',
                                        'cat' => 'Digital Advertising',
                                    ],
                                ];
                            @endphp
                            @foreach ($cases as $c)
                                <div class="swiper-slide h-auto">
                                    <div
                                        class="bg-white rounded-xl overflow-hidden border border-[#222] transition-all h-full flex flex-col group">
                                        <div class="relative h-60 overflow-hidden">
                                            <img src="{{ $c['img'] }}" alt="Case Study"
                                                class="w-full h-full object-cover">
                                        </div>
                                        <!-- Category Strip -->
                                        <div class="bg-[#f7f4f2] py-2 text-center border-b border-[#222]">
                                            <span
                                                class="text-[10px] font-bold text-[#222] uppercase tracking-wider">{{ $c['cat'] }}</span>
                                        </div>
                                        <div class="p-6 grow flex flex-col gap-3">
                                            <div class="h-8 flex items-center">
                                                <img src="{{ $c['logo'] }}" alt="Logo"
                                                    class="h-6 w-fit object-contain">
                                            </div>
                                            <h4
                                                class="font-bold text-[1.1rem] text-[#222] leading-snug underline decoration-1 underline-offset-[6px] group-hover:text-bdd-blue transition-colors">
                                                {{ $c['title'] }}</h4>
                                            <p class="text-[13px] text-[#666] leading-relaxed grow">{{ $c['desc'] }}
                                            </p>
                                            <a href="#"
                                                class="inline-flex items-center gap-1 text-sm font-bold text-[#222] hover:text-bdd-blue transition-all">
                                                Read The Story
                                                <svg class="w-4 h-4 translate-y-[-1px]" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2.5" d="M7 17L17 7M17 7H7M17 7V17" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Unique Teal Navigation: Slides along a bounded track -->
                    <div class="mt-16 flex flex-col gap-4">
                        <div class="relative h-1 flex items-center w-full max-w-[700px]">
                            <!-- Inner Track Container with padding to prevent icon overflow -->
                            <div class="relative w-full mx-12 h-px bg-gray-300">
                                <!-- The Sliding Handle (Navigation Circle) -->
                                <div class="case-study-nav-handle absolute top-1/2 left-0 flex flex-col items-center z-20 cursor-grab active:cursor-grabbing select-none"
                                    style="left: 0%; transform: translate(-50%, -38%); transition: left 0.3s ease-out;">
                                    <div
                                        class="w-20 h-20 bg-[#33b8a5] rounded-full flex items-center justify-center border-2 border-[#222] shadow-[4px_4px_0px_#222] relative gap-4 mb-2 pointer-events-auto">
                                        <button
                                            class="case-study-prev p-0 hover:scale-110 transition-transform outline-none pointer-events-auto">
                                            <svg class="w-5 h-5 text-[#222]" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                    d="M15 18l-6-6 6-6" />
                                            </svg>
                                        </button>
                                        <button
                                            class="case-study-next p-0 hover:scale-110 transition-transform outline-none pointer-events-auto">
                                            <svg class="w-5 h-5 text-[#222]" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                    d="M9 6l6 6-6 6" />
                                            </svg>
                                        </button>
                                    </div>
                                    <span
                                        class="text-[13px] font-bold text-[#222] whitespace-nowrap translate-y-2">Slide!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof Swiper !== 'undefined') {
                const swiper = new Swiper('.caseStudySwiper', {
                    slidesPerView: 1.1,
                    spaceBetween: 24,
                    loop: true,
                    navigation: {
                        nextEl: '.case-study-next',
                        prevEl: '.case-study-prev',
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1.5,
                        },
                        1024: {
                            slidesPerView: 2.1,
                        }
                    },
                    on: {
                        init: function() {
                            updateProgress(this);
                        },
                        slideChange: function() {
                            updateProgress(this);
                        }
                    }
                });

                function updateProgress(s) {
                    const handle = document.querySelector('.case-study-nav-handle');
                    if (handle && !handle.isDragging) {
                        const progress = s.progress * 100;
                        handle.style.left = progress + '%';
                    }
                }

                // Dragging logic for the handle
                const handle = document.querySelector('.case-study-nav-handle');
                const track = handle?.parentElement;

                if (handle && track) {
                    let isDragging = false;

                    const onDrag = (e) => {
                        if (!isDragging) return;

                        const rect = track.getBoundingClientRect();
                        const x = (e.clientX || e.touches[0].clientX) - rect.left;
                        let progress = Math.min(Math.max(x / rect.width, 0), 1);

                        // Disable transition during drag for smoothness
                        handle.style.transition = 'none';
                        handle.style.left = (progress * 100) + '%';

                        // Update Swiper
                        const totalTranslate = swiper.maxTranslate() - swiper.minTranslate();
                        const currentTranslate = swiper.minTranslate() + (totalTranslate * progress);
                        swiper.setTranslate(currentTranslate);
                        swiper.updateProgress();
                    };

                    const startDrag = () => {
                        isDragging = true;
                        handle.isDragging = true;
                        document.addEventListener('mousemove', onDrag);
                        document.addEventListener('touchmove', onDrag);
                        document.addEventListener('mouseup', endDrag);
                        document.addEventListener('touchend', endDrag);
                    };

                    const endDrag = () => {
                        isDragging = false;
                        handle.isDragging = false;
                        handle.style.transition = 'left 0.3s ease-out';
                        document.removeEventListener('mousemove', onDrag);
                        document.removeEventListener('touchmove', onDrag);
                        document.removeEventListener('mouseup', endDrag);
                        document.removeEventListener('touchend', endDrag);

                        // Snap to nearest slide
                        const currentTranslate = swiper.translate;
                        swiper.setTransition(300);
                        swiper.translateTo(currentTranslate, 300, true, false);
                        swiper.updateProgress();
                    }

                    handle.addEventListener('mousedown', startDrag);
                    handle.addEventListener('touchstart', startDrag);

                    // Re-add progress listeners for card dragging
                    swiper.on('progress', () => updateProgress(swiper));
                    swiper.on('setTransition', (s, duration) => {
                        if (handle && !handle.isDragging) {
                            handle.style.transition = `left ${duration}ms ease-out`;
                        }
                    });
                }

                // Initialize News & Blog Swiper
                const newsSwiper = new Swiper('.newsBlogSwiper', {
                    slidesPerView: 1.1,
                    spaceBetween: 24,
                    loop: false,
                    navigation: {
                        nextEl: '.news-blog-next',
                        prevEl: '.news-blog-prev',
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1.5
                        },
                        1024: {
                            slidesPerView: 3.2
                        }
                    },
                    on: {
                        init: function() {
                            updateNewsProgress(this);
                        },
                        slideChange: function() {
                            updateNewsProgress(this);
                        },
                        progress: function() {
                            updateNewsProgress(this);
                        }
                    }
                });

                function updateNewsProgress(s) {
                    const handle = document.querySelector('.news-blog-nav-handle');
                    if (handle && !handle.isDragging) {
                        const progress = s.progress;
                        handle.style.left = (progress * 100) + '%';
                    }
                }

                // Dragging logic for News Handle
                const newsHandle = document.querySelector('.news-blog-nav-handle');
                const newsTrack = newsHandle?.parentElement;
                if (newsHandle && newsTrack) {
                    let isDragging = false;
                    const onDrag = (e) => {
                        if (!isDragging) return;
                        const rect = newsTrack.getBoundingClientRect();
                        const x = (e.clientX || (e.touches && e.touches[0].clientX)) - rect.left;
                        let progress = Math.min(Math.max(x / rect.width, 0), 1);
                        newsHandle.style.transition = 'none';
                        newsHandle.style.left = (progress * 100) + '%';
                        const totalTranslate = newsSwiper.maxTranslate() - newsSwiper.minTranslate();
                        const currentTranslate = newsSwiper.minTranslate() + (totalTranslate * progress);
                        newsSwiper.setTranslate(currentTranslate);
                        newsSwiper.updateProgress();
                    };
                    const startDrag = () => {
                        isDragging = true;
                        newsHandle.isDragging = true;
                        document.addEventListener('mousemove', onDrag);
                        document.addEventListener('touchmove', onDrag);
                        document.addEventListener('mouseup', endDrag);
                        document.addEventListener('touchend', endDrag);
                    };
                    const endDrag = () => {
                        isDragging = false;
                        newsHandle.isDragging = false;
                        newsHandle.style.transition = 'left 0.3s ease-out';
                        document.removeEventListener('mousemove', onDrag);
                        document.removeEventListener('touchmove', onDrag);
                        document.removeEventListener('mouseup', endDrag);
                        document.removeEventListener('touchend', endDrag);
                        const currentTranslate = newsSwiper.translate;
                        newsSwiper.setTransition(300);
                        newsSwiper.translateTo(currentTranslate, 300, true, false);
                        newsSwiper.updateProgress();
                    };
                    newsHandle.addEventListener('mousedown', startDrag);
                    newsHandle.addEventListener('touchstart', startDrag);
                }
            }
        });
    </script>


    {{-- Testimonials --}}
    <section class="py-16 md:py-24 bg-[#f8f9fa] overflow-hidden">
        <div class="max-w-[1200px] mx-auto px-4 text-center mb-16">
            <p class="font-outfitserif text-bdd-footer text-[10px] font-bold uppercase tracking-[0.2em] mb-4">FROM OUR
                NOTABLE CLIENTS</p>
            <h3
                class="font-outfitserif text-3xl md:text-[2.5rem] font-semibold text-[#222] leading-tight max-w-2xl mx-auto">
                800+ business have experienced the result
            </h3>
        </div>

        @php
            $testimonials = [
                [
                    'i' => 'L',
                    'n' => 'Lotus Archi',
                    'c' => '#565c77',
                    't' =>
                        'Kita sudah jalan 2 tahun dengan pelayanan dari tim BDD dan cukup puas dengan pelayanan yang diberikan. Adanya insight setiap bulan dan performance online sale yang perlahan-lahan mulai ada peningkatan juga jadi faktor yang mempertahankan kerja sama antara brand Lotus Archi Gold dan juga BDD.',
                ],
                [
                    'i' => 'H',
                    'n' => 'Holycow',
                    'c' => '#877a52',
                    't' =>
                        'Terima kasih banyak ya BDD untuk service digital marketingnya yang ciamik! Kami sangat terbantu dengan deliverables yang sudah diberikan BDD pada perkembangan presensi digital kami.',
                ],
                [
                    'i' => 'K',
                    'n' => 'Kitschy',
                    'c' => '#6cf674',
                    't' =>
                        'Sangat senang dengan team BDD yang responsif dan komunikatif, sangat bisa kasih suggestion untuk improvement Kitschy.',
                ],
                [
                    'i' => 'C',
                    'n' => 'CRSL',
                    'c' => '#171d43',
                    't' =>
                        'Selama jalan 3 tahun, sangat terbantu, ada dampak yang cukup signifikan dalam meningkat sales apalagi CPASnya. Sudah oke dari segi rekomendasi dan komunikasi.',
                ],
                [
                    'i' => 'C',
                    'n' => 'COTTONINK',
                    'c' => '#523330',
                    't' =>
                        "BDD sangat aktif buat ngasih insight dan rekomendasi terkait ads, Selama jalan kurang lebih 3 tahun udah nemu formula winning campaign nya, Dari sisi performance juga cukup oke, teknis pengerjaan dan inisiatif strategi nya bagus.\n\nOverall puas dengan BDD lewat service ads dan TikTok live nya. Sangat terbantu dari sisi digital marketing dan semoga bisa semakin growth lagi kedepannya.",
                ],
                [
                    'i' => 'A',
                    'n' => 'Axa Insurance',
                    'c' => '#4d7bc8',
                    't' =>
                        'Performance digital marketing dari BDD sangat membantu kami dalam mencapai target leads yang berkualitas tinggi.',
                ],
                [
                    'i' => 'L',
                    'n' => 'Logitech',
                    'c' => '#33b8a5',
                    't' =>
                        'Kerjasama yang luar biasa dalam meningkatkan brand awareness dan engagement di platform digital.',
                ],
            ];
            // Split into two rows
            $row1 = array_slice($testimonials, 0, 4);
            $row2 = array_slice($testimonials, 3);
        @endphp

        <!-- Row 1: Scrolling Left (Atas ke Kiri) -->
        <div class="flex mb-10">
            <div class="flex gap-6 animate-scroll hover:[animation-play-state:paused]">
                @foreach (array_merge($row1, $row1) as $t)
                    <div class="w-[320px] md:w-[450px] shrink-0">
                        <div
                            class="bg-white rounded-xl p-8 border-2 border-[#222] shadow-[4px_4px_0px_#222] h-full flex flex-col hover:shadow-[2px_2px_0px_#222] hover:translate-x-[2px] hover:translate-y-[2px] transition-all">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 rounded-full flex items-center justify-center text-white font-bold text-base"
                                    style="background-color: {{ $t['c'] }};">
                                    {{ $t['i'] }}
                                </div>
                                <h5 class="font-bold text-[#222] text-sm">{{ $t['n'] }}</h5>
                            </div>
                            <p class="text-[13px] text-[#555] italic leading-relaxed text-left grow">
                                &ldquo;{{ $t['t'] }}&rdquo;
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Row 2: Scrolling Right (Bawah ke Kanan) -->
        <div class="flex">
            <div class="flex gap-6 animate-scroll-reverse hover:[animation-play-state:paused]">
                @foreach (array_merge($row2, $row2) as $t)
                    <div class="w-[320px] md:w-[450px] shrink-0">
                        <div
                            class="bg-white rounded-xl p-8 border-2 border-[#222] shadow-[4px_4px_0px_#222] h-full flex flex-col hover:shadow-[2px_2px_0px_#222] hover:translate-x-[2px] hover:translate-y-[2px] transition-all">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 rounded-full flex items-center justify-center text-white font-bold text-base"
                                    style="background-color: {{ $t['c'] }};">
                                    {{ $t['i'] }}
                                </div>
                                <h5 class="font-bold text-[#222] text-sm">{{ $t['n'] }}</h5>
                            </div>
                            <p class="text-[13px] text-[#555] italic leading-relaxed text-left grow">
                                &ldquo;{{ $t['t'] }}&rdquo;
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-50% - 12px));
            }
        }

        @keyframes scroll-reverse {
            0% {
                transform: translateX(calc(-50% - 12px));
            }

            100% {
                transform: translateX(0);
            }
        }

        .animate-scroll {
            animation: scroll 40s linear infinite;
        }

        .animate-scroll-reverse {
            animation: scroll-reverse 40s linear infinite;
        }
    </style>


    {{-- News & Blog --}}
    <section class="py-16 md:py-24 bg-white overflow-hidden">
        <div class="max-w-[1200px] mx-auto px-4 lg">
            <!-- Header Content: Title & Action Button -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                <div>
                    <p class="font-outfitserif text-bdd-green text-[10px] font-bold uppercase tracking-[0.2em] mb-4">NEWS &
                        BLOG</p>
                    <h3 class="font-outfitserif text-3xl md:text-[2.5rem] font-semibold text-[#222] leading-tight mb-4">
                        The Hub of Innovation and Creativity
                    </h3>
                    <p class="font-outfitserif text-[#666] text-sm max-w-xl">Stay up-to-date with our latest findings and
                        discoveries in digital marketing industry, business management, and brand growth strategies.</p>
                </div>
                <div class="shrink-0">
                    <a href="{{ route('news-blog') }}" class="btn-primary group">
                        Explore More Articles
                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Full Width Slider Content -->
            <div class="relative w-full">
                <div class="swiper newsBlogSwiper overflow-hidden lg:overflow-visible!">
                    <div class="swiper-wrapper">
                        @php
                            $posts = [
                                [
                                    '11 Feb 2026',
                                    'Kenapa Brand Tetap Butuh Strategic Partner di Era AI untuk Tumbuh Lebih Cepat',
                                    'Brand sudah pakai AI tapi belum optimal? Cari tahu kenapa strategic partner tetap dibutuhkan agar AI lebih berdampak.',
                                    'https://bolehdicoba.com/wp-content/uploads/2026/02/Rayza-Strategic-Partner-scaled.jpg',
                                ],
                                [
                                    '11 Feb 2026',
                                    'AI Search Mengubah SEO: Apa yang Berubah dan Apa Dampaknya',
                                    'Di era AI Search, traffic bukan satu-satunya indikator sukses SEO.',
                                    'https://bolehdicoba.com/wp-content/uploads/2026/02/Ai-search-scaled.webp',
                                ],
                                [
                                    '10 Feb 2026',
                                    'Monthly Report: Bukan Sekadar Laporan, Tapi Alat Evaluasi Agency',
                                    'Monthly report bukan sekadar laporan rutin. Pelajari fungsi reporting sebagai alat evaluasi strategis.',
                                    'https://bolehdicoba.com/wp-content/uploads/2026/02/Rayza-Monthly-Report--scaled.jpg',
                                ],
                                [
                                    '08 Feb 2026',
                                    'Strategi Creative Performance untuk Brand Fashion di 2026',
                                    'Bagaimana cara brand fashion bertahan di tengah persaingan pasar yang semakin ketat?',
                                    'https://bolehdicoba.com/wp-content/uploads/2026/02/Rayza-Strategic-Partner-scaled.jpg',
                                ],
                            ];
                        @endphp
                        @foreach ($posts as $p)
                            <div class="swiper-slide h-auto">
                                <div
                                    class="bg-white min-h-[370px] rounded-2xl overflow-hidden border-2 border-[#222] shadow-[4px_4px_0px_#222] hover:shadow-[1px_1px_0px_#222] hover:translate-x-[3px] hover:translate-y-[3px] transition-all h-full flex flex-col group">
                                    <div class="h-40 overflow-hidden relative">
                                        <img src="{{ $p[3] }}" alt="{{ $p[1] }}"
                                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                                        <div class="absolute top-3 left-3">
                                            <span
                                                class="bg-bdd-cream-dark px-2.5 py-0.5 text-[9px] font-bold text-[#222] uppercase border border-[#222] rounded-full">All
                                                ARTICLE</span>
                                        </div>
                                    </div>
                                    <div class="p-5 flex flex-col grow">
                                        <span class="text-[9px] text-[#999] mb-2">{{ $p[0] }}</span>
                                        <h4
                                            class="font-outfitserif font-bold text-sm text-[#222] mb-2 leading-snug group-hover:text-bdd-blue transition-colors line-clamp-2">
                                            {{ $p[1] }}
                                        </h4>
                                        <p class="text-[12px] text-[#666] line-clamp-3 mb-4 leading-relaxed">
                                            {{ $p[2] }}
                                        </p>
                                        <div class="mt-auto pt-3 border-t border-gray-100">
                                            <a href="{{ route('news-blog') }}"
                                                class="inline-flex items-center gap-1.5 text-[11px] font-bold text-[#222] hover:text-bdd-blue transition-colors group/link">
                                                Read More
                                                <svg class="w-3 h-3 transform group-hover/link:translate-x-1 transition-transform"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Progress Navigation Unit -->
                    <div class="mt-16 flex flex-col gap-4">
                        <div class="relative h-1 flex items-center w-full max-w-[700px]">
                            <div class="relative w-full mx-12 h-px bg-gray-200">
                                <div class="news-blog-nav-handle absolute top-1/2 left-0 flex flex-col items-center z-20 cursor-grab active:cursor-grabbing select-none"
                                    style="left: 0%; transform: translate(-50%, -50%); transition: left 0.3s ease-out;">
                                    <div
                                        class="w-20 h-20 bg-[#33b8a5] rounded-full flex items-center justify-center border-2 border-[#222] shadow-[4px_4px_0px_#222] relative gap-4 mb-2 pointer-events-auto">
                                        <button
                                            class="news-blog-prev p-0 hover:scale-110 transition-transform outline-none">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                    d="M15 18l-6-6 6-6" />
                                            </svg>
                                        </button>
                                        <button
                                            class="news-blog-next p-0 hover:scale-110 transition-transform outline-none">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                    d="M9 6l6 6-6 6" />
                                            </svg>
                                        </button>
                                    </div>
                                    <span
                                        class="text-[13px] font-bold text-[#222] whitespace-nowrap translate-y-2">Slide!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    {{-- Contact Form --}}
    @include('components.contact-form')

@endsection
