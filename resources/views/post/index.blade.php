{{--@extends('layouts.main')--}}
{{--@section('content')--}}
{{--    <div>--}}
{{--        @foreach($posts as $post)--}}
{{--            <div>{{ $post->id }} . {{ $post->title }}</div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--@endsection--}}


@extends('layouts.main')
@section('content')

    <div>
        <a href="{{ route('post.create') }}" class="btn btn-outline-primary mb-3">Add one post</a>
    </div>

    <div>
        @foreach($posts as $post)
            <div><a href="{{ route('post.show', $post->id) }}"> {{ $post->id }} . {{ $post->title }}</a></div>
        @endforeach

        <div class="mt-3">
            {{ $posts->links() }}
        </div>

    </div>
@endsection
