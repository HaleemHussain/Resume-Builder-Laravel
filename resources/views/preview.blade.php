@extends('layouts.app')

@section('content')

    <iframe src="{{route('resume.index')}}" width="100%" height="350%"></iframe>

    <div class="m-2">
        <a class="btn btn-primary" href="{{ route('skill.index') }}" role="button">Back to skills</a>
        <a class="btn btn-primary float-end" href="{{route('resume.download')}}" role="button">Download</a>
    </div>

@endsection
