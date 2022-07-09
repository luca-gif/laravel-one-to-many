@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 text-center">
                <div class="card p-3">
                    <h4>Title: {{ $post->title }}</h4>
                    <p><b>Content:</b> {{ $post->content }}</p>
                    <p>
                        @if ($post->category)
                            <b>Categoria:</b> {{ $post->category->name }}
                        @endif
                    </p>

                </div>
                <a class="btn btn-primary m-2" href="{{ route('admin.posts.index') }}">Back</a>
            </div>
        </div>

    </div>
@endsection
