<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MyWork;
use App\Models\MyWorkCategory;
use App\Models\UserRequestService;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Telegram\Bot\Laravel\Facades\Telegram;

class UserRequestServiceController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = UserRequestService::latest()->paginate(10);

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {

        $categories=MyWorkCategory::latest()->get();

        return view('admin.my_works.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;


        $MyWork = MyWork::create($request->all());

        $this->uploadImage('uploads/my_works', $request->file('image'));
        $MyWork->update(['image' => $request->image->hashName()]);


        session()->flash('Add', 'تم اضافة سجل بنجاح ');
        return redirect(route('admin.my-works.index'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $my_work = MyWork::findOrFail($id);
        $my_work->update($request->except('image'));
        if ($request->file('image')) {
            Storage::disk('my_works')->delete($my_work->image);
            $this->uploadImage('uploads/my_works', $request->file('image'));
            $request['image'] = $request->image->hashName();
        }

        session()->flash('edit', 'تم اضافة سجل بنجاح ');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $my_work = MyWork::find($id);
        if (!is_null($my_work->image)) {
            Storage::disk('MyWork')->delete($my_work->image);
        }

        $my_work->delete();
        session()->flash('delete', 'تم حذف سجل بنجاح ');
        return redirect()->back();
    }
}
