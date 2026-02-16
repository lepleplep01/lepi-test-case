@extends('layouts.app')

@section('title', 'Digital Advertising - Boleh Dicoba Digital')

@section('content')

{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-bdd-dark via-bdd-navy to-bdd-dark py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-20 w-80 h-80 bg-bdd-red rounded-full blur-3xl"></div>
    </div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sm text-bdd-coral font-semibold uppercase tracking-widest mb-6 animate-fade-in">DIGITAL ADVERTISING</p>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6 animate-fade-in-up">
            Elevate Your Brand to Higher Horizons
        </h1>
        <p class="text-lg text-gray-300 mb-6 animate-fade-in-up" style="animation-delay: 0.2s">
            With our expertise in digital advertising, we leverage data-driven strategies and cutting-edge platforms to maximize your brand's reach, engagement, and conversions.
        </p>
        <span class="inline-block bg-white/10 text-white px-6 py-2 rounded-full text-sm font-semibold animate-fade-in-up" style="animation-delay: 0.4s">Over 500+ Brand Trust our Service</span>
    </div>
</section>

{{-- Why We Here --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">WHY WE HERE</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark mb-4">Committed to supporting Micro, Small, Medium Enterprises (MSMEs)</h3>
            <p class="text-bdd-gray max-w-2xl mx-auto">Established in 2017, we have been dedicated to helping businesses of all sizes achieve their digital marketing goals through innovative and data-driven advertising strategies.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 scroll-animate">
            @php
                $features = [
                    ['icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>', 'title' => 'Global Reach', 'desc' => 'Expand your brand presence across multiple platforms and reach audiences worldwide.'],
                    ['icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>', 'title' => 'Flexibility & Scalability', 'desc' => 'Adapt campaigns in real-time and scale your advertising efforts based on performance.'],
                    ['icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>', 'title' => 'Perceptive Exploration', 'desc' => 'Discover new opportunities through deep market analysis and innovative campaign approaches.'],
                ];
            @endphp
            @foreach($features as $feature)
            <div class="bg-bdd-light rounded-2xl p-8 text-center hover:shadow-lg transition-all duration-300 group">
                <div class="w-20 h-20 mx-auto bg-bdd-red/10 rounded-2xl flex items-center justify-center text-bdd-red mb-6 group-hover:bg-bdd-red group-hover:text-white transition-colors duration-300">
                    {!! $feature['icon'] !!}
                </div>
                <h4 class="text-lg font-bold text-bdd-dark mb-3">{{ $feature['title'] }}</h4>
                <p class="text-sm text-bdd-gray">{{ $feature['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Platform We Used --}}
<section class="py-20 bg-bdd-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">PLATFORM WE USED</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">Platforms that will significantly elevate your campaign</h3>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 scroll-animate">
            @foreach(['Meta', 'Google', 'TikTok', 'LinkedIn', 'Google Analytics', 'BDD.AI'] as $platform)
            <div class="bg-white rounded-2xl p-6 text-center hover:shadow-lg transition-all duration-300 flex flex-col items-center justify-center h-32">
                <div class="w-12 h-12 bg-bdd-light rounded-xl flex items-center justify-center mb-3">
                    <span class="text-xs font-bold text-bdd-navy">{{ substr($platform, 0, 2) }}</span>
                </div>
                <span class="text-sm font-semibold text-bdd-dark">{{ $platform }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Our Method --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">OUR METHOD</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">Uncover the most effective method to optimize your campaign</h3>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-4 scroll-animate">
            @php
                $methodSteps = [
                    ['num' => '01', 'title' => 'Brief'],
                    ['num' => '02', 'title' => 'Research'],
                    ['num' => '03', 'title' => 'Planning'],
                    ['num' => '04', 'title' => 'Tools Presentation'],
                    ['num' => '05', 'title' => 'Campaign Launch & Optimization'],
                    ['num' => '06', 'title' => 'Report & Evaluate'],
                    ['num' => '07', 'title' => 'Measure & Optimize'],
                ];
            @endphp
            @foreach($methodSteps as $step)
            <div class="bg-bdd-light rounded-2xl p-5 text-center hover:bg-bdd-red hover:text-white transition-all duration-300 group cursor-pointer">
                <span class="text-2xl font-extrabold text-bdd-red group-hover:text-white transition-colors">{{ $step['num'] }}</span>
                <p class="text-sm font-semibold mt-2 text-bdd-dark group-hover:text-white transition-colors">{{ $step['title'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- The Team / Certifications --}}
<section class="py-20 bg-bdd-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">THE TEAM</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">We've got an expert team of certified digital marketers</h3>
        </div>
        <div class="flex flex-wrap justify-center gap-6 scroll-animate">
            @foreach(['Meta Marketing Partners', 'TikTok Marketing Partner', 'Meta Media Certified Company', 'Google Partners', 'TikTok Shop Partner'] as $cert)
            <div class="bg-white rounded-2xl px-8 py-5 text-center shadow-sm hover:shadow-lg transition-shadow">
                <span class="text-sm font-semibold text-bdd-dark">{{ $cert }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Case Study --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">CASE STUDY</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">A Success Story from Our Customer</h3>
        </div>
        <div class="max-w-3xl mx-auto scroll-animate">
            @include('components.case-study-card', [
                'category' => 'Digital Advertising',
                'title' => 'Consistently crushed expectations with an average ROAS of 10x per month, soaring past our 8x target.',
                'description' => 'Discover how our actionable strategies works brilliantly, delivering impressive average ROAS for Logitech.',
                'link' => '#',
                'image' => null
            ])
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-gradient-bdd text-white text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 scroll-animate">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Elevate Your Brand with Expert Digital Advertising Services!</h2>
        <a href="https://api.whatsapp.com/send?phone=6281805757585&text=Halo%20saya%20tau%20BDD%20dari%20Website%20dan%20tertarik%20dengan%20service%20Digital%20Advertising" target="_blank"
           class="inline-flex items-center space-x-2 bg-bdd-red hover:bg-red-600 text-white px-10 py-4 rounded-full text-lg font-semibold transition-all duration-300 hover:scale-105">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
            <span>Consult with Us</span>
        </a>
    </div>
</section>

@endsection
