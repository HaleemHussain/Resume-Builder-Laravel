@extends('layouts.app')

@section('content')

    <h2>My Skills</h2>
    @foreach($skill as $e)
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="card-title">{{$e->name}} {{$e->rating}}/5 </h4>
                <a href="{{ route('skill.edit', $e) }}" type="button" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('skill.destroy', $e) }}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                </form>
            </div>
        </div>
    @endforeach

    <div class="m-2">
        <a class="btn btn-primary" href="{{ route('skill.create') }}" role="button">Add Another skill</a>
        <a class="btn btn-primary float-end" href="{{ route('preview') }}" role="button">Preview</a>
    </div>

@endsection
