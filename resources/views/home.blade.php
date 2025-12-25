<x-layout>
    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl font-montserrat">
                            <span class="block xl:inline">Global Logistics</span>
                            <span class="block text-brand-primary xl:inline">Simplified</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            World Pac International Ltd. provides end-to-end supply chain solutions, freight forwarding, and expert logistics management for businesses worldwide.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start gap-4">
                            <x-ui.button variant="primary" href="{{ route('contact') }}">
                                Contact US
                            </x-ui.button>
                            <x-ui.button variant="outline" href="{{ route('contact') }}">
                                Our Services
                            </x-ui.button>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('images/home-hero.png') }}" alt="World Pac Logistics Global Delivery">
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-brand-primary py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-2">
                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl text-center border border-white/20">
                    <div class="text-5xl font-extrabold text-white mb-2">{{ $stats['shipments'] }}</div>
                    <div class="text-gray-200 text-lg uppercase tracking-wider font-montserrat">Daily Shipments</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl text-center border border-white/20">
                    <div class="text-5xl font-extrabold text-white mb-2">{{ $stats['accuracy'] }}</div>
                    <div class="text-gray-200 text-lg uppercase tracking-wider font-montserrat">Tracking Accuracy</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="py-24 bg-brand-light" id="services">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-base text-brand-secondary font-semibold tracking-wide uppercase">Our Capabilities</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-brand-primary sm:text-4xl font-montserrat">
                    Smart Logistics Solutions
                </p>
                <p class="mt-4 max-w-2xl text-xl text-brand-gray mx-auto">
                    We offer a wide range of services to handle your global supply chain needs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach([
                    ['title' => 'Express Courier', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'desc' => 'Fast international delivery with global reach.'],
                    ['title' => 'Customs Expertise', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'desc' => 'Specialized documentation and fast clearance.'],
                    ['title' => 'Global Logistics', 'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h2.945M8 3.935A9 9 0 1114.538 21.065', 'desc' => 'End-to-end import and export solutions.'],
                ] as $item)
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-blue-50 text-brand-primary rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-primary mb-3">{{ $item['title'] }}</h3>
                    <p class="text-brand-gray text-sm mb-6">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>

            <div class="mt-16 text-center">
                <x-ui.button variant="primary" href="{{ route('services') }}">
                    View All Services & Process
                </x-ui.button>
            </div>
        </div>
    </div>

    <!-- Global Reach Section -->
    <div class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-brand-primary font-montserrat mb-6">Global Reach</h2>
                    <p class="text-xl text-brand-gray mb-8">
                        World Pac International proudly serves over <span class="font-bold text-brand-secondary">220 destinations worldwide</span>, ensuring seamless logistics solutions across the globe.
                    </p>
                    
                    <div class="bg-brand-light rounded-xl p-6 border border-gray-100">
                        <h3 class="font-bold text-brand-primary mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h2.945M8 3.935A9 9 0 1114.538 21.065" />
                            </svg>
                            Top Destinations & Transit Times
                        </h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm text-left">
                                <thead class="text-xs text-brand-gray uppercase bg-gray-50 border-b">
                                    <tr>
                                        <th class="px-4 py-3">Region</th>
                                        <th class="px-4 py-3">Est. Delivery</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    <tr><td class="px-4 py-3 font-medium text-brand-primary">Europe (UK, DE, FR)</td><td class="px-4 py-3 text-brand-gray">3–4 Days</td></tr>
                                    <tr><td class="px-4 py-3 font-medium text-brand-primary">Middle East (UAE, SA)</td><td class="px-4 py-3 text-brand-gray">3–4 Days</td></tr>
                                    <tr><td class="px-4 py-3 font-medium text-brand-primary">Asia (IN, SG, CN)</td><td class="px-4 py-3 text-brand-gray">4–6 Days</td></tr>
                                    <tr><td class="px-4 py-3 font-medium text-brand-primary">North America</td><td class="px-4 py-3 text-brand-gray">5–7 Days</td></tr>
                                    <tr><td class="px-4 py-3 font-medium text-brand-primary">Australia</td><td class="px-4 py-3 text-brand-gray">6–8 Days</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="relative h-[500px] bg-brand-primary rounded-2xl overflow-hidden shadow-2xl flex items-center justify-center p-8 text-center text-white">
                     <!-- Abstract World Map Representation -->
                     <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 24px 24px;"></div>
                     <div class="relative z-10">
                         <h3 class="text-4xl font-extrabold mb-2 font-montserrat">220+</h3>
                         <p class="text-xl text-blue-200">Countries Served</p>
                         <div class="mt-8 grid grid-cols-2 gap-4 text-left">
                             <div class="bg-white/10 p-4 rounded-lg backdrop-blur-sm">
                                 <div class="text-2xl font-bold">UAE</div>
                                 <div class="text-xs text-blue-100">Strategic Hub</div>
                             </div>
                             <div class="bg-white/10 p-4 rounded-lg backdrop-blur-sm">
                                 <div class="text-2xl font-bold">UK/EU</div>
                                 <div class="text-xs text-blue-100">Major Trade Lane</div>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why WPIL Section -->
    <div class="py-24 bg-brand-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-16">
                <h2 class="text-base text-brand-secondary font-semibold tracking-wide uppercase">Why Partner With Us?</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-brand-primary sm:text-4xl font-montserrat">
                    21+ Years of Operational Excellence
                </p>
                <p class="mt-4 max-w-2xl text-xl text-brand-gray lg:mx-auto">
                    Choosing WPIL means working with a company that combines decades of experience with a commitment to reliability and customer-first service.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-brand-primary mb-6">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-primary mb-3">Proven Reliability</h3>
                    <p class="text-brand-gray"> Consistent delivery performance backed by strong SLA compliance and 97.6% tracking accuracy.</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-brand-primary mb-6">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-primary mb-3">Robust Infrastructure</h3>
                    <p class="text-brand-gray">Dedicated warehouse at Dhaka Airport and operational hubs across key cities ensure seamless cargo handling.</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-brand-primary mb-6">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h2.945M8 3.935A9 9 0 1114.538 21.065" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-primary mb-3">Global Partnerships</h3>
                    <p class="text-brand-gray">Strategic collaborations with Prime Logistics UAE and international airlines extend our reach to 220+ countries.</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
