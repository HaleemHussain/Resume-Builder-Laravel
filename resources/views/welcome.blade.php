@extends('layouts.homeapp')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-5 fw-bold">Only 2% of resumes make it past the first round. Be in the top 2%</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Use professional field-tested resume templates that follow the exact
                ‘resume rules’ employers look for. Easy to use and done within minutes - try now for
                free!</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <a href="/home" class="btn btn-primary btn-lg px-4 me-sm-3">Create My Resume</a>
            </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="{{asset('img/resume.jpg')}}" class="img-fluid border rounded-3 shadow-lg mb-4"
                     alt="Example image" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>

@endsection
