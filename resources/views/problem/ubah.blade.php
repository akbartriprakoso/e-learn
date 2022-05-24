@extends('layouts.main')
@section('content')
<div class="card border-0 shadow rounded">
    <div class="card-body">
        {{-- <form action="{{ route('post.update', $post->id) }}" method="POST"> --}}
        <form action="#" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror"
                    {{-- name="title" value="{{ old('title', $post->title) }}" required> --}}
                    name="title" value="judul" required>

                <!-- error message untuk title -->
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Publish Status</label>
                <select name="status" class="form-control" required>
                    {{-- <option value="1" {{ $post->status == 1 ? 'selected':'' }}>Publish</option>
                    <option value="0" {{ $post->status == 0 ? 'selected':'' }}>Draft</option> --}}
                    <option value="1">Publish</option>
                    <option value="0">Draft</option>
                </select>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea
                    name="content" id="content"
                    class="form-control @error('content') is-invalid @enderror" name="content" id="content"
                    {{-- rows="5" required>{{ old('content', $post->content) }}</textarea> --}}
                    rows="5" required>ini isi konten sebelumnya</textarea>

                <!-- error message untuk content -->
                @error('content')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-md btn-primary">Update</button>
            {{-- <a href="{{ route('post.index') }}" class="btn btn-md btn-secondary">back</a> --}}
            <a href="#" class="btn btn-md btn-secondary">back</a>
        </form>
    </div>
</div>
@endsection