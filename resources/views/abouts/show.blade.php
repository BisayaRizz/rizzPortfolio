@extends('layouts.app')
  
@section('title', 'Show About')
  
@section('contents')
    <h1 class="mb-0">Detail About</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $about->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">From</label>
            <input type="text" name="from" class="form-control" placeholder="From" value="{{ $about->from }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Lives</label>
            <input type="text" name="lives" class="form-control" placeholder="Lives" value="{{ $about->lives }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Age</label>
            <textarea class="form-control" name="age" placeholder="Age" readonly>{{ $about->age }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Bio</label>
            <textarea class="form-control" name="bio" placeholder="Bio" readonly>{{ $about->bio }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $about->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $about->updated_at }}" readonly>
        </div>
    </div>
@endsection