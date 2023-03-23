@extends('layouts.app')

@section('content')

    <h2>My Details</h2>
        <div class="card mt-2">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h4 class="card-title">Name: {{$details->fullname}}</h4></li>
                    <li class="list-group-item"><h4 class="card-title">Email: {{$details->email}}</h4></li>
                    <li class="list-group-item"><h4 class="card-title">Phone: {{$details->phone}}</h4></li>
                    <li class="list-group-item"><h4 class="card-title">Address: {{$details->address}}</h4></li>
                    <li class="list-group-item"><h4 class="card-title">Personal Summary:  {{$details->summary}}</h4></li>
                </ul>

                <a href="{{ route('user-detail.edit', $details) }}" type="button" class="btn btn-sm btn-primary">Edit</a>

                <form action="{{ route('user-detail.destroy', $details) }}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                </form>
            </div>
        </div>
    <div class="m-2">
        <a class="btn btn-primary" href="{{ route('home') }}" role="button">Back to home</a>
        <a class="btn btn-primary float-end" href="{{ route('education.create') }}" role="button">Add Education</a>
    </div>

@endsection
