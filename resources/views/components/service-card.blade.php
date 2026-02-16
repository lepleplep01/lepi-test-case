{{-- Service Card Component --}}
{{-- Usage: @include('components.service-card', ['title' => '...', 'description' => '...', 'link' => '...', 'image' => '...']) --}}
<div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100 scroll-animate">
    <div class="relative h-48 bg-gradient-to-br from-bdd-dark to-bdd-navy overflow-hidden">
        @if(isset($image) && $image)
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
        @else
            <div class="w-full h-full flex items-center justify-center">
                <span class="text-white/30 text-6xl font-bold">{{ substr($title, 0, 2) }}</span>
            </div>
        @endif
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-5">
            <span class="text-xs font-semibold text-bdd-coral uppercase tracking-wider">{{ $title }}</span>
        </div>
    </div>
    <div class="p-6">
        <h4 class="text-lg font-bold text-bdd-dark mb-2 group-hover:text-bdd-red transition-colors">{{ $title }}</h4>
        <p class="text-sm text-bdd-gray mb-4 line-clamp-3">{{ $description }}</p>
        <a href="{{ $link ?? '#' }}" class="inline-flex items-center text-sm font-semibold text-bdd-red hover:text-red-700 transition-colors">
            See Detail Service
            <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</div>
