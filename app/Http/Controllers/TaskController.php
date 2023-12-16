<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //$tasks = Task::latest()->get(); 
        $tasks = Task::latest()->paginate(4);
        return view( 'index', ['tasks' => $tasks] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'status'=>'required'
            ]);

        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success','New Task was created succefully'); //flashMemory
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task): View
    {
        return view( 'edit', [ 'task' => $task ] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task): RedirectResponse
    {
        //dd($request->all());
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'status'=>'required'
            ]);
        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success','New Task was edited succefully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task): RedirectResponse
    {
        //dd($task);
        $task->delete();
        return redirect()->route('tasks.index')->with('success','New Task was deleted succefully');
    }
}
