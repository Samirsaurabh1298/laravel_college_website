@extends('layouts.app')

@section('content')
<section class="py-20 bg-gray-50">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-semibold mb-12 text-blue-900">What Our Students Say</h2>

        <!-- Owl Carousel -->
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="/images/student1.jpg" alt="Student Image" class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h3 class="text-xl font-semibold text-blue-600">John Doe</h3>
                    <p class="text-gray-500 mb-2">2023</p>
                    <p class="text-gray-600">This college helped me develop my skills and launch my career in music.</p>
                </div>
            </div>
            <div class="item">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="/images/student2.jpg" alt="Student Image" class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h3 class="text-xl font-semibold text-blue-600">Jane Smith</h3>
                    <p class="text-gray-500 mb-2">2022</p>
                    <p class="text-gray-600">A wonderful experience with great instructors and top-notch facilities.</p>
                </div>
            </div>
            <div class="item">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="/images/student3.jpg" alt="Student Image" class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h3 class="text-xl font-semibold text-blue-600">Emma Williams</h3>
                    <p class="text-gray-500 mb-2">2021</p>
                    <p class="text-gray-600">An amazing journey in both musical and personal growth. Highly recommended!</p>
                </div>
            </div>
            <div class="item">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="/images/student4.jpg" alt="Student Image" class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h3 class="text-xl font-semibold text-blue-600">Michael Brown</h3>
                    <p class="text-gray-500 mb-2">2020</p>
                    <p class="text-gray-600">The college provided a solid foundation for my music career, both academically and professionally.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
