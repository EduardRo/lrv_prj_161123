<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Task;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\TaskResource;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return all tasks we have
        //return Task::all();
        return TaskResource::collection((Task::all()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /* We don't need this function because we use an api - 
        this function was used to call the introduction for or something similar
        */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $task = Task::create($request->validated());
        return TaskResource::make($task);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return TaskResource::make($task);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        // modify with UpdateTaskRequest
        $task->update($request->validated());
        return TaskResource::make($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
        $task->delete();
        return response()->noContent();
    }
}
