@extends("layouts.app")
@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        <form action="{{ route("register") }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="text-md">Name:</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" class="border-2 p-4 rounded-lg mt-1 w-full bg-gray-100 @error('name')
                        border-red-500
                    @enderror" value="{{ @old('name') }}">
                @error('name')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="text-md">Username:</label>
                <input type="text" name="username" id="username" placeholder="Enter your username"
                    class="border-2 p-4 rounded-lg mt-1 w-full bg-gray-100" value="{{ @old('username') }}" />
                @error('username')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="text-md">Email:</label>
                <input type="text" name="email" id="email" placeholder="Enter your email"
                    class="border-2 p-4 rounded-lg mt-1 w-full bg-gray-100" value="{{ @old('email') }}" />
                @error('email')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="text-md">Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter your password"
                    class="border-2 p-4 rounded-lg mt-1 w-full bg-gray-100" />
                @error("password")
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="text-md">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="Confirm Password" class="border-2 p-4 rounded-lg mt-1 w-full bg-gray-100">
            </div>
            <div>
                <button class="bg-blue-600 w-full p-4 rounded-lg text-white">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
