<x-layout>
    <div class="py-12 bg-brand-light min-h-screen flex items-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100 flex flex-col md:flex-row">
                <div class="md:w-1/2 bg-brand-primary p-12 text-white flex flex-col justify-center">
                    <h1 class="text-4xl font-extrabold font-montserrat mb-6">Partner Tracking</h1>
                    <p class="text-lg text-gray-200 mb-8">
                        Access our global partner network tracking system for shipments handled via our international associates.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <svg class="h-6 w-6 text-brand-secondary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Global Network Coverage</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-6 w-6 text-brand-secondary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Real-time Status Updates</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 p-12 flex flex-col justify-center items-center text-center">
                    <div class="mb-8">
                        <svg class="h-24 w-24 text-brand-primary mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-brand-primary mb-4 font-montserrat">Access Partner Portal</h2>
                    <p class="text-brand-gray mb-8">
                        You will be redirected to our partner's secure tracking system. Please have your tracking number ready.
                    </p>
                    <x-ui.button variant="secondary" href="{{ $partnerUrl }}" target="_blank" class="w-full justify-center text-lg py-4">
                        Visit Partner Portal &rarr;
                    </x-ui.button>
                    <a href="{{ route('tracking.primary') }}" class="mt-6 text-sm text-brand-gray hover:text-brand-primary transition-colors">
                        Back to Primary Tracking
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
