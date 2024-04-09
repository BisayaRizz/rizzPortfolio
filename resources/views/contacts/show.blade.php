@extends('layouts.app')
  
@section('title', 'Show Contacts')
  
@section('contents')
    <h1 class="mb-0">Detail Contacts</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $contact->email }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone_no" class="form-control" placeholder="Phone_no" value="{{ $contact->phone_no }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $contact->address }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $contact->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $contact->updated_at }}" readonly>
        </div>
    </div>
@endsection