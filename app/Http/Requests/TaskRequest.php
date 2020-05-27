<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method())  {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'project_id' => 'required|integer',
                    'name'       => 'required|max:200',
                    'priority'   => 'required|in:high,medium,low',
                    'order'      => 'required|integer',
                ];
            }
            case 'PUT': {
                return [
                    'project_id' => 'nullable|integer',
                    'name'       => 'nullable|max:200',
                    'priority'   => 'nullable|in:high,medium,low',
                    'order'      => 'nullable|integer',
                ];
            }
            case 'PATCH': {
                return [];
            }
        }
    }
}