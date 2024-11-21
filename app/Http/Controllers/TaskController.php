<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
       $tasks =Task::get();
       return response()->json([
        'tasks' => $tasks
       ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $task =Task::create([
            'title' => $data['title'],
            'description' => $data['description']
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::find($id);
    
    return response()->json($task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $task = Task::find($id);
        $task->update([
            'title' => $data['title'],
            'description' => $data['description']
        ]);
        return response()->json($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task =Task::find($id);
        $task->delete();
        return response()->json('success');
    }
}
