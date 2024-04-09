@extends('layouts.app')
  
@section('title', 'Show Blogs')
  
@section('contents')
    <h1 class="mb-0">Detail Blogs</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">firstBlog</label>
            <input type="text" name="firstBlog" class="form-control" placeholder="fristBlog" value="{{ $blog->firstBlog }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">secondBlog</label>
            <input type="text" name="secondBlog" class="form-control" placeholder="secondBlog" value="{{ $blog->secondBlog }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">thirdBlog</label>
            <input type="text" name="thirdBlog" class="form-control" placeholder="thirdBlog" value="{{ $blog->thirdBlog }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $blog->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $blog->updated_at }}" readonly>
        </div>
    </div>
@endsection