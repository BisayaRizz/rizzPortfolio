@extends('layouts.app')
  
@section('title', 'Edit Education')
  
@section('contents')
    <h1 class="mb-0">Edit Education</h1>
    <hr />
    <form action="{{ route('education.update', $education->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Elementary</label>
                <input type="text" name="elementary" class="form-control" placeholder="Elementary" value="{{ $education->elementary }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">highschool</label>
                <input type="text" name="highschool" class="form-control" placeholder="Highschool" value="{{ $education->highschool }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Seniorhigh</label>
                <input type="text" name="seniorhigh" class="form-control" placeholder="Seniorhigh" value="{{ $education->seniorhigh }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">College</label>
                <input type="text" name="college" class="form-control" placeholder="College" value="{{ $education->college }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection