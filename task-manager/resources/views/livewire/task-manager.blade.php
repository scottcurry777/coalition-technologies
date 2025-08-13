<div class="shadow-xl rounded p-10 w-[40%] mx-auto">
    <label class="block mb-2 mt-3 text-sm font-medium text-gray-900 dark:text-white">Filter by Project</label>
    <select wire:model.change="project"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    >
        <option selected></option>
        @foreach ($projects as $project)
            <option value="{{ $project->id }}" @if (old('project_id') == $project->id) selected @endif>{{ $project->name }}</option>
        @endforeach
    </select>

    <ul wire:sortable="updateTaskOrder">
        @foreach ($tasks as $task)
            <li wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}" class="flex justify-between">
                <div wire:sortable.handle class="my-4 w-full p-2 flex justify-between p-3 cursor-pointer">
                    <div>
                        <span class="flex font-bold">{{ $task->name }}</span>
                        <span class="flex italic">{{ $task->project->name }}</span>
                    </div>
                    <div>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="flex bg-blue-500 text-white font-bold py-1 px-2 rounded justify-center">Edit</a>
                        <button wire:click="removeTask({{ $task->id }})" class="flex mt-1 bg-red-500 text-white font-bold py-1 px-2 rounded justify-center">Remove</button>
                    </div>
                </div>
            </li>
            <hr>
        @endforeach
    </ul>

    <div class="text-center mt-5 pt-5">
        <a href="{{ route('tasks.create') }}" class="bg-green-700 text-white font-bold py-2 px-4 rounded">Create Task</a>
    </div>
</div>
