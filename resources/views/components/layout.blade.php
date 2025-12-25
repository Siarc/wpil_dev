@props(['title' => null, 'description' => null, 'ogImage' => null, 'ogTitle' => null, 'ogDescription' => null, 'canonical' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- Dynamic SEO Meta Tags --}}
    <title>{{ $title ?? 'World Pac International Ltd. - Global Logistics & Freight Forwarding in Bangladesh' }}</title>
    <meta name="description" content="{{ $description ?? 'World Pac International Ltd. (WPIL) provides end-to-end logistics solutions, international courier services, customs clearance, and freight forwarding across 220+ countries from Bangladesh.' }}">
    <meta name="keywords" content="logistics Bangladesh, freight forwarding Dhaka, international courier, customs clearance, warehousing, express delivery, cargo services, import export Bangladesh">
    <meta name="author" content="World Pac International Ltd.">
    <link rel="canonical" href="{{ $canonical ?? url()->current() }}">
    
    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="{{ $ogTitle ?? $title ?? 'World Pac International Ltd. - Global Logistics Solutions' }}">
    <meta property="og:description" content="{{ $ogDescription ?? $description ?? 'Leading logistics and freight forwarding company in Bangladesh. 1,700+ daily shipments, 220+ countries served.' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset($ogImage ?? 'images/home-hero.png') }}">
    <meta property="og:site_name" content="World Pac International Ltd.">
    <meta property="og:locale" content="en_US">
    
    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $ogTitle ?? $title ?? 'World Pac International Ltd.' }}">
    <meta name="twitter:description" content="{{ $ogDescription ?? $description ?? 'Global logistics and freight forwarding solutions from Bangladesh.' }}">
    <meta name="twitter:image" content="{{ asset($ogImage ?? 'images/home-hero.png') }}">
    
    {{-- Additional Meta Tags --}}
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="theme-color" content="#2E3192">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#2E3192">
    
    {{-- Favicons --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    
    {{-- Schema.org Structured Data - Organization --}}
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "Organization",
      "name": "World Pac International Ltd.",
      "alternateName": "WPIL",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('images/logo.png') }}",
      "description": "Leading logistics and freight forwarding company in Bangladesh providing international courier, customs clearance, warehousing, and supply chain solutions.",
      "address": {
        "@@type": "PostalAddress",
        "addressCountry": "BD",
        "addressLocality": "Dhaka",
        "addressRegion": "Dhaka Division"
      },
      "contactPoint": [{
        "@@type": "ContactPoint",
        "contactType": "customer service",
        "areaServed": ["BD", "Global"],
        "availableLanguage": ["en", "bn"]
      }],
      "sameAs": [
        "{{ url('/') }}"
      ],
      "aggregateRating": {
        "@@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "150"
      }
    }
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-brand-light text-brand-gray" x-data="{ mobileMenuOpen: false }">
    <header class="bg-brand-surface border-b border-gray-100 sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                        <span class="text-2xl font-montserrat font-extrabold text-brand-primary">WORLD</span>
                        <span class="text-2xl font-montserrat font-extrabold text-brand-secondary ml-1">PAC</span>
                    </a>
                </div>

                <!-- Desktop Nav -->
                <div class="hidden md:ml-6 md:flex md:space-x-8 items-center">
                    <a href="{{ route('home') }}" class="text-brand-gray hover:text-brand-primary px-3 py-2 text-sm font-medium transition-colors">Home</a>
                    <a href="{{ route('services') }}" class="text-brand-gray hover:text-brand-primary px-3 py-2 text-sm font-medium transition-colors">Services</a>
                    <a href="{{ route('tracking.primary') }}" class="text-brand-gray hover:text-brand-primary px-3 py-2 text-sm font-medium transition-colors">Tracking</a>
                    <a href="{{ route('about') }}" class="text-brand-gray hover:text-brand-primary px-3 py-2 text-sm font-medium transition-colors">About</a>
                    <x-ui.button variant="primary" href="{{ route('contact') }}">Contact US</x-ui.button>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-brand-gray hover:text-brand-primary hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-brand-primary">
                        <span class="sr-only">Open main menu</span>
                        <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-cloak>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Mobile menu -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="md:hidden" id="mobile-menu" x-cloak>
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-brand-surface shadow-lg">
                <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium text-brand-gray hover:text-brand-primary hover:bg-gray-50">Home</a>
                <a href="{{ route('services') }}" class="block px-3 py-2 rounded-md text-base font-medium text-brand-gray hover:text-brand-primary hover:bg-gray-50">Services</a>
                <a href="{{ route('tracking.primary') }}" class="block px-3 py-2 rounded-md text-base font-medium text-brand-gray hover:text-brand-primary hover:bg-gray-50">Tracking</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-brand-gray hover:text-brand-primary hover:bg-gray-50">About</a>
                <div class="px-3 py-4">
                    <x-ui.button variant="primary" class="w-full justify-center" href="{{ route('contact') }}">Contact US</x-ui.button>
                </div>
            </div>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="bg-brand-primary text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
                <div>
                    <h3 class="text-xl font-montserrat font-bold mb-4">World Pac International Ltd.</h3>
                    <p class="text-gray-300">Your trusted global partner in logistics and forwarding solutions.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="{{ route('tracking.primary') }}" class="hover:text-white transition-colors">Tracking</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">About</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Connect With Us</h4>
                    <p class="text-gray-300 mb-4">Follow us for updates on our global operations.</p>
                </div>
            </div>
            <div class="border-t border-brand-primary-light mt-12 pt-8 text-center text-gray-400 text-sm">
                &copy; {{ date('Y') }} WPIL. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>
