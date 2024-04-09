@extends('layouts.app')
  
@section('title', 'Home Seminars')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Seminars</h1>
        <a href="{{ route('seminars.create') }}" class="btn btn-primary">Add Seminars</a>
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
                <th>firstMeeting</th>
                <th>secondMeeting</th>
                <th>thirdMeeting</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($seminar->count() > 0)
                @foreach($seminar as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->firstMeeting }}</td>
                        <td class="align-middle">{{ $rs->secondMeeting }}</td>
                        <td class="align-middle">{{ $rs->thirdMeeting }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('seminars.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('seminars.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('seminars.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Seminars not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection