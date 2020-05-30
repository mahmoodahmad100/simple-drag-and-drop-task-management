<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_id', 'name', 'priority', 'order',
    ];

    /**
     * get the project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    /**
     * set the preject id.
     *
     * @param int $value
     * @return void
     */
    public function setProjectIdAttribute($value)
    {
        $this->attributes['project_id'] = $value ?? $this->project_id;
    }

    /**
     * get the orderd tasks.
     *
     * @return $this
     */
    public function all_orderd_tasks()
    {
        return $this->orderByRaw("FIELD(priority, 'high', 'medium', 'low')")->orderBy('order')->get();
    }

    /**
     * re order the tasks.
     *
     * @param array $ids
     * @return boolean
     */
    public static function reorder($ids)
    {
        $is_orderd = false;
        foreach ($ids as $key => $value) 
        {
            (static::find($value))->update([
                'order' => $key + 1
            ]);

            if(sizeof($ids) == $key + 1)
                $is_orderd = true;
        }
        return $is_orderd;
    }

    /**
     * set the name.
     *
     * @param string $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value ?? $this->name;
    }

    /**
     * set the priority.
     *
     * @param string $value
     * @return void
     */
    public function setPriorityAttribute($value)
    {
        $this->attributes['priority'] = $value ?? $this->priority;
    }

    /**
     * set the order.
     *
     * @param int $value
     * @return void
     */
    public function setOrderAttribute($value)
    {
        $this->attributes['order'] = $value ?? $this->order;
    }
}
