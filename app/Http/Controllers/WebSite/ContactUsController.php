<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\ContactUs;
use App\Models\UserRequest;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Telegram\Bot\Laravel\Facades\Telegram;

class ContactUsController extends Controller
{

    public function index()
    {

        return view('website.contact-us');
    }
    public function store(Request $request)
    {
        ContactUs::create($request->all());
        return back()->with('sucefuuly send message');
    }
    public function userRequest(Request $request){
        $this->validate($request,[
            'email'=>'required|unique:user_requests,email'
        ]);

        UserRequest::create([
            'email'=>$request->email
        ]);

        return back()->with('status','reuqest send for admin');
    }
}
