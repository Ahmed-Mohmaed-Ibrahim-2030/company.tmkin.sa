@extends('layouts.tmkinApp')

@section('content')
    <div class=""  >
        <div class="pt-5">
            <div class=" p-5 container bg-image-2 pb-0">
                <h3 style="direction: rtl" class="text-center">
                    انضم لقائمة شركاء تمكين
                </h3>
                <p style="direction: rtl">
                    أهلاً بكم في صفحة شركاء تمكين من القطاعين العام والخاص ذات الاهتمام والأهداف المماثلة، والتي نتطلع من خلالها إلى التعاون مع أفضل الشركاء لتقديم أفضل الخدمات والمنتجات ونتوقع تحقيق أعلى معايير الجودة والأمانة والاستدامة.
                    نفخر في تمكين بما نقوم به؛ ونؤمن بأن العمل مع أفضل الشركاء من موردين ومهندسين ومقاولين وعقاريين يعتبر حافزاً وداعماً أساسياً في تحقيق رسالتنا.
                    انضم الآن لتصلك الفرص ذات التي تتناسب مع تخصصك ونشاطك.
                    خطوة بخطوة لتصبح شريكاً معنا في النجاح

                </p>
                <div class="row justify-content-center">

                <ul class="col-12 col-md-8 col-lg-4 "  style="direction: rtl;list-style-type: none">

                    <li class="d-flex align-items-center mt-2">
                        <i class="bi bi-check2"></i> <h6>

                    التسجيل من خلال تعبئة نموذج الشراكة.
                        </h6>
                    </li>
                    <li class="d-flex align-items-center mt-2">
                        <i class="bi bi-check2"></i> <h6>

                        سيتم التواصل معكم من فريق تمكين في حال ترشيحك.
                        </h6>
                    </li>
                    <li class="d-flex align-items-center mt-2">
                        <i class="bi bi-check2"></i> <h6>

                        	التعريف ببرنامج الشراكة.
                        </h6>
                    </li>
                    <li class="d-flex align-items-center mt-2">
                        <i class="bi bi-check2"></i> <h6>

                    توقيع العقد والبدء في العمل.
                        </h6>
                    </li >
                    <li class="d-flex align-items-center mt-2">
                        <i class="bi bi-check2"></i> <h6>

                        نرحب بك شريكاً معنا.
                        </h6>
                    </li>
                </ul>
                </div>
            </div>
            <div class="form product-area bg-image-1"    >
                <div class="container mt-5 p-5 pt-0 text-center">


                    <form class="elementor-form" method="post" name="New Form">
                        <input type="hidden" name="post_id" value="16121">
                        <input type="hidden" name="form_id" value="419b4121">
                        <input type="hidden" name="referer_title" value="شراكاتمنصة تمكين">

                        <input type="hidden" name="queried_id" value="16121">

                        <div class="">
                            <div class="row">

                            <div style="direction: rtl;text-align: right"  class="form-group col-12 col-md-6 col-lg ">
                                <label style="direction: rtl;text-align: right" for="form-field-name" class="form-label partner-lable pt-2">
                                    اسم الجهة							</label>
                                <input size="1" type="text" name="form_fields[name]" id="form-field-name" class="form-control " placeholder="اسم الجهة" required="required" aria-required="true">
                            </div>
                            <div style="direction: rtl;text-align: right"  class="form-group col-12 col-md-6 col-lg">
                                <label style="direction: rtl;text-align: right" for="form-field-email" class="form-label partner-lable pt-2">
                                    رقم السجل/ الترخيص							</label>
                                <input type="number" name="form_fields[email]" id="form-field-email" class="form-control " placeholder="رقم السجل/ الترخيص" required="required" aria-required="true" min="" max="">
                            </div>
                            </div>
                            <div  class="form-group" style="direction: rtl;text-align: right">
                                <label style="direction: rtl;text-align: right" for="form-field-field_789f273" class="form-label partner-lable pt-2">
                                    تاريخ الانتهاء							</label>

                                <input type="text" name="form_fields[field_789f273]" id="form-field-field_789f273" class="form-control" placeholder="تاريخ الانتهاء" required="required" aria-required="true" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                            </div>
                            <div class="row" style="direction: rtl">
                                <div  class="form-group col-12 col-md-6 col-lg" style="direction: rtl;text-align: right" >
                                    <label style="direction: rtl;text-align: right" for="form-field-field_b71d011" class="form-label partner-lable pt-2">
                                        اسم المسؤول							</label>
                                    <input size="1" type="text" name="form_fields[field_b71d011]" id="form-field-field_b71d011" class="form-control" placeholder="اسم المسؤول" required="required" aria-required="true">
                                </div>
                                <div  class="form-group col-12 col-md-6 col-lg" style="direction: rtl;text-align: right" >
                                    <label style="direction: rtl;text-align: right" for="form-field-field_fd2ada6" class="form-label partner-lable pt-2">
                                        رقم الجوال							</label>
                                    <input type="number" name="form_fields[field_fd2ada6]" id="form-field-field_fd2ada6" class="form-control" placeholder="رقم الجوال" required="required" aria-required="true" min="" max="">
                                </div>
                                <div  class="form-group col-12 col-md-6 col-lg" style="direction: rtl;text-align: right" >
                                    <label style="direction: rtl;text-align: right" for="form-field-field_5148aa3" class="form-label partner-lable pt-2">
                                        البريد الإلكتروني							</label>
                                    <input size="1" type="email" name="form_fields[field_5148aa3]" id="form-field-field_5148aa3" class="form-control" placeholder="البريد الإلكتروني" required="required" aria-required="true">
                                </div>
                            </div>

                            <div  class="form-group">
                                <label style="direction: rtl;text-align: right" for="form-field-field_0ca7e14" class="form-label partner-lable pt-2 d-block">
                                    مجال الشراكة							</label>
                                <div class=" ">
                                    <div class="">
                                        <i aria-hidden="true" class="eicon-caret-down"></i>			</div>
                                    <select name="form_fields[field_0ca7e14]" id="form-field-field_0ca7e14" style="direction: rtl;text-align: right" class="form-control ">
                                        <option value="مقاولات">مقاولات</option>
                                        <option value="إدارة">إدارة</option>
                                        <option value="تأثيث">تأثيث</option>
                                        <option value="تشغيل">تشغيل</option>
                                        <option value="استثمار">استثمار</option>
                                        <option value="تسويق">تسويق</option>
                                        <option value="صيانة">صيانة</option>
                                        <option value="توريد">توريد</option>
                                        <option value="تمويل">تمويل</option>
                                        <option value="أخرى">أخرى</option>
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <label style="direction: rtl;text-align: right" for="form-field-field_5efb2a0" class="form-label partner-lable pt-2 d-block">
                                    أضف مجالات أخرى							</label>
                                <input size="1" type="text" name="form_fields[field_5efb2a0]" id="form-field-field_5efb2a0" class="form-control" style="direction: rtl;text-align: right" placeholder="أضف مجالات أخرى">
                            </div>
                            <div class="">
                                <label style="direction: rtl;text-align: right" for="form-field-field_59c5501" class="form-label partner-lable pt-2 d-block">
                                    نوع الشراكة							</label>
                                <div class="">
                                    <div class="">
                                        <i aria-hidden="true" class="eicon-caret-down"></i>			</div>
                                    <select name="form_fields[field_59c5501]" id="form-field-field_59c5501" class="form-control"  style="direction: rtl;text-align: right">
                                        <option value="تنفيذ">تنفيذ</option>
                                        <option value="توريد">توريد</option>
                                        <option value="استثمار">استثمار</option>
                                        <option value="دعم">دعم</option>
                                        <option value="أخرى">أخرى</option>
                                    </select>
                                </div>
                            </div>
                            <div class="-100">
                                <label style="direction: rtl;text-align: right" for="form-field-field_36e6886" class="form-label partner-lable pt-2 d-block">
                                    المزيد من المعلومات							</label>
                                <textarea class="form-control" name="form_fields[field_36e6886]" id="form-field-field_36e6886" rows="4" style="direction: rtl;text-align: right" placeholder="توضيح معلومات مهمة لم ترد سابقا"></textarea>				</div>
                            <div class="">
                                <label style="direction: rtl;text-align: right" for="form-field-field_cdb8874" class="form-label partner-lable pt-2 d-block">
                                    الملف التعريفي و السجل/الترخيص							</label>
                                <input type="file" style="direction: rtl;text-align: right" name="form_fields[field_cdb8874][]" id="form-field-field_cdb8874" class="form-control" required="required" aria-required="true" multiple="multiple">

                            </div>
                            <div class="">
                                <label style="direction: rtl;text-align: right" for="form-field-field_cdb8874" class="form-label partner-lable pt-2 d-block">
                                    إرفاق الشعار بجودة عالية 							</label>
                                <input type="file" style="direction: rtl;text-align: right" name="form_fields[field_cdb8874][]" id="form-field-field_cdb8874" class="form-control" required="required" aria-required="true" multiple="multiple">

                            </div>
                            <div class=" form-label partner-lable pt-2" style="text-align: right">
                                قم بارفاق الملف التعريفي والسجل أو الترخيص
                            </div>
                            <div class="">
                                <button type="submit" class="form-control" style="background-color:var(--color-btn) !important;">
						<span>
															<span class="">
																										</span>
																						<span style="color: var(--color-white)!important;" class="">إرسال الطلب</span>
													</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
