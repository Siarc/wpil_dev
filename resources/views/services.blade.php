<x-layout 
    title="Logistics Services - International Courier, Freight Forwarding & Customs | WPIL"
    description="World Pac International offers express courier, import/export logistics, customs clearance, warehousing, e-commerce fulfillment, and door-to-door delivery services across 220+ countries."
    ogImage="/images/service-logistics.jpg">
    
    {{-- Service Schema for Rich Results --}}
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "Service",
      "serviceType": "Logistics and Freight Forwarding",
      "provider": {
        "@@type": "Organization",
        "name": "World Pac International Ltd.",
        "url": "{{ url('/') }}"
      },
      "areaServed": {
        "@@type": "Country",
        "name": "Bangladesh"
      },
      "hasOfferCatalog": {
        "@@type": "OfferCatalog",
        "name": "Logistics Services",
        "itemListElement": [
          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "International Courier & Express",
              "description": "Premium delivery solutions for documents and parcels worldwide with real-time tracking and priority handling."
            }
          },
          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "Import & Export Logistics",
              "description": "Seamless global trade management covering air and sea freight with optimized transit times."
            }
          },
          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "Customs Clearance",
              "description": "Expertise in complex regulatory requirements, ensuring smooth documentation and fast clearance."
            }
          },
          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "Warehousing & Cargo Handling",
              "description": "Secure storage, inventory management, and professional cargo handling at strategic hubs."
            }
          }
        ]
      }
    }
    </script>


    <!-- Services Hero -->
    <div class="relative h-[40vh] min-h-[300px] overflow-hidden">
        <img src="{{ asset('images/service-logistics.jpg') }}" class="w-full h-full object-cover" alt="Services Hero">
        <div class="absolute inset-0 bg-brand-primary/75 backdrop-blur-[1px]"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white font-montserrat tracking-tight mb-4">Our Services</h1>
                <p class="text-xl md:text-2xl text-blue-100 max-w-2xl mx-auto">Empowering global trade with specialized, efficient logistics and supply chain services.</p>
            </div>
        </div>
    </div>

    <!-- Services Grid -->
    <div class="py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-base text-brand-secondary font-semibold tracking-wide uppercase">Core Capabilities</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-brand-primary sm:text-4xl font-montserrat">
                    Our Specialized Logistics
                </p>
            </div>

            @php
                $services = [
                    [
                        'title' => 'International Courier & Express',
                        'desc' => 'Premium delivery solutions for documents and parcels worldwide with real-time tracking and priority handling.',
                        'image' => 'images/service-express.jpg',
                        'accent' => 'brand-primary'
                    ],
                    [
                        'title' => 'Import & Export Logistics',
                        'desc' => 'Seamless global trade management covering air and sea freight with optimized transit times.',
                        'image' => 'images/service-logistics.jpg',
                        'accent' => 'brand-secondary'
                    ],
                    [
                        'title' => 'Customs Clearance',
                        'desc' => 'Expertise in complex regulatory requirements, ensuring smooth documentation and fast clearance.',
                        'image' => 'images/service-customs.jpg',
                        'accent' => 'brand-primary'
                    ],
                    [
                        'title' => 'Door-to-Door Delivery',
                        'desc' => 'Convenient end-to-end delivery from your supplier\'s doorstep to your warehouse or customer.',
                        'image' => 'images/service-door.jpg',
                        'accent' => 'brand-secondary'
                    ],
                    [
                        'title' => 'E-commerce Logistics',
                        'desc' => 'Scalable fulfillment solutions, last-mile delivery, and integrated returns management for online retailers.',
                        'image' => 'images/service-ecommerce.jpg',
                        'accent' => 'brand-primary'
                    ],
                    [
                        'title' => 'Warehousing & Cargo',
                        'desc' => 'Secure storage, inventory management, and professional cargo handling at strategic hubs.',
                        'image' => 'images/service-warehousing.jpg',
                        'accent' => 'brand-secondary'
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $service)
                <div class="group relative bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 h-[450px]">
                    <!-- Background Image with Zoom -->
                    <div class="absolute inset-0">
                        <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/90 via-brand-primary/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                    </div>

                    <!-- Content Overlay -->
                    <div class="absolute inset-0 p-8 flex flex-col justify-end transform transition-transform duration-500 group-hover:-translate-y-4">
                        <div class="w-12 h-1.5 bg-{{ $service['accent'] }} mb-4 rounded-full transition-all duration-500 group-hover:w-24"></div>
                        <h3 class="text-2xl font-bold text-white font-montserrat mb-4">{{ $service['title'] }}</h3>
                        
                        <!-- Hidden Description - Slides Up -->
                        <div class="max-h-0 opacity-0 group-hover:max-h-32 group-hover:opacity-100 transition-all duration-500 ease-out">
                            <p class="text-blue-100 text-sm leading-relaxed">
                                {{ $service['desc'] }}
                            </p>
                        </div>
                    </div>

                    <!-- Decorative Corner Accent -->
                    <div class="absolute top-0 right-0 w-24 h-24 -mr-12 -mt-12 bg-{{ $service['accent'] }} opacity-10 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                </div>
                @endforeach
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

    <!-- B2C Clearance Process (SkyNet) -->
    <div class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-base text-brand-secondary font-semibold tracking-wide uppercase">Partnership with SkyNet</h2>
                <h3 class="mt-2 text-3xl font-bold text-brand-primary font-montserrat">B2C Clearance Process</h3>
                <div class="w-24 h-1 bg-brand-secondary mx-auto mt-4"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
                @php
                    $b2cSteps = [
                        [
                            'title' => 'Bulk Consolidation',
                            'desc' => 'SkyNet ships B2C parcels in bulk to WPIL Dhaka with unique scannable codes.',
                            'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                            'owner' => 'SkyNet'
                        ],
                        [
                            'title' => 'Master Clearance',
                            'desc' => 'Arrival & clearance using a single consolidated Master AWB and Commercial Invoice.',
                            'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                            'owner' => 'SkyNet'
                        ],
                        [
                            'title' => 'Data Mapping',
                            'desc' => 'WPIL scans parcels to automatically map customer data and generate local labels.',
                            'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01',
                            'owner' => 'WPIL'
                        ],
                        [
                            'title' => 'Label & Sync',
                            'desc' => 'New local AWBs attached; all data syncs to SkyNet for end-to-end visibility.',
                            'icon' => 'M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4',
                            'owner' => 'WPIL'
                        ],
                    ];
                @endphp

                @foreach($b2cSteps as $index => $step)
                <div class="relative flex flex-col items-center group">
                    <!-- Owner Badge -->
                    <span class="absolute -top-4 px-3 py-1 bg-brand-primary text-white text-[10px] font-bold rounded-full z-20 shadow-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        {{ $step['owner'] }}
                    </span>
                    
                    <div class="w-20 h-20 bg-brand-light border-2 border-brand-secondary/30 rounded-2xl flex items-center justify-center mb-6 z-10 transition-transform duration-300 group-hover:-translate-y-2 group-hover:border-brand-secondary">
                        <svg class="w-10 h-10 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $step['icon'] }}" />
                        </svg>
                    </div>

                    @if($index < count($b2cSteps) - 1)
                    <div class="hidden md:block absolute top-10 left-[calc(50%+2.5rem)] w-[calc(100%-5rem)] h-0.5 bg-gradient-to-r from-brand-secondary/40 to-transparent"></div>
                    @endif

                    <div class="text-center px-6">
                        <h3 class="font-bold text-brand-primary mb-3 text-lg">{{ $step['title'] }}</h3>
                        <p class="text-sm text-brand-gray leading-relaxed">{{ $step['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-16 p-8 bg-brand-light rounded-3xl border border-brand-primary/5 flex flex-col md:flex-row items-center gap-6">
                <div class="flex-shrink-0 w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-sm">
                    <svg class="w-8 h-8 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <h4 class="text-lg font-bold text-brand-primary mb-1">Streamlined E-commerce Integration</h4>
                    <p class="text-brand-gray text-sm">Our partnership with SkyNet ensures that bulk B2C shipments are cleared and re-labeled for local delivery with maximum efficiency and full digital tracking.</p>
                </div>
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
