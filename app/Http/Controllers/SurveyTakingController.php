<?php

namespace App\Http\Controllers;

use App\Models\Survey_Taking;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Section;

class SurveyTakingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function getUser(){
        $user = User::get();
        return response()->json($user);
    }
     public function getSection(){
         $section = Section::get();
        return response()->json($section);
    }
     public function getCategory(){
        $category = Category::get();
        return response()->json($category); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Survey_Taking  $survey_Taking
     * @return \Illuminate\Http\Response
     */
    public function show(Survey_Taking $survey_Taking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Survey_Taking  $survey_Taking
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey_Taking $survey_Taking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Survey_Taking  $survey_Taking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey_Taking $survey_Taking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Survey_Taking  $survey_Taking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey_Taking $survey_Taking)
    {
        //
    }
}
