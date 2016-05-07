<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Request;
use App\Models\Question;
use Response;

class QuestionController extends AppBaseController
{
    /**
     * Display a listing of the Question.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $questions = Question::all();

        return view('questions.index')
            ->with('questions', $questions);
    }

    /**
     * Show the form for creating a new Question.
     *
     * @return Response
     */
    public function create()
    {
        $job = $this->job();
        return view('questions.create')
                  ->with('jobs', $job);
    }

    /**
     * Store a newly created Question in storage.
     *
     * @param CreateQuestionRequest $request
     *
     * @return Response
     */
    public function store()
    {
        Question::create(Request::all());

        \Session::flash('success','Question saved successfully.');

        return redirect(route('questions.index'));
    }

    /**
     * Display the specified Question.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $question = Question::find($id);

        if (empty($question)) {
            \Session::flash('error','Question not found');

            return redirect(route('questions.index'));
        }

        return view('questions.show')->with('question', $question);
    }

    /**
     * Show the form for editing the specified Question.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $question = Question::find($id);
        $job = $this->job();
        if (empty($question)) {
            \Session::flash('error','Question not found');

            return redirect(route('questions.index'));
        }

        return view('questions.edit')->with('question', $question)
                                  ->with('jobs', $job);
    }

    /**
     * Update the specified Question in storage.
     *
     * @param  int              $id
     * @param UpdateQuestionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuestionRequest $request)
    {
        $question = Question::find($id);

        if (empty($question)) {
            \Session::flash('error','Question not found');

            return redirect(route('questions.index'));
        }

        $question = Question::update(Request::all());

        \Session::flash('success','Question updated successfully.');

        return redirect(route('questions.index'));
    }

    /**
     * Remove the specified Question from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);

        if (empty($question)) {
            \Session::flash('error','Question not found');

            return redirect(route('questions.index'));
        }

        $question->delete();

        \Session::flash('success','Question deleted successfully.');

        return redirect(route('questions.index'));
    }
}
