@extends('layouts.app')
  
@section('title', 'Create Blogs')
  
@section('contents')
    <h1 class="mb-0">Add Blogs</h1>
    <hr />
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="firstBlog" class="form-control" placeholder="firstBlog">
            </div>
            <div class="col">
                <input type="text" name="secondBlog" class="form-control" placeholder="secondBlog">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="thirdBlog" class="form-control" placeholder="thirdBlog">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection