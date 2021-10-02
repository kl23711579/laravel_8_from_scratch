{{--first method--}}
{{--<x-layout content="hello" >--}}

{{--</x-layout>--}}

{{--second method--}}
<x-layout>
    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
        @else
            <p class="text-center">No Posts Yet</p>
        @endif
    </main>
</x-layout>


{{--@extends('components.layout')--}}

{{--@section('banner')--}}
{{--    <h1>My Bloggg</h1>--}}
{{--@endsection--}}

{{--@section('content')--}}
{{--    @foreach ($posts as $post)--}}
{{--        --}}{{--        @dd($loop)--}}
{{--        <article class="{{ $loop->even ?  'mb-6' : '' }}">--}}
{{--            <h1>--}}
{{--                <a href="/posts/{{ $post->slug }}">--}}
{{--                    {{ $post->title }}--}}
{{--                </a>--}}
{{--            </h1>--}}
{{--            <div>--}}
{{--                {{ $post->excerpt }}--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}
{{--@endsection--}}
