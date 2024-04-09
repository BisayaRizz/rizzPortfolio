@extends('layouts.app')
  
@section('title', 'Edit Experience')
  
@section('contents')
    <h1 class="mb-0">Edit Experience</h1>
    <hr />
    <form action="{{ route('experience.update', $experience->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">firstExp</label>
                <input type="text" name="firstExp" class="form-control" placeholder="firstExp" value="{{ $experience->firstExp }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">secondExp</label>
                <input type="text" name="secondExp" class="form-control" placeholder="secondExp" value="{{ $experience->secondExp }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">thirdExp</label>
                <input type="text" name="thirdExp" class="form-control" placeholder="thirdExp" value="{{ $experience->thirdExp }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">forthExp</label>
                <input type="text" name="forthExp" class="form-control" placeholder="forthExp" value="{{ $experience->forthExp }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection