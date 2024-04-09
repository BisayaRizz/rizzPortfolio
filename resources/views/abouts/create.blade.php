@extends('layouts.app')
  
@section('title', 'Create About')
  
@section('contents')
    <h1 class="mb-0">Add About</h1>
    <hr />
    <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="from" class="form-control" placeholder="From">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="lives" class="form-control" placeholder="Lives">
            </div>
            <div class="col">
                <input type="text" name="age" class="form-control" placeholder="Age">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="bio" placeholder="Bio"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection