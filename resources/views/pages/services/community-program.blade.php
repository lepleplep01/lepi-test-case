@extends('layouts.app')

@section('title', 'Community Program Development - Boleh Dicoba Digital')

@section('content')

{{-- Hero --}}
<section class="relative bg-gradient-to-br from-bdd-dark via-bdd-navy to-bdd-dark py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-80 h-80 bg-bdd-red rounded-full blur-3xl"></div>
    </div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sm text-bdd-coral font-semibold uppercase tracking-widest mb-6 animate-fade-in">COMMUNITY PROGRAM DEVELOPMENT</p>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6 animate-fade-in-up">Build and Nurture Your Brand Community</h1>
        <p class="text-lg text-gray-300 mb-6 animate-fade-in-up" style="animation-delay: 0.2s">
            We help businesses retain customers and encourage them to explore more of your products and services through strategic community program development.
        </p>
    </div>
</section>

{{-- What We Offer --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">WHAT WE OFFER</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">Comprehensive Community Solutions</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 scroll-animate">
            @php
                $communityServices = [
                    ['title' => 'Loyalty Program Design', 'desc' => 'Design and implement effective loyalty programs that keep customers coming back.', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>'],
                    ['title' => 'Community Management', 'desc' => 'Professional management of your online and offline communities to drive engagement.', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>'],
                    ['title' => 'Event Planning & Execution', 'desc' => 'Organize engaging events that bring your community together and strengthen brand loyalty.', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>'],
                    ['title' => 'Membership Platform', 'desc' => 'Build and manage membership platforms to create exclusive experiences for your customers.', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/></svg>'],
                    ['title' => 'Customer Retention Strategy', 'desc' => 'Develop strategies to reduce churn and increase customer lifetime value.', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>'],
                    ['title' => 'Engagement Analytics', 'desc' => 'Track and measure community engagement with detailed analytics and reporting.', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>'],
                ];
            @endphp
            @foreach($communityServices as $service)
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

{{-- CTA --}}
<section class="py-20 bg-gradient-bdd text-white text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 scroll-animate">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Build a Thriving Community Around Your Brand</h2>
        <p class="text-gray-300 mb-8">Let us help you create lasting connections with your customers through strategic community programs.</p>
        <a href="https://api.whatsapp.com/send?phone=6281805757585&text=Halo%20saya%20tertarik%20dengan%20Community%20Program%20Development" target="_blank"
           class="inline-flex items-center space-x-2 bg-bdd-red hover:bg-red-600 text-white px-10 py-4 rounded-full text-lg font-semibold transition-all duration-300 hover:scale-105">
            <span>Consult with Us</span>
        </a>
    </div>
</section>

@endsection
