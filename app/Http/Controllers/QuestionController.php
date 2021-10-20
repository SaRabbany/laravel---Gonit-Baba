<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\question;
use App\Models\questionHasCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    // find question where mycategoryId == Question_category_id match;

        if(!Auth::check()){
            $allQuestions = question::all();
            return $allQuestions;
        } else{

            $allQuestions = question::all();



        }


        return view('question.index',compact('allQuestions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        return view('question.addQuestion', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);


        $question = new question;

        if(!Auth::check()){
            $question->user_id = null;
        }else{
            $question->user_id = auth()->user()->id;
        }

        if(!is_null($request->image)){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imagefullName = time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('images/question'), $imagefullName);

            // have to resize the image ration and size
            $question->image = $imagefullName;

        }



       $question->title = $request->title;
       $question->description = $request->description;

       $allCategories = $request->category;

        return $allCategories;
        foreach ($allCategories as $singleCategory) {

           dd(gettype($singleCategory));

            $questionHasCategory = new questionHasCategory;
            $questionHasCategory->question_id = $question->id;
            $questionHasCategory->category_id = $singleCategory->id;
            $questionHasCategory->save();
        }



       $question->save();

       return redirect()->back()->withSucess('Question Placed, We Will Ensure Your Best Answer');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(question $question)
    {
        //
    }
}
