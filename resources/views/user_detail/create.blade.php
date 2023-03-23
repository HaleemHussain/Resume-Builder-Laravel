@extends('layouts.app')

@section('content')
    <h2 class="pt-2 pb-2">Tell Us About Yourself</h2>
    <form action="{{ route('user-detail.store') }}" method="POST">
        @csrf
        @if(session()->has('errors'))
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $e)
                    <p>{{$e}}</p>
                @endforeach
            </div>
        @endif
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" name="fullname">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phone">
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address">
        </div>

        <div class="mb-3">
            <label class="form-label">Personal Summary</label>
            <textarea class="form-control" name="summary"></textarea>
        </div>

        <input type="submit" class="btn btn-primary" value="Submit">
    </form>

@endsection
