@extends('layouts.app')
  
@section('title', 'Home Blogs')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Blogs</h1>
        <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add Blogs</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>firstBlog</th>
                <th>secondBlog</th>
                <th>thirdBlog</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($blog->count() > 0)
                @foreach($blog as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->firstBlog }}</td>
                        <td class="align-middle">{{ $rs->secondBlog }}</td>
                        <td class="align-middle">{{ $rs->thirdBlog }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('blogs.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('blogs.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('blogs.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Blogs not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection