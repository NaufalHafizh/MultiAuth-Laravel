<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class Home extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('admin')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [

            'title' => "home",
            'project' => Project::all()
        ];

        return view('Home.home', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [

            'title' => "Create | Home",
        ];

        return view('Home.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([

            'nama_project' => 'required|min:5',
            'keterangan' => 'required|min:5'
        ]);

        $validate['status'] = 1;
        Project::create($validate);

        return redirect('/home')->with('finish', "data berhasil di tambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $home)
    {
        $data = [

            'title' => 'Detail | Home',
            'show' => $home
        ];

        return view('Home.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $home)
    {
        $data = [

            'title' => "Edit | Home",
            'edit' => $home
        ];

        return view('Home.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $home)
    {
        $validate = $request->validate([

            'nama_project' => 'required|min:5',
            'keterangan' => 'required|min:5',
            'status' => 'required'
        ]);

        Project::where('id', $home->id)->update($validate);
        return redirect('/home')->with('finish', "data berhasil di edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $home)
    {
        Project::destroy($home->id);
        return redirect('/home')->with('finish', "data berhasil di hapus");
    }
}
