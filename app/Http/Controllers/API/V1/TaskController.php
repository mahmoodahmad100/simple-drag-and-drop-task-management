<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest as MainRequest;
use App\Http\Resources\TaskResource as Resource;
use App\Models\Task as Model;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param object $task
     * @return \Illuminate\Http\Response
     */
    public function index(Model $task)
    {
        return Resource::collection($task->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param object $task
     * @return \Illuminate\Http\Response
     */
    public function store(MainRequest $request, Model $task)
    {
        return $task->create([
            'project_id' => $request->project_id,
            'name'       => $request->name,
            'priority'   => $request->priority
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param object $task
     * @return \Illuminate\Http\Response
     */
    public function show(Model $task)
    {
        return new Resource($task);
    }

    /**
     * update a resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param object $task
     * @return \Illuminate\Http\Response
     */
    public function update(MainRequest $request, Model $task)
    {
        $task->update([
            'project_id' => $request->project_id,
            'name'       => $request->name,
            'priority'   => $request->priority
        ]);
        
        return response()->json('successful action.',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param object $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model $task)
    {
        $task->delete();
        return response()->json('successful action.',204);
    }
}