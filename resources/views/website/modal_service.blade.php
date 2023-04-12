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
                                <select class="custom-select mr-sm-2" name="service" id="service" required>
                                    <option value="Egypt">مصر</option>
                                    <option value="saudia"> السعوديه</option>
                                </select>
                            </div>
                        </div>
                        <div id="other_data" class="tab-pane ">
                            <div class="div_phone_inputs">

                                <div class="form-row">
                                    <div class="col-md-6 col-sm-12">
                                        <label for="service">نوع الخدمه</label>
                                        <select class="custom-select mr-sm-2"  id="select" name="type_services[]" id="service"
                                         required>
                                            <option value="برمجة وحلول تقنية">برمجة وحلول تقنية</option>
                                            <option value="تصميم الجرافيك">تصميم الجرافيك</option>
                                            <option value="تسويق الكتروني">تسويق الكتروني</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 col-sm-12" id="programming">
                                        <label for="service"> الخدمات</label>
                                        <select class="custom-select mr-sm-2" name="categories_ids[]" id="service"
                                            required>
                                            <option>انشاء المواقع الالكترونية</option>
                                            <option>إنشاء المتاجر الإلكترونية</option>
                                            <option>تطوير تطبيقات الجوال</option>
                                            <option>تطوير برمجيات مخصصة</option>
                                            <option>خدمات الحوسبة السحابية</option>
                                            <option>حجز النطاق والإستضافة للمواقع</option>
                                            <option>الإستشارات التقنية وحلول الأعمال</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12" id="graphics" style="display:none;">
                                        <label for="service"> الخدمات</label>
                                        <select class="custom-select mr-sm-2" name="categories_ids[]" id="service"
                                            required>
                                            <option>تصميم الهوية البصرية كاملة</option>
                                            <option>تصميم الشعار وبطاقة العمل</option>
                                            <option>تصميم ملصقات التواصل الاجتماعي</option>
                                            <option>تصميم الدعوات والإعلانات ولافتات الويب</option>
                                            <option>تصميم صور انفو جرافيك</option>
                                            <option>تصميم فيديو موشن جرافيك</option>
                                            <option>تصميم نماذج تفاعلية لمواقع وتطبيقات (UI/UX)</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12" id="marketing" style="display:none;">
                                        <label for="service"> الخدمات</label>
                                        <select class="custom-select mr-sm-2" name="categories_ids[]" id="service"
                                            required>
                                            <option>انشاء المواقع الالكترونية</option>
                                            <option>إنشاء المتاجر الإلكترونية</option>
                                            <option>تطوير تطبيقات الجوال</option>
                                            <option>تطوير برمجيات مخصصة</option>
                                            <option>خدمات الحوسبة السحابية</option>
                                            <option>حجز النطاق والإستضافة للمواقع</option>
                                            <option>الإستشارات التقنية وحلول الأعمال</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label for="service"> الخدمات</label>
                                        <select class="custom-select mr-sm-2" name="categories_ids[]" id="service"
                                            required>
                                            <option>كتابة المحتوي القيم والمقالات</option>
                                            <option>تحسين محركات البحث (SEO)</option>
                                            <option>التسويق عبر وسائل التواصل الاجتماعي</option>
                                            <option>التسويق عبر البريد الإلكتروني</option>
                                            <option>الحملات الإعلانية المدفوعة (AD)</option>
                                            <option>الفيديو الدعائي</option>
                                            <option>خطة تسويق متنوعة</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="clearfix"></div>


                                {{-- <a href="#" class="remove_input btn btn-danger btn-sm"><i
                                        class="fa fa-trash"></i></a> --}}

                            </div>



                            <br>

                            <a href="#" class="add_phone_input btn btn-info btn-sm"><i class="fa fa-plus"></i></a>

                        </div>



                        <div class="form-row">
                            <div class="col">
                                <label for="message">الرسالة

                                    <span style="    color: #c3c2c2;">(اختياري)</span>

                                </label>
                                <textarea class="form-control" name="message" rows="8" id="message" required></textarea>
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
