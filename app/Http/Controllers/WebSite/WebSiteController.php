<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Requests\Website\ContactUsRequest;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CustomerReview;
use App\Models\Job;
use App\Models\MyTeam;
use App\Models\MyWork;
use App\Models\MyWorkCategory;
use App\Models\Product;
use App\Models\UserRequestService;
use App\Models\UserRequesttService;
use App\Services\CategoryService;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;


class WebSiteController extends Controller
{
    use ImageTrait;
    public function home()
    {

        $nationalities = Blog::all();
        $blogs = Blog::query()
            ->take(6)
            ->latest()
            ->get();
        $products = Product::query()
            ->take(6)
            ->latest()
            ->get();
        $my_works = MyWork::query()
            ->take(6)
            ->latest()
            ->get();

        $categories = MyWorkCategory::query()
            ->latest()
            ->get();

        $customer_reviews = CustomerReview::query()
            ->take(6)
            ->latest()
            ->get();


        return view('website.home-page', compact('nationalities', 'blogs', 'products', 'my_works', 'customer_reviews','categories'));
    }

    public function ourServices()
    {
        $categories = MyWorkCategory::query()
        ->latest()
        ->get();

        return view('website.our-services',compact('categories'));
    }
    public function job()
    {
        return view('website.job');
    }

    public function saveJob(Request $request)
    {
        $job =  Job::create($request->all());
        $path = $this->uploadFile('uploads/jobs', $request->file('cv'));
        $job->update(['cv' => $path]);
        return back();
    }
    public function serviceRequest(Request $request)
    {
        dd($request->all());
        return $request;
        UserRequestService::create($request->all());

        return back();
    }
    public function aboutUs()
    {
        $teams = MyTeam::query()
        ->take(6)
        ->latest()
        ->get();

        return view('website.about-us',compact('teams'));
    }
}
