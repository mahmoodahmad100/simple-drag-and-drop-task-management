<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest as MainRequest;
use App\Http\Resources\ProjectResource as Resource;
use App\Models\Project as Model;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param object $project
     * @return \Illuminate\Http\Response
     */
    public function index(Model $project)
    {
        return Resource::collection($project->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param object $project
     * @return \Illuminate\Http\Response
     */
    public function store(MainRequest $request, Model $project)
    {
        return $project->create([
            'name'        => $request->name,
            'description' => $request->description
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param object $project
     * @return \Illuminate\Http\Response
     */
    public function show(Model $project)
    {
        return new Resource($project);
    }

    /**
     * update a resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param object $project
     * @return \Illuminate\Http\Response
     */
    public function update(MainRequest $request, Model $project)
    {
        $project->update([
            'name'        => $request->name,
            'description' => $request->description
        ]);
        
        return response()->json('successful action.',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param object $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model $project)
    {
        $project->delete();
        return response()->json('successful action.',204);
    }
}