<x-layout 
    title="Shipment Tracking - Real-time Cargo Visibility | WPIL"
    description="Track your international shipments and cargo in real-time. Access our primary tracking portal for the latest status updates on your logistics journey.">
    <div class="py-12 bg-brand-light min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-extrabold text-brand-primary font-montserrat">Shipment Tracking</h1>
                <p class="mt-4 text-xl text-brand-gray">Real-time visibility into your cargo's journey.</p>
            </div>

            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                <div class="p-6 bg-brand-surface border-b border-gray-100 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h2 class="text-lg font-bold text-brand-primary">Prime Logistics Portal</h2>
                        <p class="text-sm text-brand-gray">Secure tracking interface</p>
                    </div>
                    <div>
                        <!-- Semantic Fallback Button -->
                        <x-ui.button variant="outline" href="{{ $trackingUrl }}" target="_blank" class="flex items-center">
                            <span>Open in New Window</span>
                            <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </x-ui.button>
                    </div>
                </div>

                <!-- Iframe Container -->
                <div class="relative w-full overflow-hidden" style="height: 700px;">
                    <iframe 
                        src="{{ $trackingUrl }}" 
                        class="absolute inset-0 w-full h-full border-0"
                        title="Primary Tracking Portal"
                        allow="geolocation"
                    ></iframe>
                </div>
            </div>

            <div class="mt-8 text-center">
                <p class="text-brand-gray italic">
                    Note: If the tracking portal does not load within the window, please use the button above to open it in a new secure tab.
                </p>
                <div class="mt-6">
                    <a href="{{ route('tracking.partner') }}" class="text-brand-primary font-bold hover:underline">
                        Switch to Global Partner Tracking &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
