<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">


            <div class="modal-body">
                <div class="form">
                    <h3> أرسل لنا فكرتك لتبدء قصتك
                    </h3>
                    <form method="POST" action="{{ route('service-request') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 col-sm-12">
                                <label for="name">الإسم</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="email">البريد الالكتروني</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 col-sm-12">
                                <label for="phone">رقم التواصل</label>
                                <div class="input-group ">
                                    <span class=" input-group-text" id="basic-addon1">+</span>
                                    <input type="text" name="phone" class=" form-control border-end-0"
                                        id="phone" required>
                                </div>
                                {{-- <input type="text" name="phone" class="border-0 contactNumber" id="phone"
                                    required> --}}
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="address">البلد</label>
                                <select class="custom-select mr-sm-2" name="country" id="country" required>
                                    <option value="اختر الجنسية">اختر الجنسية</option>
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
                        <div id="other_data" class="tab-pane ">
                            <div class="div_phone_inputs">

                                <div class="form-row">
                                    <div class="col-md-6 col-sm-12">
                                        <label for="service">نوع الخدمه</label>
                                        <select class="custom-select mr-sm-2" id="select" name="services[]"
                                            id="service" required>
                                            <option value="برمجة وحلول تقنية">برمجة وحلول تقنية</option>
                                            <option value="تصميم الجرافيك">تصميم الجرافيك</option>
                                            <option value="تسويق الكتروني">تسويق الكتروني</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 col-sm-12" id="programming">
                                        <label for="service"> خدمه</label>
                                        <select class="custom-select mr-sm-2" name="type_services[]" id="service"
                                            required>
                                            <option value="انشاء المواقع الالكترونية">انشاء المواقع الالكترونية</option>
                                            <option value="إنشاء المتاجر الإلكترونية">إنشاء المتاجر الإلكترونية</option>
                                            <option value="تطوير تطبيقات الجوال<">تطوير تطبيقات الجوال</option>
                                            <option value="تطوير برمجيات مخصصة">تطوير برمجيات مخصصة</option>
                                            <option value="خدمات الحوسبة السحابية">خدمات الحوسبة السحابية</option>
                                            <option value="حجز النطاق والإستضافة للمواقع<">حجز النطاق والإستضافة للمواقع</option>
                                            <option value="الإستشارات التقنية وحلول الأعمال">الإستشارات التقنية وحلول الأعمال</option>
                                            <option value="اخرى"> اخرى</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12" id="graphics" style="display:none;">
                                        <label for="service"> خدمه</label>
                                        <select class="custom-select mr-sm-2" name="type_services[]" id="service"
                                            required>
                                            <option value="تصميم الهوية البصرية كاملة">تصميم الهوية البصرية كاملة</option>
                                            <option value="تصميم الشعار وبطاقة العمل">تصميم الشعار وبطاقة العمل</option>
                                            <option value="تصميم ملصقات التواصل الاجتماعي</">تصميم ملصقات التواصل الاجتماعي</option>
                                            <option value="تصميم الدعوات والإعلانات ولافتات الويب">تصميم الدعوات والإعلانات ولافتات الويب</option>
                                            <option value="تصميم صور انفو جرافيك">تصميم صور انفو جرافيك</option>
                                            <option value="تصميم فيديو موشن جرافيك<">تصميم فيديو موشن جرافيك</option>
                                            <option value="تصميم نماذج تفاعلية لمواقع وتطبيقات">تصميم نماذج تفاعلية لمواقع وتطبيقات (UI/UX)</option>
                                            <option value="اخرى"> اخرى</option>


                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12" id="marketing" style="display:none;">
                                        <label for="service"> تسويق</label>
                                        <select class="custom-select mr-sm-2" name="type_services[]" id="service"
                                            required>
                                            <option value="كتابة المحتوي القيم والمقالات">كتابة المحتوي القيم والمقالات</option>
                                            <option value="تحسين محركات البحث">تحسين محركات البحث (SEO)</option>
                                            <option value="التسويق عبر وسائل التواصل الاجتماعي">التسويق عبر وسائل التواصل الاجتماعي</option>
                                            <option value="التسويق عبر البريد الإلكتروني">التسويق عبر البريد الإلكتروني</option>
                                            <option value="الحملات الإعلانية المدفوعة">الحملات الإعلانية المدفوعة (AD)</option>
                                            <option value="الفيديو الدعائي">الفيديو الدعائي</option>
                                            <option value="خطة تسويق متنوعة">خطة تسويق متنوعة</option>
                                            <option value="اخرى"> اخرى</option>

                                        </select>
                                    </div>




                                </div>

                                <div class="clearfix"></div>


                                {{-- <a href="#" class="remove_input btn btn-danger btn-sm"><i
                                        class="fa fa-trash"></i></a> --}}

                            </div>



                            <br>

                            <a href="#" class="add_phone_input btn btn-info btn-sm"><i
                                    class="fa fa-plus"></i></a>

                        </div>



                        <div class="form-row">
                            <div class="col">
                                <label for="message">الرسالة

                                    <span style="    color: #c3c2c2;">(اختياري)</span>

                                </label>
                                <textarea class="form-control" name="message" rows="8" id="message" ></textarea>
                            </div>
                        </div>
                        <div class="modal-footer  justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                            <button type="submit" name="save" class="btn send m-c">إرسال</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
