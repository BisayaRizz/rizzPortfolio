@extends('layouts.app')
  
@section('title', 'Create User')
  
@section('contents')
    <h1 class="mb-0">Add User</h1>
    <hr />
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="role" class="form-control" placeholder="Role">
            </div>
            <div class="col">
                <input type="file" name="avatar" class="form-control" placeholder="Avatar">
            </div>
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="col">
                <input type="text" name="password" class="form-control" placeholder="Password">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection