<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TaskResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'       => $this->id,
            'name'     => $this->name,
            'priority' => $this->priority,
            'order'    => $this->order,
            $this->mergeWhen($request->route()->getName() == 'tasks.show', [
                'project' => new ProjectResource($this->project)
            ])
        ];
    }
}