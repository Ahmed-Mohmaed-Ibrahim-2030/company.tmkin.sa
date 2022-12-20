

    @extends('layouts.base')

    @section('name')

{{$subject}}


    @endsection
    @section('message')


@if(isset($mailDate['email']))
    <table style=" direction: rtl">
        <thead>
       <tr>
           <th style="text-align: right;width: 16% ">
               الاسم
           </th>
           <th style="text-align: right">{{$mailDate['name']}}</th>
       </tr>
       <tr>
           <th style="text-align: right">
               البريد
           </th>
           <th style="text-align: right; ">{{$mailDate['email']}}</th>
       </tr>
       <tr>
           <th style="text-align: right">
               الموضوع
           </th>
           <td style="text-align: right">{{$mailDate['subject']}}</td>
       </tr>

       <tr>
           <th style="text-align: right">
               الرسالة
           </th>
           <td style="text-align: right">{{$mailDate['message']}}</td>
       </tr>
        </thead>
    </table>
@else
    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-16" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #e4b16f;" width="100%">
        <tbody>
        <tr>
            <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 640px;" width="640">
                    <caption style="direction: rtl; text-align: center">
                        <strong >
                            السيد/ة   {{$mailDate['name']}}
                        </strong>
                    </caption>
                    <tbody>
                    <tr>

                        <td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 45px; padding-right: 45px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" >
                            <table border="0" cellpadding="0" cellspacing="0" class="text_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
                                <tr>
                                    <td class="pad" style="padding-bottom:5px;padding-left:10px;padding-right:10px;padding-top:25px;">
                                        <div style="font-family: sans-serif">
                                            <div class="" style="font-size: 14px; mso-line-height-alt: 16.8px; color: #555555; line-height: 1.2; font-family: Playfair Display, Georgia, serif;">
                                                <p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;"><a href="http://www.example.com/" rel="noopener" style="text-decoration: none; color: #555555;" target="_blank"><span style="font-size:20px;"><strong></strong></span></a></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <table border="0" cellpadding="0" cellspacing="0" class="text_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
                                <tr>
                                    <td class="pad" style="padding-bottom:5px;padding-left:10px;padding-right:10px;padding-top:5px;">
                                        <div style="font-family: sans-serif">
                                            <div class="" style="font-size: 18px; mso-line-height-alt: 21px; color: #6d7779; line-height: 1.5; font-family:system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji !important; text-align: center">
                                                <p style="margin: 0; font-size: 14px; mso-line-height-alt: 21px;text-align: center">{{$mailDate['message']}}</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
@endif
    @endsection
