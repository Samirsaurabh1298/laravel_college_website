@extends('layouts.app')

@section('content')
<!-- Hero Section with Video Background -->
<section class="relative h-screen">
    <div class="absolute inset-0 overflow-hidden">
        <video class="object-cover w-full h-full" autoplay loop muted playsinline poster="./training-pinao.jpg">
            <source src="./01_resized.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-indigo-900/90"></div>
    </div>
    <div class="relative h-full flex items-center">
        <div class="container mx-auto text-center px-4">
            <h1 class="text-5xl md:text-7xl text-yellow-500 font-bold leading-tight mb-6 animate-fade-in">
                Welcome to Saryug Sangeet Mahavidalya
            </h1>
            <p class="text-xl md:text-2xl text-white mb-8 max-w-3xl mx-auto">
                संगीत में बसी है हमारी पहचान, जहां हर स्वर में है नयी जान।
            </p>
            <div class="space-x-4">
                <a href="{{ route('admission') }}" class="inline-block bg-yellow-500 text-black py-4 px-8 rounded-lg hover:bg-yellow-400 text-lg font-semibold transition-all transform hover:scale-105">
                    Apply Now
                </a>
                <a href="#explore" class="inline-block bg-white/10 text-white py-4 px-8 rounded-lg hover:bg-white/20 text-lg font-semibold transition-all backdrop-blur-sm">
                    Explore Programs
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Programs Section -->
<section id="explore" class="py-24 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16">Our Featured Programs</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Classical Vocal -->
            <div class="group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1516280440614-37939bbacd81?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" 
                         alt="Classical Vocal" 
                         class="object-cover w-full h-64 transform group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Classical Vocal</h3>
                    <p class="text-gray-600 mb-4">Master the ancient art of Indian classical vocals under renowned gurus.</p>
                    <a href="{{ route('courses') }}" class="text-blue-600 hover:text-blue-800 font-medium">Learn more →</a>
                </div>
            </div>

            <!-- Instrumental Music -->
            <div class="group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" 
                         alt="Instrumental Music" 
                         class="object-cover w-full h-64 transform group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Instrumental Music</h3>
                    <p class="text-gray-600 mb-4">Excel in traditional and modern instruments with personalized guidance.</p>
                    <a href="{{ route('courses') }}" class="text-blue-600 hover:text-blue-800 font-medium">Learn more →</a>
                </div>
            </div>

            <!-- Music Production -->
            <div class="group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" 
                         alt="Music Production" 
                         class="object-cover w-full h-64 transform group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Music Production</h3>
                    <p class="text-gray-600 mb-4">Learn modern music production techniques in state-of-the-art studios.</p>
                    <a href="{{ route('courses') }}" class="text-blue-600 hover:text-blue-800 font-medium">Learn more →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-20 bg-blue-900 text-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="p-4">
                <div class="text-4xl font-bold text-yellow-500 mb-2">100+</div>
                <div class="text-lg">Years of Excellence</div>
            </div>
            <div class="p-4">
                <div class="text-4xl font-bold text-yellow-500 mb-2">50+</div>
                <div class="text-lg">Expert Faculty</div>
            </div>
            <div class="p-4">
                <div class="text-4xl font-bold text-yellow-500 mb-2">1000+</div>
                <div class="text-lg">Alumni Network</div>
            </div>
            <div class="p-4">
                <div class="text-4xl font-bold text-yellow-500 mb-2">95%</div>
                <div class="text-lg">Placement Rate</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16">Student Success Stories</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                [
                    'name' => 'Ishika Sharma',
                    'year' => '2023',
                    'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80',
                    'quote' => 'The guidance I received here transformed my understanding of classical music.'
                ],
                [
                    'name' => 'Rahul Verma',
                    'year' => '2022',
                    'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80',
                    'quote' => 'The perfect blend of traditional teaching and modern facilities made learning enjoyable.'
                ],
                [
                    'name' => 'Anjali Patel',
                    'year' => '2023',
                    'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80',
                    'quote' => 'The mentorship I received here helped me launch my professional music career.'
                ]
            ] as $testimonial)
            <div class="bg-white rounded-xl shadow-lg p-8 transform hover:-translate-y-1 transition-all duration-300">
                <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}" 
                     class="w-24 h-24 rounded-full mx-auto mb-6 object-cover">
                <p class="text-gray-600 mb-4 italic">"{{ $testimonial['quote'] }}"</p>
                <div class="text-center">
                    <h3 class="font-semibold text-lg">{{ $testimonial['name'] }}</h3>
                    <p class="text-gray-500">Class of {{ $testimonial['year'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Upcoming Events Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16">Upcoming Events</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach([
                [
                    'title' => 'Annual Music Festival',
                    'date' => 'March 15, 2024',
                    'image' => 'https://images.unsplash.com/photo-1501386761578-eac5c94b800a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80'
                ],
                [
                    'title' => 'Classical Concert Series',
                    'date' => 'April 2, 2024',
                    'image' => 'https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80'
                ],
                [
                    'title' => 'Workshop: Music Production',
                    'date' => 'April 15, 2024',
                    'image' => 'https://images.unsplash.com/photo-1598653222000-6b7b7a552625?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80'
                ]
            ] as $event)
            <div class="group relative overflow-hidden rounded-xl">
                <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}" 
                     class="w-full h-64 object-cover transform group-hover:scale-110 transition-all duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-6 text-white">
                    <h3 class="text-xl font-semibold mb-2">{{ $event['title'] }}</h3>
                    <p>{{ $event['date'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('events') }}" class="inline-block bg-blue-600 text-white py-3 px-8 rounded-lg hover:bg-blue-700 transition-colors">
                View All Events
            </a>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="relative py-24 bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6">Start Your Musical Journey Today</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">
            इंतजार मत करो—संगीत में अपने भविष्य की ओर पहला कदम बढ़ाओ। आज ही आवेदन करें और संगीतकारों के जीवंत समुदाय का हिस्सा बनें!
        </p>
        <div class="space-x-4">
            <a href="{{ route('admission') }}" class="inline-block bg-yellow-500 text-black py-4 px-8 rounded-lg hover:bg-yellow-400 text-lg font-semibold transition-all transform hover:scale-105">
                Apply Now
            </a>
            <a href="{{ route('contact') }}" class="inline-block bg-white/10 text-white py-4 px-8 rounded-lg hover:bg-white/20 text-lg font-semibold transition-all backdrop-blur-sm">
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection