@extends('layouts.app')
  
@section('title', 'Create Skills')
  
@section('contents')
    <h1 class="mb-0">Add Skill</h1>
    <hr />
    <form action="{{ route('skills.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="first" class="form-control" placeholder="First">
            </div>
            <div class="col">
                <input type="text" name="second" class="form-control" placeholder="Second">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="third" class="form-control" placeholder="Third">
            </div>
            <div class="col">
                <input type="text" name="forth" class="form-control" placeholder="Forth">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="fifth" class="form-control" placeholder="Fifth">
            </div>
                <div class="col">
                    <input type="text" name="sixth" class="form-control" placeholder="Sixth">
                </div>
        </div>
        <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection