<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewFormRequest;
use App\Models\Project;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index(Project $project)
    {
        $reviews = $project->reviews();
        return view('reviews.index', compact('reviews'));
    }


    public function create()
    {
        //
    }
    public function showForm($token)
    {
        $project = Project::where('token', $token)->firstOrFail();
        return view('reviews.form', compact('project'));
    }

    public function submitForm(Request $request, $token)
    {
        $project = Project::where('token', $token)->firstOrFail();

        $validated = $request->validate([
            'name' => 'required',
            'comment' => 'required',
        ]);

        $review = new Review($validated);
        $project->reviews()->save($review);

        return redirect()->route('thank-you');
    }


    public function store(ReviewFormRequest $request, Project $project)
    {
//        $review = new Review($validated);
        //$project->reviews()->save($review);

        return redirect()->back()->with('success', 'Review added!');
    }



    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
