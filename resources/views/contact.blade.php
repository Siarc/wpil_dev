<x-layout>
    <div class="relative min-h-screen bg-brand-light">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-x-0 top-0 h-[85vh] overflow-hidden">
            <img src="{{ asset('images/contact-bg.jpg') }}" 
                 class="w-full h-full object-cover" 
                 alt="Logistics Background">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-primary/95 via-brand-primary/75 to-brand-light"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            
            <!-- Request a Call Section -->
            <div class="mb-24">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
                    <!-- Text Content -->
                    <div class="lg:col-span-5 pt-8">
                        <h1 class="text-4xl md:text-5xl font-extrabold text-white font-montserrat leading-tight mb-6 drop-shadow-lg">
                            Request a Call
                        </h1>
                        <h2 class="text-3xl md:text-4xl font-bold text-white/95 font-montserrat mb-6 drop-shadow-md">
                            Let’s talk 👋
                        </h2>
                        <p class="text-xl text-blue-50 leading-relaxed mb-8 drop-shadow-sm font-medium">
                            Share a few details and we’ll connect you with the right person to solve your logistics challenges.
                        </p>
                        
                        <div class="hidden lg:block">
                            <div class="inline-flex items-center space-x-2 text-white font-bold uppercase tracking-widest text-sm mb-4">
                                <span class="h-1 w-8 bg-brand-secondary rounded-full"></span>
                                <span>Why Talk to Us?</span>
                            </div>
                            <ul class="space-y-4">
                                @foreach(['Tailored Supply Chain Solutions', 'Global Logistics Expertise', 'Real-time Tracking & Visibility'] as $benefit)
                                <li class="flex items-center text-blue-50 font-medium">
                                    <svg class="h-5 w-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    {{ $benefit }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Form Card -->
                    <div class="lg:col-span-7">
                        <div class="bg-white/95 backdrop-blur-md rounded-2xl shadow-2xl p-6 md:p-8 border border-white/20">
                            <form action="#" method="POST" class="space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <x-ui.label for="first_name">First Name</x-ui.label>
                                        <x-ui.input id="first_name" name="first_name" placeholder="Enter first name" required />
                                    </div>
                                    <div>
                                        <x-ui.label for="last_name">Last Name</x-ui.label>
                                        <x-ui.input id="last_name" name="last_name" placeholder="Enter last name" required />
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <x-ui.label for="job_title">Job Title</x-ui.label>
                                        <x-ui.input id="job_title" name="job_title" placeholder="Your role" required />
                                    </div>
                                    <div>
                                        <x-ui.label for="email">Work Email</x-ui.label>
                                        <x-ui.input id="email" type="email" name="email" placeholder="example@company.com" required />
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <x-ui.label for="phone">Phone Number</x-ui.label>
                                        <x-ui.input id="phone" type="tel" name="phone" placeholder="+880..." required />
                                    </div>
                                    <div>
                                        <x-ui.label for="country">Country / Region</x-ui.label>
                                        <x-ui.select id="country" name="country" required>
                                            <option value="Bangladesh" selected>Bangladesh</option>
                                            <option value="Global">Other (Global)</option>
                                        </x-ui.select>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <x-ui.label for="company_name">Company Name</x-ui.label>
                                        <x-ui.input id="company_name" name="company_name" placeholder="Your company" required />
                                    </div>
                                    <div>
                                        <x-ui.label for="team_size">Team Size</x-ui.label>
                                        <x-ui.select id="team_size" name="team_size" required>
                                            <option value="">Select size</option>
                                            <option value="1-10">1-10 Employees</option>
                                            <option value="11-50">11-50 Employees</option>
                                            <option value="51-200">51-200 Employees</option>
                                            <option value="201+">201+ Employees</option>
                                        </x-ui.select>
                                    </div>
                                </div>

                                <div>
                                    <x-ui.label for="interest">Product Interest</x-ui.label>
                                    <x-ui.select id="interest" name="interest" required>
                                        <option value="">Choose what you’d like to explore</option>
                                        <option value="freight">Freight Forwarding</option>
                                        <option value="warehousing">Warehousing & Distribution</option>
                                        <option value="customs">Customs Brokerage</option>
                                        <option value="ecommerce">E-commerce Logistics</option>
                                    </x-ui.select>
                                </div>

                                <div>
                                    <x-ui.label for="message">Anything You’d Like to Add?</x-ui.label>
                                    <x-ui.textarea id="message" name="message" placeholder="Questions, goals, or challenges—drop them here." />
                                </div>

                                <div class="flex justify-end pt-2">
                                    <x-ui.button variant="primary" type="submit" class="px-8 py-3 text-base !rounded-lg shadow-lg hover:shadow-xl transition-all">
                                        Request Callback
                                    </x-ui.button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="border-gray-100 mb-24">

            <!-- Offices Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-24">
                <!-- Head Office -->
                <div class="bg-white rounded-2xl shadow-sm p-8 border border-gray-100 flex flex-col">
                    <div class="mb-6">
                        <div class="h-12 w-12 bg-blue-50 rounded-xl flex items-center justify-center text-brand-primary mb-4">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-brand-primary font-montserrat uppercase tracking-tight">Head Office</h2>
                        <p class="mt-2 text-brand-gray text-sm leading-relaxed">
                            Landmark Building (7th Floor),<br>
                            Gulshan-2, Dhaka
                        </p>
                    </div>
                    <div class="space-y-4 mt-auto">
                        <div class="flex items-center text-sm">
                            <svg class="h-5 w-5 text-brand-secondary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 004.516 4.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="text-brand-gray break-all">+88 01329727536, +8801811011622</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <svg class="h-5 w-5 text-brand-secondary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="text-brand-gray">cs@worldpacintl.com</span>
                        </div>
                    </div>
                </div>

                <!-- Operation Hub 1 -->
                <div class="bg-white rounded-2xl shadow-sm p-8 border border-gray-100 flex flex-col">
                    <div class="mb-6">
                        <div class="h-12 w-12 bg-red-50 rounded-xl flex items-center justify-center text-brand-secondary mb-4">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-brand-primary font-montserrat uppercase tracking-tight">Operation Hub 1</h2>
                        <p class="mt-2 text-brand-gray text-sm leading-relaxed">
                            59/1, Atish Dipankar Road,<br>
                            Kamalapur, Dhaka-1214
                        </p>
                    </div>
                    <div class="space-y-4 mt-auto">
                        <div class="flex items-center text-sm">
                            <svg class="h-5 w-5 text-brand-secondary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 004.516 4.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="text-brand-gray">+8801917708205</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <svg class="h-5 w-5 text-brand-secondary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="text-brand-gray">ops@worldpacintl.com</span>
                        </div>
                    </div>
                </div>

                <!-- Operation Hub 2 -->
                <div class="bg-white rounded-2xl shadow-sm p-8 border border-gray-100 flex flex-col">
                    <div class="mb-6">
                        <div class="h-12 w-12 bg-red-50 rounded-xl flex items-center justify-center text-brand-secondary mb-4">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-brand-primary font-montserrat uppercase tracking-tight">Operation Hub 2</h2>
                        <p class="mt-2 text-brand-gray text-sm leading-relaxed">
                            Plot #03, Tongi Bisho Estama Road,<br>
                            Kamarpara, Tongi, Gazipur-1700
                        </p>
                    </div>
                    <div class="space-y-4 mt-auto">
                        <div class="flex items-center text-sm">
                            <svg class="h-5 w-5 text-brand-secondary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 004.516 4.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="text-brand-gray">+8801329727540</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <svg class="h-5 w-5 text-brand-secondary mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="text-brand-gray">ops@worldpacintl.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WhatsApp Section -->
            <div class="mt-16 bg-brand-primary rounded-3xl p-8 md:p-12 text-center text-white relative overflow-hidden shadow-2xl">
                <div class="relative z-10">
                    <h2 class="text-3xl font-bold mb-4 font-montserrat">Need Immediate Assistance?</h2>
                    <p class="text-blue-100 mb-10 max-w-2xl mx-auto">Skip the email and chat directly with our operation team for real-time shipment updates and inquiries.</p>
                    
                    <x-ui.button variant="whatsapp" href="https://wa.me/8801329727540" target="_blank" class="inline-flex items-center bg-white !text-brand-primary hover:bg-gray-100 shadow-xl transition-all scale-110">
                        <svg class="w-6 h-6 mr-3 fill-[#25D366]" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.634 1.437h.005c6.558 0 11.894-5.335 11.897-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        Chat on WhatsApp
                    </x-ui.button>
                </div>
                <!-- Abstract Background Shapes -->
                <div class="absolute top-0 right-0 -translate-y-1/2 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 trnaslate-y-1/2 w-96 h-96 bg-brand-secondary/10 rounded-full blur-3xl"></div>
            </div>
        </div>
    </div>
</x-layout>
