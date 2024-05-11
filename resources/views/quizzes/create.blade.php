@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create New Quiz') }}</div>

                <div class="card-body">
                    <form action="{{ route('quizzes.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="quiz_name">{{ __('Quiz Name') }}</label>
                            <input type="text" id="quiz_name" name="quiz_name" class="form-control" placeholder="{{ __('Enter Quiz Name') }}" required>
                        </div>

                       <div class="form-group">
                            <label for="questions">{{ __('Select Questions') }}</label>
                            <select id="questions" name="questions[]" class="form-control select2" multiple required>
                                @foreach ($questions as $question)
                                    <option value="{{ $question->id }}">{{ $question->question_text }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Add more fields as needed -->

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
