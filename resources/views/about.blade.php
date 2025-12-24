<x-layout>
    <!-- About Hero -->
    <div class="relative h-[60vh] overflow-hidden">
        <img src="{{ asset('images/about-hero.jpg') }}" class="w-full h-full object-cover" alt="WPIL Corporate Team">
        <div class="absolute inset-0 bg-brand-primary/80"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white font-montserrat tracking-tight mb-4">About WPIL</h1>
                <p class="text-xl text-blue-100 max-w-2xl mx-auto">Decades of operational excellence in international logistics and courier services.</p>
            </div>
        </div>
    </div>

    <!-- Executive Summary & History -->
    <div class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-brand-primary font-montserrat mb-6">Our Journey</h2>
                    <div class="prose prose-lg text-brand-gray">
                        <p class="mb-4">
                            Originally established in 2004 as World Pac International (WPI), we have grown into a leading courier and express logistics provider in Bangladesh. In 2024, a strategic milestone was achieved when the company was acquired by Ace Aviation Services Ltd., forging a powerful partnership between the Bengal Airlift Group and the Aitken Spence Group.
                        </p>
                        <p>
                            Rebranded as World Pac International Ltd. (WPIL), we now leverage over 45 years of combined group experience in aviation, logistics, and international trade. Handling over 1,700 shipments daily with 97.6% operational accuracy, we connect businesses from Dhaka to over 220 global destinations.
                        </p>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100">
                    <h3 class="text-xl font-bold text-brand-secondary font-montserrat mb-6 uppercase tracking-wider">Fast Facts</h3>
                    <dl class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-8">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Established</dt>
                            <dd class="mt-1 text-2xl font-bold text-brand-primary">2004</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Rebranded</dt>
                            <dd class="mt-1 text-2xl font-bold text-brand-primary">2024</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Daily Shipments</dt>
                            <dd class="mt-1 text-2xl font-bold text-brand-primary">1,700+</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Ownership</dt>
                            <dd class="mt-1 text-lg font-bold text-brand-primary">Bengal Airlift & Aitken Spence</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission Vision Values -->
    <div class="py-24 bg-brand-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Mission -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border-t-4 border-brand-primary">
                    <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-primary mb-4 font-montserrat">Our Mission</h3>
                    <p class="text-brand-gray leading-relaxed">To sustain as market leader and set the industry standards in all the sectors we represent.</p>
                </div>

                <!-- Vision -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border-t-4 border-brand-secondary">
                    <div class="w-12 h-12 bg-red-50 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-primary mb-4 font-montserrat">Our Vision</h3>
                    <p class="text-brand-gray leading-relaxed">Committed to provide the highest level of service excellence to the customers and stakeholders.</p>
                </div>

                <!-- Core Values -->
                <div class="bg-brand-primary text-white p-8 rounded-2xl shadow-lg relative overflow-hidden">
                    <div class="relative z-10">
                        <h3 class="text-xl font-bold mb-6 font-montserrat">Core Values</h3>
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <span class="w-2 h-2 bg-brand-secondary rounded-full mr-3"></span>
                                <span class="font-medium">Teamwork</span>
                            </li>
                            <li class="flex items-center">
                                <span class="w-2 h-2 bg-brand-secondary rounded-full mr-3"></span>
                                <span class="font-medium">Integrity</span>
                            </li>
                            <li class="flex items-center">
                                <span class="w-2 h-2 bg-brand-secondary rounded-full mr-3"></span>
                                <span class="font-medium">Reliability</span>
                            </li>
                            <li class="flex items-center">
                                <span class="w-2 h-2 bg-brand-secondary rounded-full mr-3"></span>
                                <span class="font-medium">Customer Focus</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Infrastructure & Network -->
    <div class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-brand-primary font-montserrat">Infrastructure & Network</h2>
                <p class="mt-4 text-xl text-brand-gray max-w-2xl mx-auto">Strategically positioned assets to ensure seamless cargo movement across borders and within the nation.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                <!-- Air Warehousing -->
                <div class="bg-brand-light p-8 rounded-2xl border border-gray-100 flex gap-6 items-start">
                    <div class="flex-shrink-0 w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-brand-secondary">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-brand-primary mb-3">Strategic Air Warehousing</h3>
                        <p class="text-brand-gray mb-4">Dedicated warehouse facilities at core aviation gateways for priority handling.</p>
                        <ul class="grid grid-cols-1 gap-2">
                            <li class="flex items-center text-sm font-semibold text-brand-primary">
                                <span class="w-1.5 h-1.5 bg-brand-secondary rounded-full mr-2"></span> Dhaka Airport (DAC)
                            </li>
                            <li class="flex items-center text-sm font-semibold text-brand-primary">
                                <span class="w-1.5 h-1.5 bg-brand-secondary rounded-full mr-2"></span> Chattogram Airport (CGP)
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Operational Hubs -->
                <div class="bg-brand-light p-8 rounded-2xl border border-gray-100 flex gap-6 items-start">
                    <div class="flex-shrink-0 w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-brand-secondary">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-brand-primary mb-3">Regional Operational Hubs</h3>
                        <p class="text-brand-gray mb-4">A robust network ensuring efficient last-mile distribution and cargo consolidation.</p>
                        <div class="flex flex-wrap gap-x-4 gap-y-2">
                            <span class="px-3 py-1 bg-white rounded-full text-xs font-bold text-brand-primary border border-gray-100">Motijheel</span>
                            <span class="px-3 py-1 bg-white rounded-full text-xs font-bold text-brand-primary border border-gray-100">Uttara</span>
                            <span class="px-3 py-1 bg-white rounded-full text-xs font-bold text-brand-primary border border-gray-100">Cumilla</span>
                            <span class="px-3 py-1 bg-white rounded-full text-xs font-bold text-brand-primary border border-gray-100">Chattogram</span>
                        </div>
                    </div>
                </div>

                <!-- Expertise -->
                <div class="bg-brand-primary text-white p-8 rounded-2xl shadow-lg flex gap-6 items-start">
                    <div class="flex-shrink-0 w-12 h-12 bg-brand-secondary rounded-xl flex items-center justify-center text-white">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2 font-montserrat">Operational Excellence</h3>
                        <p class="text-blue-100 text-sm leading-relaxed">
                            Our in-house customs brokerage team simplifies complex regulatory landscapes, while our 
                            nationwide coverage ensures efficient cargo handling and distribution across Bangladesh.
                        </p>
                    </div>
                </div>

                <!-- Global Partnerships -->
                <div class="bg-brand-primary text-white p-8 rounded-2xl shadow-lg flex gap-6 items-start">
                    <div class="flex-shrink-0 w-12 h-12 bg-brand-secondary rounded-xl flex items-center justify-center text-white">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h2.945M8 3.935A9 9 0 1114.538 21.065" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2 font-montserrat">Global Connectivity</h3>
                        <p class="text-blue-100 text-sm leading-relaxed">
                            Extending our reach through strategic partnerships in UAE and across major international 
                            trade routes, connecting your business to the global market.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Leadership -->
    <div class="py-24 bg-brand-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-brand-primary font-montserrat">Our Leadership</h2>
                <p class="mt-4 text-xl text-brand-gray">Guided by decades of industry experience.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Md. Shakiruzzaman -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden text-center group">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/leader-male.jpg') }}" alt="Md. Shakiruzzaman" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-brand-primary text-lg">Md. Shakiruzzaman</h3>
                        <p class="text-brand-secondary font-medium text-sm p-1">Director</p>
                        <p class="text-xs text-brand-gray mt-2">26+ years experienced</p>
                    </div>
                </div>

                <!-- KDN Sampath -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden text-center group">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/leader-male.jpg') }}" alt="KDN Sampath" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-brand-primary text-lg">KDN Sampath</h3>
                        <p class="text-brand-secondary font-medium text-sm">COO</p>
                        <p class="text-xs text-brand-gray mt-2">35+ years experienced</p>
                    </div>
                </div>
                
                <!-- Simon Hoque -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden text-center group">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/leader-male.jpg') }}" alt="Simon Hoque" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-brand-primary text-lg">Simon Hoque</h3>
                        <p class="text-brand-secondary font-medium text-sm">AGM - Finance</p>
                        <p class="text-xs text-brand-gray mt-2">10+ years experienced</p>
                    </div>
                </div>

                <!-- SM Farhan Tamiz -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden text-center group">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('images/leader-male.jpg') }}" alt="SM Farhan Tamiz" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-brand-primary text-lg">SM Farhan Tamiz</h3>
                        <p class="text-brand-secondary font-medium text-sm">Asst. Manager - BD</p>
                        <p class="text-xs text-brand-gray mt-2">5+ years experienced</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
