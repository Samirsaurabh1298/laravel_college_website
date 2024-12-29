<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Saryug Sangeet Mahavidalya</title>
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
            <div class="max-w-4xl">
                <h2 class="text-5xl font-extrabold mb-6">Nurturing Musical Excellence Since 2010</h2>
                <p class="text-xl text-gray-200">Where tradition meets innovation in musical education</p>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-24 px-4 md:px-16 bg-gradient-to-r from-blue-900 via-indigo-700 to-blue-900 text-white">
        <div class="max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-extrabold tracking-wide mb-6">Our Legacy</h2>
                    <p class="text-lg leading-relaxed text-gray-300">
                        <strong class="text-yellow-500">Saryug Sangeet Mahavidalya</strong> has been at the forefront of musical education for over a century. Our institution has produced numerous renowned artists who have made significant contributions to both classical and contemporary music.
                    </p>
                    <ul class="mt-6 space-y-3">
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-yellow-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            100+ Years of Excellence
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-yellow-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            50+ Expert Faculty Members
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 text-yellow-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            1000+ Alumni Worldwide
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <video src="./01_resized.mp4" 
                           poster="thumb-3.jpeg"  
                           class="w-full rounded-lg shadow-xl" 
                           controls>
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section with Interactive Cards -->
    <section class="py-20 bg-white" x-data="{ activeValue: null }">
        <div class="max-w-6xl mx-auto px-4">
            <h3 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Our Core Values</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="group hover:scale-105 transition-transform duration-300">
                    <div class="h-full space-y-4 rounded-xl p-8 bg-gradient-to-br from-sky-50 to-sky-100 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="text-4xl text-yellow-400">🎵</div>
                        <h4 class="text-xl font-medium text-gray-700">Musical Excellence</h4>
                        <p class="text-gray-600">Dedicated to achieving the highest standards in music education and performance.</p>
                    </div>
                </div>
                <div class="group hover:scale-105 transition-transform duration-300">
                    <div class="h-full space-y-4 rounded-xl p-8 bg-gradient-to-br from-sky-50 to-sky-100 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="text-4xl text-yellow-400">🎼</div>
                        <h4 class="text-xl font-medium text-gray-700">Cultural Heritage</h4>
                        <p class="text-gray-600">Preserving and promoting India's rich musical traditions while embracing global influences.</p>
                    </div>
                </div>
                <div class="group hover:scale-105 transition-transform duration-300">
                    <div class="h-full space-y-4 rounded-xl p-8 bg-gradient-to-br from-sky-50 to-sky-100 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="text-4xl text-yellow-400">🎹</div>
                        <h4 class="text-xl font-medium text-gray-700">Innovation</h4>
                        <p class="text-gray-600">Blending traditional methods with modern technology and teaching approaches.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h3 class="text-3xl font-semibold text-gray-800 mb-12 text-center">World-Class Facilities</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1520523839897-bd0b52f945a0?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" 
                         alt="Recording Studio" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Recording Studios</h4>
                        <p class="text-gray-600">State-of-the-art recording facilities with professional equipment.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" 
                         alt="Practice Rooms" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Practice Rooms</h4>
                        <p class="text-gray-600">Soundproof rooms equipped with premium instruments.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1576511759195-4f08b1e0c165?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80" 
                         alt="Concert Hall" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Concert Hall</h4>
                        <p class="text-gray-600">400-seat auditorium with exceptional acoustics.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Student Testimonials -->
    <section class="py-20 bg-blue-900 text-white">
        <div class="max-w-6xl mx-auto px-4">
            <h3 class="text-3xl font-semibold mb-12 text-center">Student Voices</h3>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white/10 p-8 rounded-lg backdrop-blur-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80" 
                             alt="Student" 
                             class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Priya Sharma</h4>
                            <p class="text-sm text-gray-300">Classical Vocal, Year 3</p>
                        </div>
                    </div>
                    <p class="text-gray-300">"The faculty here is exceptional. Their guidance has helped me discover my true potential as a classical vocalist."</p>
                </div>
                <div class="bg-white/10 p-8 rounded-lg backdrop-blur-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80" 
                             alt="Student" 
                             class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Rahul Verma</h4>
                            <p class="text-sm text-gray-300">Tabla, Year 4</p>
                        </div>
                    </div>
                    <p class="text-gray-300">"The blend of traditional teaching methods with modern facilities makes this institution unique."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h3 class="text-3xl font-bold text-white mb-6">Begin Your Musical Journey</h3>
            <p class="text-white text-lg mb-8">Join our prestigious institution and become part of our musical legacy.</p>
            <div class="space-x-4">
                <a href="{{ route('admission') }}" class="inline-block bg-blue-900 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-800 transition duration-300">Apply Now</a>
                <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-900 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">Contact Us</a>
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
                            +916204804795
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