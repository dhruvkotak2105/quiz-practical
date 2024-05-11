@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Question') }}</div>

                <div class="card-body">
                    <form action="{{ route('questions.update', $question) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="question_text">Question Text:</label>
                            <input type="text" id="question_text" name="question_text" value="{{ old('question_text', $question->question_text) }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="time_limit">Time Limit (seconds):</label>
                            <input type="number" id="time_limit" name="time_limit" value="{{ old('time_limit', $question->time_limit) }}" class="form-control" min="1">
                        </div>


                        <button type="submit" class="btn btn-primary">Update Question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
