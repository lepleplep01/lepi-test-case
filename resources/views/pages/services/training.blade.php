@extends('layouts.app')

@section('title', 'Digital Marketing Training - Boleh Belajar by BDD')

@section('content')

{{-- Hero --}}
<section class="relative bg-gradient-to-br from-bdd-dark via-bdd-navy to-bdd-dark py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute bottom-10 left-20 w-96 h-96 bg-bdd-coral rounded-full blur-3xl"></div>
    </div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sm text-bdd-coral font-semibold uppercase tracking-widest mb-6 animate-fade-in">DIGITAL MARKETING TRAINING</p>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6 animate-fade-in-up">Learn from Industry Experts at Boleh Belajar</h1>
        <p class="text-lg text-gray-300 mb-6 animate-fade-in-up" style="animation-delay: 0.2s">
            Tailored training programs guided by industry experts and professionals. Whether you're a beginner or experienced marketer, we have the right program for you.
        </p>
    </div>
</section>

{{-- Training Programs --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">OUR PROGRAMS</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">Comprehensive Training Programs</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 scroll-animate">
            @php
                $trainingPrograms = [
                    ['title' => 'Digital Advertising Masterclass', 'desc' => 'Learn to create and optimize high-performing ad campaigns across Meta, Google, and TikTok.', 'duration' => '8 weeks', 'level' => 'Intermediate'],
                    ['title' => 'Social Media Marketing', 'desc' => 'Master social media strategies, content creation, and community management.', 'duration' => '6 weeks', 'level' => 'Beginner'],
                    ['title' => 'SEO & Content Strategy', 'desc' => 'Learn SEO fundamentals, keyword research, content optimization, and link building.', 'duration' => '6 weeks', 'level' => 'Beginner - Intermediate'],
                    ['title' => 'E-Commerce Growth', 'desc' => 'Comprehensive training on e-commerce strategies, CPAS, and marketplace optimization.', 'duration' => '4 weeks', 'level' => 'Intermediate'],
                    ['title' => 'Data Analytics for Marketing', 'desc' => 'Learn to analyze marketing data, create reports, and make data-driven decisions.', 'duration' => '4 weeks', 'level' => 'Intermediate'],
                    ['title' => 'Corporate Custom Training', 'desc' => 'Customized training programs tailored to your company needs and team objectives.', 'duration' => 'Custom', 'level' => 'All Levels'],
                ];
            @endphp
            @foreach($trainingPrograms as $program)
            <div class="bg-bdd-light rounded-2xl p-8 hover:shadow-lg transition-all duration-300 group border border-gray-100">
                <div class="flex items-center space-x-2 mb-4">
                    <span class="px-3 py-1 text-xs font-semibold text-bdd-red bg-bdd-red/10 rounded-full">{{ $program['level'] }}</span>
                    <span class="px-3 py-1 text-xs font-semibold text-bdd-navy bg-bdd-navy/10 rounded-full">{{ $program['duration'] }}</span>
                </div>
                <h4 class="text-lg font-bold text-bdd-dark mb-3 group-hover:text-bdd-red transition-colors">{{ $program['title'] }}</h4>
                <p class="text-sm text-bdd-gray mb-4">{{ $program['desc'] }}</p>
                <a href="https://api.whatsapp.com/send?phone=6281805757585&text=Halo%20saya%20tertarik%20dengan%20training%20{{ urlencode($program['title']) }}" target="_blank"
                   class="inline-flex items-center text-sm font-semibold text-bdd-red hover:text-red-700 transition-colors">
                    Learn More
                    <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Why Boleh Belajar --}}
<section class="py-20 bg-bdd-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center scroll-animate">
            <div>
                <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">WHY BOLEH BELAJAR</p>
                <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark mb-6">Learn Digital Marketing from Practitioners</h3>
                <div class="space-y-4">
                    @foreach([
                        'Expert instructors with real industry experience from 800+ client campaigns',
                        'Hands-on practical training with real-world case studies',
                        'Small class sizes for personalized learning experience',
                        'Post-training support and community access',
                        'Certification upon program completion',
                        'Meta and Google certified professionals as instructors'
                    ] as $benefit)
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 bg-bdd-red rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-sm text-bdd-text">{{ $benefit }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            <div>
                <div class="bg-gradient-to-br from-bdd-dark to-bdd-navy rounded-3xl h-[400px] flex items-center justify-center">
                    <div class="text-center">
                        <span class="text-5xl font-extrabold text-white/20">BB</span>
                        <p class="text-white/40 text-sm mt-2">Boleh Belajar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-gradient-bdd text-white text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 scroll-animate">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Start Your Digital Marketing Learning Journey</h2>
        <p class="text-gray-300 mb-8">Invest in your team's skills and watch your business grow with our expert-led training programs.</p>
        <a href="https://api.whatsapp.com/send?phone=6281805757585&text=Halo%20saya%20tertarik%20dengan%20Digital%20Marketing%20Training" target="_blank"
           class="inline-flex items-center space-x-2 bg-bdd-red hover:bg-red-600 text-white px-10 py-4 rounded-full text-lg font-semibold transition-all duration-300 hover:scale-105">
            <span>Consult with Us</span>
        </a>
    </div>
</section>

@endsection
