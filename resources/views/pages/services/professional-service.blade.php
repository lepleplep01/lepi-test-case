@extends('layouts.app')

@section('title', 'Professional Service - Boleh Dicoba Digital')

@section('content')

{{-- Hero --}}
<section class="relative bg-gradient-to-br from-bdd-dark via-bdd-navy to-bdd-dark py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute bottom-20 right-20 w-80 h-80 bg-bdd-coral rounded-full blur-3xl"></div>
    </div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sm text-bdd-coral font-semibold uppercase tracking-widest mb-6 animate-fade-in">PROFESSIONAL SERVICE</p>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6 animate-fade-in-up">Growth Hack Your Way to Success</h1>
        <p class="text-lg text-gray-300 mb-6 animate-fade-in-up" style="animation-delay: 0.2s">
            Growth Hack is the art of choosing the right audience, offer and strategy. Will you trust us to guide you through it? Our team of professionals brings years of experience to the table.
        </p>
        <span class="inline-block bg-white/10 text-white px-6 py-2 rounded-full text-sm font-semibold animate-fade-in-up" style="animation-delay: 0.4s">Trusted by Leading Brands</span>
    </div>
</section>

{{-- Services --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">OUR EXPERTISE</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">Tailored Solutions for Your Business Growth</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 scroll-animate">
            @php
                $proServices = [
                    ['title' => 'Growth-Hack Consultation', 'desc' => 'Strategic consultation to identify growth opportunities and create actionable plans for your business.', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>'],
                    ['title' => 'Digital Marketing Audit', 'desc' => 'Comprehensive audit of your current digital marketing efforts with actionable recommendations.', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>'],
                    ['title' => 'Corporate Training', 'desc' => 'Upskill your team with our customized digital marketing training programs led by industry experts.', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>'],
                    ['title' => 'Brand Strategy', 'desc' => 'Develop a strong brand identity and positioning strategy to stand out in the competitive market.', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>'],
                    ['title' => 'Market Research', 'desc' => 'In-depth market analysis to understand your audience, competitors, and industry trends.', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>'],
                    ['title' => 'Performance Analytics', 'desc' => 'Advanced analytics and reporting to track, measure, and optimize your marketing performance.', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>'],
                ];
            @endphp
            @foreach($proServices as $service)
            <div class="bg-bdd-light rounded-2xl p-8 hover:shadow-lg transition-all duration-300 group">
                <div class="w-14 h-14 bg-bdd-red/10 rounded-xl flex items-center justify-center text-bdd-red mb-5 group-hover:bg-bdd-red group-hover:text-white transition-colors duration-300">
                    {!! $service['icon'] !!}
                </div>
                <h4 class="text-lg font-bold text-bdd-dark mb-3">{{ $service['title'] }}</h4>
                <p class="text-sm text-bdd-gray">{{ $service['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Process --}}
<section class="py-20 bg-bdd-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-animate">
        <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">OUR PROCESS</p>
        <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark mb-12">How We Work Together</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @php $steps = [['num'=>'01','title'=>'Discovery & Audit'],['num'=>'02','title'=>'Strategy & Planning'],['num'=>'03','title'=>'Execution & Optimization'],['num'=>'04','title'=>'Report & Scale']]; @endphp
            @foreach($steps as $step)
            <div class="group">
                <div class="w-20 h-20 mx-auto bg-white rounded-2xl flex items-center justify-center mb-4 shadow-sm group-hover:bg-bdd-red transition-colors duration-300">
                    <span class="text-2xl font-extrabold text-bdd-red group-hover:text-white transition-colors">{{ $step['num'] }}</span>
                </div>
                <h5 class="font-bold text-bdd-dark text-sm">{{ $step['title'] }}</h5>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-gradient-bdd text-white text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 scroll-animate">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Accelerate Your Growth?</h2>
        <p class="text-gray-300 mb-8">Let our team of professionals guide you through the right strategies to achieve your business goals.</p>
        <a href="https://api.whatsapp.com/send?phone=6281805757585&text=Halo%20saya%20tertarik%20dengan%20Professional%20Service" target="_blank"
           class="inline-flex items-center space-x-2 bg-bdd-red hover:bg-red-600 text-white px-10 py-4 rounded-full text-lg font-semibold transition-all duration-300 hover:scale-105">
            <span>Consult with Us</span>
        </a>
    </div>
</section>

@endsection
