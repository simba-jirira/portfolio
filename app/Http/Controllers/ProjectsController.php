<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectFormRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class ProjectsController extends Controller
{

    public function index()
    {
        $projects = Cache::remember('projects', 60, function () {
            return Project::all();
        });
        //return view('projects.index', compact('projects'));
        //return view('projects.index', ['projects' => $projects]);
    }


    public function create()
    {
        //
    }


    public function store(ProjectFormRequest $request)
    {
        if ($request->hasFile('image'))
        {
            $path = $request->file('image')->store('project_images', 'public');
            ImageOptimizer::optimize(storage_path("app/public/{$path}"));
            $validated['image'] = $path;
        }
        Project::create($request->all());
//        $project->token = Str::uuid();
//        $project->save();
        return redirect()->route('list-projects')->with('status', 'Project created successfully.');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(ProjectFormRequest $request, Project $project)
    {
        $project->update($request->all());
        return redirect()->route('list-projects')->with('status', 'Project updated successfully.');
    }


    public function destroy($id)
    {
        //
    }
}
