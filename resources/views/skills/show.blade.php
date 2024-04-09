@extends('layouts.app')
  
@section('title', 'Show Skills')
  
@section('contents')
    <h1 class="mb-0">Detail Skill</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">First</label>
            <input type="text" name="first" class="form-control" placeholder="First" value="{{ $skill->first }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Second</label>
            <input type="text" name="second" class="form-control" placeholder="Second" value="{{ $skill->second }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Third</label>
            <input type="text" name="third" class="form-control" placeholder="Third" value="{{ $skill->third }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Forth</label>
            <textarea class="form-control" name="forth" placeholder="Forth" readonly>{{ $skill->forth }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Fifth</label>
            <textarea class="form-control" name="fifth" placeholder="Fifth" readonly>{{ $skill->fifth }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Sixth</label>
            <textarea class="form-control" name="sixth" placeholder="Sixth" readonly>{{ $skill->sixth }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $skill->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $skill->updated_at }}" readonly>
        </div>
    </div>
@endsection