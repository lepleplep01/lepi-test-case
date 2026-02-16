@extends('layouts.app')

@section('title', 'About Us - Boleh Dicoba Digital')

@section('content')
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-bdd-dark via-bdd-navy to-bdd-dark py-32 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 right-20 w-80 h-80 bg-bdd-red rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-20 w-64 h-64 bg-bdd-navy rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sm text-bdd-coral font-semibold uppercase tracking-widest mb-6 animate-fade-in">ABOUT US</p>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6 animate-fade-in-up">
                Strive for continuous growth through actionable strategies, data-driven insights, and transparency.
            </h1>
            <p class="text-lg text-gray-300 animate-fade-in-up" style="animation-delay: 0.2s">
                Our growth culture is built on the foundation of continuous improvement. We believe that every business has
                the potential to grow, and we are here to help you unlock that potential.
            </p>
        </div>
    </section>

    {{-- Our Value Section --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="scroll-animate">
                    <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">OUR VALUE</p>
                    <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark mb-4">From founded in 2017, we have witnessed
                        and experienced firsthand the dynamic nature of this industry.</h3>
                    <p class="text-bdd-gray">Our values allow us to respond quickly to changes in this industry and adapt
                        accordingly. Since the beginning, we are team of practitioners. We know the game, we play the game,
                        we live in the game.</p>
                </div>
                <div class="grid grid-cols-2 gap-6 scroll-animate">
                    @php
                        $values = [
                            [
                                'icon' =>
                                    '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>',
                                'title' => 'Collaboration',
                                'desc' => 'Working together to achieve common goals',
                            ],
                            [
                                'icon' =>
                                    '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>',
                                'title' => 'Communication',
                                'desc' => 'Transparent and honest dialogue',
                            ],
                            [
                                'icon' =>
                                    '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>',
                                'title' => 'Reliability',
                                'desc' => 'Consistent and dependable results',
                            ],
                            [
                                'icon' =>
                                    '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>',
                                'title' => 'Problem Solving',
                                'desc' => 'Creative solutions for every challenge',
                            ],
                        ];
                    @endphp
                    @foreach ($values as $value)
                        <div class="bg-bdd-light rounded-2xl p-6 hover:shadow-lg transition-all duration-300 group">
                            <div
                                class="w-14 h-14 bg-bdd-red/10 rounded-xl flex items-center justify-center text-bdd-red mb-4 group-hover:bg-bdd-red group-hover:text-white transition-colors duration-300">
                                {!! $value['icon'] !!}
                            </div>
                            <h4 class="font-bold text-bdd-dark mb-1">{{ $value['title'] }}</h4>
                            <p class="text-sm text-bdd-gray">{{ $value['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Our Method Section --}}
    <section class="py-20 bg-bdd-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="scroll-animate order-2 lg:order-1">
                    <div
                        class="bg-gradient-to-br from-bdd-dark to-bdd-navy rounded-3xl h-[400px] flex items-center justify-center">
                        <div class="text-center">
                            <svg class="w-20 h-20 mx-auto text-white/20 mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            <p class="text-white/40 text-sm">Method Image</p>
                        </div>
                    </div>
                </div>
                <div class="scroll-animate order-1 lg:order-2">
                    <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">OUR METHOD</p>
                    <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark mb-4">Generate immediate impact while nurturing
                        timeless values for the future.</h3>
                    <p class="text-bdd-gray mb-6">We combine performance marketing with creative strategies to deliver
                        measurable results. Our approach is grounded in data-driven insights that enable us to make informed
                        decisions and optimize campaigns for maximum impact.</p>
                    <p class="text-bdd-gray">Every strategy we implement is designed to create sustainable growth, not just
                        short-term wins. We believe in building lasting relationships with our clients and their audiences.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Why Choose Us --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="scroll-animate">
                    <div
                        class="bg-gradient-to-br from-bdd-dark to-bdd-navy rounded-3xl h-[500px] flex items-center justify-center overflow-hidden">
                        <div class="text-center p-10">
                            <div class="w-24 h-24 mx-auto mb-6 bg-bdd-red/20 rounded-full flex items-center justify-center">
                                <svg class="w-12 h-12 text-bdd-red" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <p class="text-white/60 text-sm">Why Choose Us Image</p>
                        </div>
                    </div>
                </div>
                <div class="scroll-animate">
                    <p class="text-outfitserif text-bdd-red font-semibold uppercase tracking-wider mb-3">WHY CHOOSE US</p>
                    <h3 class="textext-3xl md:text-4xl font-bold text-bdd-dark mb-4">It's not about how much budget you
                        spent, but how you spend them.</h3>
                    <p class="text-bdd-gray mb-8">Embracing a focus of sustainable growth, we prioritise cultivating
                        long-term partnerships, ensuring your brand's growth aligns with effective practices.</p>

                    <div x-data="{ active: 0 }" class="space-y-4">
                        @php
                            $accordionItems = [
                                [
                                    'title' => 'Growth',
                                    'content' =>
                                        'Trust the process in elevating your business by enhancing every step of the way, guided by a team of professionals.',
                                ],
                                [
                                    'title' => 'Collaborative Partnership',
                                    'content' =>
                                        'Company values meet potential augmentation, create an exciting connection towards propitious business development.',
                                ],
                                [
                                    'title' => 'Perceptive Exploration',
                                    'content' =>
                                        "We're not just a player in this industry; we're visionaries. Watch our unique exploration and discover what others overlook.",
                                ],
                            ];
                        @endphp
                        @foreach ($accordionItems as $index => $item)
                            <div class="border border-gray-200 rounded-xl overflow-hidden"
                                :class="active === {{ $index }} ? 'bg-white shadow-md' : 'bg-white'">
                                <button @click="active = active === {{ $index }} ? null : {{ $index }}"
                                    class="flex items-center justify-between w-full p-5 text-left">
                                    <h4 class="font-bold text-bdd-dark">{{ $item['title'] }}</h4>
                                    <svg :class="active === {{ $index }} ? 'rotate-180' : ''"
                                        class="w-5 h-5 text-bdd-red transition-transform duration-300" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div x-show="active === {{ $index }}" x-collapse>
                                    <div class="px-5 pb-5">
                                        <p class="text-sm text-bdd-gray">{{ $item['content'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Services --}}
    <section class="py-20 bg-bdd-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 scroll-animate">
                <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">OUR ssSERVICES</p>
                <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark mb-4">We Offer a Wide Services Aimed to Support your
                    Business</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @include('components.service-card', [
                    'title' => 'Digital Advertising',
                    'description' =>
                        'Reach your optimum growth through Digital Advertising with actionable and impactful strategies.',
                    'link' => route('services.digital-advertising'),
                    'image' => null,
                ])
                @include('components.service-card', [
                    'title' => 'Creative Content & Live Shopping',
                    'description' =>
                        'Performance creative brings the data- and tech-driven process designed to amplify the impact of the creative itself.',
                    'link' => route('services.performance-creative'),
                    'image' => null,
                ])
                @include('components.service-card', [
                    'title' => 'Web Development & Maintenance',
                    'description' =>
                        'We design and develop the most suitable website for your business to help you sell your products effectively.',
                    'link' => route('services.website-development'),
                    'image' => null,
                ])
                @include('components.service-card', [
                    'title' => 'Search Engine Optimization',
                    'description' =>
                        'SEO is a long term investment in marketing to drive organic traffic and skyrocket website rank.',
                    'link' => route('services.seo'),
                    'image' => null,
                ])
                @include('components.service-card', [
                    'title' => 'Professional Services',
                    'description' => 'Growth Hack is the art of choosing the right audience, offer and strategy.',
                    'link' => route('services.professional-service'),
                    'image' => null,
                ])
                @include('components.service-card', [
                    'title' => 'Community Program Development',
                    'description' =>
                        'We help the business to retain customers, and encourages them to explore more of your products.',
                    'link' => route('services.community-program'),
                    'image' => null,
                ])
                @include('components.service-card', [
                    'title' => 'Digital Marketing Training',
                    'description' => 'Tailored training program guided by industry experts and professionals.',
                    'link' => route('services.training'),
                    'image' => null,
                ])
            </div>
        </div>
    </section>

    {{-- Our Team Section --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 scroll-animate">
                <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">OUR TEAM</p>
                <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">Get to know some of the digital marketing experts
                </h3>
            </div>

            <div x-data="{
                current: 0,
                team: [
                    { name: 'Jenzo Andika', role: 'VP of Operations', initial: 'JA' },
                    { name: 'Kirana Paramitha', role: 'VP of Sales & Marketing', initial: 'KP' },
                    { name: 'Muhammad Juandi', role: 'VP of Performance Creative', initial: 'MJ' }
                ]
            }" class="scroll-animate">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <template x-for="(member, index) in team" :key="index">
                        <div class="group text-center">
                            <div
                                class="w-48 h-48 mx-auto mb-6 bg-gradient-to-br from-bdd-dark to-bdd-navy rounded-full flex items-center justify-center group-hover:from-bdd-red group-hover:to-bdd-coral transition-all duration-500">
                                <span class="text-4xl font-bold text-white/60" x-text="member.initial"></span>
                            </div>
                            <h4 class="text-xl font-bold text-bdd-dark" x-text="member.name"></h4>
                            <p class="text-sm text-bdd-gray mt-1" x-text="member.role"></p>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </section>

    {{-- Client Logos --}}
    <section class="py-20 bg-bdd-light" x-data="{ activeTab: 'fashion' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 scroll-animate">
                <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">OUR NOTABLE CLIENTS</p>
                <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">Over <span class="text-bdd-red">800+</span>
                    Business growing with us</h3>
            </div>

            <div class="flex flex-wrap justify-center gap-3 mb-12">
                @php $categories = ['fashion' => 'Fashion', 'fnb' => 'FnB', 'beauty' => 'Beauty', 'lifestyle' => 'Lifestyle', 'startup' => 'Startup & Other', 'corporate' => 'FMCGs & Corporations']; @endphp
                @foreach ($categories as $key => $label)
                    <button @click="activeTab = '{{ $key }}'"
                        :class="activeTab === '{{ $key }}' ? 'bg-bdd-red text-white' :
                            'bg-white text-bdd-text hover:bg-gray-100'"
                        class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 border border-gray-200">
                        {{ $label }}
                    </button>
                @endforeach
            </div>

            @foreach ($categories as $key => $label)
                <div x-show="activeTab === '{{ $key }}'" x-transition>
                    <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-4">
                        @for ($i = 0; $i < 16; $i++)
                            <div
                                class="aspect-square bg-white rounded-xl border border-gray-100 flex items-center justify-center p-4 hover:shadow-md transition-shadow">
                                <span class="text-xs text-gray-400 text-center">{{ $label }} Brand</span>
                            </div>
                        @endfor
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Our Ecosystem --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">OUR ECOSYSTEM</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark mb-4">Our sustained growth leads to outstanding
                subsidiaries.</h3>
            <p class="text-bdd-gray max-w-2xl mx-auto mb-12">As we continue to grow and evolve, our commitment to
                excellence has led to the creation of specialized subsidiaries, each focused on delivering exceptional value
                in their respective domains.</p>
            <div class="flex justify-center items-center space-x-12">
                <div class="text-center group">
                    <div
                        class="w-32 h-32 bg-bdd-light rounded-2xl flex items-center justify-center mb-4 group-hover:shadow-lg transition-shadow mx-auto">
                        <span class="text-lg font-bold text-bdd-dark">Boleh<br>Belajar</span>
                    </div>
                    <p class="text-sm text-bdd-gray">Digital Marketing Training</p>
                </div>
                <div class="text-center group">
                    <div
                        class="w-32 h-32 bg-bdd-light rounded-2xl flex items-center justify-center mb-4 group-hover:shadow-lg transition-shadow mx-auto">
                        <span class="text-lg font-bold text-bdd-dark">SKS<br>Digital</span>
                    </div>
                    <p class="text-sm text-bdd-gray">Digital Solutions</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Form --}}
    @include('components.contact-form')

@endsection
