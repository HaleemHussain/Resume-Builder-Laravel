@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">{{ __('Welcome') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <img src="{{asset('img/resumeirl.jpg')}}" class="img-fluid border rounded-3 shadow-lg mb-4"
                     alt="Example image" width="100%" height="500" loading="lazy">
            <div>
                <h3>Make a resume that wins interviews</h3>
                {{ __('Use our resume maker with its advanced creation tools to tell a professional story that engages recruiters, hiring managers and even CEOs.') }}
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="{{ route('user-detail.create') }}" class="btn btn-primary btn-lg px-4 me-sm-3">Get Started</a>
                </div>
            </div>
        </div>
    </div>

@endsection
