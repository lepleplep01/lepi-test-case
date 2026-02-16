@extends('layouts.app')

@section('title', 'Case Studies - Boleh Dicoba Digital')

@section('content')

{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-bdd-dark via-bdd-navy to-bdd-dark py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-20 w-80 h-80 bg-bdd-red rounded-full blur-3xl"></div>
    </div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sm text-bdd-coral font-semibold uppercase tracking-widest mb-6 animate-fade-in">CASE STUDY</p>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6 animate-fade-in-up">
            Let others success inspire you
        </h1>
        <p class="text-lg text-gray-300 animate-fade-in-up" style="animation-delay: 0.2s">
            Witness how businesses similar to yours are achieving remarkable growth hand in hand with our services.
        </p>
    </div>
</section>

{{-- Category Filter --}}
<section class="py-20 bg-white" x-data="{ activeFilter: 'all' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-3 mb-12 scroll-animate">
            @php
                $filters = ['all' => 'All', 'ads' => 'Digital Advertising', 'growth' => 'Growth Hack', 'training' => 'Corporate Training', 'creative' => 'Creative', 'it' => 'IT Development'];
            @endphp
            @foreach($filters as $key => $label)
            <button @click="activeFilter = '{{ $key }}'"
                :class="activeFilter === '{{ $key }}' ? 'bg-bdd-red text-white' : 'bg-gray-100 text-bdd-text hover:bg-gray-200'"
                class="px-5 py-2.5 rounded-full text-sm font-semibold transition-all duration-300">
                {{ $label }}
            </button>
            @endforeach
        </div>

        {{-- Featured Case Study --}}
        <div class="mb-16 scroll-animate">
            <h3 class="text-xl font-bold text-bdd-dark mb-6">A Real-World Example of Our Success</h3>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 bg-bdd-light rounded-3xl overflow-hidden">
                <div class="h-64 lg:h-auto bg-gradient-to-br from-bdd-dark to-bdd-navy flex items-center justify-center">
                    <svg class="w-20 h-20 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </div>
                <div class="p-8 lg:p-12 flex flex-col justify-center">
                    <span class="inline-block px-3 py-1 text-xs font-semibold text-bdd-red bg-bdd-red/10 rounded-full mb-4 w-fit">Digital Advertising</span>
                    <h4 class="text-2xl font-bold text-bdd-dark mb-4">Offline-Focused, Digitally-Activated: How Click & Collect Delivered 30% of Monthly Web Revenue</h4>
                    <p class="text-bdd-gray mb-6">Unlock growth by activating untapped eCommerce features like Click & Collect, boosting sales, ROAS, and cross-team alignment for sustainable fashion retail success.</p>
                    <a href="#" class="inline-flex items-center text-sm font-semibold text-bdd-red hover:text-red-700 transition-colors">
                        Read The Story
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- All Case Studies Grid --}}
        <div class="scroll-animate">
            <h3 class="text-xl font-bold text-bdd-dark mb-8">All Case Studies</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $caseStudies = [
                        ['cat' => 'Digital Advertising', 'title' => 'Consistently crushed expectations with an average ROAS of 10x per month', 'desc' => 'Discover how our actionable strategies works brilliantly, delivering impressive average ROAS for Logitech.'],
                        ['cat' => 'Digital Advertising', 'title' => 'Generated a monthly three-fold increase in the quantity and quality of leads', 'desc' => 'Axa Insurance Indonesia achieved a remarkable threefold increase in both the quality and quantity of leads.'],
                        ['cat' => 'Digital Advertising', 'title' => 'Yamaha Jabar connected with an audience of 1 million people each month', 'desc' => "Yamaha's ambition to boost its brand awareness aligns seamlessly with the BDD strategy."],
                        ['cat' => 'Creative', 'title' => 'tSurvey followers soared from 2k to 11.3k', 'desc' => 'Witness the remarkable surge in followers and the enhancement in both quantity and quality of tSurvey leads.'],
                        ['cat' => 'Creative', 'title' => 'Jobstreet garnered an extra 50,000 followers with BDD content management', 'desc' => 'With BDD assistance, Jobstreet earned hundreds of views from organic content and the coveted verified blue tick.'],
                        ['cat' => 'Growth Hack', 'title' => 'Roti Gembong Gembul phenomenal triumph in the TikTok market', 'desc' => 'Witness firsthand the remarkable TikTok performance after collaborating with us.'],
                    ];
                @endphp
                @foreach($caseStudies as $study)
                @include('components.case-study-card', [
                    'category' => $study['cat'],
                    'title' => $study['title'],
                    'description' => $study['desc'],
                    'link' => '#',
                    'image' => null
                ])
                @endforeach
            </div>
        </div>

        {{-- Pagination --}}
        <div class="flex justify-center mt-12 space-x-2">
            <span class="w-10 h-10 flex items-center justify-center bg-bdd-red text-white rounded-lg text-sm font-semibold">1</span>
            <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 text-bdd-text rounded-lg text-sm font-semibold hover:bg-gray-200 transition-colors">2</a>
            <span class="w-10 h-10 flex items-center justify-center text-bdd-gray text-sm">...</span>
            <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 text-bdd-text rounded-lg text-sm font-semibold hover:bg-gray-200 transition-colors">5</a>
        </div>
    </div>
</section>

{{-- Contact Form --}}
@include('components.contact-form')

@endsection
