<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tasks =Task::latest()->paginate(10);
        return view('admin.tasks.index', compact ('tasks'));
    }

    //create
    public function create()
    {
        return view('admin.tasks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' =>['nullable', 'string'],
            'due_date' =>['nullable', 'date'] 
        ]);

        Task::create($validated);
        return redirect()->route('admin.tasks.index');
    }

    //read
    public function show (Task $task)
    {
        return view ('admin.tasks.show', compact ('task'));
    }
    
    public function edit ()
    {
        return view ('admin.tasks.edit', compact ('task'));
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' =>['nullable', 'string'],
            'due_date' =>['nullable', 'date'] 
        ]);

        $task->update($validated);
        return redirect()->route('admin.tasks.index');
    }

    public function destroy (Task $task)
    {
        $task->delete();
        return redirect()->route('admin.tasks.index');
    }
}
