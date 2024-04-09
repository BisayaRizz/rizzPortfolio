@extends('layouts.app')
  
@section('title', 'Edit About')
  
@section('contents')
    <h1 class="mb-0">Edit About</h1>
    <hr />
    <form action="{{ route('abouts.update', $about->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $about->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">From</label>
                <input type="text" name="from" class="form-control" placeholder="From" value="{{ $about->from }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Lives</label>
                <input type="text" name="lives" class="form-control" placeholder="Lives" value="{{ $about->lives }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Age</label>
                <input type="text" name="age" class="form-control" placeholder="Age" value="{{ $about->age }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Bio</label>
                <textarea class="form-control" name="bio" placeholder="Bio" >{{ $about->bio }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection