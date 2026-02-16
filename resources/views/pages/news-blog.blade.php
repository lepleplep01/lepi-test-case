@extends('layouts.app')

@section('title', 'News & Blog - Boleh Dicoba Digital')

@section('content')

{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-bdd-dark via-bdd-navy to-bdd-dark py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute bottom-10 right-20 w-80 h-80 bg-bdd-red rounded-full blur-3xl"></div>
    </div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sm text-bdd-coral font-semibold uppercase tracking-widest mb-6 animate-fade-in">NEWS & BLOG</p>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6 animate-fade-in-up">
            Your go-to destination for all essential needs
        </h1>
        <p class="text-lg text-gray-300 animate-fade-in-up" style="animation-delay: 0.2s">
            Stay ahead by exploring the most recent insights, useful tips, creative ideas, industry updates, BDD's services, and tons of additional information.
        </p>
    </div>
</section>

{{-- Category Filter & Blog Posts --}}
<section class="py-20 bg-white" x-data="{ activeCategory: 'all', language: 'en' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Filters --}}
        <div class="flex flex-wrap items-center justify-between gap-4 mb-12 scroll-animate">
            <div class="flex flex-wrap gap-3">
                <span class="text-sm font-semibold text-bdd-text mr-2">Category:</span>
                @php $blogCats = ['all' => 'All Article', 'essentials' => '5 Minutes Essentials', 'digital' => 'Digital Marketing', 'news' => 'News']; @endphp
                @foreach($blogCats as $key => $label)
                <button @click="activeCategory = '{{ $key }}'"
                    :class="activeCategory === '{{ $key }}' ? 'bg-bdd-red text-white' : 'bg-gray-100 text-bdd-text hover:bg-gray-200'"
                    class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300">
                    {{ $label }}
                </button>
                @endforeach
            </div>
            <div class="flex items-center space-x-2">
                <span class="text-sm font-semibold text-bdd-text">Language:</span>
                <select @change="language = $event.target.value" class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-bdd-red">
                    <option value="en">English</option>
                    <option value="id">Indonesian</option>
                </select>
            </div>
        </div>

        {{-- Newest Article --}}
        <div class="mb-16 scroll-animate">
            <h3 class="text-xl font-bold text-bdd-dark mb-6">Newest Article</h3>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 bg-bdd-light rounded-3xl overflow-hidden">
                <div class="h-64 lg:h-auto bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                </div>
                <div class="p-8 lg:p-12 flex flex-col justify-center">
                    <div class="flex items-center space-x-3 mb-4">
                        <span class="text-xs font-semibold text-bdd-red bg-bdd-red/10 px-2.5 py-1 rounded-full">All Article</span>
                        <span class="text-xs text-bdd-gray">11 Feb 2026</span>
                    </div>
                    <h4 class="text-2xl font-bold text-bdd-dark mb-4">Kenapa Brand Tetap Butuh Strategic Partner di Era AI untuk Tumbuh Lebih Cepat</h4>
                    <p class="text-bdd-gray mb-6">Brand sudah pakai AI tapi belum optimal? Cari tahu kenapa strategic partner tetap dibutuhkan agar AI lebih berdampak.</p>
                    <a href="#" class="inline-flex items-center text-sm font-semibold text-bdd-red hover:text-red-700 transition-colors">
                        Read The Story
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- All Articles Grid --}}
        <div class="scroll-animate">
            <h3 class="text-xl font-bold text-bdd-dark mb-8">All Article</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $articles = [
                        ['date' => '11 Feb 2026', 'title' => 'AI Search Mengubah SEO: Apa yang Berubah dan Apa Dampaknya', 'excerpt' => 'Di era AI Search, traffic bukan satu-satunya indikator sukses SEO.'],
                        ['date' => '10 Feb 2026', 'title' => 'Monthly Report: Bukan Sekadar Laporan, Tapi Alat Evaluasi Agency', 'excerpt' => 'Monthly report bukan sekadar laporan rutin. Pelajari fungsi reporting sebagai alat evaluasi strategis.'],
                        ['date' => '07 Feb 2026', 'title' => 'Optimasi WordPress: Kunci Sukses Memenangkan Persaingan di Search Engine', 'excerpt' => 'Bongkar rahasia optimasi WordPress yang jarang dibahas orang.'],
                        ['date' => '07 Feb 2026', 'title' => 'Podcast Marketing: Senjata Rahasia B2B untuk Membangun Authority di 2026', 'excerpt' => 'Simak kenapa Podcast Marketing adalah strategi B2B paling underrated di 2026.'],
                        ['date' => '07 Feb 2026', 'title' => 'Automasi Marketing: Cara Bisnis Kecil Bekerja Seperti Perusahaan Besar', 'excerpt' => 'Pelajari chatbot, email automation, dan penjadwalan konten otomatis di sini.'],
                        ['date' => '06 Feb 2026', 'title' => 'Creative Industry Sebagai Growth Engine Bisnis di Era Performance Marketing', 'excerpt' => 'Creative jadi growth engine bisnis yang bisa dorong revenue dan hasil nyata.'],
                        ['date' => '06 Feb 2026', 'title' => 'Technical SEO: Kerja di Balik Layar yang Menentukan Performa Website', 'excerpt' => 'Pelajari apa itu technical SEO, masalah yang sering terjadi, dan dampaknya ke konten.'],
                        ['date' => '05 Feb 2026', 'title' => 'Schema Markup Itu Penting! Cara Implementasi dan Dampaknya untuk Website', 'excerpt' => 'Schema markup adalah tagar berisi kosakata semantik yang bisa disisipkan ke HTML.'],
                        ['date' => '04 Feb 2026', 'title' => 'Kenapa Content Framework Penting dalam Strategi Konten', 'excerpt' => 'Kenali apa yang dimaksud dengan content framework dan kenapa eksistensinya penting.'],
                    ];
                @endphp
                @foreach($articles as $article)
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100">
                    <div class="relative h-48 bg-gradient-to-br from-gray-200 to-gray-300 overflow-hidden">
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center space-x-3 mb-3">
                            <span class="text-xs font-semibold text-bdd-red bg-bdd-red/10 px-2.5 py-1 rounded-full">All Article</span>
                            <span class="text-xs text-bdd-gray">{{ $article['date'] }}</span>
                        </div>
                        <h4 class="text-base font-bold text-bdd-dark mb-2 line-clamp-2 group-hover:text-bdd-red transition-colors">{{ $article['title'] }}</h4>
                        <p class="text-sm text-bdd-gray line-clamp-3 mb-4">{{ $article['excerpt'] }}</p>
                        <a href="#" class="inline-flex items-center text-sm font-semibold text-bdd-red hover:text-red-700 transition-colors">
                            Read More
                            <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Newsletter --}}
        <div class="mt-16 bg-gradient-bdd rounded-3xl p-10 md:p-14 text-center scroll-animate">
            <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Stay Updated, Get Inspired</h3>
            <p class="text-gray-300 mb-8 max-w-lg mx-auto">Keep us around, let us regularly appear on your inbox. Click subscribe to get our newest update.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 max-w-md mx-auto">
                <input type="email" placeholder="Your email address" class="w-full sm:flex-1 bg-white/10 border border-white/20 rounded-full px-5 py-3 text-sm text-white placeholder-gray-400 focus:outline-none focus:border-bdd-red">
                <button class="w-full sm:w-auto bg-bdd-red hover:bg-red-600 text-white px-8 py-3 rounded-full text-sm font-semibold transition-colors">Submit</button>
            </div>
        </div>

        {{-- Pagination --}}
        <div class="flex justify-center mt-12 space-x-2">
            <span class="w-10 h-10 flex items-center justify-center bg-bdd-red text-white rounded-lg text-sm font-semibold">1</span>
            <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 text-bdd-text rounded-lg text-sm font-semibold hover:bg-gray-200 transition-colors">2</a>
            <span class="w-10 h-10 flex items-center justify-center text-bdd-gray text-sm">...</span>
            <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 text-bdd-text rounded-lg text-sm font-semibold hover:bg-gray-200 transition-colors">43</a>
            <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 text-bdd-text rounded-lg text-sm font-semibold hover:bg-gray-200 transition-colors">44</a>
        </div>
    </div>
</section>

{{-- Newest Update --}}
<section class="py-20 bg-bdd-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-animate">
        <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark mb-2">Up To The Minute<br>About Boleh Dicoba Digital</h3>
        <p class="text-bdd-gray mb-10">Catch our latest updates on what we've been bringing off to our partners and communities.</p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @for($i = 0; $i < 4; $i++)
            <div class="aspect-square bg-gradient-to-br from-gray-200 to-gray-300 rounded-2xl flex items-center justify-center">
                <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
            @endfor
        </div>
        <a href="#" class="inline-block mt-8 text-sm font-semibold text-bdd-red hover:text-red-700 transition-colors">Show More</a>
    </div>
</section>

{{-- Contact Form --}}
@include('components.contact-form')

@endsection
