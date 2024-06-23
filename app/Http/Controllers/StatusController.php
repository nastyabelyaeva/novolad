<?php

namespace App\Http\Controllers;

use App\Models\Status;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $statuses = Status::get();
        return view('statuses.index',['statuses'=>$statuses]);
    }

    public function create()
    {
        $statuses = Status::all();
        return view('statuses.create', ['statuses'=>$statuses]);
    }

    public function store(Request $request)
    {

        $status = Status::create([
            'name' => $request->name,

        ]);
        return redirect()->route('statuses.index');
    }

    public function edit(Status $status)
    {
        $status = Status::find($status->id);
        return view ('statuses.edit', ['status'=>$status]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status)
    {
        $img = $request->img;
            $imgName = $img->getClientOriginalName();
            $img->move(public_path() . '/img', $imgName);
            $img_path = 'img/'.$imgName;


        $status = Status::find($status->id);
        $status->name = $request->name;
        $status->img_path = $img_path;

        $status->save();

        return redirect()->route('statuses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        $status = Status::find($status->id);
        $status->delete();
        return redirect()->route('statuses.index');
    }
    public function show(Status $status)
    {
        $status = Status::find($status->id);
        return view('statuses.show', ['status'=>$status]);
    }

}
