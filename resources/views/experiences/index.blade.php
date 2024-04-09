@extends('layouts.app')
  
@section('title', 'Home Experience')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Experience</h1>
        <a href="{{ route('experience.create') }}" class="btn btn-primary">Add Experience</a>
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
                <th>firstExp</th>
                <th>secondExp</th>
                <th>thirdExp</th>
                <th>forthExp</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($experience->count() > 0)
                @foreach($experience as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->firstExp }}</td>
                        <td class="align-middle">{{ $rs->secondExp }}</td>
                        <td class="align-middle">{{ $rs->thirdExp }}</td>
                        <td class="align-middle">{{ $rs->forthExp }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('experience.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('experience.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('experience.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Experience not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection