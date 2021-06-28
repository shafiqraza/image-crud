@extends("layouts.app")
@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        @if (session('status'))
        <div class="bg-red-500 p-4 shadow-sm text-white mb-4 rounded-md">
            <p>{{ session('status') }}</p>
        </div>
        @endif
        <form action="{{ route("login") }}" method="post">
            @csrf
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
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </div>
            <div>
                <button class="bg-blue-600 w-full p-4 rounded-lg text-white">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
