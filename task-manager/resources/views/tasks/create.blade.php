<x-layout>
    <h1 class="mb-3">Create Task</h1>
    <div>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input id="name" name="name" type="text" value="{{ old('name', '') }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            />

            <label for="project_id" class="block mb-2 mt-3 text-sm font-medium text-gray-900 dark:text-white">Project</label>
            <select id="project_id" name="project_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            >
                <option selected></option>
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}" @if (old('project_id') == $project->id) selected @endif>{{ $project->name }}</option>
                @endforeach
            </select>

            <button type="submit" class="mt-3 bg-blue-500 text-white font-bold py-2 px-4 rounded">Submit</button>

        </form>
    </div>
</x-layout>
