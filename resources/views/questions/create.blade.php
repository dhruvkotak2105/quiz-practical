@extends('layouts.app')

@section('title', 'Create Question')

@section('content')
<h3>Create New Question</h3>

<form action="{{ route('questions.store') }}" method="POST">
    @csrf
    <div>
        <label for="question_text">Question Text:</label>
        <input type="text" id="question_text" name="question_text" placeholder="Enter your question here" required>
    </div>

    <div>
        <label for="time_limit">Time Limit (seconds):</label>
        <input type="number" id="time_limit" name="time_limit" placeholder="Enter time limit in seconds" min="1">
    </div>

    <button type="submit">Submit</button>
</form>
@endsection