<?php

namespace App\Http\Controllers;
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
        $tasks =Task::latest();
        return view('tasks.index');
    }

    //create
    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' =>['nullable', 'string'],
            'due_date' =>['nullable', 'date'] 
        ]);

        Task::create($validated);
        return redirect()->route('tasks.index');
    }

    //read
    public function show (Task $task)
    {
        return view ('tasks.show', compact ('task'));
    }
    
    public function edit ()
    {
        return view ('tasks.edit', compact ('task'));
    }

    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' =>['nullable', 'string'],
            'due_date' =>['nullable', 'date'] 
        ]);

        $task->update($validated);
        return redirect()->route('tasks.index');
    }

    public function remove (Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
