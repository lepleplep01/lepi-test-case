@extends('layouts.app')

@section('title', 'Performance Creative - Boleh Dicoba Digital')

@section('content')

{{-- Hero --}}
<section class="relative bg-gradient-to-br from-bdd-dark via-bdd-navy to-bdd-dark py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute bottom-10 left-20 w-80 h-80 bg-bdd-coral rounded-full blur-3xl"></div>
    </div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sm text-bdd-coral font-semibold uppercase tracking-widest mb-6 animate-fade-in">PERFORMANCE CREATIVE</p>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6 animate-fade-in-up">Unparalleled Creative Innovation</h1>
        <p class="text-lg text-gray-300 mb-6 animate-fade-in-up" style="animation-delay: 0.2s">
            BDD Performance Creative Service innovates constantly delivering attention-grabbing, data-driven content tailored to diverse niches. Our strategies resonate with your unique audience, driving meaningful growth.
        </p>
        <span class="inline-block bg-white/10 text-white px-6 py-2 rounded-full text-sm font-semibold animate-fade-in-up" style="animation-delay: 0.4s">Over 100+ Brand Trust our Service</span>
    </div>
</section>

{{-- Quality Unveiled --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="scroll-animate">
                <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">QUALITY UNVEILED</p>
                <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark mb-4">In creating measurable experiences through demonstrative content, we show, not tell.</h3>
                <p class="text-bdd-gray">We uncover your growth potential through unique content and extensive distribution strategies, grounded in data-driven performance reports that provide valuable insight and key learning.</p>
            </div>
            <div class="scroll-animate">
                <div class="bg-gradient-to-br from-bdd-dark to-bdd-navy rounded-3xl h-[400px] flex items-center justify-center">
                    <p class="text-white/40 text-sm">Quality Image</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CGR Method --}}
<section class="py-20 bg-bdd-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-animate">
        <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">CGR METHOD LOOP</p>
        <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark mb-4">More Than Just Panels; It's a Timeless Cycle</h3>
        <p class="text-bdd-gray max-w-2xl mx-auto mb-12">Create, Gather, and Respond (CGR) Loop is our methodology that empowers us not only to produce top-notch contents but also reduce learning and adjustment time.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach(['Create' => 'We create high-quality, engaging content tailored to your brand.', 'Gather' => 'We gather data and insights to understand what works.', 'Respond' => 'We respond to findings and optimize content for better results.'] as $step => $desc)
            <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300">
                <div class="w-16 h-16 mx-auto bg-bdd-red/10 rounded-full flex items-center justify-center text-bdd-red mb-5">
                    <span class="text-2xl font-bold">{{ substr($step, 0, 1) }}</span>
                </div>
                <h4 class="text-lg font-bold text-bdd-dark mb-2">{{ $step }}</h4>
                <p class="text-sm text-bdd-gray">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Our Services --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">OUR SERVICES</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">Shaping Long-Term Growth with Performance Creative</h3>
        </div>

        <div class="space-y-8 scroll-animate">
            @php
                $pcServices = [
                    ['title' => 'Creative Campaign', 'subtitle' => 'Revolutionize Your Brand with 360 Creative Campaign Mastery', 'desc' => 'Our full-spectrum approach ensures your message reaches your audiences effectively and consistently.'],
                    ['title' => 'The Experience', 'subtitle' => 'One-stop Solution to Provide a Fascinating Experience', 'desc' => 'Our integrated services in UI/UX design, video production, and copywriting converge to deliver captivating stories.'],
                    ['title' => 'Social Media Management', 'subtitle' => 'The Key to Growing a Community and Connecting with Audiences', 'desc' => 'Stay ahead of the competition by entrusting us to navigate the ever-evolving world of social media.'],
                    ['title' => 'Livestream', 'subtitle' => 'Seamless Live Streaming Solutions Across Diverse Platforms', 'desc' => 'Experience dynamic and engaging content delivery with our Live Streaming service in real time.'],
                    ['title' => 'KOL Management', 'subtitle' => 'Amplify Your Impact with Key Opinion Leaders', 'desc' => 'Cultivating a special connection between your brand and KOLs is crucial for success.'],
                ];
            @endphp
            @foreach($pcServices as $service)
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 bg-bdd-light rounded-2xl p-8 hover:shadow-lg transition-all duration-300">
                <div>
                    <span class="text-xs font-semibold text-bdd-red uppercase tracking-wider">{{ $service['title'] }}</span>
                </div>
                <div class="lg:col-span-2">
                    <h4 class="text-xl font-bold text-bdd-dark mb-2">{{ $service['subtitle'] }}</h4>
                    <p class="text-sm text-bdd-gray mb-4">{{ $service['desc'] }}</p>
                    <a href="https://api.whatsapp.com/send?phone=6281805757585&text=Halo%20saya%20tertarik%20dengan%20service%20Performance%20Creative" target="_blank"
                       class="inline-flex items-center text-sm font-semibold text-bdd-red hover:text-red-700 transition-colors">
                        Contact Us
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Case Study --}}
<section class="py-20 bg-bdd-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">CASE STUDY</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">Impeccable Precision Empowered by Big Data</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 scroll-animate">
            @include('components.case-study-card', ['category' => 'Creative', 'title' => 'tSurvey followers soared from 2k to 11.3k', 'description' => 'Witness the remarkable surge in followers and the enhancement in both quantity and quality.', 'link' => '#', 'image' => null])
            @include('components.case-study-card', ['category' => 'Creative', 'title' => 'Jobstreet garnered an extra 50,000 followers', 'description' => 'With BDD assistance, Jobstreet earned hundreds of views from organic content.', 'link' => '#', 'image' => null])
            @include('components.case-study-card', ['category' => 'Creative', 'title' => 'Roti Gembong Gembul phenomenal TikTok triumph', 'description' => 'Witness firsthand the remarkable TikTok performance after collaborating with us.', 'link' => '#', 'image' => null])
        </div>
    </div>
</section>

{{-- Values --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center scroll-animate">
            <div>
                <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">OUR VALUE</p>
                <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark mb-4">From founded in 2017, we have witnessed and experienced firsthand the dynamic nature of this industry.</h3>
                <p class="text-bdd-gray">Our values allow us to respond quickly to changes in this industry and adapt accordingly.</p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                @foreach(['Collaboration', 'Communication', 'Reliability', 'Problem Solving'] as $value)
                <div class="bg-bdd-light rounded-xl p-5 text-center">
                    <h5 class="font-bold text-bdd-dark text-sm">{{ $value }}</h5>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-gradient-bdd text-white text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 scroll-animate">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Experience the art of Performance Creative services!</h2>
        <p class="text-gray-300 mb-8">Our art combines with data-driven strategies to accelerate the synergy of creativity and performance.</p>
        <a href="https://api.whatsapp.com/send?phone=6281805757585&text=Halo%20saya%20tertarik%20dengan%20service%20Performance%20Creative" target="_blank"
           class="inline-flex items-center space-x-2 bg-bdd-red hover:bg-red-600 text-white px-10 py-4 rounded-full text-lg font-semibold transition-all duration-300 hover:scale-105">
            <span>Consult with Us</span>
        </a>
    </div>
</section>

@endsection
