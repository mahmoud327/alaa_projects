@extends('website.layouts.master')
@section('content')
    <section class="main">
        <div class="overlay">
            <div class="container" data-aos="zoom-in" data-aos-duration="2000">
                <div class="row"
                    style="justify-content: center;
                        margin: auto;
                        width: 100%;
                        text-align: center;">
                    <div class="col-md-6 col-sm-12">
                        <h1 style="font-weight: bolder;">علاء عزاني للتقنية</h1>
                        <p class="fs-5">شريكك التقني الأول للتحول الرقمي</p>
                        <p class="fs-5">
                            <span style="color: #64b1e7;">
                                مستعد
                            </span>

                            <span class="example-selector"></span>
                        </p>

                    </div>

                </div>
            </div>
        </div>
        <a href="#services" class="scroll_down" id="scroll_down"><i class="fa-solid fa-angle-down"></i></a>

    </section>
    <!--end main section-->
    <!--start services section-->
    <section class="services" id="services">
        <div class="container text-center" data-aos="zoom-in" data-aos-duration="2000">
            <h2>خدماتنا</h2>
            <p class="my-2">
                نقدم لك أفضل الخدمات والحلول الرقمية المتكاملة لتلبي جميع احتياجاتك لنجاح وإنطلاق مشروعك من الصفر
            </p>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 box-services">
                    <div class="card">
                        <img src="{{ asset('website/img/coding.png') }}" alt="web-development" class="img-fluid">
                        <h4> الحلول التقنية</h4>
                        <ul class="list-unstyled">
                            <li> إنشاء المواقع الالكترونية </li>
                            <li>إنشاء المتاجر الإلكترونية</li>
                            <li>تطوير تطبيقات الجوال</li>
                            <li>تطوير برمجيات مخصصة</li>
                            <li>خدمات الحوسبة السحابية</li>
                            <li>حجز النطاق والإستضافة للمواقع</li>
                            <li>الإستشارات التقنية وحلول الأعمال</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 box-services">
                    <div class="card">
                        <img src="{{ asset('website/img/Graphic Design.png') }}" alt="cms" class="img-fluid">
                        <h4> التصميم الجرافيك
</h4>
                        <ul class="list-unstyled">
                            <li>تصميم الهوية البصرية كاملة</li>
                            <li>تصميم الشعار وبطاقة العمل</li>
                            <li>تصميم ملصقات التواصل الاجتماعي</li>
                            <li>تصميم الدعوات والإعلانات ولافتات الويب</li>
                            <li>تصميم صور انفو جرافيك</li>
                            <li>تصميم فيديو موشن جرافيك</li>
                            <li>تصميم نماذج تفاعلية لمواقع وتطبيقات (UI/UX)</li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 box-services">
                    <div class="card">
                        <img src="{{ asset('website/img/digital marketing.png') }}" alt="e-learning" class="img-fluid">
                        <h4> التسويق الالكتروني
