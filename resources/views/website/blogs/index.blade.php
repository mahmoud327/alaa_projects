@extends('website.layouts.master')
@section('content')
    <!--start navbar section-->

    <!--end navbar section-->
    <!--start header section-->
    <section class="header">
        <div class="container text-center">
            <h2>مدونتنا</h2>
        </div>
    </section>
    <!--end header section-->
    <!--start blog section-->
    <section class="blog contact p-0">
        <div class="container">
            <h4 class="text-center fw-bold">
                مقالات تعليمية في جميع مجالات التقنية والبرمجة وعلوم الحاسب وكل ما يخص المبرمجين
                والمصممين
            </h4>
            <div class="row gallery ">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-12 detels">
                        <div class="gallery-card sites">
                            <div class="">
                                <div class="galleryCard-head">
                                    <ul class="list-unstyled d-flex justify-content-between  px-2 m-0">
                                        <li>
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span>{{ $blog->created_at->format('Y-m-d')}}</span>
                                        </li>
                                        <li><i class="fa-solid fa-eye"></i> <span>{{ $blog->blog_views()->count() }}</span></li>
                                    </ul>
                                </div>
                                <div class="image">

                                    <img src="{{$blog->image_path}}" alt="gallery-1" class="img-fluid">
                                    <div class="overlay">
                                        <a href="{{route('blogs.show',$blog->id)}}">للتفاصيل </a>
                                    </div>
                                </div>
                                <div class="galleryCard-footer">
                                    <p class="p-1 m-0">    {{$blog->title}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
    </section>
@endsection
