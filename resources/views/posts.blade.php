{{--first method--}}
{{--<x-layout content="hello" >--}}

{{--</x-layout>--}}

{{--second method--}}
<x-layout>
    @foreach ($posts as $post)
        <article class="{{ $loop->even ?  'mb-6' : '' }}">
            <h1>
                <a href="/posts/{{ $post->id }}">
                    {{ $post->title }}
                </a>
            </h1>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
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
