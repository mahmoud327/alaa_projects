<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MyTeam;
use App\Models\MyWorkCategory as Category;
use App\Traits\ImageTrait;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MyTeamController extends Controller
{

    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $teams = MyTeam::latest()->paginate(10);


        return view('admin.my-teams.index', compact('teams'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = MyTeam::create($request->all());
        $this->uploadImage('uploads/my-teams', $request->image);

        $team->update(['image' => $request->image->hashName()]);
        return back()->with('status', "add successfully");
    }

    public function update(Request $request, MyTeam $my_team)
    {

        $my_team->update($request->all());

        if ($request->file('image')) {

            $this->uploadImage('uploads/my-teams', $request->image);

            $my_team->update(['image' => $request->image->hashName()]);
        }

        return back()->with('status', "add successfully");
    }

    public function destroy(MyTeam $my_team)
    {
        $my_team->delete();
        return back()->with('status', "deleted successfully");
    }
}
