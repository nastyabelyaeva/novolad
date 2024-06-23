<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $projects = Project::get();
        return view('projects.index',['projects'=>$projects]);
    }

    public function create()
    {
        $projects = Project::all();
        return view('projects.create', ['projects'=>$projects]);
    }

    public function store(Request $request)
    {
        $img = $request->img;
        $imgName = $img->getClientOriginalName();
        $img->move(public_path() . '/img', $imgName);

        $img_path = 'img/'.$imgName;
        $img_path1 = 'img/'.$imgName;
        $img_path2 = 'img/'.$imgName;

        $project = Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'img_path' => $img_path,
            'img_path1' => $img_path1,
            'img_path2' => $img_path2,
        ]);
        return redirect()->route('projects.index');
    }

    public function edit(Project $project)
    {
        $project = Project::find($project->id);
        return view ('projects.edit', ['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $img = $request->img;
        if(is_null($img)) {
            $project = Project::find($project->id);
            $img_path = $project->img_path;
            $img_path1 = $project->img_path1;
            $img_path2 = $project->img_path2;
        } else {
            $imgName = $img->getClientOriginalName();
            $img->move(public_path() . '/img', $imgName);
            $img_path = 'img/'.$imgName;
            $img_path1 = 'img/'.$imgName;
            $img_path2 = 'img/'.$imgName;
        }
        $project = Project::find($project->id);
        $project->name = $request->name;
        $project->price = $request->price;
        $project->img_path = $img_path;
        $project->img_path1 = $img_path1;
        $project->img_path2 = $img_path2;

        $project->save();

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project = Project::find($project->id);
        $project->delete();
        return redirect()->route('projects.index');
    }
    public function show(Project $project)
    {
        $project = Project::find($project->id);
        return view('projects.show', ['project'=>$project]);
    }
}
