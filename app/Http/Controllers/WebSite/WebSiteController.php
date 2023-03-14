<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Requests\Website\ContactUsRequest;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CustomerReview;
use App\Models\MyWork;
use App\Models\Product;
use Illuminate\Http\Request;


class WebSiteController extends Controller
{
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

        $customer_reviews = CustomerReview::query()
            ->take(6)
            ->latest()
            ->get();


        return view('website.home-page', compact('nationalities', 'blogs','products','my_works','customer_reviews'));
    }

    public function ourServices()
    {
        return view('website.our-services');
    }
    public function aboutUs()
    {
        return view('website.about-us');
    }


}
