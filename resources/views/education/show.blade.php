@extends('layouts.app')
  
@section('title', 'Show Education')
  
@section('contents')
    <h1 class="mb-0">Detail Education</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Elementary</label>
            <input type="text" name="elementary" class="form-control" placeholder="Elementary" value="{{ $education->elementary }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Highschool</label>
            <input type="text" name="highschool" class="form-control" placeholder="Highschool" value="{{ $education->highschool }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Seniorhigh</label>
            <input type="text" name="seniorhigh" class="form-control" placeholder="Seniorhigh" value="{{ $education->seniorhigh }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">College</label>
            <input type="text" name="college" class="form-control" placeholder="College" value="{{ $education->college }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $education->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $education->updated_at }}" readonly>
        </div>
    </div>
@endsection