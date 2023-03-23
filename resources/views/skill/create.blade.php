@extends('layouts.app')

@section('content')

    <h2>Education Details</h2>
    <form action="{{ route('skill.store') }}" method="POST">
        @csrf
        @if(session()->has('errors'))
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $e)
                    <p>{{$e}}</p>
                @endforeach
            </div>
        @endif
        <div class="mb-3">
            <label class="form-label">Skills</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Rating out of 5 (if applicable)</label>
            <input type="text" class="form-control" name="rating">
        </div>
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>

@endsection
