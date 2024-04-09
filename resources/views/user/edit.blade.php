@extends('layouts.app')
  
@section('title', 'Edit User')
  
@section('contents')
    <h1 class="mb-0">Edit User</h1>
    <hr />
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Role</label>
                <input type="text" name="role" class="form-control" placeholder="Role" value="{{ $user->role }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Avatar</label>
                <input type="file" name="avatar" class="form-control" placeholder="Avatar" value="{{ $user->avatar }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection