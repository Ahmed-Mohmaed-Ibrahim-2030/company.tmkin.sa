@extends('layouts.tmkinApp')
@section('styles')
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

        *{
            padding:0;
            margin:0;
        }
        .container1{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background-color:#eee;
        }
        .container1 .card1{
            /*height:500px;*/
            width:800px;
            background-color:#fff;
            position:relative;
            box-shadow:0 15px 30px rgba(0,0,0,0.1);
            font-family: 'Poppins', sans-serif;
            border-radius:20px;
        }
        .container1 .card1 .form{
            width:100%;
            height:100%;

            display:flex;
        }
        .container1 .card1 .left-side{
            width:35%;
            background-color: #858383FF;
            height:100%;
            border-top-right-radius:20px;
            border-bottom-right-radius:20px;
            padding:20px 30px;
            box-sizing:border-box;

        }
        /*left-side-start*/
        .left-heading{
            color:#fff;

        }
        .steps-content{
            margin-top:30px;
            color:#fff;
        }
        .steps-content p{
            font-size:12px;
            margin-top:15px;
        }
        .progress-bar{
            list-style:none;
            /*color:#fff;*/
            margin-top:30px;
            font-size:13px;
            font-weight:700;
            counter-reset:container1 0;
        }
        .progress-bar li{
            position:relative;
            margin-left:40px;
            margin-top:50px;
            counter-increment:container1 1;
            color:#4f6581;
        }
        .progress-bar li::before{
            content:counter(container1);
            line-height:25px;
            text-align:center;
            position:absolute;
            height:25px;
            width:25px;
            border:1px solid #4f6581;
            border-radius:50%;
            left:-40px;
            top:-5px;
            z-index:10;
            background-color:#304767;


        }


        .progress-bar li::after{
            content: '';
            position: absolute;
            height: 90px;
            width: 2px;
            background-color: #4f6581;
            z-index: 1;
            left: -27px;
            top: -70px;
        }


        .progress-bar li.active::after{
            background-color: #fff;

        }

        .progress-bar li:first-child:after{
            display:none;
        }

        /*.progress-bar li:last-child:after{*/
        /*  display:none;  */
        /*}*/
        .progress-bar li.active::before{
            color:#fff;
            border:1px solid #fff;
        }
        .progress-bar li.active{
            color:#fff;
        }
        .d-none{
            display:none;
        }

        /*left-side-end*/
        .container1 .card1 .right-side{
            width:100%;
            background-color:#fff;
            height:100%;
            border-radius:20px;
        }
        /*right-side-start*/
        .main{
            display:none;
        }
        .active{
            display:block;
        }
        .main{
            padding:40px;
        }
        .main small{
            display:flex;
            justify-content:center;
            align-items:center;
            margin-top:2px;
            height:30px;
            width:30px;
            background-color:#ccc;
            border-radius:50%;
            color:yellow;
            font-size:19px;
        }
        .text{
            margin-top:20px;
        }
        .congrats{
            text-align:center !important;
        }
        .text p{
            margin-top:10px;
            font-size:13px;
            font-weight:700;
            color:#cbced4;
        }
        .input-text{
            margin:30px 0;
            display:flex;
            gap:20px;
        }

        .input-text .input-div{
            width:100%;
            position:relative;

        }



        input[type="text"]{
            width:100%;
            height:40px;
            border:none;
            outline:0;
            border-radius:5px;
            border:1px solid #cbced4;
            gap:20px;
            box-sizing:border-box;
            padding:0px 10px;
        }
        select{
            width:100%;
            height:40px;
            border:none;
            outline:0;
            border-radius:5px;
            border:1px solid #cbced4;
            gap:20px;
            box-sizing:border-box;
            padding:0px 10px;
        }
        .input-text .input-div span{
            position:absolute;
            top:10px;
            left:10px;
            font-size:14px;
            transition:all 0.5s;
        }
        .input-div input:focus ~ span,.input-div input:valid ~ span  {
            top:-15px;
            left:6px;
            font-size:10px;
            font-weight:600;
        }

        .input-div span{
            top:-15px;
            left:6px;
            font-size:10px;
        }
        .buttons button{
            height:40px;
            width:100px;

            /*border-radius:5px;*/

            font-size:12px;

            cursor:pointer;
        }
        /*.button_space{*/
        /*    display:flex;*/
        /*    gap:20px;*/

        /*}*/
        /*.button_space button:nth-child(1){*/
        /*    background-color:#fff;*/
        /*    color:#000;*/
        /*    border:1px solid#000;*/
        /*}*/
        .user_card1{
            margin-top:20px;
            margin-bottom:40px;
            height:200px;
            width:100%;
            border:1px solid #c7d3d9;
            border-radius:10px;
            display:flex;
            overflow:hidden;
            position:relative;
            box-sizing:border-box;
        }
        .user_card1 span{
            height:80px;
            width:100%;
            background-color:#dfeeff;
        }
        .circle{
            position:absolute;
            top:40px;
            left:60px;
        }
        .circle span{
            height:70px;
            width:70px;
            background-color:#fff;
            display:flex;
            justify-content:center;
            align-items:center;
            border:2px solid #fff;
            border-radius:50%;
        }
        .circle span img{
            width:100%;
            height:100%;
            border-radius:50%;
            object-fit:cover;
        }
        .social{
            display:flex;
            position:absolute;
            top:100px;
            right:10px;
        }
        .social span{
            height:30px;
            width:30px;
            border-radius:7px;
            background-color:#fff;
            border:1px solid #cbd6dc;
            display:flex;
            justify-content:center;
            align-items:center;
            margin-left:10px;
            color:#cbd6dc;

        }
        .social span i{
            cursor:pointer;
        }
        .heart{
            color:red !important;
        }
        .share{
            color:red !important;
        }
        .user_name{
            position:absolute;
            top:110px;
            margin:10px;
            padding:0 30px;
            display:flex;
            flex-direction:column;
            width:100%;

        }
        .user_name h3{
            color:#4c5b68;
        }
        .detail{
            /*margin-top:10px;*/
            display:flex;
            justify-content:space-between;
            margin-right:50px;
        }
        .detail p{
            font-size:12px;
            font-weight:700;

        }
        .detail p a{
            text-decoration:none;
            color:blue;
        }






        .checkmark__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 2;
            stroke-miterlimit: 10;
            stroke: #7ac142;
            fill: none;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }

        .checkmark {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: block;
            stroke-width: 2;
            stroke: #fff;
            stroke-miterlimit: 10;
            margin: 10% auto;
            box-shadow: inset 0px 0px 0px #7ac142;
            animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
        }

        .checkmark__check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
        }

        @keyframes stroke {
            100% {
                stroke-dashoffset: 0;
            }
        }
        @keyframes scale {
            0%, 100% {
                transform: none;
            }
            50% {
                transform: scale3d(1.1, 1.1, 1);
            }
        }
        @keyframes fill {
            100% {
                box-shadow: inset 0px 0px 0px 30px #7ac142;
            }
        }

        .warning{
            border:1px solid red !important;
        }


        /*right-side-end*/
        @media (max-width:750px) {
            .container1{
                height:scroll;


            }
            .container1 .card1 {
                max-width: 350px;
                height:auto !important;
                margin:30px 0;
            }
            .container1 .card1 .right-side {
                width:100%;

            }
            .input-text{
                display:block;
            }

            .input-text .input-div{
                margin-top:20px;

            }

            .container1 .card1 .left-side {

                display: none;
            }
        }
    </style>
@endsection
<script>




</script>
@section('content')
    <div>

        <!-- Breadcrumb Area End -->
        <div class="product-area bg-image-1 pt-90 pb-95">
            <div class="container">
                <div class="container1">



                    <div class="card1">
                        <form class="form text-center php-email-form" method="post" action="{{route('hyperpay')}}" id="serviceDiv" style="direction: rtl">

                            @csrf
                            <div class="right-side">

                                <div class="main active">
                                    <small><i class="fa fa-smile-o"></i></small>
                                    <div class="text">
                                        <h2>طلب خدمة </h2>
                                        <p class="text-success">من هنا يمكنك طلب الخدمة    </p>
                                    </div>

{{--                                    <div class="input-text">--}}
{{--                                        <div class="input-div">--}}
{{--                                            <input value= type="text" name="username" id="user_name" placeholder="أدخل الجهة/ اسم المالك      " required require>--}}


{{--                                        </div></div>--}}
                                    <div class="input-text">
                                        <div class="input-div">
                                            <input value="" type="text" name="username" id="user_name" placeholder=" اسم المسؤول      " required require>


                                        </div></div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <input value="" type="text" name="phone" id="" placeholder="رقم الجوال       " required require>


                                        </div></div>




                                    <div class="input-text">
                                        <div class="input-div">
                                            <select required require >
                                                <option disabled selected> الخدمة المطلوبة     </option>
                                                <option value="عقارات">عقارات</option>
                                                <option value="إنشاءات">إنشاءات </option>
                                                <option value="خدمات">خدمات</option>
                                                <option value="أخرى">أخرى   </option>


                                            </select>

                                        </div></div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <select placeholder="الخدمة الفرعية">
                                                 <option disabled selected>الخدمة الفرعية  </option>
                                                <option value="تطوير عقاري">تطوير عقاري   </option>
                                                <option value="بيع">بيع    </option>
                                                <option value="شراء">شراء   </option>
                                                <option value="أخرى">أخرى   </option>


                                            </select>

                                        </div></div>
{{--                                    <div class="input-text">--}}
{{--                                        <div class="input-div">--}}

{{--                                            <select>--}}
{{--                                                <option disabled selected>حاجة المشروع  </option>--}}
{{--                                                <option>بناء  </option>--}}
{{--                                                <option>تشطيب  </option>--}}
{{--                                                <option> تأثيث </option>--}}
{{--                                                <option> صيانة </option>--}}
{{--                                                <option> إدارة </option>--}}
{{--                                                <option> تشغيل  </option>--}}
{{--                                                <option> أخرى </option>--}}

{{--                                            </select>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
                                    <div class="buttons">
                                        <button class="btn btn-outline-success next_button" id="getLocation">تحديد الموقع  </button>
                                    </div>
                                </div>
                                <div class="main" id="location">
                                    <small><i class="fa fa-smile-o"></i></small>
                                    <div class="text">
                                        <h2>حدد الموقع  </h2>
{{--                                        <p class="text-success">حدد الموقع الذي يقع  فيه هذا المشروع </p>--}}
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div">
                                            <select id="regions">
                                                <option disabled selected>اختر المنطقة  </option>
                                                <option>الرياض </option>
                                                <option>جدة </option>
                                                <option>مكة </option>
                                                <option>المدينة </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <select id='cities'>
                                                <option disabled selected>اختر المدينة    </option>
                                                <option>الرياض </option>
                                                <option>جدة </option>
                                                <option>مكة </option>
                                                <option>المدينة </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div" >
                                            <select id='districts'>
                                                <option disabled selected>اختر الحي  </option>
                                                <option>السليمانية  </option>
                                                <option>البطيحا  </option>
                                                <option>مكة </option>
                                                <option>المدينة </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="buttons button_space">
                                        <button class="back_button btn btn-outline-info">الرجوع </button>
                                        <button class="btn btn-outline-success next_button">رفع صور   </button>

                                    </div>
                                </div>
                                <div class="main">
                                    <small><i class="fa fa-smile-o"></i></small>
                                    <div class="text">
                                        <h2>رفع الصور    </h2>
                                        <p class="text-success"> أضف صورا واضحة للمشروع بجودة عالية   </p>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div text-right" >
                                            <label for=""> أضف صورة </label>
                                            <input value="" type="file" name="main_image" required require >

                                        </div>
                                    </div>

                                    <div class="buttons button_space">
                                        <button class="back_button btn btn-outline-info">تغيير المكان </button>
                                        <button class="btn btn-outline-success next_button  " >التالي </button>
                                        <button class="btn btn-outline-success "> صورة إضافية</button>
                                    </div>
                                </div>



                                <div class="main text-right">
                                    <h4>
                                        الموقع
                                    </h4>
                                    <p style="margin-bottom: 10px">
                                        حي البطحا , مدينة الرياض , منطقة الرياض <a href="#" style="color: blue ; text-decoration:underline" id="loc"> تغيير المكان </a>
                                    </p>

                                    <div class="input-text" id="checkDiv">
                                        <div class="input-div" >

                                            <div class="form-check   " >
                                                <div class="row">

                                                    <div class="col-1">

                                                        <input value="" class="form-check-input p-0" type="checkbox" value="" id="employeeCkeck">
                                                    </div>
                                                    <div class="col-11 " style="text-align: right">

                                                        <label class="form-check-label  p-0" for="employeeCkeck">
                                                            إرسال موظف لتعيين الإحتياجات  &nbsp;
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="alert alert-warning d-none"  style="direction: rtl" id="costDiv">
                                        <strong>
                                            سيتم دفع مبلغ 200 ريال سعودي علما بأنه ستخصم من المصاريف إذا تم الإتفاق على العمل
                                        </strong>
                                    </div>
                                    <div class="buttons button_space">
                                        <button class="back_button btn btn-outline-info">تغيير المكان </button>
{{--                                        <a  href="{{route('payTest')}}" class=" btn btn-outline-info d-none "  id="paymentBtn">الدفع </a>--}}
                                        <button   class=" btn btn-outline-info d-none " type="submit"  id="paymentBtn">الدفع </button>

                                        <button type="submit" id="submit" class="submit_button btn btn-outline-success "> إرسال الطلب    </button>

                                    </div>
                                </div>

                            </div>
                            <div class="main " style="width:100%" >
                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                </svg>

                                <div class="text congrats ">
                                    <h2>لقد تم تسجيل الطلب بنجاح !</h2>
                                    <p class="text-dark">شكرا لكم علي اختيارنا <span class="shown_name"></span> سيتم التواصل معكم قريبا  </p>
{{--                                    <p class="text-dark"> يمكنك إضافة معلومات تفصيلية اكثر الأن او لاحقا من حسابك </p>--}}

                                </div>
                            </div>






                        </form>
                    </div>


                </div>

                <?php
                $services="التمكين";

                ?>
                @include('client.clients')
            </div>

        </div>
    </div>
@endsection
@section('scripts')
<script src="{{asset('assets/vendor/location.js')}}"></script>
    <script >
        let check=document.getElementById('employeeCkeck').onchange=function (){
            console.log("Changed");
            document.getElementById('costDiv').classList.toggle('d-none');
            document.getElementById('paymentBtn').classList.toggle('d-none');
            document.getElementById('submit').classList.toggle('d-none');
        };


        var next_click=document.querySelectorAll(".next_button");
        var main_form=document.querySelectorAll(".main");
        var step_list = document.querySelectorAll(".progress-bar li");
        // var num = document.querySelector(".step-number");
        let formnumber=0;

        next_click.forEach(function(next_click_form){
            next_click_form.addEventListener('click',function(e){
                e.preventDefault();
                if(!validateform()){
                    return false
                }
                formnumber++;
                updateform();
                progress_forward();
                contentchange();
            });
        });
        document.querySelector("#loc").addEventListener('click',function (e) {
            e.preventDefault();
            formnumber=1;
            updateform();
            // progress_forward();
            // contentchange();
        })
        var back_click=document.querySelectorAll(".back_button");
        back_click.forEach(function(back_click_form){
            back_click_form.addEventListener('click',function(){
                formnumber--;
                updateform();
                // progress_backward();
                // contentchange();
            });
        });

        var username=document.querySelector("#user_name");
        var shownname=document.querySelector(".shown_name");

let serviceForm= document.getElementById('serviceForm');
        var submit_click=document.querySelectorAll(".submit_button");
        submit_click.forEach(function(submit_click_form){
            submit_click_form.addEventListener('click',function(e){
                e.preventDefault();
                if(!validateform()){
                    return false
                }
             // document.getElementById('serviceDiv').submit();

                // console.log(serviceForm);
                // serviceForm.classList.remove('d-none');
                // console.log(serviceForm);
                // document.getElementById('submit').remove();
               // submitForm(document.getElementById('serviceDiv'));
                // serviceForm.submit(document.getElementById('serviceDiv'));
                // document.forms[0].submit();
                // document.querySelector(".right-side").classList.add("d-none");
                // shownname.innerHTML= username.value;
                // formnumber++;
                // updateform();
            });
        });

        // var heart=document.querySelector(".fa-heart");
        // heart.addEventListener('click',function(){
        //     heart.classList.toggle('heart');
        // });
        //
        //
        // var share=document.querySelector(".fa-share-alt");
        // share.addEventListener('click',function(){
        //     share.classList.toggle('share');
        // });



        function updateform(){
            main_form.forEach(function(mainform_number){
                mainform_number.classList.remove('active');
            })
            main_form[formnumber].classList.add('active');
        }

        function progress_forward(){
            // step_list.forEach(list => {

            //     list.classList.remove('active');

            // });


          //  num.innerHTML = formnumber+1;
            //step_list[formnumber].classList.add('active');
        }

        function progress_backward(){
            var form_num = formnumber+1;
            // step_list[form_num].classList.remove('active');
        //    num.innerHTML = form_num;
        }

        var step_num_content=document.querySelectorAll(".step-number-content");

        function contentchange(){
            step_num_content.forEach(function(content){
                content.classList.remove('active');
                content.classList.add('d-none');
            });
        //    step_num_content[formnumber].classList.add('active');
        }


        function validateform(){
            validate=true;
            var validate_inputs=document.querySelectorAll(".main.active input");
            validate_inputs.forEach(function(vaildate_input){
                vaildate_input.classList.remove('warning');
                if(vaildate_input.hasAttribute('require')){
                    if(vaildate_input.value.length==0){
                        validate=false;
                        vaildate_input.classList.add('warning');
                    }
                }
            });
            return validate;

        }
        function submitForm(form) {
            const submitFormFunction = Object.getPrototypeOf(form).submit;
            submitFormFunction.call(form);
        }
    </script>
@endsection
