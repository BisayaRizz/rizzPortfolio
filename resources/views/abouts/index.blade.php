@extends('layouts.app')
  
@section('title', 'Home About')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List About</h1>
        <a href="{{ route('abouts.create') }}" class="btn btn-primary">Add About</a>
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
                <th>Name</th>
                <th>From</th>
                <th>Lives</th>
                <th>Age</th>
                <th>Bio</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($about->count() > 0)
                @foreach($about as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->from }}</td>
                        <td class="align-middle">{{ $rs->lives }}</td>
                        <td class="align-middle">{{ $rs->age }}</td>
                        <td class="align-middle">{{ $rs->bio }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('abouts.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('abouts.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('abouts.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">About not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection