@extends('layouts.app')

@section('content')

    <h2>Education Details</h2>
    <form action="{{ route('experience.update', $experience) }}" method="POST">
        @csrf
        @method('PUT')
        @if(session()->has('errors'))
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $e)
                    <p>{{$e}}</p>
                @endforeach
            </div>
        @endif
        <div class="mb-3">
            <label class="form-label">Job Title</label>
            <input type="text" class="form-control" value="{{$experience->job_title}}" name="job_title">
        </div>
        <div class="mb-3">
            <label class="form-label">Employer</label>
            <input type="text" class="form-control" value="{{$experience->employer}}" name="employer">
        </div>
        <div class="mb-3">
            <label class="form-label">City</label>
            <input type="text" class="form-control" value="{{$experience->city}}" name="city">
        </div>
        <div class="mb-3">
            <label class="form-label">State</label>
            <input type="text" class="form-control" value="{{$experience->state}}" name="state">
        </div>
        <div class="mb-3">
            <label class="form-label">Start Date</label>
            <input type="date" class="form-control" value="{{$experience->start_date}}" name="start_date">
        </div>
        <div class="mb-3">
            <label class="form-label">End Date</label>
            <input type="date" class="form-control" value="{{$experience->end_date}}" name="end_date">
        </div>
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>

@endsection
