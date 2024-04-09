@extends('layouts.app')
  
@section('title', 'Create Experience')
  
@section('contents')
    <h1 class="mb-0">Add Experience</h1>
    <hr />
    <form action="{{ route('experience.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="firstExp" class="form-control" placeholder="firstExp">
            </div>
            <div class="col">
                <input type="text" name="secondExp" class="form-control" placeholder="secondExp">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="thirdExp" class="form-control" placeholder="thirdExp">
            </div>
            <div class="col">
                <input type="text" name="forthExp" class="form-control" placeholder="forthExp">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection