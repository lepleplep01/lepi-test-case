{{-- Stats / Numbers Section --}}
<section class="py-20 bg-gradient-bdd text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-coral font-semibold uppercase tracking-wider mb-3">WE ON NUMBERS</p>
            <h3 class="text-3xl md:text-4xl font-bold">We Establish an Ecosystem to Enhance Brand Growth.</h3>
            <p class="text-gray-300 mt-4 max-w-3xl mx-auto">Beyond conventional marketing norms, we craft innovative strategies infused with data-driven insights to create comprehensive campaigns that resonate with target audiences for 800+ clients.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
            @php
                $stats = [
                    ['number' => '800+', 'label' => 'Clients Growing'],
                    ['number' => '140+', 'label' => 'Teams of Professional'],
                    ['number' => '50+', 'label' => 'Meta & Google Certified Professional'],
                    ['number' => '400 Mio+', 'label' => 'Online Engagement Performance'],
                    ['number' => 'USD 15 Mio+', 'label' => 'Advertising Spend'],
                    ['number' => '+And Many More', 'label' => ''],
                ];
            @endphp
            @foreach($stats as $stat)
            <div class="text-center scroll-animate">
                <h4 class="text-2xl md:text-3xl font-extrabold text-bdd-coral mb-2">{{ $stat['number'] }}</h4>
                @if($stat['label'])
                <p class="text-sm text-gray-300">{{ $stat['label'] }}</p>
                @endif
            </div>
            @endforeach
        </div>

        {{-- Partner Logos --}}
        <div class="mt-16 flex justify-center items-center space-x-8 opacity-60">
            @for($i = 0; $i < 5; $i++)
            <div class="w-24 h-12 bg-white/10 rounded-lg flex items-center justify-center">
                <span class="text-xs text-gray-400">Partner</span>
            </div>
            @endfor
        </div>
    </div>
</section>
