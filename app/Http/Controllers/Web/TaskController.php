<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    /**
     * directory of the view
     *
     * @var string
     */
    private $directory;

    /**
     * setting up
     *
     * @return void
     */
    public function __construct()
    {
        $this->directory = 'tasks';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->directory . '.' . __FUNCTION__);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view($this->directory . '.' . __FUNCTION__);
    }
}