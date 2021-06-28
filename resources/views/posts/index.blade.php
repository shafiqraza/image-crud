@extends("layouts.app")
@section('content')
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-4 rounded-lg">
        <form action="{{ route('posts') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="body" class="text-md">Post:</label>
                <textarea name="body" id="body" placeholder="Create your post" class="border-2 p-4 rounded-lg mt-1 w-full bg-gray-100 @error('body')
                    border-red-500
                @enderror" cols="4"></textarea>
                @error('body')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button class="bg-blue-600 w-full p-4 rounded-lg text-white w-4">Create Post</button>
            </div>
        </form>

        <div class="mb-4">
            @if ($posts->count())
            @foreach ($posts as $post)

            @endforeach
            @else
            <p>No Posts</p>
            @endif
        </div>
    </div>
</div>
@endsection
