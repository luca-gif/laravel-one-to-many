@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-2">
                <form action="{{ route('admin.posts.store') }}" method="POST">
                    @csrf
                    <div class="form-group">

                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach

                        <label for="title">Titolo</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title') }}" name="title" id="title" placeholder="Title">
                        <p class="invalid-feedback" id="error-title"></p>
                    </div>
                    <div class="form-group">
                        <label for="content">Descrizione</label>
                        <textarea name="content" class="form-control @error('title') is-invalid @enderror" id="content" cols="50"
                            rows="10">{{ old('content') }}</textarea>
                        <p class="invalid-feedback" id="error-content"></p>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
