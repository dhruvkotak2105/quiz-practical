@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br><br>
                    <a href="{{ route('questions.create') }}" class="btn btn-primary">Create Question</a>

                    <a href="{{ route('questions.index') }}" class="btn btn-primary">Manage Question</a>&nbsp;<br><br>
                    <a href="{{ route('quizzes.create') }}" class="btn btn-primary">Create Quiz</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection