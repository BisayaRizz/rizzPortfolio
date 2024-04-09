@extends('layouts.app')
  
@section('title', 'Show Experience')
  
@section('contents')
    <h1 class="mb-0">Detail Experience</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">firstExp</label>
            <input type="text" name="firstExp" class="form-control" placeholder="fristExp" value="{{ $experience->firstExp }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">secondExp</label>
            <input type="text" name="secondExp" class="form-control" placeholder="secondExp" value="{{ $experience->secondExp }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">thirdExp</label>
            <input type="text" name="thirdExp" class="form-control" placeholder="thirdExp" value="{{ $experience->thirdExp }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">forthExp</label>
            <input type="text" name="forthExp" class="form-control" placeholder="forthExp" value="{{ $experience->forthExp }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $experience->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $experience->updated_at }}" readonly>
        </div>
    </div>
@endsection