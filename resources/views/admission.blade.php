<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission - Saryug Sangeet Mahavidalya</title>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-blue-900 text-white shadow-md">
        <div class="max-w-screen-xl mx-auto px-8 py-6">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="text-2xl flex font-bold text-white hover:text-yellow-300 transition duration-300">
                    <img src="./m-logo.png" class="w-10 h-10 flex" alt="">
                    <h1>Saryug Sangeet Mahavidalya</h1>
                </a>
                <nav class="space-x-8">
                    <a href="{{ route('home') }}" class="text-white hover:text-yellow-300 transition">Home</a>
                    <a href="{{ route('about') }}" class="text-white hover:text-yellow-300 transition">About</a>
                    <a href="{{ route('admission') }}" class="text-white hover:text-yellow-300 transition">Admission</a>
                    <a href="{{ route('contact') }}" class="text-white hover:text-yellow-300 transition">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section with Parallax -->
    <section class="relative h-[60vh] overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" 
                 alt="Music instruments" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-blue-900/70"></div>
        </div>
        <div class="relative h-full flex items-center justify-center text-center text-white px-4">
            <div class="max-w-4xl animate-fade-in">
                <h2 class="text-5xl font-extrabold mb-6">Begin Your Musical Journey</h2>
                <p class="text-xl text-gray-200">अब आवेदन करें और हमारे प्रतिष्ठित सरयुग संगीत महाविद्यालय का हिस्सा बनें।</p>
            </div>
        </div>
    </section>

    <!-- Multi-Step Admission Form -->
    <section class="py-16 bg-white" x-data="{ step: 1 }">
        <div class="max-w-4xl mx-auto px-6">
            <!-- Progress Bar -->
            <div class="mb-12">
                <div class="flex justify-between">
                    <template x-for="i in 4" :key="i">
                        <div class="flex flex-col items-center w-1/4">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center"
                                :class="step >= i ? 'bg-yellow-500 text-white' : 'bg-gray-200'">
                                <span x-text="i"></span>
                            </div>
                            <div class="text-sm mt-2" :class="step >= i ? 'text-yellow-500' : 'text-gray-500'">
                                <span x-text="['Personal Info', 'Academic Details', 'Music Background', 'Review'][i-1]"></span>
                            </div>
                        </div>
                    </template>
                </div>
                <div class="relative mt-4">
                    <div class="absolute top-0 h-1 bg-gray-200 w-full"></div>
                    <div class="absolute top-0 h-1 bg-yellow-500 transition-all duration-500"
                        :style="'width: ' + ((step - 1) * 33.33) + '%'"></div>
                </div>
            </div>

            <!-- Form Steps -->
            <form action="/submit-admission" method="POST" class="space-y-8">
                @csrf
                
                <!-- Step 1: Personal Information -->
                <div x-show="step === 1" x-transition>
                    <h3 class="text-2xl font-semibold mb-6">Personal Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" name="full_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Date of Birth</label>
                            <input type="date" name="dob" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Phone</label>
                            <input type="tel" name="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200">
                        </div>
                    </div>
                </div>

                <!-- Step 2: Academic Details -->
                <div x-show="step === 2" x-transition>
                    <h3 class="text-2xl font-semibold mb-6">Academic Details</h3>
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Previous Education</label>
                            <input type="text" name="education" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">School/College Name</label>
                            <input type="text" name="school" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Year of Passing</label>
                            <input type="number" name="passing_year" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200">
                        </div>
                    </div>
                </div>

                <!-- Step 3: Music Background -->
                <div x-show="step === 3" x-transition>
                    <h3 class="text-2xl font-semibold mb-6">Music Background</h3>
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Music Experience (Years)</label>
                            <input type="number" name="experience" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Preferred Instrument/Vocal Style</label>
                            <select name="preference" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200">
                                <option>Classical Vocal</option>
                                <option>Tabla</option>
                                <option>Sitar</option>
                                <option>Harmonium</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Additional Information</label>
                            <textarea name="additional_info" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Step 4: Review -->
                <div x-show="step === 4" x-transition>
                    <h3 class="text-2xl font-semibold mb-6">Review Your Application</h3>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <p class="text-gray-600">Please review your information before submitting.</p>
                        <!-- Add dynamic review content here -->
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between mt-8">
                    <button type="button" 
                            x-show="step > 1" 
                            @click="step--"
                            class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300 transition">
                        Previous
                    </button>
                    <button type="button" 
                            x-show="step < 4" 
                            @click="step++"
                            class="bg-yellow-500 text-white px-6 py-2 rounded-lg hover:bg-yellow-600 transition">
                        Next
                    </button>
                    <button type="submit" 
                            x-show="step === 4"
                            class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 transition">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h3 class="text-2xl font-semibold text-center mb-12">Why Choose Us?</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-yellow-500 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Expert Faculty</h4>
                    <p class="text-gray-600">Learn from renowned musicians and experienced educators.</p>
                </div>
                <div class="group bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-yellow-500 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Modern Facilities</h4>
                    <p class="text-gray-600">State-of-the-art classrooms and practice rooms.</p>
                </div>
                <div class="group bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-yellow-500 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Strong Alumni Network</h4>
                    <p class="text-gray-600">Join a community of successful musicians worldwide.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
       <footer class="bg-blue-950 text-white py-10">
        <div class="max-w-screen-xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h2 class="text-2xl font-bold text-yellow-400">Saryug Sangeet Mahavidalya</h2>
                    <p class="mt-2 text-gray-300">Empowering musicians, building a creative future.</p>
                    <div class="mt-4 space-x-4 flex">
                        <a href="#" class="text-gray-300 hover:text-yellow-400">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-yellow-400">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/></svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-yellow-400">
                            <span class="sr-only">YouTube</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('courses') }}" class="text-gray-300 hover:text-yellow-400">Courses</a></li>
                        <li><a href="{{ route('faculty') }}" class="text-gray-300 hover:text-yellow-400">Faculty</a></li>
                        <li><a href="{{ route('events') }}" class="text-gray-300 hover:text-yellow-400">Events</a></li>
                        <li><a href="{{ route('gallery') }}" class="text-gray-300 hover:text-yellow-400">Gallery</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Information</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            Babhangama, City - Babhangama, 852101, Bihar.
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            contact@saryugsangeet.edu
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <a href="tel:+916200432657">6200432657</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2024 Saryug Sangeet Mahavidalya. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>