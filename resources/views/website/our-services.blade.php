@extends('website.layouts.master')

@section('content')
    <!--end navbar section-->
    <!--start header section-->
    <section class="header">
        <div class="container text-center">
            <h2>خدماتنا</h2>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container text-center contact" data-aos="zoom-in" data-aos-duration="2000">
            <h4 class="text-center fw-bold">
                نقدم لك أفضل الخدمات والحلول الرقمية المتكاملة لتلبي جميع احتياجاتك لنجاح وإنطلاق مشروعك من الصفر
            </h4>




            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="{{ asset('website/img/coding.png') }}" alt="web-development" class="img-fluid">
                        <h4>برمجة وحلول تقنية</h4>
                        <ul class="list-unstyled">
                            <li>إنشاء المواقع الالكترونية</li>
                            <li>إنشاء المتاجر الإلكترونية</li>
                            <li>تطوير تطبيقات الجوال</li>
                            <li>تطوير برمجيات مخصصة</li>
                            <li>خدمات الحوسبة السحابية</li>
                            <li>حجز النطاق والإستضافة للمواقع</li>
                            <li>الإستشارات التقنية وحلول الأعمال</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="{{ asset('website/img/Graphic Design.png') }}" alt="cms" class="img-fluid">
                        <h4>تصميم الجرافيك</h4>
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
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="{{ asset('website/img/digital marketing.png') }}" alt="e-learning" class="img-fluid">
                        <h4>التسويق الالكتروني</h4>
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
    <!--start project-steps section-->
    <section class="project-steps why-us ">
        <div class="container text-center">
            <h2>مراحل مشروعك التقني</h2>
            <div class="row">
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"
                    class="col-lg-4 col-md-6 col-sm-12  box-services" style=" transform: translatey(-9px);">
                    <span>1</span>
                    <img src="{{ asset('website/img/research.png') }}" width="100" alt="research" class="img-fluid" style="width: 20%;">
                    <h5>دراسة المشروع</h5>
                    <p>نقوم بالاجتماع معك لفهم المشروع وتحديد نطاق وأهداف ومتطلبات المشروع وذلك لرسم خارطة الطريق
                        لمشروعك التقني
                    </p>
                </div>
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"
                    class="col-lg-4 col-md-6 col-sm-12 box-services">
                    <span>2</span>
                    <img src="{{ asset('website/img/project-management.png') }}" width="100" alt="project-management" class="img-fluid"
                        style="width: 20%;">
                    <h5>التحليل والتخطيط</h5>
                    <p>نقوم بجمع وتحليل متطلبات وخصائص المشروع والتخطيط لمساعدتك في الحصول على رؤية أفضل لمشروعك
                        المستقبلي لتكن قريب من فئتك
                        المستهدفه في مرحلة التصميم وعمل وثيقة المتطلبات
                    </p>
                </div>
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"
                    class="col-lg-4 col-md-6 col-sm-12 box-services">
                    <span>3</span>
                    <img src="imgs/update.png" alt="update" width="100" class="img-fluid" style="width: 20%;">
                    <h5>تصميم النماذج الاولية والتعديلات</h5>
                    <p>قوم بعمل تصميم نماذج مبدئية عالية الدقة وتفاعلية لتجربة المستخدم مع المرونة في عمل التعديلات
                        حسب رغبتك حتى نصل للتصميم
                        النهائي وأخذ الموافقة عليه
                    </p>
                </div>
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"
                    class="col-lg-4 col-md-6 col-sm-12 box-services">
                    <span>4</span>
                    <img src="{{ asset('website/img/agreement.png') }}" alt="agreement" width="100" class="img-fluid" style="width: 20%;">
                    <h5>التنفيذ</h5>
                    <p>نبدء بمرحلة البرمجة وتنفيذ التصميم النهائي المتفق عليه ونقوم بالإجتماع معك بشكل دوري لتزويدك
                        بمستجدات العمل على المشروع
                    </p>
                </div>
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"
                    class="col-lg-4 col-md-6 col-sm-12 box-services">
                    <span>5</span>
                    <img src="{{ asset('website/img/quality-assurance.png') }}" alt="quality-assurance" width="100" class="img-fluid"
                        style="width: 20%;">
                    <h5>اختبار ضمان الجودة</h5>
                    <p>نقوم بعمل اختبارات الجودة ونغطي مجموعة واسعة من الظروف والسيناريوهات للتأكد من أن المنتج يعمل
                        بشكل سليم وآمن
                    </p>
                </div>
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"
                    class="col-lg-4 col-md-6 col-sm-12 box-services"
                    style="
                        transform: translatey(9px);
                    ">
                    <span>6</span>
                    <img src="{{ asset('website/img/package.png') }}" alt="package" width="100" class="img-fluid" style="width: 20%;">
                    <h5>تسليم المشروع</h5>
                    <p>بعد التأكد من تنفيذ جميع متطلبات وخصائص المشروع بجودة عالية نقوم بإطلاق المشروع بشكل فعلي
                        وتسليمك ملفات المشروع ونقدم
                        دعمًا بعد الإطلاق والتطوير والتوسع مستقبلا</p>
                </div>
            </div>
        </div>
    </section>
@endsection
