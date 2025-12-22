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
                            <x-ui.button variant="primary" href="{{ route('tracking.primary') }}">
                                Track Now
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
            <div class="h-56 w-full sm:h-72 md:h-96 lg:w-full lg:h-full bg-gradient-to-br from-brand-primary to-brand-secondary opacity-20 flex items-center justify-center">
                 <!-- In a real app, use generate_image to get a nice logistics image -->
                 <div class="text-brand-primary font-montserrat font-bold text-4xl">WPIL LOGISTICS</div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-brand-primary py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-2">
                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl text-center border border-white/20">
                    <div class="text-5xl font-extrabold text-white mb-2">{{ $stats['shipments'] }}</div>
                    <div class="text-gray-200 text-lg uppercase tracking-wider font-montserrat">Annual Shipments</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-2xl text-center border border-white/20">
                    <div class="text-5xl font-extrabold text-white mb-2">{{ $stats['accuracy'] }}</div>
                    <div class="text-gray-200 text-lg uppercase tracking-wider font-montserrat">Tracking Accuracy</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Section -->
    <div class="py-24 bg-brand-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base text-brand-secondary font-semibold tracking-wide uppercase">Why Choose WPIL?</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-brand-primary sm:text-4xl font-montserrat">
                    Reliability in every mile
                </p>
            </div>

            <div class="mt-20">
                <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="relative p-8 bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="absolute -top-6 left-8 h-12 w-12 bg-brand-secondary rounded-lg flex items-center justify-center text-white shadow-lg">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="mt-8 text-xl font-bold text-brand-primary font-montserrat uppercase tracking-tight">On-Time Delivery</h3>
                        <p class="mt-4 text-brand-gray">Our global network ensures your cargo reaches its destination exactly when promised.</p>
                    </div>

                    <div class="relative p-8 bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="absolute -top-6 left-8 h-12 w-12 bg-brand-primary rounded-lg flex items-center justify-center text-white shadow-lg">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="mt-8 text-xl font-bold text-brand-primary font-montserrat uppercase tracking-tight">Secure Handling</h3>
                        <p class="mt-4 text-brand-gray">Advanced safety protocols and expert handling for fragile and high-value shipments.</p>
                    </div>

                    <div class="relative p-8 bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="absolute -top-6 left-8 h-12 w-12 bg-brand-secondary rounded-lg flex items-center justify-center text-white shadow-lg">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h2.945M8 3.935A9 9 0 1114.538 21.065" />
                            </svg>
                        </div>
                        <h3 class="mt-8 text-xl font-bold text-brand-primary font-montserrat uppercase tracking-tight">Global Network</h3>
                        <p class="mt-4 text-brand-gray">Presence in major ports and hubs across the globe to facilitate seamless cross-border trade.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
