<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class contactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailDate;
    protected $emailFrom;
    protected $senderName;
    public  $subject;
    public  $view="mail.contact-mail";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $mailDate,$emailFrom="tmkin.invest@gmail.com",$senderName="شركة تمكين الأوقاف ")
    {
        //
        $this->mailDate=$mailDate;
        $this->$emailFrom=$emailFrom;
        $this->$senderName=$senderName;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
//    public function content()
//    {
//        return new Content(
//            view: 'mail.contact-mail',
//            with: [
//                'name' => $this->mailDate['name'],
//                'email' => $this->mailDate['email'],
//
//                'message' => $this->mailDate['message'],
//            ]
//        );
//    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }

    public function build()
    {
        return $this->from($this->emailFrom,$this->senderName)->subject($this->subject)->view($this->view);
}
}
