@extends('layouts.app')
  
@section('title', 'Create Seminars')
  
@section('contents')
    <h1 class="mb-0">Add Seminars</h1>
    <hr />
    <form action="{{ route('seminars.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="firstMeeting" class="form-control" placeholder="firstMeeting">
            </div>
            <div class="col">
                <input type="text" name="secondMeeting" class="form-control" placeholder="secondMeeting">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="thirdMeeting" class="form-control" placeholder="thirdMeeting">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection