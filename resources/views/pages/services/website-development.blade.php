@extends('layouts.app')

@section('title', 'Website Development - Boleh Dicoba Digital')

@section('content')

{{-- Hero --}}
<section class="relative bg-gradient-to-br from-bdd-dark via-bdd-navy to-bdd-dark py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-20 w-80 h-80 bg-bdd-coral rounded-full blur-3xl"></div>
    </div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sm text-bdd-coral font-semibold uppercase tracking-widest mb-6 animate-fade-in">WEBSITE DEVELOPMENT</p>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6 animate-fade-in-up">Embrace Your Digital Presence and Creative Innovation</h1>
        <p class="text-lg text-gray-300 mb-6 animate-fade-in-up" style="animation-delay: 0.2s">
            Unleash your online identity's full potential through engaging content and maintenance, then transform it into a valuable asset for your business's growth.
        </p>
        <span class="inline-block bg-white/10 text-white px-6 py-2 rounded-full text-sm font-semibold animate-fade-in-up" style="animation-delay: 0.4s">Over 100+ Brand Trust our Service</span>
    </div>
</section>

{{-- Service Offerings --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">SERVICE OFFERINGS</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">Enhancing Customer Experiences Through User-Centric Design</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 scroll-animate">
            @php
                $offerings = [
                    ['title' => 'E-Commerce, Company Profile, Web Application', 'desc' => 'We build websites that are not only functional but also showcase aesthetic appeal, reflecting brand identity while facilitating transactions.'],
                    ['title' => 'Website Maintenance', 'desc' => 'We consistently manage and optimize your website for making sure peak performance to support its functionality.'],
                    ['title' => 'IT Solutions', 'desc' => 'Seeking solutions for your IT challenges, whether it\'s HRIS, CRM tools, or more. No need to worry; we\'ve got you covered.'],
                ];
            @endphp
            @foreach($offerings as $offering)
            <div class="bg-bdd-light rounded-2xl p-8 hover:shadow-lg transition-all duration-300 group">
                <div class="w-14 h-14 bg-bdd-red/10 rounded-xl flex items-center justify-center text-bdd-red mb-5 group-hover:bg-bdd-red group-hover:text-white transition-colors">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <h4 class="text-lg font-bold text-bdd-dark mb-3">{{ $offering['title'] }}</h4>
                <p class="text-sm text-bdd-gray">{{ $offering['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Shopify Partner --}}
<section class="py-20 bg-bdd-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="scroll-animate">
                <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">SHOPIFY PARTNER</p>
                <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark mb-4">Expert guidance and support for your business</h3>
                <p class="text-bdd-gray mb-6">We are affiliated with Shopify as part of our commitment to assisting your business's growth to the fullest. The Shopify Partner Program comprises a varied community of designers, developers, marketers, and affiliates leveraging the Shopify platform.</p>
                <div class="space-y-4">
                    <div class="bg-white rounded-xl p-5">
                        <h5 class="font-bold text-bdd-dark mb-1">About Shopify</h5>
                        <p class="text-sm text-bdd-gray">Shopify is a commerce platform that enables businesses to build an online store, market to customers, and accept payments across multiple sales channels.</p>
                    </div>
                    <div class="bg-white rounded-xl p-5">
                        <h5 class="font-bold text-bdd-dark mb-1">Shopify Partner</h5>
                        <p class="text-sm text-bdd-gray">They are merchants that accepted the terms with Shopify to assist business owners enhance the success of their Shopify stores.</p>
                    </div>
                </div>
            </div>
            <div class="scroll-animate">
                <div class="bg-gradient-to-br from-bdd-dark to-bdd-navy rounded-3xl h-[400px] flex items-center justify-center">
                    <div class="text-center">
                        <span class="text-4xl font-bold text-white/20">Shopify</span>
                        <p class="text-white/40 text-sm mt-2">Partner Logo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Shopify Cost Calculator --}}
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 scroll-animate">
            <p class="text-sm text-bdd-red font-semibold uppercase tracking-wider mb-3">BUDGET CALCULATION</p>
            <h3 class="text-3xl md:text-4xl font-bold text-bdd-dark">Calculate the expenses required for your business plan</h3>
        </div>

        <div x-data="{
            shipment: '',
            payment: '',
            planType: 'monthly',
            plan: '',
            revenue: 0,
            get shopifyCost() {
                const prices = {
                    monthly: { basic: 25, standard: 65, advance: 399, plus: 2000 },
                    annual: { basic: 19, standard: 49, advance: 299, plus: 2000 }
                };
                if (!this.plan) return 0;
                return (prices[this.planType]?.[this.plan] || 0) * 15500;
            },
            get transactionFee() {
                const rates = { basic: 0.02, standard: 0.01, advance: 0.005, plus: 0.0015 };
                return Math.round(this.revenue * (rates[this.plan] || 0));
            },
            get totalCost() {
                return this.shopifyCost + this.transactionFee;
            },
            formatIDR(num) {
                return 'IDR ' + new Intl.NumberFormat('id-ID').format(num);
            }
        }" class="bg-bdd-light rounded-3xl p-8 md:p-12 scroll-animate">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-bdd-text mb-1.5">Shipment Method</label>
                    <select x-model="shipment" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-bdd-red">
                        <option value="">Choose shipment method...</option>
                        <option>Flat Rate</option>
                        <option>3rd Party Courier Service</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-bdd-text mb-1.5">Payment Gateway</label>
                    <select x-model="payment" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-bdd-red">
                        <option value="">Choose payment gateway...</option>
                        <option>Manual Payment Method</option>
                        <option>External Payment Gateway (Xendit, Midtrans, etc)</option>
                    </select>
                </div>
            </div>

            <div class="mt-6">
                <label class="block text-sm font-medium text-bdd-text mb-1.5">Plan</label>
                <div class="flex space-x-4 mb-4">
                    <button @click="planType = 'monthly'" :class="planType === 'monthly' ? 'bg-bdd-red text-white' : 'bg-white text-bdd-text'" class="px-5 py-2 rounded-full text-sm font-semibold transition-colors">Monthly Plan</button>
                    <button @click="planType = 'annual'" :class="planType === 'annual' ? 'bg-bdd-red text-white' : 'bg-white text-bdd-text'" class="px-5 py-2 rounded-full text-sm font-semibold transition-colors">Annual Plan</button>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                    <button @click="plan = 'basic'" :class="plan === 'basic' ? 'border-bdd-red bg-bdd-red/5' : 'border-gray-200'" class="border-2 rounded-xl p-4 text-center transition-colors">
                        <p class="text-sm font-bold text-bdd-dark">Shopify Basic</p>
                        <p class="text-xs text-bdd-gray mt-1" x-text="planType === 'monthly' ? '$25/mo' : '$19/mo'"></p>
                    </button>
                    <button @click="plan = 'standard'" :class="plan === 'standard' ? 'border-bdd-red bg-bdd-red/5' : 'border-gray-200'" class="border-2 rounded-xl p-4 text-center transition-colors">
                        <p class="text-sm font-bold text-bdd-dark">Shopify</p>
                        <p class="text-xs text-bdd-gray mt-1" x-text="planType === 'monthly' ? '$65/mo' : '$49/mo'"></p>
                    </button>
                    <button @click="plan = 'advance'" :class="plan === 'advance' ? 'border-bdd-red bg-bdd-red/5' : 'border-gray-200'" class="border-2 rounded-xl p-4 text-center transition-colors">
                        <p class="text-sm font-bold text-bdd-dark">Shopify Advance</p>
                        <p class="text-xs text-bdd-gray mt-1" x-text="planType === 'monthly' ? '$399/mo' : '$299/mo'"></p>
                    </button>
                    <button @click="plan = 'plus'" :class="plan === 'plus' ? 'border-bdd-red bg-bdd-red/5' : 'border-gray-200'" class="border-2 rounded-xl p-4 text-center transition-colors">
                        <p class="text-sm font-bold text-bdd-dark">Shopify Plus</p>
                        <p class="text-xs text-bdd-gray mt-1">start $2000</p>
                    </button>
                </div>
            </div>

            <div class="mt-6">
                <label class="block text-sm font-medium text-bdd-text mb-1.5">Monthly Revenue (IDR)</label>
                <input type="number" x-model.number="revenue" placeholder="0" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-bdd-red">
            </div>

            {{-- Results --}}
            <div class="mt-8 bg-white rounded-2xl p-6 space-y-4">
                <div class="flex justify-between items-center">
                    <span class="text-sm font-semibold text-bdd-dark">Shopify Monthly Plan</span>
                    <span class="text-sm font-bold text-bdd-dark" x-text="formatIDR(shopifyCost)"></span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm font-semibold text-bdd-dark">Transaction fees for Shopify</span>
                    <span class="text-sm font-bold text-bdd-dark" x-text="formatIDR(transactionFee)"></span>
                </div>
                <div class="border-t pt-4 flex justify-between items-center">
                    <span class="text-base font-bold text-bdd-dark">TOTAL MONTHLY COST (Estimated)</span>
                    <span class="text-lg font-extrabold text-bdd-red" x-text="formatIDR(totalCost)"></span>
                </div>
            </div>

            <p class="text-center text-sm text-bdd-gray mt-4">If you have another question about Shopify <a href="{{ route('about') }}" class="text-bdd-red hover:underline">Contact Here</a></p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-gradient-bdd text-white text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 scroll-animate">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Elevate your brand with BDD's Website Development Service</h2>
        <p class="text-gray-300 mb-8">Transform your website into a welcoming space for your audience; let's build a cozy one.</p>
        <a href="https://api.whatsapp.com/send?phone=6281805757585&text=Halo%20saya%20tertarik%20dengan%20service%20Website%20Development" target="_blank"
           class="inline-flex items-center space-x-2 bg-bdd-red hover:bg-red-600 text-white px-10 py-4 rounded-full text-lg font-semibold transition-all duration-300 hover:scale-105">
            <span>Consult with Us</span>
        </a>
    </div>
</section>

@endsection
