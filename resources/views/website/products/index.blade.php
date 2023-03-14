@extends('website.layouts.master')
@section('content')
    <section class="header">
        <div class="container text-center">
            <h2>منتجاتنا</h2>
        </div>
    </section>
    <!--end header section-->
    <!--start projects section-->
    <div class="container">

        <section class="gallery" id="gallery">
            <div class="container" data-aos="zoom-in" data-aos-duration="2000">

                <div class="row">
                    @foreach ($products as  $product)
                        <div class="col-lg-4 col-md-6 col-sm-12 gallery-card sites mt-5">
                            <div class="gallery-card sites">
                                <div class="galleryCard-head">
                                    <p class="p-1 m-0">{{$product->type}}</p>
                                </div>
                                <div class="image">

                                    <img src="{{$product->image_path}}" alt="gallery-1" class="img-fluid">
                                    <div class="overlay">
                                        <a href="{{route('products.show',$product->id)}}">للتفاصيل </a>
                                    </div>
                                </div>
                                <div class="galleryCard-footer">
                                    <p class="p-1 m-0">{{$product->desc}} </p>

                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
    </div>
@endsection
