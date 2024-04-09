@extends('layouts.app')
  
@section('title', 'Home Education')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Education</h1>
        <a href="{{ route('education.create') }}" class="btn btn-primary">Add Education</a>
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
                <th>Elementary</th>
                <th>Highschool</th>
                <th>Seniorhigh</th>
                <th>College</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($education->count() > 0)
                @foreach($education as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->elementary }}</td>
                        <td class="align-middle">{{ $rs->highschool }}</td>
                        <td class="align-middle">{{ $rs->seniorhigh }}</td>
                        <td class="align-middle">{{ $rs->college }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('education.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('education.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('education.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Education not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection