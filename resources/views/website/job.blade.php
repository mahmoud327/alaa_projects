@extends('website.layouts.master')

@section('content')
    <section class="header">
        <div class="container text-center">
            <h2> التوظيف</h2>
        </div>
    </section>
    <!--end header section-->
    <!--start contact section-->
    <section class="contact cont">
        <div class="container" data-aos="zoom-in" data-aos-duration="2000">
            <h3> إن كنت من أصحاب الشغف والطموح والإبداع أهلا بك في فريقنا الإحترافي</h3>


        </div>
        <div class="row justify-content-center m-5">
            <div class="col-lg-8 col-sm-12 order-2 order-lg-1">
                <!-- <h3>أو عن طريق تعبئة النموذج التالي</h3> -->
                <div class="form">
                    <form method="POST" action="{{ route('save.jobs') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 col-sm-12">
                                <label for="name">الإسم</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="email">البريد الإلكتروني</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 col-sm-12">
                                <label for="phone">رقم التواصل</label>
                                <div class="input-group ">
                                    <span class=" input-group-text" id="basic-addon1">+</span>
                                    <input type="text" name="phone" class=" form-control border-end-0" id="phone"
                                        required>
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="message">

                                    الجنسيه
                                </label>
                                <!-- HTML code for the select dropdown -->
                                <div class="input-group ">

                                    <select name="nationality" class="form-control" id="nationality" required>
                                        <option value="">اختر الجنسية</option>
                                        <option value="الجزائرية">الجزائرية</option>
                                        <option value="البحرينية">البحرينية</option>
                                        <option value="المصرية">المصرية</option>
                                        <option value="العراقية">العراقية</option>
                                        <option value="الأردنية">الأردنية</option>
                                        <option value="الكويتية">الكويتية</option>
                                        <option value="اللبنانية">اللبنانية</option>
                                        <option value="الليبية">الليبية</option>
                                        <option value="المغربية">المغربية</option>
                                        <option value="العمانية">العمانية</option>
                                        <option value="الفلسطينية">الفلسطينية</option>
                                        <option value="القطرية">القطرية</option>
                                        <option value="السعودية">السعودية</option>
                                        <option value="السودانية">السودانية</option>
                                        <option value="السورية">السورية</option>
                                        <option value="التونسية">التونسية</option>
                                        <option value="الإماراتية">الإماراتية</option>
                                        <option value="اليمنية">اليمنية</option>
                                    </select>
                                </div>

                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <label for="address">التخصص أو المسمى المهني</label>
                                <input type="text" name="job" class="form-control" id="address" required>
                            </div>
                            <div class="col-6">
                                <label for="address">حمل السيرة الذاتية</label>
                                <input type="file" name="cv" class="form-control" id="address" required>
                            </div>
                        </div>









                        <div class="form-row">
                            <div class="col">
                                <label for="message">

                                    الرسالة
                                    <span style="    color: #c3c2c2;">(اختياري)</span>
                                </label>
                                <textarea class="form-control" name="message" rows="8" id="message" required></textarea>
                            </div>
                        </div>
                        <!-- <div class="clip-path"> -->
                        <button class="send" type="submit" name="save">إرسال</button>
                        <!-- </div> -->
                    </form>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-sm-12 order-1 order-lg-2">
                                <div class="contact-info text-center">
                                    <h3>معلومات الاتصال</h3>
                                    <div class="address">
                                        <img src="imgs/location.png" width="50" height="50" alt="location" class="img-fluid">
                                        <p>الرياض، السعودية</p>
                                    </div>
                                    <div class="mail">
                                        <a href="mailto:info@AlaaAzani.com">
                                            <img src="imgs/email.png" width="30" height="30" alt="email" class="img-fluid">
                                            info@AlaaAzani.com
                                        </a>
                                        <a href="https://wa.me/+966555549743">
                                            <img src="imgs/whatsapp.png" width="30" height="30" alt="whatsapp" class="img-fluid">
                                            +966 55 554 9743
                                        </a>
                                        <a href="https://t.me/AlaaAzani">
                                            <img src="imgs/telegram.png" width="30" height="30" alt="telegram" class="img-fluid">
                                            https://t.me/AlaaAzani
                                        </a>
                                    </div>
                                    <div class="social">
                                        <ul class="list-unstyled">
                                            <li><a href="https://wa.me/966555549743" target="_blank"><i
                                                        class="fa-brands fa-whatsapp"></i></a></li>
                                            <li><a href="https://www.snapchat.com/add/AlaaAzani" target="_blank"><i
                                                        class="fa-brands fa-snapchat"></i></a></li>
                                            <li><a href="https://www.tiktok.com/@AlaaAzani" target="_blank"><i
                                                        class="fa-brands fa-tiktok"></i></a></li>
                                            <li><a href="https://www.instagram.com/AlaaAzani" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="https://www.youtube.com/c/AlaaAzani" target="_blank"><i
                                                        class="fa-brands fa-youtube"></i></a></li>
                                            <li><a href="https://www.pinterest.com/alaaazani" target="_blank"><i
                                                        class="fa-brands fa-pinterest"></i></a></li>
                                            <li><a href="https://www.facebook.com/AlaaAzani" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/AlaaAzani" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="https://t.me/AlaaAzani" target="_blank"><i
                                                        class="fa-brands fa-telegram"></i></a></li>
                                            <li><a href="https://www.linkedin.com/in/AlaaAzani" target="_blank"><i
                                                        class="fa-brands fa-linkedin"></i></a></li>
                                            <li><a href="https://www.behance.net/AlaaAzani" target="_blank"><i
                                                        class="fa-brands fa-behance"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
        </div>
        </div>
    </section>
@endsection
