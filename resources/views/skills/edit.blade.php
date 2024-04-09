@extends('layouts.app')
  
@section('title', 'Edit Skills')
  
@section('contents')
    <h1 class="mb-0">Edit Skill</h1>
    <hr />
    <form action="{{ route('skills.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">First</label>
                <input type="text" name="first" class="form-control" placeholder="First" value="{{ $skill->first }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Second</label>
                <input type="text" name="second" class="form-control" placeholder="Second" value="{{ $skill->second }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Third</label>
                <input type="text" name="third" class="form-control" placeholder="Third" value="{{ $skill->third }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Forth</label>
                <textarea class="form-control" name="forth" placeholder="Forth" >{{ $skill->forth }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Fifth</label>
                <textarea class="form-control" name="fifth" placeholder="Fifth" >{{ $skill->fifth }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Sixth</label>
                <textarea class="form-control" name="sixth" placeholder="Sixth" >{{ $skill->sixth }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection