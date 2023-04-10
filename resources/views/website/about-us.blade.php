@extends('website.layouts.master')

@section('content')
    <section class="header">
        <div class="container text-center">
            <h2>نبذه عنا</h2>
        </div>
    </section>
    <!--end header section-->
    <!--start about section-->
    <section class="about">
        <div class="container">
            <div class="us">
                <h4 style="color: #64b1e7">من نحن</h4>
                <p>
                    فريق علاء عزاني للتقنية تأسس عام 2022 لتقدم الخدمات والحلول الرقمية
                    المتكاملة من برمجة التطبيقات والمواقع والمتاجر الإلكترونية وتصميم
                    الجرافيك والتسويق الإلكتروني لتلبي جميع احتياجات العملاء من الأفراد
                    والمؤسسات والشركات والجهات الحكومية بأحدث التقنيات والأدوات المواكبة
                    للعصر.
                </p>
            </div>

            <div class="ceo mt-2">
                <div class="head">
                    <img src="{{ asset('website/img/aa.jpg') }}" alt="ceo" class="img-fluid" />
                    <div class="mb-2">
                        <h4 style="color: #64b1e7">المؤسس</h4>
                        <h5>م. علاء عزاني</h5>
                        <button class="bnt">
                            <a href="cv.html" style="text-decoration: none; border-bottom: 0" target="_blank">
                                السيره الذاتيه</a>
                        </button>
                    </div>
                </div>
                <p class="mt-2">
                    " الرقمية هي المستقبل، وأننا علينا أن نسهم في صناعة المستقبل
                    بمشاريعه المتنوعة سعياً نحو تحقيق رؤية المملكة 2030 في التحول
                    الرقمي، وتعزيز الإبتكار والإبداع، وتقديم الحلول الرقمية التي من
                    شأنها أن تحول الفكرة إلى واقع ملموس، وأن نجد للمشكلة الواحدة حلولاً
                    عدة تعزز من رضا عملائنا وتفتح لهم آفاقاً وأسواقاً جديدة نحو العالمية
                    "
                </p>
            </div>

            <div class="story">
                <h4>قصتنا </h4>
                <p>
                    فريق علاء عزاني للتقنية تأسس عام 2022 لتقدم الخدمات والحلول الرقمية
                    المتكاملة من برمجة التطبيقات والمواقع والمتاجر الإلكترونية وتصميم
                    الجرافيك والتسويق الإلكتروني لتلبي جميع احتياجات العملاء من الأفراد
                    والمؤسسات والشركات والجهات الحكومية بأحدث التقنيات والأدوات المواكبة
                    للعصر.
                </p>
            </div>

            <br>
            

            <section class="team">

                <div class="container text-center">
                    <h2>فريقنا</h2>
                    <!-- Swiper -->
                    <div class="swiper mySwiper4">
                        <div class="swiper-wrapper">
                            @foreach ($teams as $team)
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="{{ $team->image_path }}" alt="quote" class="img-fluid">
                                        <h3>{{ $team->name }}</h3>
                                        <span>{{ $team->job_title }} </span>
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

            <div class="goals">
                <div class="row text-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <img src="{{ asset('website/img/vision.png') }}" width="70" alt="vision" class="img-fluid" />
                        <h5>رؤيتنا</h5>
                        <p>
                            أن نكون الشريك التقني الأول والإختيار الأفضل للجميع في
                            التحول الرقمي
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <img src="{{ asset('website/img/message.png') }}" width="70" alt="message" class="img-fluid" />
                        <h5>رسالتنا</h5>
                        <p>
                            تمكين الجميع من التقنية وتسخيرها لتلبية احتياجاتهم وتعزيز
                            تواجدهم الرقمي
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <img src="{{ asset('website/img/target.png') }}" width="70" alt="target" class="img-fluid" />
                        <h5>اهدافنا</h5>
                        <p>
                            أن نحظى بثقة عملائنا من خلال رضاهم عن خدماتنا التى
                            نقدمها لهم بكل حب
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        let swiper4 = new Swiper(".mySwiper4", {
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
