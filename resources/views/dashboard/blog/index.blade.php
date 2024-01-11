@extends('layouts/katalog')
@section('content')
<div class="container">
    <a href="/blog/create" class="btn btn-primary mb-3">+Tambah Informasi Blog</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Thumbnail</th>
                <th>ID_Blog</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blog as $item)
                <tr>
                    <td>
                        @if ($item->thumbnail)
                            <img style="max-width:100px; max-height:100px" src="{{ asset('thumbnail').'/'.$item->thumbnail }}" alt="thumbnail">
                        @endif
                    </td>
                    <td>{{ $item->id_blog }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td><a class="btn btn-secondary btn-sm" 
                    href="{{ url('/blog/' .$item->id_blog) }}">Detail</a></td>
                    <td><a class="btn btn-warning btn-sm" 
                    href="{{ url('/blog/' .$item->id_blog.'/edit') }}">Edit</a></td>
                    <td>
                        <form onsubmit="return confirm('Apakah yakin ingin menghapus data?')" action="{{ '/blog/'.$item->id_blog }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit" >Delete</button>
                        </form>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection