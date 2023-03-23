@extends('layouts.app')

@section('content')

    <h2>Education Details</h2>
    <form action="{{ route('skill.update', $skill) }}" method="POST">
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
            <label class="form-label">Skill</label>
            <input type="text" class="form-control" value="{{$skill->name}}" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Rating out of 5 (if applicable)</label>
            <input type="text" class="form-control" value="{{$skill->rating}}" name="rating">
        </div>
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>

@endsection
