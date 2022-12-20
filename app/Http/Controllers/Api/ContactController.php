<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
$mail=new contactMail([
   'name'=>"احمد محمد " ,
    'email'=>'ahmedmoibrahim@gmail.com',
    'message'=>' لقد وصلتنا رسالتك  .شكرا علي تواصلك معنا'
]);
$mail->subject('شكرا على تواصلك معنا ');
        Mail::to('amoibrahim2020@gmail.com')->send($mail);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $request->validate([
        'name'=>"required|string|min:3",
        'email'=>"required|email",
        'subject'=>"required|",
        'body'=>'string|min:5'
    ]);

        $mail=new contactMail([
            'name'=>$request->name ,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->body,
        ]);
        $mail->subject="متواصل جديد";

        $clientMail=new contactMail(
            [
                'name'=>$request->name,
                'message'=>"تم استلام رسالتك , سيتم الرد عليك في اقرب وقت اذا كنت تنتظر ردا  . شكرا علي تواصلك معنا "
            ]
        );
        $clientMail->subject="شركة تمكين الأوقاف ";

       Mail::to('amoibrahim2020@gmail.com')->send($mail);
       Mail::to($request->email)->send($clientMail);
//       return redirect()->route('home');
return response()->json([
   "data"=>"OK"
]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
