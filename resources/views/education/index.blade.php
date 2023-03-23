@extends('layouts.app')

@section('content')

    <h2>Education Summary</h2>
    @foreach($education as $e)
        <div class="card mt-2">
            <div class="card-body">
                <h4 class="card-title">{{$e->degree}} {{$e->field_of_study}} at {{$e->school_name}}
                    ({{$e->graduation_start_date}}
                    - {{$e->graduation_end_date}})</h4>
                <a href="{{ route('education.edit', $e) }}" type="button" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('education.destroy', $e) }}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                </form>
            </div>
        </div>
    @endforeach

    <div class="m-2">
        <a class="btn btn-primary" href="{{ route('education.create') }}" role="button">Add Another Education</a>
        <a class="btn btn-primary float-end" href="{{ route('experience.create') }}" role="button">Add Employment History</a>
    </div>

@endsection
