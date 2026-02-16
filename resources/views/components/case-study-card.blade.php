{{-- Case Study Card Component --}}
{{-- Usage: @include('components.case-study-card', ['category' => '...', 'title' => '...', 'description' => '...', 'link' => '#']) --}}
<div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100">
    <div class="relative h-52 bg-gradient-to-br from-gray-100 to-gray-200 overflow-hidden">
        @if(isset($image) && $image)
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
        @else
            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-bdd-dark to-bdd-navy">
                <svg class="w-16 h-16 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            </div>
        @endif
    </div>
    <div class="p-6">
        <span class="inline-block px-3 py-1 text-xs font-semibold text-bdd-red bg-bdd-red/10 rounded-full mb-3">{{ $category ?? 'Digital Advertising' }}</span>
        <h4 class="text-base font-bold text-bdd-dark mb-2 line-clamp-2 group-hover:text-bdd-red transition-colors">{{ $title }}</h4>
        <p class="text-sm text-bdd-gray mb-4 line-clamp-3">{{ $description }}</p>
        <a href="{{ $link ?? '#' }}" class="inline-flex items-center text-sm font-semibold text-bdd-red hover:text-red-700 transition-colors">
            Read The Story
            <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</div>
