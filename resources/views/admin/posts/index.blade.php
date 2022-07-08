@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Posts</div>
                    <div class="card-body">
                        <table class="table">

                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Buttons</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <th scope="row">{{ $post->id }}</th>

                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->content }}</td>
                                        <td class="w-25">
                                            <a class="btn btn-danger"
                                                href="{{ route('admin.posts.show', $post) }}">Show</a>

                                            <a class="btn btn-success"
                                                href="{{ route('admin.posts.edit', $post) }}">Edit</a>

                                            <form class="d-inline" action="{{ route('admin.posts.destroy', $post) }}"
                                                method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-dark"> Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $posts->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
