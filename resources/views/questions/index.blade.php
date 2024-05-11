@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Questions List') }}</div>

                <div class="card-body">
                    @if ($questions->isEmpty())
                        <p>No questions found.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Question Text</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($questions as $question)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $question->question_text }}</td>
                                        <td>
                                            <a href="{{ route('questions.edit', $question) }}" class="btn btn-sm btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
