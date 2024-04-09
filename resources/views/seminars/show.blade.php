@extends('layouts.app')
  
@section('title', 'Show Seminars')
  
@section('contents')
    <h1 class="mb-0">Detail Seminars</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">firstMeeting</label>
            <input type="text" name="firstMeeting" class="form-control" placeholder="fristMeeting" value="{{ $seminar->firstMeeting }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">secondMeeting</label>
            <input type="text" name="secondMeeting" class="form-control" placeholder="secondMeeting" value="{{ $seminar->secondMeeting }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">thirdMeeting</label>
            <input type="text" name="thirdMeeting" class="form-control" placeholder="thirdMeeting" value="{{ $seminar->thirdMeeting }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $seminar->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $seminar->updated_at }}" readonly>
        </div>
    </div>
@endsection