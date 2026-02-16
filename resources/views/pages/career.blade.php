@extends('layouts.app')

@section('title', 'Career - Boleh Dicoba Digital')

@section('content')

{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-bdd-dark via-bdd-navy to-bdd-dark py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-20 w-96 h-96 bg-bdd-red rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 right-20 w-72 h-72 bg-bdd-coral rounded-full blur-3xl"></div>
    </div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sm text-bdd-coral font-semibold uppercase tracking-widest mb-6 animate-fade-in">CAREER</p>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6 animate-fade-in-up">
            Be a Partner and Growth With Us
        </h1>
        <p class="text-lg text-gray-300 mb-10 animate-fade-in-up" style="animation-delay: 0.2s">
            Join the leading digital marketing agency in Indonesia. We're looking for talented individuals who are passionate about digital marketing and ready to make an impact.
        </p>
        <a href="#jobs" class="inline-block bg-bdd-red hover:bg-red-600 text-white px-8 py-4 rounded-full text-lg font-semibold transition-all duration-300 hover:scale-105 hover:shadow-xl animate-fade-in-up" style="animation-delay: 0.4s">
            Find a Job
        </a>
    </div>
</section>

{{-- Vision & Mission --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 scroll-animate">
            <div class="bg-bdd-light rounded-3xl p-10">
                <div class="w-14 h-14 bg-bdd-red/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-bdd-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-bdd-dark mb-4">Our Vision</h3>
                <p class="text-bdd-gray">To become the largest Indonesia digital agency that empowers businesses through innovative and data-driven digital marketing solutions, creating sustainable growth for our clients and partners.</p>
            </div>
            <div class="bg-bdd-light rounded-3xl p-10">
                <div class="w-14 h-14 bg-bdd-red/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-bdd-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-bdd-dark mb-4">Our Mission</h3>
                <p class="text-bdd-gray">To elevate businesses to new heights by exploring actionable possibilities through integrated digital marketing strategies, while fostering a collaborative and innovative work environment for our team.</p>
            </div>
        </div>
    </div>
</section>

{{-- Our Values --}}
<section class="py-20 bg-bdd-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">OUR VALUES</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">To become the largest Indonesia digital agency</h3>
        </div>

        <div x-data="{ expanded: null }" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 scroll-animate">
            @php
                $careerValues = [
                    ['title' => 'Client-Focused', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>', 'detail' => 'We prioritize our clients needs and work tirelessly to deliver results that exceed expectations. Every strategy is tailored to the unique requirements of each business.'],
                    ['title' => 'Pursuit of Excellence', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>', 'detail' => 'We strive for excellence in everything we do. From campaign strategies to creative execution, we maintain the highest standards of quality and professionalism.'],
                    ['title' => 'Data Driven', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>', 'detail' => 'Every decision we make is backed by data and insights. We leverage analytics and research to optimize strategies and deliver measurable results for our clients.'],
                    ['title' => 'Agility', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>', 'detail' => 'The digital landscape is constantly evolving, and so are we. We adapt quickly to changes in the industry and always stay ahead of trends to give our clients a competitive edge.'],
                    ['title' => 'Supportive & Collaborative', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>', 'detail' => 'We foster a supportive and collaborative work environment where team members can grow, learn, and thrive together. We believe that teamwork makes the dream work.'],
                ];
            @endphp
            @foreach($careerValues as $index => $value)
            <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300 cursor-pointer" @click="expanded = expanded === {{ $index }} ? null : {{ $index }}">
                <div class="w-14 h-14 bg-bdd-red/10 rounded-xl flex items-center justify-center text-bdd-red mb-4">
                    {!! $value['icon'] !!}
                </div>
                <h4 class="text-lg font-bold text-bdd-dark mb-2">{{ $value['title'] }}</h4>
                <div x-show="expanded === {{ $index }}" x-collapse>
                    <p class="text-sm text-bdd-gray mt-2">{{ $value['detail'] }}</p>
                </div>
                <button class="text-sm font-semibold text-bdd-red mt-3">
                    <span x-show="expanded !== {{ $index }}">Show Detail</span>
                    <span x-show="expanded === {{ $index }}" x-cloak>Hide Detail</span>
                </button>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Perks and Benefits --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">PERKS AND BENEFITS</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">Why You'll Love Working Here</h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 scroll-animate">
            @php
                $perks = [
                    ['icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>', 'title' => 'Hybrid Working Arrangement', 'desc' => 'Flexible work setup that balances office collaboration with remote productivity.'],
                    ['icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>', 'title' => 'Career & Learning Opportunities', 'desc' => 'Continuous learning through training programs, certifications, and mentorship.'],
                    ['icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>', 'title' => 'Supportive & Collaborative Culture', 'desc' => 'A team that supports your growth and celebrates your achievements.'],
                    ['icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>', 'title' => 'Employee Engagement', 'desc' => 'Regular team activities, events, and social programs that keep the spirit alive.'],
                    ['icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>', 'title' => 'Impactful Work', 'desc' => 'Work with 800+ brands and make a real difference in the digital marketing landscape.'],
                ];
            @endphp
            @foreach($perks as $perk)
            <div class="bg-bdd-light rounded-2xl p-8 hover:shadow-lg transition-all duration-300 group">
                <div class="w-14 h-14 bg-bdd-red/10 rounded-xl flex items-center justify-center text-bdd-red mb-5 group-hover:bg-bdd-red group-hover:text-white transition-colors duration-300">
                    {!! $perk['icon'] !!}
                </div>
                <h4 class="text-lg font-bold text-bdd-dark mb-2">{{ $perk['title'] }}</h4>
                <p class="text-sm text-bdd-gray">{{ $perk['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Featured Jobs --}}
<section class="py-20 bg-bdd-light" id="jobs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">OPEN POSITIONS</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">Check This Featured Job</h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 scroll-animate">
            @php
                $jobs = [
                    ['title' => 'Digital Marketing Specialist', 'type' => 'Full-time', 'location' => 'Bandung, ID'],
                    ['title' => 'Graphic Designer', 'type' => 'Full-time', 'location' => 'Bandung, ID'],
                    ['title' => 'Content Writer', 'type' => 'Full-time', 'location' => 'Bandung, ID'],
                    ['title' => 'Video Producer', 'type' => 'Full-time', 'location' => 'Bandung, ID'],
                    ['title' => 'Web Developer', 'type' => 'Full-time', 'location' => 'Bandung, ID'],
                    ['title' => 'Account Executive', 'type' => 'Full-time', 'location' => 'Jakarta, ID'],
                ];
            @endphp
            @foreach($jobs as $job)
            <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 group">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h4 class="text-lg font-bold text-bdd-dark group-hover:text-bdd-red transition-colors">{{ $job['title'] }}</h4>
                        <div class="flex items-center space-x-3 mt-2">
                            <span class="inline-flex items-center text-xs text-bdd-gray">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                {{ $job['type'] }}
                            </span>
                            <span class="inline-flex items-center text-xs text-bdd-gray">
                                <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                {{ $job['location'] }}
                            </span>
                        </div>
                    </div>
                </div>
                <a href="#" class="inline-flex items-center text-sm font-semibold text-bdd-red hover:text-red-700 transition-colors">
                    See Detail
                    <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-10">
            <a href="#" class="inline-flex items-center text-sm font-semibold text-bdd-red hover:text-red-700 transition-colors">
                Explore More Positions
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- Recruitment Process --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">RECRUITMENT PROCESS</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">Welcome to our recruitment journey!</h3>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 scroll-animate">
            @php
                $steps = [
                    ['num' => '1', 'title' => '1st Interview', 'desc' => 'HR team'],
                    ['num' => '2', 'title' => 'Psychological Test', 'desc' => 'Assessment'],
                    ['num' => '3', 'title' => 'Case Study / Technical Test', 'desc' => 'Skills evaluation'],
                    ['num' => '4', 'title' => 'User Interview', 'desc' => 'Team lead'],
                    ['num' => '5', 'title' => 'Final Interview', 'desc' => 'HR manager'],
                    ['num' => '6', 'title' => 'Onboarding', 'desc' => 'Welcome!'],
                ];
            @endphp
            @foreach($steps as $step)
            <div class="text-center group">
                <div class="w-16 h-16 mx-auto mb-4 bg-bdd-red/10 rounded-full flex items-center justify-center text-2xl font-bold text-bdd-red group-hover:bg-bdd-red group-hover:text-white transition-colors duration-300">
                    {{ $step['num'] }}
                </div>
                <h5 class="text-sm font-bold text-bdd-dark mb-1">{{ $step['title'] }}</h5>
                <p class="text-xs text-bdd-gray">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Employee Testimonials --}}
<section class="py-20 bg-bdd-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">EMPLOYEE TESTIMONIALS</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">What Our Employee Says</h3>
        </div>

        <div x-data="{
            current: 0,
            employees: [
                { name: 'Syachnurul', role: 'Graphic Designer', initial: 'S', text: 'Working at BDD has been an incredible journey. The supportive environment and continuous learning opportunities have helped me grow both professionally and personally.' },
                { name: 'Fya', role: 'Academy Program Manager', initial: 'F', text: 'The culture at BDD is truly collaborative. Every team member is valued and encouraged to share ideas. I love being part of this dynamic team.' },
                { name: 'Andrieco', role: 'Digital Marketing Specialist', initial: 'A', text: 'BDD provides the perfect platform to hone your digital marketing skills. The hands-on experience with diverse clients is invaluable.' },
                { name: 'Reza', role: 'Business Development Supervisor', initial: 'R', text: 'The growth opportunities at BDD are exceptional. From day one, I felt supported in my career development and have been able to take on challenging projects.' },
                { name: 'Esha', role: 'Section Head', initial: 'E', text: 'BDD is more than just a workplace - its a community. The team spirit and shared passion for digital marketing make every day exciting.' },
                { name: 'Bharoar', role: 'Strategist Community Dev. Officer', initial: 'B', text: 'Being part of BDD has allowed me to work on meaningful projects that impact real businesses. The sense of achievement is incredible.' },
                { name: 'Choi', role: 'Head of Project Management', initial: 'C', text: 'The leadership at BDD truly cares about its employees. The hybrid work arrangement and employee engagement programs are top-notch.' }
            ],
            next() { this.current = (this.current + 1) % this.employees.length; },
            prev() { this.current = (this.current - 1 + this.employees.length) % this.employees.length; }
        }" x-init="setInterval(() => next(), 5000)" class="scroll-animate">
            <div class="relative overflow-hidden">
                <div class="flex transition-transform duration-500" :style="'transform: translateX(-' + (current * 100) + '%)'">
                    <template x-for="(emp, i) in employees" :key="i">
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="max-w-2xl mx-auto bg-white rounded-2xl p-8 md:p-10 shadow-sm">
                                <div class="flex items-center space-x-4 mb-6">
                                    <div class="w-14 h-14 rounded-full bg-bdd-red flex items-center justify-center text-white text-xl font-bold" x-text="emp.initial"></div>
                                    <div>
                                        <h5 class="font-bold text-bdd-dark" x-text="emp.name"></h5>
                                        <p class="text-xs text-bdd-gray" x-text="emp.role"></p>
                                    </div>
                                </div>
                                <p class="text-bdd-gray italic leading-relaxed" x-text="'&quot;' + emp.text + '&quot;'"></p>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
            <div class="flex justify-center space-x-2 mt-8">
                <template x-for="(emp, i) in employees" :key="'edot-'+i">
                    <button @click="current = i" :class="current === i ? 'bg-bdd-red w-8' : 'bg-gray-300 w-3'" class="h-3 rounded-full transition-all duration-300"></button>
                </template>
            </div>
            <div class="flex justify-center space-x-4 mt-6">
                <button @click="prev()" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:bg-bdd-red hover:text-white hover:border-bdd-red transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button @click="next()" class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:bg-bdd-red hover:text-white hover:border-bdd-red transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </div>
</section>

{{-- Photo Gallery --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-animate">
        <p class="text-bdd-gray mb-10 max-w-2xl mx-auto">While running the professional world, we can do fun activities to keep the team spirit alive.</p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @for($i = 1; $i <= 8; $i++)
            <div class="aspect-square bg-gradient-to-br from-gray-200 to-gray-300 rounded-2xl overflow-hidden hover:scale-105 transition-transform duration-300 flex items-center justify-center">
                <span class="text-gray-400 text-xs">Team Activity {{ $i }}</span>
            </div>
            @endfor
        </div>
    </div>
</section>

{{-- Social Media Links --}}
<section class="py-16 bg-bdd-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-animate">
        <p class="text-bdd-gray mb-6">Follow us on social media for more updates</p>
        <div class="flex justify-center space-x-6">
            <a href="#" class="flex items-center space-x-2 text-bdd-text hover:text-bdd-red transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                <span class="text-sm font-semibold">LinkedIn</span>
            </a>
            <a href="#" class="flex items-center space-x-2 text-bdd-text hover:text-bdd-red transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                <span class="text-sm font-semibold">@lifeatbdd</span>
            </a>
            <a href="#" class="flex items-center space-x-2 text-bdd-text hover:text-bdd-red transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                <span class="text-sm font-semibold">@bolehdicobadigital</span>
            </a>
        </div>
    </div>
</section>

{{-- Final CTA --}}
<section class="py-20 bg-gradient-bdd text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-animate">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Start Your Journey Now!</h2>
        <a href="#jobs" class="inline-block bg-bdd-red hover:bg-red-600 text-white px-10 py-4 rounded-full text-lg font-semibold transition-all duration-300 hover:scale-105 hover:shadow-xl">
            Find Your Dream Job
        </a>
        <div class="mt-12 space-y-3">
            <p class="text-sm text-gray-400">Official recruitment channels:</p>
            <p class="text-sm text-gray-300">WhatsApp: +6285222381644</p>
            <p class="text-sm text-gray-300">Email: recruitment@bolehdicoba.com | hrd@bolehdicoba.com</p>
        </div>
    </div>
</section>

@endsection
