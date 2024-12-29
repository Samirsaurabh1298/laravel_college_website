<!-- resources/views/components/admissionform.blade.php -->
<div class="bg-gray-50 p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold text-center mb-4">Admission Form</h2>
    <form action="/submit-admission" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" id="name" name="name" class="w-full p-2 mt-1 border border-gray-300 rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input type="email" id="email" name="email" class="w-full p-2 mt-1 border border-gray-300 rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="course" class="block text-sm font-medium text-gray-700">Course</label>
            <select id="course" name="course" class="w-full p-2 mt-1 border border-gray-300 rounded-md">
                <option value="music-theory">Music Theory</option>
                <option value="instrumental">Instrumental</option>
                <option value="vocal">Vocal</option>
            </select>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Submit</button>
    </form>
</div>
