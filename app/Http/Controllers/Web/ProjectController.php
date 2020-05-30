<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ProjectController extends Controller
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
        $this->directory = 'projects';
    }

    /**
     * Display the listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->directory . '.' . __FUNCTION__);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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