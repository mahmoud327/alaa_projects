@extends('website.layouts.master')
@section('content')
    <!--end navbar section-->
    <!--start header section-->
    <section class="header">
        <div class="container text-center">
            <h2>أعمالنا</h2>
        </div>
    </section>
    <!--end header section-->
    <!--start gallery section-->
    <section class="gallery" id="gallery">
        <div class="container" data-aos="zoom-in" data-aos-duration="2000">
            <form action="{{ route('my-works.index') }}">

                <!-- <h2>بعض النماذج من اعمالنا الرائعة</h2> -->
                <select class="list-unstyled head" name="cat">
                    <li class="active" data-class="all">الكل</li>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}"  data-class=".sites">{{ $cat->title }} </option>
                    @endforeach


                </select>
                <div class="row">
                    @foreach ($my_works as $my_work)
                        <div class="col-lg-4 col-md-6 col-sm-12 gallery-card sites mt-5">
                            <div class="gallery-card sites">
                                <div class="galleryCard-head">
                                    <p class="p-1 m-0">{{ optional($my_work->category)->title }}</p>
                                </div>
                                <div class="image">

                                    <img src="{{ $my_work->image_path }}" alt="gallery-1" class="img-fluid">
                                    <div class="overlay">
                                        <a href="{{ route('my-works.show', $my_work->id) }}">للتفاصيل </a>
                                    </div>
                                </div>
                                <div class="galleryCard-footer">
                                    <p class="p-1 m-0">{{ $my_work->desc }} </p>

                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </form>
        </div>
    </section>
    <!--end gallery section-->
    <!--start testimonials section-->
    <section class="testimonials mt-4">
        <!-- <svg class="t_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#64B1E7" fill-opacity="1" d="M0,320L1440,0L1440,0L0,0Z"></path>
                </svg> -->
        <div class="container text-center">
            <h2>أراء عملائنا</h2>
            <!-- Swiper -->
            <div class="swiper mySwiper8">
                <div class="swiper-wrapper">
                    @foreach ($customer_reviews as $customer_review)
                        <div class="swiper-slide">
                            <div class="card w-100">
                                <img src="{{ $customer_review->image_path }}" alt="quote" class="img-fluid">
                                <h3>{{ $customer_review->user_name }}</h3>
                                <span> {{ $customer_review->job }}</span>
                                <p>
                                    {{ $customer_review->desc }}

                                </p>

                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        let swiper8 = new Swiper(".mySwiper8", {
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endpush
