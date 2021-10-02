{{--first method--}}
{{--<x-layout content="hello" >--}}

{{--</x-layout>--}}

{{--second method--}}
<x-layout>

    @include('_post-header')
    
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-post-feature-card />

        <div class="lg:grid lg:grid-cols-2">
            <x-post-card />
            <x-post-card />
        </div>

        <div class="lg:grid lg:grid-cols-3">
            <x-post-card />
            <x-post-card />
            <x-post-card />
        </div>
    </main>
{{--    @foreach ($posts as $post)--}}
{{--        <article class="{{ $loop->even ?  'mb-6' : '' }}">--}}
{{--            <h1>--}}
{{--                <a href="/posts/{{ $post->slug }}">--}}
{{--                    {{ $post->title }}--}}
{{--                </a>--}}
{{--            </h1>--}}
{{--            <p>--}}
{{--                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>--}}
{{--            </p>--}}
{{--            <div>--}}
{{--                {{ $post->excerpt }}--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}
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
