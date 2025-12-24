<x-layout>
    <!-- Services Hero -->
    <div class="relative h-[50vh] overflow-hidden">
        <img src="{{ asset('images/service-logistics.jpg') }}" class="w-full h-full object-cover" alt="Services Hero">
        <div class="absolute inset-0 bg-brand-primary/70 backdrop-blur-[2px]"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white font-montserrat tracking-tight mb-4">Our Services</h1>
                <p class="text-xl text-blue-100 max-w-2xl mx-auto">Comprehensive logistics solutions tailored for your business needs.</p>
            </div>
        </div>
    </div>

    <!-- Services Grid -->
    <div class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- International Courier & Express Services -->
                <div class="bg-brand-surface rounded-2xl overflow-hidden shadow-sm group hover:shadow-xl transition-all duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/service-express.jpg') }}" alt="International Courier" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-brand-primary font-montserrat mb-4">International Courier & Express</h3>
                        <p class="text-brand-gray leading-relaxed mb-6">Premium delivery solutions for documents and parcels worldwide with real-time tracking and priority handling.</p>
                        <x-ui.button variant="outline" href="{{ route('contact') }}" class="w-full justify-center">Get Quote</x-ui.button>
                    </div>
                </div>

                <!-- Import & Export Logistics -->
                <div class="bg-brand-surface rounded-2xl overflow-hidden shadow-sm group hover:shadow-xl transition-all duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/service-logistics.jpg') }}" alt="Logistics" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-brand-primary font-montserrat mb-4">Import & Export Logistics</h3>
                        <p class="text-brand-gray leading-relaxed mb-6">Seamless global trade management covering air and sea freight with optimized transit times.</p>
                        <x-ui.button variant="outline" href="{{ route('contact') }}" class="w-full justify-center">Learn More</x-ui.button>
                    </div>
                </div>

                <!-- Customs Clearance & Documentation -->
                <div class="bg-brand-surface rounded-2xl overflow-hidden shadow-sm group hover:shadow-xl transition-all duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/service-customs.jpg') }}" alt="Customs" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-brand-primary font-montserrat mb-4">Customs Clearance</h3>
                        <p class="text-brand-gray leading-relaxed mb-6">Expertise in complex regulatory requirements, ensuring smooth documentation and fast clearance.</p>
                        <x-ui.button variant="outline" href="{{ route('contact') }}" class="w-full justify-center">Consult Expert</x-ui.button>
                    </div>
                </div>

                <!-- Door-to-Door Delivery -->
                <div class="bg-brand-surface rounded-2xl overflow-hidden shadow-sm group hover:shadow-xl transition-all duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/service-door.jpg') }}" alt="Door Delivery" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-brand-primary font-montserrat mb-4">Door-to-Door Delivery</h3>
                        <p class="text-brand-gray leading-relaxed mb-6">Convenient end-to-end delivery from your supplier's doorstep to your warehouse or customer.</p>
                        <x-ui.button variant="outline" href="{{ route('contact') }}" class="w-full justify-center">Book Now</x-ui.button>
                    </div>
                </div>

                <!-- E-commerce Logistics -->
                <div class="bg-brand-surface rounded-2xl overflow-hidden shadow-sm group hover:shadow-xl transition-all duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/service-ecommerce.jpg') }}" alt="E-commerce" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-brand-primary font-montserrat mb-4">E-commerce Logistics</h3>
                        <p class="text-brand-gray leading-relaxed mb-6">Scalable fulfillment solutions, last-mile delivery, and integrated returns management for online retailers.</p>
                        <x-ui.button variant="outline" href="{{ route('contact') }}" class="w-full justify-center">Scale Business</x-ui.button>
                    </div>
                </div>

                <!-- Warehousing & Cargo Handling -->
                <div class="bg-brand-surface rounded-2xl overflow-hidden shadow-sm group hover:shadow-xl transition-all duration-300">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/service-warehousing.jpg') }}" alt="Warehousing" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-brand-primary font-montserrat mb-4">Warehousing & Cargo</h3>
                        <p class="text-brand-gray leading-relaxed mb-6">Secure storage, inventory management, and professional cargo handling at strategic hubs.</p>
                        <x-ui.button variant="outline" href="{{ route('contact') }}" class="w-full justify-center">Check Capacity</x-ui.button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Customs Clearance Process -->
    <div class="py-24 bg-brand-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-brand-primary font-montserrat">Customs Clearance Process</h2>
                <div class="w-24 h-1 bg-brand-secondary mx-auto mt-4"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 relative">
                <!-- Process Steps -->
                @php
                    $steps = [
                        [
                            'title' => 'Manifest Submission',
                            'desc' => 'Receive shipment data (MAWB/HAWB, seller invoice, HS code, declared value) from origin.',
                            'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'
                        ],
                        [
                            'title' => 'Risk Assessment',
                            'desc' => 'Customs screening; Declared value, commodity type evaluation.',
                            'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'
                        ],
                        [
                            'title' => 'Duty & Tax',
                            'desc' => 'Applied per parcel category; CIF-based duty + VAT + AIT calculation.',
                            'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
                        ],
                        [
                            'title' => 'Payment & Release',
                            'desc' => 'Duty payment fulfillment and official shipment release.',
                            'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4'
                        ],
                        [
                            'title' => 'Delivery Dispatch',
                            'desc' => 'Parcels are forwarded to hub for final-mile delivery to the consignee.',
                            'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'
                        ],
                    ];
                @endphp

                @foreach($steps as $index => $step)
                <div class="relative flex flex-col items-center">
                    <div class="w-16 h-16 bg-white border-4 border-brand-primary rounded-full flex items-center justify-center mb-4 z-10 shadow-lg">
                        <svg class="w-8 h-8 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $step['icon'] }}" />
                        </svg>
                    </div>
                    @if($index < count($steps) - 1)
                    <div class="hidden md:block absolute top-8 left-[calc(50%+2rem)] w-[calc(100%-4rem)] h-1 bg-brand-primary/20"></div>
                    @endif
                    <div class="text-center px-4">
                        <h3 class="font-bold text-brand-primary mb-2">{{ $step['title'] }}</h3>
                        <p class="text-xs text-brand-gray">{{ $step['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-20 bg-brand-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-8 font-montserrat">Ready to move your cargo?</h2>
            <div class="flex justify-center gap-4">
                <x-ui.button variant="secondary" href="{{ route('contact') }}">Request a Quote</x-ui.button>
                <x-ui.button variant="outline" class="text-white border-white hover:bg-white hover:text-brand-primary" href="{{ route('tracking.primary') }}">Track Shipment</x-ui.button>
            </div>
        </div>
    </div>
</x-layout>
