{{-- CTA Banner: Let's Grow --}}
<section class="bg-bdd-footer py-16 md:py-24 relative rounded-t-[40px] md:rounded-t-[60px]">
    <div class="max-w-[1020px] mx-auto px-6 lg:px-12">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-12">
            <div class="max-w-xl">
                <h2
                    class="font-outfitserif text-3xl md:text-[44px] font-medium text-white mb-6 leading-[1.15] tracking-tight">
                    Let's grow and collaborate <br class="hidden md:block"> with us!
                </h2>
                <p class="text-white/80 text-[14px] md:text-[15px] leading-relaxed font-outfitserif max-w-lg">
                    Creating sustainable partnerships with our clients. Transparency, honesty, and real talk are part of
                    our collaborative DNA.
                </p>
            </div>
            <div class="shrink-0">
                <a href="{{ route('about') }}" class="btn-branding-secondary group">
                    <span>Start our Journey</span>
                    <svg class="w-5 h-5 ml-3 transform group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <style>
                    .btn-branding-secondary {
                        background-color: #FFB14C;
                        color: #222;
                        font-family: 'Outfit', sans-serif;
                        font-size: 18px;
                        font-weight: 700;
                        padding: 12px 30px;
                        border-radius: 12px;
                        border: 2px solid #222;
                        cursor: pointer;
                        transition: all 0.2s;
                        display: inline-flex;
                        align-items: center;
                        text-decoration: none;
                    }

                    .btn-branding-secondary:hover {
                        background-color: #E8A145;
                        box-shadow: 4px 4px 0px 0px #222;
                        transform: translate(-3px, -3px);
                        color: #000;
                    }
                </style>
            </div>
        </div>
    </div>
</section>

<footer class="bg-[#111] text-white overflow-hidden rounded-t-[40px] md:rounded-t-[60px] -mt-12 relative z-20">
    <div class="max-w-[1020px] mx-auto px-6 lg:px-12 pt-24 pb-16">

        {{-- Top Section --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 mb-12">
            {{-- Left Part: Brand --}}
            <div class="lg:col-span-5">
                <a href="#"
                    class="flex items-center gap-3 mb-10 group opacity-90 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('images/logo2.png') }}" alt="BDD Logo" class="h-9">
                </a>
                <p class="text-[14px] text-white/70 leading-relaxed font-outfitserif max-w-md">
                    We are players in the integrated digital marketing game, devoted to the pursuit of collective
                    sustainable growth that ensures lasting success. Our mission is to elevate your business to new
                    heights by exploring actionable possibilities.
                </p>
            </div>

            {{-- Right Part: Form & Links --}}
            <div class="lg:col-span-7">
                <div class="mb-14">
                    <h4 class="font-outfitserif text-3xl md:text-[2.5rem] font-bold mb-8 tracking-tight">Get any update
                        from us!</h4>
                    <form action="#" method="POST" class="flex flex-col sm:flex-row gap-3 max-w-2xl">
                        <input type="email" placeholder="Email address"
                            class="grow bg-[#1a1a1a] border border-white/5 rounded-xl px-5 py-4 text-sm focus:outline-none focus:border-white/20 text-white placeholder-white/20">
                        <button type="submit"
                            class="bg-bdd-gold-hover text-[#222] px-10 py-4 rounded-xl font-bold text-sm flex items-center justify-center gap-2 hover:bg-bdd-gold transition-colors shrink-0">
                            Subscribe
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </form>
                </div>

                <div class="flex flex-wrap gap-12 lg:gap-24">
                    <div>
                        <p class="text-[10px] font-bold text-white/30 uppercase tracking-[0.2em] mb-5">FOLLOW US</p>
                        <div class="flex gap-3">
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-black hover:bg-bdd-gold-hover transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.643-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-black hover:bg-bdd-gold-hover transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-black hover:bg-bdd-gold-hover transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12.321 0c.549 0 1.096.002 1.646.006.014.53.056 1.077.126 1.637.07 1.05.215 2.083.435 3.098.24 1.107.568 2.181.972 3.22.427 1.103.955 2.152 1.579 3.146.623.993 1.353 1.91 2.185 2.743.832.833 1.753 1.564 2.753 2.187.994.622 2.046 1.149 3.155 1.574 1.045.402 2.124.729 3.239.967 1.026.219 2.069.363 3.13.431.57.07 1.127.111 1.666.124v3.522c-.41 0-.82-.007-1.23-.007-1.4 0-2.8-.02-4.2-.07-2.185-.077-4.32-.293-6.406-.649-2.086-.356-4.1-.849-6.042-1.48-1.942-.631-3.793-1.397-5.553-2.3-1.76-1.01-3.411-2.147-4.954-3.41-1.542-1.263-2.956-2.643-4.238-4.14-1.282-1.498-2.42-3.102-3.411-4.814-1.011-1.711-1.87-3.513-2.58-5.405-.71-1.892-1.263-3.842-1.657-5.852-.394-2.01-.635-4.067-.723-6.17-.087-2.103-.131-4.23-.13-6.38v-1.392h3.55zm.143 3.55H9v13.064c0 3.848 3.12 6.968 6.968 6.968a6.968 6.968 0 001.38-.139c2.306-.47 4.195-2.033 4.956-4.108.761-2.075.46-4.38-1.071-6.208-.43-.541-.954-1.006-1.558-1.373a7.127 7.127 0 00-3.61-.986V14.12c2.478 1.053 3.55 3.998 2.39 6.574a4.346 4.346 0 01-5.636 2.181 4.332 4.332 0 01-2.859-4.01V3.55z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-white/30 uppercase tracking-[0.2em] mb-5">OUR ECOSYSTEM</p>
                        <div class="flex items-center gap-7">
                            <a href="https://bolehbelajar.com/" target="_blank"
                                class="flex items-center gap-2.5 group opacity-70 hover:opacity-100 transition-all duration-300">
                                <div class="flex flex-col gap-[2px]">
                                    <div class="w-4 h-[3px] bg-white rounded-[1px]"></div>
                                    <div class="w-4 h-[3px] bg-white rounded-[1px]"></div>
                                    <div class="w-4 h-[3px] bg-white rounded-[1px]"></div>
                                </div>
                                <div class="flex flex-col leading-none">
                                    <span class="text-[10px] font-black uppercase tracking-tight">BOLEH</span>
                                    <span class="text-[10px] font-black uppercase tracking-tight">BELAJAR</span>
                                </div>
                            </a>
                            <div class="h-6 w-px bg-white/20"></div>
                            <a href="https://sksdigital.id/" target="_blank"
                                class="text-[18px] font-black italic tracking-tighter opacity-70 hover:opacity-100 transition-all duration-300 transform hover:scale-105">
                                SKS
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom Navigation --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8 pt-10 border-t border-white/5">
            {{-- Col 1 --}}
            <div>
                <h5 class="text-[11px] font-bold text-white/90 uppercase tracking-wider mb-8">BOLEH DICoba DIGITAL</h5>
                <ul class="space-y-3.5 mb-10">
                    <li><a href="{{ route('about') }}"
                            class="text-[13px] text-white/40 hover:text-white transition-colors">About Us</a></li>
                    <li><a href="{{ route('news-blog') }}"
                            class="text-[13px] text-white/40 hover:text-white transition-colors">News & Blog</a></li>
                    <li><a href="{{ route('case-study') }}"
                            class="text-[13px] text-white/40 hover:text-white transition-colors">Case Studies</a></li>
                    <li><a href="#" class="text-[13px] text-white/40 hover:text-white transition-colors">Loyalty
                            Program</a></li>
                    <li><a href="#" class="text-[13px] text-white/40 hover:text-white transition-colors">Web & SEO
                            Audit</a></li>
                </ul>
                <h5 class="text-[11px] font-bold text-white/90 uppercase tracking-wider mb-6">PROGRAM</h5>
                <ul class="space-y-3.5">
                    <li><a href="#" class="text-[13px] text-white/40 hover:text-white transition-colors">Bulletin
                            by BDD</a></li>
                    <li><a href="#" class="text-[13px] text-white/40 hover:text-white transition-colors">Breakfast
                            Club</a></li>
                </ul>
            </div>
            {{-- Col 2 --}}
            <div>
                <h5 class="text-[11px] font-bold text-white/90 uppercase tracking-wider mb-8">SERVICES</h5>
                <ul class="space-y-3.5">
                    <li><a href="#" class="text-[13px] text-white/40 hover:text-white transition-colors">Digital
                            Advertising</a></li>
                    <li><a href="#"
                            class="text-[13px] text-white/40 hover:text-white transition-colors">Performance
                            Creative</a></li>
                    <li><a href="#" class="text-[13px] text-white/40 hover:text-white transition-colors">Web
                            Development & Maintenance</a></li>
                    <li><a href="#" class="text-[13px] text-white/40 hover:text-white transition-colors">Search
                            Engine Optimization</a></li>
                    <li><a href="#"
                            class="text-[13px] text-white/40 hover:text-white transition-colors">Professional
                            Service</a></li>
                    <li><a href="#"
                            class="text-[13px] text-white/40 hover:text-white transition-colors">Community Program
                            Development</a></li>
                    <li><a href="#" class="text-[13px] text-white/40 hover:text-white transition-colors">Digital
                            Marketing Training by Boleh Belajar</a></li>
                    <li><a href="#"
                            class="text-[13px] text-white/40 hover:text-white transition-colors">Career</a></li>
                </ul>
            </div>
            {{-- Col 3 --}}
            <div>
                <h5 class="text-[11px] font-bold text-white/90 uppercase tracking-wider mb-8">OUR OFFICE</h5>
                <div class="space-y-7">
                    <div class="group">
                        <p class="text-[13px] font-bold text-white mb-2 flex items-center gap-2">
                            <span>🇮🇩</span> Bandung HQ
                        </p>
                        <p
                            class="text-[12px] text-white/40 leading-relaxed font-outfitserif group-hover:text-white transition-colors">
                            Jl. Lembong No.32, Braga, Kec. Sumur Bandung, <br> Kota Bandung, Jawa Barat 40111
                        </p>
                    </div>
                    <div class="group">
                        <p class="text-[13px] font-bold text-white mb-2 flex items-center gap-2">
                            <span>🇮🇩</span> Jakarta HQ
                        </p>
                        <p
                            class="text-[12px] text-white/40 leading-relaxed font-outfitserif group-hover:text-white transition-colors">
                            Jl. Kemang Raya Selatan VIII No.55, Jakarta Selatan, <br> Indonesia
                        </p>
                    </div>
                    <div class="group">
                        <p class="text-[13px] font-bold text-white mb-2 flex items-center gap-2">
                            <span>🇸🇬</span> Singapore HQ
                        </p>
                        <p
                            class="text-[12px] text-white/40 leading-relaxed font-outfitserif group-hover:text-white transition-colors">
                            531A Upper Cross Street #04-95, Hong Lim <br> Complex Singapore 051531
                        </p>
                    </div>
                </div>
            </div>
            {{-- Col 4 --}}
            <div>
                <h5 class="text-[11px] font-bold text-white/90 uppercase tracking-wider mb-8">CONTACT US</h5>
                <div class="space-y-4">
                    <p class="text-[13px] text-white/60 font-medium whitespace-nowrap">P. +62818 0575 7585</p>
                    <p class="text-[13px] text-white/60 font-medium whitespace-nowrap">E. hi@bolehdicoba.com</p>
                </div>
            </div>
        </div>
    </div>
</footer>
