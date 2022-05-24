@extends('layouts.main')
@section('content')
<div class="card border-0 shadow rounded">
    <div class="card-body">
        {{-- <a href="{{ route('post.create') }}" class="btn btn-md btn-success mb-3 float-right">New Post</a> --}}
        <a href="" class="btn btn-md btn-success mb-3 float-right">New Post</a>

        <table class="table table-bordered mt-1">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col">Create At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @forelse ($posts as $post) --}}
                <tr>
                    {{-- <td>{{ $post->title }}</td>
                    <td>{{ $post->status == 0 ? 'Draft':'Publish' }}</td>
                    <td>{{ $post->created_at->format('d-m-Y') }}</td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('post.destroy', $post->id) }}" method="POST">
                            <a href="{{ route('post.edit', $post->id) }}"
                                class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td> --}}
                    <td>judul postingan</td>
                    <td>publish</td>
                    <td>tanggal</td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="" method="POST">
                            <a href=""
                                class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td>
                </tr>
                {{-- @empty --}}
                <tr>
                    <td class="text-center text-mute" colspan="4">Data post tidak tersedia</td>
                </tr>
                {{-- @endforelse --}}
            </tbody>
        </table>
    </div>
</div>
@endsection