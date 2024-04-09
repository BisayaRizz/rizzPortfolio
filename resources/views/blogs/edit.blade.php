@extends('layouts.app')
  
@section('title', 'Edit Blogs')
  
@section('contents')
    <h1 class="mb-0">Edit Blogs</h1>
    <hr />
    <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">firstBlog</label>
                <input type="text" name="firstBlog" class="form-control" placeholder="firstBlog" value="{{ $blog->firstBlog }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">secondBlog</label>
                <input type="text" name="secondBlog" class="form-control" placeholder="secondBlog" value="{{ $blog->secondBlog }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">thirdBlog</label>
                <input type="text" name="thirdBlog" class="form-control" placeholder="thirdBlog" value="{{ $blog->thirdBlog }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection