@extends('layouts.app')
  
@section('title', 'Create Education')
  
@section('contents')
    <h1 class="mb-0">Add Education</h1>
    <hr />
    <form action="{{ route('education.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="elementary" class="form-control" placeholder="Elementary">
            </div>
            <div class="col">
                <input type="text" name="highschool" class="form-control" placeholder="Highschool">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="seniorhigh" class="form-control" placeholder="Seniorhigh">
            </div>
            <div class="col">
                <input type="text" name="college" class="form-control" placeholder="College">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection