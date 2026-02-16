@extends('layouts.app')

@section('title', 'Search Engine Optimization - Boleh Dicoba Digital')

@section('content')

{{-- Hero --}}
<section class="relative bg-gradient-to-br from-bdd-dark via-bdd-navy to-bdd-dark py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-10 w-96 h-96 bg-bdd-red rounded-full blur-3xl"></div>
    </div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sm text-bdd-coral font-semibold uppercase tracking-widest mb-6 animate-fade-in">SEARCH ENGINE OPTIMIZATION</p>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6 animate-fade-in-up">Dominate Search Results with Data-Driven SEO</h1>
        <p class="text-lg text-gray-300 mb-6 animate-fade-in-up" style="animation-delay: 0.2s">
            SEO is a long-term investment in marketing to drive organic traffic and skyrocket your website rank. Our team of SEO experts will help you achieve sustainable growth through proven strategies.
        </p>
        <span class="inline-block bg-white/10 text-white px-6 py-2 rounded-full text-sm font-semibold animate-fade-in-up" style="animation-delay: 0.4s">Trusted by 100+ Brands</span>
    </div>
</section>

{{-- What We Do --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">WHAT WE DO</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">Comprehensive SEO Services for Maximum Visibility</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 scroll-animate">
            @php
                $seoServices = [
                    ['icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>', 'title' => 'Technical SEO', 'desc' => 'Optimize your website infrastructure for better crawlability and indexing.'],
                    ['icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>', 'title' => 'Content SEO', 'desc' => 'Create high-quality, keyword-optimized content that ranks and converts.'],
                    ['icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>', 'title' => 'Link Building', 'desc' => 'Build authoritative backlinks to strengthen your domain authority.'],
                    ['icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>', 'title' => 'Local SEO', 'desc' => 'Optimize your local presence to attract nearby customers.'],
                ];
            @endphp
            @foreach($seoServices as $service)
            <div class="bg-bdd-light rounded-2xl p-8 text-center hover:shadow-lg transition-all duration-300 group">
                <div class="w-16 h-16 mx-auto bg-bdd-red/10 rounded-2xl flex items-center justify-center text-bdd-red mb-5 group-hover:bg-bdd-red group-hover:text-white transition-colors duration-300">
                    {!! $service['icon'] !!}
                </div>
                <h4 class="text-lg font-bold text-bdd-dark mb-2">{{ $service['title'] }}</h4>
                <p class="text-sm text-bdd-gray">{{ $service['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Our Approach --}}
<section class="py-20 bg-bdd-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="scroll-animate">
                <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">OUR APPROACH</p>
                <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark mb-4">Organically increase your website and online store visibility</h3>
                <p class="text-bdd-gray mb-6">We combine technical expertise with creative content strategies to deliver sustainable organic growth. Our approach is rooted in data analysis and continuous optimization.</p>
                <div class="space-y-4">
                    @foreach(['Comprehensive website audit and analysis', 'Keyword research and competitor analysis', 'On-page and off-page optimization', 'Monthly reporting and performance tracking'] as $item)
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 bg-bdd-red rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-sm text-bdd-text">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="scroll-animate">
                <div class="bg-gradient-to-br from-bdd-dark to-bdd-navy rounded-3xl h-[400px] flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-20 h-20 mx-auto text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        <p class="text-white/40 text-sm mt-4">SEO Process Image</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Results --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-animate">
        <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">PROVEN RESULTS</p>
        <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark mb-12">Our SEO Impact in Numbers</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @php
                $seoStats = [
                    ['num' => '200%+', 'label' => 'Average Traffic Increase'],
                    ['num' => '500+', 'label' => 'Keywords Ranked'],
                    ['num' => '100+', 'label' => 'Websites Optimized'],
                    ['num' => '50+', 'label' => 'Page 1 Rankings'],
                ];
            @endphp
            @foreach($seoStats as $stat)
            <div>
                <h4 class="text-3xl md:text-4xl font-extrabold text-bdd-red mb-2">{{ $stat['num'] }}</h4>
                <p class="text-sm text-bdd-gray">{{ $stat['label'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-gradient-bdd text-white text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 scroll-animate">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Boost Your Website Ranking with Expert SEO Services</h2>
        <p class="text-gray-300 mb-8">Let us help you achieve sustainable organic growth and dominate search results.</p>
        <a href="https://api.whatsapp.com/send?phone=6281805757585&text=Halo%20saya%20tertarik%20dengan%20service%20SEO" target="_blank"
           class="inline-flex items-center space-x-2 bg-bdd-red hover:bg-red-600 text-white px-10 py-4 rounded-full text-lg font-semibold transition-all duration-300 hover:scale-105">
            <span>Consult with Us</span>
        </a>
    </div>
</section>

@endsection
