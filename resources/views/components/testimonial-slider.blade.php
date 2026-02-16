{{-- Testimonials Slider --}}
<section class="py-20 bg-bdd-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 scroll-animate">
            <p class="font-outfitserif text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">FROM OUR NOTABLE CLIENTS</p>
            <h3 class="font-outfitserif text-3xl md:text-4xl font-bold text-bdd-dark">800+++ business have experienced the result</h3>
        </div>

        <div x-data="{
            currentSlide: 0,
            testimonials: [
                { initial: 'L', name: 'Lotus Archi', text: 'Kita sudah jalan 2 tahun dengan pelayanan dari tim BDD dan cukup puas dengan pelayanan yang diberikan. Adanya insight setiap bulan dan performance online sale yang perlahan-lahan mulai ada peningkatan juga jadi faktor yang mempertahankan kerja sama antara brand Lotus Archi Gold dan juga BDD.' },
                { initial: 'H', name: 'Holycow', text: 'Terima kasih banyak ya BDD untuk service digital marketingnya yang ciamik! Kami sangat terbantu dengan deliverables yang sudah diberikan BDD pada perkembangan presensi digital kami.' },
                { initial: 'K', name: 'Kitschy', text: 'Sangat senang dengan team BDD yang responsif dan komunikatif, sangat bisa kasih suggestion untuk improvement Kitschy.' },
                { initial: 'C', name: 'CRSL', text: 'Selama jalan 3 tahun, sangat terbantu, ada dampak yang cukup signifikan dalam meningkat sales apalagi CPASnya. Sudah oke dari segi rekomendasi dan komunikasi.' },
                { initial: 'C', name: 'COTTONINK', text: 'BDD sangat aktif buat ngasih insight dan rekomendasi terkait ads, Selama jalan kurang lebih 3 tahun udah nemu formula winning campaign nya, Dari sisi performance juga cukup oke, teknis pengerjaan dan inisiatif strategi nya bagus.' }
            ],
            get visibleTestimonials() {
                return this.testimonials;
            },
            next() {
                this.currentSlide = (this.currentSlide + 1) % this.testimonials.length;
            },
            prev() {
                this.currentSlide = (this.currentSlide - 1 + this.testimonials.length) % this.testimonials.length;
            }
        }" x-init="setInterval(() => next(), 5000)">
            <div class="relative overflow-hidden">
                <div class="flex transition-transform duration-500" :style="'transform: translateX(-' + (currentSlide * 100) + '%)'">
                    <template x-for="(t, i) in testimonials" :key="i">
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="max-w-2xl mx-auto bg-white rounded-2xl p-8 md:p-10 shadow-sm">
                                <div class="flex items-center space-x-4 mb-6">
                                    <div class="w-14 h-14 rounded-full bg-bdd-red flex items-center justify-center text-white text-xl font-bold" x-text="t.initial"></div>
                                    <div>
                                        <h5 class="font-outfitserif font-bold text-bdd-dark" x-text="t.name"></h5>
                                        <p class="text-xs text-bdd-gray">Notable Client</p>
                                    </div>
                                </div>
                                <p class="text-bdd-gray italic leading-relaxed" x-text="'&quot;' + t.text + '&quot;'"></p>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            {{-- Navigation Dots --}}
            <div class="flex justify-center space-x-2 mt-8">
                <template x-for="(t, i) in testimonials" :key="'dot-'+i">
                    <button @click="currentSlide = i"
                        :class="currentSlide === i ? 'bg-bdd-red w-8' : 'bg-gray-300 w-3'"
                        class="h-3 rounded-full transition-all duration-300"></button>
                </template>
            </div>

            {{-- Arrow Navigation --}}
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
