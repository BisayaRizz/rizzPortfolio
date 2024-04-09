@extends('layouts.app')
  
@section('title', 'Edit Seminar')
  
@section('contents')
    <h1 class="mb-0">Edit Seminar</h1>
    <hr />
    <form action="{{ route('seminars.update', $seminar->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">firstMeeting</label>
                <input type="text" name="firstMeeting" class="form-control" placeholder="firstMeeting" value="{{ $seminar->firstMeeting }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">secondMeeting</label>
                <input type="text" name="secondMeeting" class="form-control" placeholder="secondMeeting" value="{{ $seminar->secondMeeting }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">thirdMeeting</label>
                <input type="text" name="thirdMeeting" class="form-control" placeholder="thirdMeeting" value="{{ $seminar->thirdMeeting }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection