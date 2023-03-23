@extends('layouts.app')

@section('content')

    <h2>Education Details</h2>
    <form action="{{ route('user-detail.update', $userDetail) }}" method="POST">
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
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" value="{{$userDetail->fullname}}" name="fullname">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" value="{{$userDetail->email}}" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" class="form-control" value="{{$userDetail->phone}}" name="phone">
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" value="{{$userDetail->address}}" name="address">
        </div>
        <div class="mb-3">
            <label class="form-label">Personal Summary</label>
            <textarea class="form-control" name="summary">{{$userDetail->summary}}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>

@endsection
