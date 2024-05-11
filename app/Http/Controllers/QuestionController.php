<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'question_text' => 'required|string',
            'time_limit' => 'nullable|integer|min:1',
        ]);

        $questionData = [
            'question_text' => $validatedData['question_text'],
            'time_limit' => $validatedData['time_limit'] ?? null,
        ];

        Question::create($questionData);

        return redirect()->route('home')->with('success', 'Question created successfully.');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    // public function editTime(Question $question)
    // {
    //     return view('questions.edit_time', compact('question'));
    // }

    // public function updateTime(Request $request, Question $question)
    // {
    //     $validatedData = $request->validate([
    //         'time_limit' => 'required|integer|min:1', // Assuming time_limit is in seconds
    //     ]);

    //     $question->update(['time_limit' => $validatedData['time_limit']]);

    //     return redirect()->route('questions.index')->with('success', 'Time for question updated successfully.');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $validatedData = $request->validate([
            'question_text' => 'required|string',
            'time_limit' => 'nullable|integer|min:1',
        ]);
    
        $question->update([
            'question_text' => $validatedData['question_text'],
            'time_limit' => $validatedData['time_limit'],
        ]);
    
        return redirect()->route('home')->with('success', 'Question updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('questions.index')->with('success', 'Question deleted successfully.');
    }
}
