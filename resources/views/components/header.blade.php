<header x-data="{ mobileOpen: false, searchOpen: false }" class="fixed top-0 left-0 right-0 z-50 bg-white border-b border-gray-200 font-sans">
    <!-- Container 1: Full width -->
    <div class="w-full bg-white">
        <!-- Container 2: Content dengan max-width 100% -->
        <div class="max-w-full mx-auto px-4 md:px-12 h-[76px] flex items-center justify-between">
            <!-- Left Group: Hamburger & Logo -->
            <div class="flex items-center gap-2 md:gap-4">
                <button @click="mobileOpen = !mobileOpen"
                    class="xl:hidden p-2 text-gray-700 hover:text-blue-600 transition-colors">
                    <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        x-cloak>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <a href="/" class="flex items-center gap-2 md:gap-3">
                    {{-- Mobile Logo --}}
                    <img src="{{ asset('images/Logobdd2.png') }}" alt="Boleh Dicoba Digital"
                        class="h-10 md:hidden object-contain">
                    {{-- Desktop Logo --}}
                    <img src="https://bolehdicoba.com/wp-content/uploads/2024/03/Logo.png" alt="Boleh Dicoba Digital"
                        class="hidden md:block h-16 object-contain">
                </a>
            </div>

            <!-- Right: XL standard icons / Mobile large button -->
            <div class="flex items-center gap-1">
                <!-- Mobile only large blue button -->
                <a href="https://api.whatsapp.com/send?phone=6281805757585" target="_blank"
                    class="xl:hidden flex items-center gap-2 bg-[#5B84C4] text-white text-[11px] font-bold px-3 py-2 rounded-lg border border-black shadow-[1px_1px_0px_#000] whitespace-nowrap">
                    <img src="https://bolehdicoba.com/wp-content/uploads/2024/10/32px-WhatsApp_icon.png" alt="WA"
                        class="w-4 h-4">
                    Free Consultation!
                </a>

                <!-- Desktop Navigation (kanan) -->
                <div class="hidden xl:flex items-center gap-6">
                    <nav class="flex items-center space-x-6 text-sm font-medium text-gray-800">
                        <!-- SERVICES DROPDOWN -->
                        <div class="relative" x-data="{ open: false }" @mouseenter="open = true"
                            @mouseleave="open = false">
                            <button
                                class="flex items-center gap-1 hover:text-blue-600 transition-colors whitespace-nowrap py-6">
                                Services
                                <svg :class="open ? 'rotate-180' : ''" class="w-4 h-4 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <!-- Dropdown content -->
                            <div x-show="open" x-transition
                                class="fixed left-0 top-[76px] w-full bg-[#faf9f7] border-t border-gray-200 shadow-lg z-50"
                                x-cloak>
                                <div class="max-w-full mx-auto px-12">
                                    <div class="grid grid-cols-3 border-l border-t border-gray-200">
                                        <!-- 1. Performance Creative -->
                                        <div class="p-6 border-r border-b border-gray-200 hover:bg-white/50 transition">
                                            <h3 class="font-medium text-gray-900 text-xl mb-2">Performance Creative</h3>
                                            <p class="text-gray-600 text-base leading-relaxed mb-3">Create ads-ready
                                                contents to better communicate your brand message.</p>
                                            <a href="{{ route('services.performance-creative') }}"
                                                class="text-blue-600 text-sm font-medium inline-flex items-center gap-1 hover:underline">See
                                                Service <span>↗</span></a>
                                        </div>
                                        <!-- 2. Professional Service -->
                                        <div class="p-6 border-r border-b border-gray-200 hover:bg-white/50 transition">
                                            <h3 class="font-medium text-gray-900 text-xl mb-2">Professional Service</h3>
                                            <p class="text-gray-600 text-base leading-relaxed mb-3">Tailored training
                                                program guided by industry experts and professionals.</p>
                                            <a href="{{ route('services.professional-service') }}"
                                                class="text-blue-600 text-sm font-medium inline-flex items-center gap-1 hover:underline">See
                                                Service <span>↗</span></a>
                                        </div>
                                        <!-- 3. Website Development -->
                                        <div class="p-6 border-b border-gray-200 hover:bg-white/50 transition">
                                            <h3 class="font-medium text-gray-900 text-xl mb-2">Website Development</h3>
                                            <p class="text-gray-600 text-base leading-relaxed mb-3">Effective website
                                                with
                                                sufficient performance and aesthetic to fulfill transaction and deliver
                                                brand identity.</p>
                                            <a href="{{ route('services.website-development') }}"
                                                class="text-blue-600 text-sm font-medium inline-flex items-center gap-1 hover:underline">See
                                                Service <span>↗</span></a>
                                        </div>
                                        <!-- 4. Search Engine Optimization -->
                                        <div class="p-6 border-r border-b border-gray-200 hover:bg-white/50 transition">
                                            <h3 class="font-medium text-gray-900 text-xl mb-2">Search Engine
                                                Optimization
                                            </h3>
                                            <p class="text-gray-600 text-base leading-relaxed mb-3">Organically increase
                                                your website and online store visibility.</p>
                                            <a href="{{ route('services.seo') }}"
                                                class="text-blue-600 text-sm font-medium inline-flex items-center gap-1 hover:underline">See
                                                Service <span>↗</span></a>
                                        </div>
                                        <!-- 5. Digital Advertising -->
                                        <div class="p-6 border-r border-b border-gray-200 hover:bg-white/50 transition">
                                            <h3 class="font-medium text-gray-900 text-xl mb-2">Digital Advertising</h3>
                                            <p class="text-gray-600 text-base leading-relaxed mb-3">Optimize ads
                                                performance, install CPAS, solve invisible issues on your online ads
                                                campaign.</p>
                                            <a href="{{ route('services.digital-advertising') }}"
                                                class="text-blue-600 text-sm font-medium inline-flex items-center gap-1 hover:underline">See
                                                Service <span>↗</span></a>
                                        </div>
                                        <!-- 6. Community Program Development -->
                                        <div class="p-6 border-b border-gray-200 hover:bg-white/50 transition">
                                            <h3 class="font-medium text-gray-900 text-xl mb-2">Community Program
                                                Development
                                            </h3>
                                            <p class="text-gray-600 text-base leading-relaxed mb-3">We help the business
                                                to
                                                retain customers, and encourages them to explore more of your products
                                                and
                                                services.</p>
                                            <a href="{{ route('services.community-program') }}"
                                                class="text-blue-600 text-sm font-medium inline-flex items-center gap-1 hover:underline">See
                                                Service <span>↗</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PROGRAM DROPDOWN -->
                        <div class="relative" x-data="{ open: false }" @mouseenter="open = true"
                            @mouseleave="open = false">
                            <button
                                class="flex items-center gap-1 hover:text-blue-600 transition-colors whitespace-nowrap">
                                Program
                                <svg :class="open ? 'rotate-180' : ''" class="w-4 h-4 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <!-- Dropdown content -->
                            <div x-show="open" x-transition
                                class="fixed left-0 top-[76px] w-full bg-[#faf9f7] border-t border-gray-200 shadow-lg z-50"
                                x-cloak>
                                <div class="max-w-full mx-auto px-12">
                                    <div class="grid grid-cols-3 border-l border-t border-gray-200">
                                        <!-- Breakfast Program -->
                                        <div
                                            class="p-6 border-r border-b border-gray-200 hover:bg-white/50 transition">
                                            <h3 class="font-medium text-gray-900 text-xl mb-2">Breakfast Program</h3>
                                            <p class="text-gray-600 text-base leading-relaxed mb-3">"Good Food Ends
                                                with
                                                Good Talk" – Monthly sharing session over breakfast with industry
                                                leaders.
                                            </p>
                                            <a href="#"
                                                class="text-blue-600 text-sm font-medium inline-flex items-center gap-1 hover:underline">Explore
                                                More <span>↗</span></a>
                                        </div>
                                        <!-- Partnership & Collaboration -->
                                        <div
                                            class="p-6 border-r border-b border-gray-200 hover:bg-white/50 transition">
                                            <h3 class="font-medium text-gray-900 text-xl mb-2">Partnership &
                                                Collaboration
                                            </h3>
                                            <p class="text-gray-600 text-base leading-relaxed mb-3">Generating and
                                                expanding
                                                networks through events and collaborations with notable partners.</p>
                                            <a href="#"
                                                class="text-blue-600 text-sm font-medium inline-flex items-center gap-1 hover:underline">Explore
                                                More <span>↗</span></a>
                                        </div>
                                        <!-- Industry Insights -->
                                        <div class="p-6 border-b border-gray-200 hover:bg-white/50 transition">
                                            <h3 class="font-medium text-gray-900 text-xl mb-2">Industry Insights</h3>
                                            <p class="text-gray-600 text-base leading-relaxed mb-3">Trends and insights
                                                for
                                                business owners to understand the industry better.</p>
                                            <a href="#"
                                                class="text-blue-600 text-sm font-medium inline-flex items-center gap-1 hover:underline">Explore
                                                More <span>↗</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- INFORMATION DROPDOWN -->
                        <div class="relative" x-data="{ open: false }" @mouseenter="open = true"
                            @mouseleave="open = false">
                            <button
                                class="flex items-center gap-1 hover:text-blue-600 transition-colors whitespace-nowrap">
                                Information
                                <svg :class="open ? 'rotate-180' : ''" class="w-4 h-4 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <!-- Dropdown content -->
                            <div x-show="open" x-transition
                                class="fixed left-0 top-[76px] w-full bg-[#faf9f7] border-t border-gray-200 shadow-lg z-50"
                                x-cloak>
                                <div class="max-w-full mx-auto px-12">
                                    <div class="grid grid-cols-2 border-l border-t border-gray-200 max-w-3xl">
                                        <!-- About Us -->
                                        <div
                                            class="p-6 border-r border-b border-gray-200 hover:bg-white/50 transition">
                                            <h3 class="font-medium text-gray-900 text-xl mb-2">About Us</h3>
                                            <p class="text-gray-600 text-base leading-relaxed mb-3">We're not just a
                                                player
                                                in this industry; we're visionaries. Discover our journey into the world
                                                of
                                                agency—where strategy meets imagination.</p>
                                            <a href="{{ route('about') }}"
                                                class="text-blue-600 text-sm font-medium inline-flex items-center gap-1 hover:underline">Learn
                                                More <span>↗</span></a>
                                        </div>
                                        <!-- Case Study -->
                                        <div class="p-6 border-b border-gray-200 hover:bg-white/50 transition">
                                            <h3 class="font-medium text-gray-900 text-xl mb-2">Case Study</h3>
                                            <p class="text-gray-600 text-base leading-relaxed mb-3">Explore our partner
                                                success stories and how we deliver remarkable results. Learn from our
                                                clients' journeys.</p>
                                            <a href="{{ route('case-study') }}"
                                                class="text-blue-600 text-sm font-medium inline-flex items-center gap-1 hover:underline">View
                                                Cases <span>↗</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Regular links -->
                        <a href="{{ route('news-blog') }}"
                            class="hover:text-blue-600 transition-colors whitespace-nowrap">News & Blog</a>
                        <a href="#" class="hover:text-blue-600 transition-colors whitespace-nowrap">Loyalty
                            Program</a>
                        <a href="#" class="hover:text-blue-600 transition-colors whitespace-nowrap">Web & SEO
                            Audit</a>
                        <a href="{{ route('career') }}"
                            class="hover:text-blue-600 transition-colors whitespace-nowrap">Career</a>
                    </nav>

                    <!-- Search & CTA -->
                    <div class="flex items-center gap-2">
                        <!-- Search -->
                        <div class="relative">
                            <button @click="searchOpen = !searchOpen"
                                class="p-2 text-gray-700 hover:text-blue-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>

                            <!-- Search dropdown -->
                            <div x-show="searchOpen" @click.outside="searchOpen = false"
                                class="absolute right-0 mt-3 w-[400px] bg-white border border-gray-200 rounded-xl shadow-lg p-4"
                                x-cloak>
                                <div class="space-y-3">
                                    <p class="text-sm text-gray-600">Masukkan kata kunci pencarian</p>
                                    <input type="text"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <button
                                        class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2.5 px-4 rounded-lg transition-colors">
                                        Cari sekarang
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <a href="https://api.whatsapp.com/send?phone=6281805757585" target="_blank"
                            class="flex gap-2 bg-[#5B84C4] hover:bg-black text-white text-sm font-semibold px-4 py-2.5 rounded-lg border-1 border-gray-800  transition-all whitespace-nowrap">
                            <img src="https://bolehdicoba.com/wp-content/uploads/2024/10/32px-WhatsApp_icon.png"
                                alt="WhatsApp" class="w-5 h-5">
                            Free Consultation!
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            class="xl:hidden bg-white border-t border-gray-200 py-6 px-6 w-full h-screen overflow-y-auto" x-cloak>
            <nav class="space-y-6">
                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex items-center justify-between w-full text-lg font-normal text-gray-900 leading-none">
                        Services
                        <svg :class="open ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" class="mt-4 ml-4 space-y-4 border-l-2 border-gray-100 pl-4">
                        <a href="{{ route('services.digital-advertising') }}"
                            class="block text-gray-600 hover:text-blue-600">Digital Advertising</a>
                        <a href="{{ route('services.performance-creative') }}"
                            class="block text-gray-600 hover:text-blue-600">Performance Creative</a>
                        <a href="{{ route('services.website-development') }}"
                            class="block text-gray-600 hover:text-blue-600">Web Development</a>
                        <a href="{{ route('services.seo') }}" class="block text-gray-600 hover:text-blue-600">SEO</a>
                        <a href="{{ route('services.community-program') }}"
                            class="block text-gray-600 hover:text-blue-600">Community Development</a>
                        <a href="{{ route('services.professional-service') }}"
                            class="block text-gray-600 hover:text-blue-600">Professional Service</a>
                    </div>
                </div>

                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex items-center justify-between w-full text-lg font-normal text-gray-900 leading-none">
                        Program
                        <svg :class="open ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" class="mt-4 ml-4 space-y-4 border-l-2 border-gray-100 pl-4">
                        <a href="#" class="block text-gray-600 hover:text-blue-600">Bulletin</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600">Events</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600">Breakfast Club</a>
                    </div>
                </div>

                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex items-center justify-between w-full text-lg font-normal text-gray-900 leading-none">
                        Information
                        <svg :class="open ? 'rotate-180' : ''" class="w-5 h-5 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" class="mt-4 ml-4 space-y-4 border-l-2 border-gray-100 pl-4">
                        <a href="{{ route('about') }}" class="block text-gray-600 hover:text-blue-600">About Us</a>
                        <a href="{{ route('news-blog') }}" class="block text-gray-600 hover:text-blue-600">News &
                            Blog</a>
                        <a href="{{ route('career') }}" class="block text-gray-600 hover:text-blue-600">Career</a>
                    </div>
                </div>

                <a href="#" class="block text-lg font-normal text-gray-900 leading-none">Loyalty Program</a>
                <a href="#" class="block text-lg font-normal text-gray-900 leading-none">Web & SEO Audit</a>

                <div class="pt-6">
                    <a href="https://api.whatsapp.com/send?phone=6281805757585" target="_blank"
                        class="flex items-center justify-center gap-2 bg-[#5B84C4] text-white text-base font-normal px-6 py-4 rounded-xl w-full shadow-lg">
                        <img src="https://bolehdicoba.com/wp-content/uploads/2024/10/32px-WhatsApp_icon.png"
                            alt="WhatsApp" class="w-6 h-6">
                        Free Consultation!
                    </a>
                </div>
            </nav>
        </div>
</header>
