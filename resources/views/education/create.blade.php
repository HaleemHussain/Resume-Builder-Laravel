@extends('layouts.app')

@section('content')

    <h2>Education Details</h2>
    <form action="{{ route('education.store') }}" method="POST">
        @csrf
        @if(session()->has('errors'))
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $e)
                    <p>{{$e}}</p>
                @endforeach
            </div>
        @endif
        <div class="mb-3">
            <label class="form-label">School Name</label>
            <input type="text" class="form-control" name="school_name">
        </div>
        <div class="mb-3">
            <label class="form-label">School Location</label>
            <input type="text" class="form-control" name="school_location">
        </div>
        <div class="mb-3">
            <label class="form-label">Degree</label>
            <input type="text" class="form-control" name="degree">
        </div>
        <div class="mb-3">
            <label class="form-label">Field Of Study</label>
            <input type="text" class="form-control" name="field_of_study">
        </div>
        <div class="mb-3">
            <label class="form-label">Graduation Start Date</label>
            <input type="date" class="form-control" name="graduation_start_date">
        </div>
        <div class="mb-3">
            <label class="form-label">Graduation End Date</label>
            <input type="date" class="form-control" name="graduation_end_date">
        </div>
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>

@endsection