</h4>
                        <ul class="list-unstyled">
                            <li>كتابة المحتوي القيم والمقالات</li>
                            <li>تحسين محركات البحث (SEO)</li>
                            <li>التسويق عبر وسائل التواصل الاجتماعي</li>
                            <li>التسويق عبر البريد الإلكتروني</li>
                            <li>الحملات الإعلانية المدفوعة (AD)</li>
                            <li>الفيديو الدعائي</li>
                            <li>خطة تسويق متنوعة</li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- <div class="clip-path"> -->
            <a href="#" data-toggle="modal" data-target="#exampleModal">أطلب الان</a>
            <!-- </div> -->
        </div>
    </section>
    <!--start form modal-->

    <!-- Modal -->

    @include('website.modal_service')
    <!--end form modal-->
    <!--end services section-->
    <!--start why-us section-->
    <section class="why-us">
        <!-- <svg class="t_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                                                                                        <path fill="#64B1E7" fill-opacity="1" d="M0,320L1440,0L1440,0L0,0Z"></path>
                                                                                                    </svg> -->
        <div class="container text-center">
            <h2>لماذا تختارنا</h2>
            <div class="row">
                <div class="col-lg-2 p-2 col-md-3 col-sm-12">
                    <div class="why-us-card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="{{ asset('website/img/whu-us-1.png') }}" alt="why-us-1"class="img-fluid">
                        <p>برمجيات آمنة ومحمية من الثغرات</p>
                    </div>
                </div>
                <div class="col-lg-2 p-2 col-md-3 col-sm-12">
                    <div class="why-us-card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="{{ asset('website/img/whu-us-2.png') }}" alt="why-us-2" class="img-fluid">
                        <p>تصميم متجاوب مع جميع الأجهزة والشاشات</p>
                    </div>
                </div>
                <div class="col-lg-2 p-2 col-md-3 col-sm-12">
                    <div class="why-us-card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="{{ asset('website/img/whu-us-3.png') }}" alt="why-us-3" class="img-fluid">
                        <p>تحسين ظهور موقعك
                            في محركات البحث (SEO)</p>
                    </div>
                </div>
                <div class="col-lg-2 p-2 col-md-3 col-sm-12">
                    <div class="why-us-card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="{{ asset('website/img/whu-us-4.png') }}" alt="why-us-4" class="img-fluid">
                        <p>المرونة في إجراء
                            التعديلات حسب رغبتك</p>
                    </div>
                </div>
                <div class="col-lg-2 p-2 col-md-3 col-sm-12">
                    <div class="why-us-card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="{{ asset('website/img/whu-us-5.png') }}" alt="why-us-5" class="img-fluid">
                        <p>إدارة موقعك مع لوحة تحكم مميزة (cPanel)</p>
                    </div>
                </div>
                <div class="col-lg-2 p-2 col-md-3 col-sm-12">
                    <div class="why-us-card" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="{{ asset('website/img/whu-us-6.png') }}" alt="why-us-6" class="img-fluid">
                        <p>تصاميم عصرية وجذابة تناسب مختلف المجالات</p>
                    </div>
                </div>
                <div class="col-lg-2 p-2 col-md-3 col-sm-12">
                    <div class="why-us-card" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <img src="{{ asset('website/img/whu-us-7.png') }}" alt="why-us-7" class="img-fluid">
                        <p>إمكانية التطوير والتوسع في المستقبل</p>
                    </div>
                </div>
                <div class="col-lg-2 p-2 col-md-3 col-sm-12">
                    <div class="why-us-card" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <img src="{{ asset('website/img/whu-us-8.png') }}" alt="why-us-8" class="img-fluid">
                        <p>سرعة التصفح وسهولة الإستخدام</p>
                    </div>
                </div>
                <div class="col-lg-2 p-2 col-md-3 col-sm-12">
                    <div class="why-us-card" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <img src="{{ asset('website/img/whu-us-9.png') }}" alt="why-us-9" class="img-fluid">
                        <p>الجودة والإحترافية في تقديم الخدمات الرقمية</p>
                    </div>
                </div>
                <div class="col-lg-2 p-2 col-md-3 col-sm-12">
                    <div class="why-us-card" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <img src="{{ asset('website/img/whu-us-10.png') }}" alt="why-us-10" class="img-fluid">
                        <p>جميع الخدمات الرقمية لمشروعك في مكان واحد </p>
                    </div>
                </div>
                <div class="col-lg-2 p-2 col-md-3 col-sm-12">
                    <div class="why-us-card" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <img src="{{ asset('website/img/whu-us-11.png') }}" alt="why-us-11" class="img-fluid">
                        <p>أسعار تنافسية مقابل أعلى جودة </p>
                    </div>
                </div>
                <div class="col-lg-2 p-2 col-md-3 col-sm-12">
                    <div class="why-us-card" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <img src="{{ asset('website/img/whu-us-12.png') }}" alt="why-us-12" class="img-fluid">
                        <p>دعم فني 24/7 لحل أي مشاكل أو أعطال</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!--end why-us section-->
    <!--start works section-->
    <section class="works" id="works">
        <div class="container text-center" data-aos="zoom-in" data-aos-duration="2000">
            <h2>أعمالنا</h2>
            <!-- Swiper -->
            <div class="swiper mySwiper7 gallery" id="gallery">
                <div class="swiper-wrapper">
                    {{-- @foreach ($my_works as $my_work)
                        <div class="swiper-slide ">
                            <div class="gallery-card sites">
                                <div class="">
                                    <div class="galleryCard-head">
                                        <ul class="list-unstyled d-flex justify-content-between  px-2 m-0">
                                            <li>
                                                <i class="fa-solid fa-calendar-days"></i>
                                                <span>{{ $my_work->created_at->format('Y-m-D') }}</span>
                                            </li>
                                            <li><i class="fa-solid fa-eye"></i> <span>3</span></li>
                                        </ul>
                                    </div>
                                    <div class="image">

                                        <img src="{{ $my_work->image_path }}" alt="gallery-1" class="img-fluid">
                                        <div class="overlay">
                                            <a href="{{route('my-works.show',$my_work->id)}}">للتفاصيل </a>
                                        </div>
                                    </div>
                                    <div class="galleryCard-footer">
                                        <p class="p-1 m-0"> {{ $my_work->name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                    @foreach ($my_works as $my_work)
                        <div class="swiper-slide">
                            <div class="gallery-card sites">
                                <div class="">
                                    <div class="galleryCard-head">
                                        <p class="p-1 m-0">{{ $my_work->name }} </p>
                                    </div>
                                    <div class="image">

                                        <img src="{{ $my_work->image_path }}" alt="gallery-1" class="img-fluid">
                                        <div class="overlay">
                                            <a href="{{ route('my-works.show', $my_work->id) }}">للتفاصيل </a>
                                        </div>
                                    </div>
                                    <div class="galleryCard-footer">
                                        <p class="p-1 m-0">
                                            {!! $my_work->desc !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- <div class="clip-path"> -->
            <a href="{{ route('my-works.index') }}">المزيد من الاعمال</a>
            <!-- </div> -->
        </div>
    </section>

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
                                <span class="m-0"> {{ $customer_review->job }}</span>
                                <p>
                                    {!! $customer_review->desc !!}

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


    <section class="works" id="works">
        <div class="container text-center" data-aos="zoom-in" data-aos-duration="2000">
            <h2>منتجاتنا</h2>
            <!-- Swiper -->
            <div class="swiper mySwiper5 gallery" id="gallery">
                <div class="swiper-wrapper">
                    @foreach ($products as $product)
                        <div class="swiper-slide ">
                            <div class="gallery-card sites">
                                <div class="">
                                    <div class="galleryCard-head">
                                        <p class="p-1 m-0">{{ $product->type }} </p>
                                    </div>
                                    <div class="image">

                                        <img src="{{ $product->image_path }}" alt="gallery-1" class="img-fluid">
                                        <div class="overlay">
                                            <a href="{{ route('products.show', $product->id) }}">للتفاصيل </a>
                                        </div>
                                    </div>
                                    <div class="galleryCard-footer">
                                        <p class="p-1 m-0"> {{ $product->name }}</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- <div class="clip-path"> -->
            <a href="{{ route('products.index') }}">المزيد من المنتجات</a>
            <!-- </div> -->
        </div>
    </section>


    <!--end projects section-->
    <!--start partner section-->
    <section class="partner">
        <!-- <svg class="t_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                                                                                        <path fill="#64B1E7" fill-opacity="1" d="M0,320L1440,0L1440,0L0,0Z"></path>
                                                                                                    </svg> -->
        <div class="container text-center">
            <h2>شركاء النجاح</h2>
            <p class="mt-2">عملائنا هم شركاء نجاحنا</p>
            <!-- Swiper -->
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="{{ asset('website/img/quote (1).png') }}" alt="quote" class="img-fluid">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="{{ asset('website/img/quote (1).png') }}" alt="quote" class="img-fluid">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="{{ asset('website/img/quote (1).png') }}" alt="quote" class="img-fluid">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="{{ asset('website/img/quote (1).png') }}" alt="quote" class="img-fluid">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="{{ asset('website/img/quote (1).png') }}" alt="quote" class="img-fluid">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="{{ asset('website/img/quote (1).png') }}" alt="quote" class="img-fluid">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="{{ asset('website/img/quote (1).png') }}" alt="quote" class="img-fluid">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="{{ asset('website/img/quote (1).png') }}" alt="quote" class="img-fluid">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="{{ asset('website/img/quote (1).png') }}" alt="quote" class="img-fluid">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="{{ asset('website/img/quote (1).png') }}" alt="quote" class="img-fluid">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="{{ asset('website/imgs/quote (1).png') }}" alt="quote" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- <svg class="b_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                                                                                        <path fill="#64B1E7" fill-opacity="1" d="M0,320L1440,0L1440,320L0,320Z"></path>
                                                                                                    </svg> -->
    </section>


    <section class="works" id="works">
        <div class="container text-center" data-aos="zoom-in" data-aos-duration="2000">
            <h2>مدونتنا</h2>
            <!-- Swiper -->
            <div class="swiper mySwiper3 gallery" id="gallery">
                <div class="swiper-wrapper">
                    @foreach ($blogs as $blog)
                        <div class="swiper-slide ">
                            <div class="gallery-card sites">
                                <div class="">
                                    <div class="galleryCard-head">
                                        <ul class="list-unstyled d-flex justify-content-between  px-2 m-0">
                                            <li>
                                                <i class="fa-solid fa-calendar-days"></i>
                                                <span>{{ $blog->created_at->format('Y-m-D') }}</span>
                                            </li>
                                            <li><i class="fa-solid fa-eye"></i>
                                                <span>{{ $blog->blog_views()->count() }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="image">

                                        <img src="{{ $blog->image_path }}" alt="gallery-1" class="img-fluid">
                                        <div class="overlay">
                                            <a href="{{ route('blogs.show', $blog->id) }}">للتفاصيل </a>
                                        </div>
                                    </div>
                                    <div class="galleryCard-footer">
                                        <p class="p-1 m-0"> {{ $blog->title }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- <div class="clip-path"> -->
            <a href="{{ route('blogs.index') }}">المزيد من المقالات</a>
            <!-- </div> -->
        </div>
    </section>
@endsection
@push('js')
    <script>
        $('#select').on('change', function() {
            var val = $(this).val()
            if (val == 'برمجة وحلول تقنية') {

                var programming = document.getElementById("programming_select");
                programming.disabled = false;
                var graphics = document.getElementById("graphics_select");
                graphics.disabled = true;
                var marketing = document.getElementById("marketing_select");
                marketing.disabled = true;
                $('#programming').css('display', 'inline')
                $('#graphics').css('display', 'none');
                $('#marketing').css('display', 'none');



            } else if (val == 'تصميم الجرافيك') {
                var programming = document.getElementById("programming_select");
                programming.disabled = true;
                var graphics = document.getElementById("graphics_select");
                graphics.disabled = false;
                var marketing = document.getElementById("marketing_select");
                marketing.disabled = true;
                $('#programming').css('display', 'none')
                $('#graphics').css('display', 'inline');
                $('#marketing').css('display', 'none');

            } else if (val == 'تسويق الكتروني') {
                var programming = document.getElementById("programming_select");
                programming.disabled = true;
                var graphics = document.getElementById("graphics_select");
                graphics.disabled = true;
                var marketing = document.getElementById("marketing_select");
                marketing.disabled = false;
                $('#programming').css('display', 'none');
                $('#graphics').css('display', 'none');
                $('#marketing').css('display', 'inline');

            }
        });
    </script>

    <script type="text/javascript">
        var x = 2;
        var y = 2;
        $(document).on('click', '.add_phone_input', function(e) {
    e.preventDefault();

    var divPhoneInputs = $('.div_phone_inputs');
    var index = divPhoneInputs.children().length + 1;

    var phoneInput = $('<div>' +
        '<div class="form-row">' +
        '<div class="col-md-6 col-sm-12">' +
        '<label for="service">نوع الخدمه</label>' +
        '<select class="custom-select mr-sm-2" name="services[]" id="service' + index + '" required>' +
        '<option value="برمجة وحلول تقنية">برمجة وحلول تقنية</option>' +
        '<option value="تصميم الجرافيك">تصميم الجرافيك</option>' +
        '<option value="تسويق الكتروني">تسويق الكتروني</option>' +
        '</select>' +
        '</div>' +

        '<div class="col-md-6 col-sm-12" id="programming' + index + '">' +
        '<label for="programming_select' + index + '"> خدمه</label>' +
        '<select class="custom-select mr-sm-2" name="type_services[]" id="programming_select' + index + '" required>' +
        '<option value="إنشاء المواقع الالكترونية">إنشاء المواقع الالكترونية</option>' +
        '<option value="إنشاء المتاجر الإلكترونية">إنشاء المتاجر الإلكترونية</option>' +
        '<option value="تطوير تطبيقات الجوال">تطوير تطبيقات الجوال</option>' +
        '<option value="تطوير برمجيات مخصصة">تطوير برمجيات مخصصة</option>' +
        '<option value="خدمات الحوسبة السحابية">خدمات الحوسبة السحابية</option>' +
        '<option value="حجز النطاق والإستضافة للمواقع">حجز النطاق والإستضافة للمواقع</option>' +
        '<option value="الإستشارات التقنية وحلول الأعمال">الإستشارات التقنية وحلول الأعمال</option>' +
        '<option value="اخرى">اخرى</option>' +
        '</select>' +
        '</div>' +

        '<div class="col-md-6 col-sm-12" id="graphics' + index + '" style="display:none;">' +
        '<label for="graphics_select' + index + '"> خدمه</label>' +
        '<select class="custom-select mr-sm-2" name="type_services[]" id="graphics_select' + index + '" required disabled>' +
        '<option value="تصميم الهوية البصرية كاملة">تصميم الهوية البصرية كاملة</option>' +
        '<option value="تصميم الشعار وبطاقة العمل">تصميم الشعار وبطاقة العمل</option>' +
        '<option value="تصميم ملصقات التواصل الاجتماعي">تصميم ملصقات التواصل الاجتماعي</option>' +
        '<option value="تصميم الدعوات والإعلانات ولافتات الويب">تصميم الدعوات والإعلانات ولافتات الويب</option>' +
        '<option value="تصميم صور انفو جرافيك">تصميم صور انفو جرافيك</option>' +
        '<option value="تصميم فيديو موشن جرافيك">تصميم فيديو موشن جرافيك</option>' +
        '<option value="تصميم نماذج تفاعلية لمواقع وتطبيقات">تصميم نماذج تفاعلية لمواقع وتطبيقات (UI/UX)</option>' +
        '<option value="اخرى">اخرى</option>' +
        '</select>' +
        '</div>' +

        '<div class="col-md-6 col-sm-12" id="marketing' + index + '" style="display:none;">' +
        '<label for="marketing_select' + index + '"> خدمه</label>' +
        '<select class="custom-select mr-sm-2" name="type_services[]" id="marketing_select' + index + '" required disabled>' +
        '<option value="كتابة المحتوي القيم والمقالات">كتابة المحتوي القيم والمقالات</option>' +
        '<option value="تحسين محركات البحث">تحسين محركات البحث (SEO)</option>' +
        '<option value="التسويق عبر وسائل التواصل الاجتماعي">التسويق عبر وسائل التواصل الاجتماعي</option>' +
        '<option value="التسويق عبر البريد الإلكتروني">التسويق عبر البريد الإلكتروني</option>' +
        '<option value="الحملات الإعلانية المدفوعة (AD)">الحملات الإعلانية المدفوعة (AD)</option>' +
        '<option value="الفيديو الدعائي">الفيديو الدعائي</option>' +
        '<option value="خطة تسويق متنوعة">خطة تسويق متنوعة</option>' +
        '<option value="اخرى">اخرى</option>' +
        '</select>' +
        '</div>' +

        '</div>' +

        '<div class="clearfix"></div>' +

        '<a href="#" class="remove_input btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>' +

        '</div>');

    phoneInput.find('[name="services[]"]').on('change', function() {
        var selectedService = $(this).val();
        var programmingSelect = phoneInput.find('[id^="programming_select"]');
        var graphicsSelect = phoneInput.find('[id^="graphics_select"]');
        var marketingSelect = phoneInput.find('[id^="marketing_select"]');
        if (selectedService === "برمجة وحلول تقنية") {
            programmingSelect.prop('disabled', false);
            graphicsSelect.prop('disabled', true);
            marketingSelect.prop('disabled', true);
            $('#programming' + index).show();
            $('#graphics' + index).hide();
            $('#marketing' + index).hide();
        } else if (selectedService === "تصميم الجرافيك") {
            programmingSelect.prop('disabled', true);
            graphicsSelect.prop('disabled', false);
            marketingSelect.prop('disabled', true);
            $('#programming' + index).hide();
            $('#graphics' + index).show();
            $('#marketing' + index).hide();
        } else if (selectedService === "تسويق الكتروني") {
            programmingSelect.prop('disabled', true);
            graphicsSelect.prop('disabled', true);
            marketingSelect.prop('disabled', false);
            $('#programming' + index).hide();
            $('#graphics' + index).hide();
            $('#marketing' + index).show();
        }
    });

    phoneInput.find('.remove_input').on('click', function(e) {
        e.preventDefault();
        phoneInput.remove();
    });

    divPhoneInputs.append(phoneInput);
});

    </script>




    <script>
        $(document).ready(function() {

            $(".loder").fadeOut(3000, function() {
                $("body").css({
                    overflow: `auto`
                })
            })

        })
        // !لإحداث تغيير ؟!", " لإمتلاك مشروعك ؟!" ," لتحقيق حلمك ؟!", " لتبدء قصتك ؟"
        // const exampleText = ['لإحداث تغيير ؟!', 'لإمتلاك مشروعك ؟!', ' لتحقيق حلمك ؟!', 'لتبدء قصتك  ؟!'];
        // const exampleTyping = new AutoTyping('.example-selector', exampleText, {
        //     typeSpeed: 50,
        //     deleteSpeed: 50,
        //     waitBeforeDelete: 2000,
        //     waitBetweenWords: 500,
        // });
        // exampleTyping.start()

        let swiper3 = new Swiper(".mySwiper3", {
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


        let swiper5 = new Swiper(".mySwiper5", {
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

        let swiper6 = new Swiper(".mySwiper6", {
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
        let swiper7 = new Swiper(".mySwiper7", {
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
