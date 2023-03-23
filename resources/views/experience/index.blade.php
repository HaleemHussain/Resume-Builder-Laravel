@extends('layouts.app')

@section('content')

    <h2>Work Summary</h2>
    @foreach($experience as $e)
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="card-title">{{$e->job_title}} ({{$e->start_date}} to {{$e->end_date}})</h4>
                <ul>
                    <li>{{$e->employer}}</li>
                    <li>{{$e->city}}</li>
                    <li>{{$e->state}}</li>
                </ul>
                <a href="{{ route('experience.edit', $e) }}" type="button" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('experience.destroy', $e) }}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                </form>
            </div>
        </div>
    @endforeach

    <div class="m-2">
        <a class="btn btn-primary" href="{{ route('experience.create') }}" role="button">Add Another Employment</a>
        <a class="btn btn-primary float-end" href="{{ route('skill.create') }}" role="button">Add Skills</a>
    </div>

@endsection
