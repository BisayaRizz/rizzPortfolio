@extends('layouts.app')
  
@section('title', 'Home Skills')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Skills</h1>
        <a href="{{ route('skills.create') }}" class="btn btn-primary">Add Skill</a>
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
                <th>First</th>
                <th>Second</th>
                <th>Third</th>
                <th>Forth</th>
                <th>Fifth</th>
                <th>Sixth</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($skill->count() > 0)
                @foreach($skill as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->first }}</td>
                        <td class="align-middle">{{ $rs->second }}</td>
                        <td class="align-middle">{{ $rs->third }}</td>
                        <td class="align-middle">{{ $rs->forth }}</td>
                        <td class="align-middle">{{ $rs->fifth }}</td> 
                        <td class="align-middle">{{ $rs->sixth }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('skills.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('skills.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('skills.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Skill not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection