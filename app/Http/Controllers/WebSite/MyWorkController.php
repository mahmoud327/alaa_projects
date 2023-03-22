<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\CustomerReview;
use App\Models\Mywork;
use App\Models\MyWorkCategory;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Telegram\Bot\Laravel\Facades\Telegram;

class MyWorkController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_works = MyWork::latest()->paginate(10);
        $categories = MyWorkCategory::latest()->get();
        $customer_reviews = CustomerReview::latest()->take(6)->get();
        return view('website.my_works.index', compact('my_works','categories','customer_reviews'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $my_work = Mywork::find($id);

        return view('website.my_works.show', compact('my_work'));



    }
}
