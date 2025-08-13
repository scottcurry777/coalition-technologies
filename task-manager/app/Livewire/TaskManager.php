<?php

namespace App\Livewire;

use App\Models\Project;
use App\Models\Task;
use Illuminate\View\View;
use Livewire\Component;

class TaskManager extends Component
{
    public $project;

    public function updateTaskOrder($tasks)
    {
        foreach ($tasks as $task) {
            Task::find($task['value'])->update(['priority' => $task['order']]);
        }
    }

    public function removeTask($id)
    {
        Task::find($id)->delete();
    }

    public function render(): View
    {
        if ($this->project) {
            $tasks = Task::query()->where('project_id', $this->project)->orderBy('priority')->get();
        } else {
            $tasks = Task::query()->orderBy('priority')->get();
        }

        $projects = Project::all();

        return view('livewire.task-manager', [
            'tasks' => $tasks,
            'projects' => $projects,
        ]);
    }
}
