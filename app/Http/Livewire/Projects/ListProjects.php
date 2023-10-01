<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Livewire\Component;


class ListProjects extends Component
{
    public function render()
    {
        try {
            $projects = Cache::remember('projects', 60, function (){
                return Project::all();
            });
            return view('livewire.projects.list-projects', compact('projects'));
        } catch (QueryException |\Exception $exception)
        {
            Log::channel('human_readable')->error('Failed to get projects',['error' => $exception->getMessage(),
            ]);
        }

    }
}
