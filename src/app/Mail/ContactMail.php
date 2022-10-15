<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $posts;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $posts)
    {
        $this->posts = $posts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.contact')
            ->to($this->posts['email'])
            ->from('info@example.com')
            ->subject('【XXXXレストラン】 お問い合わせ承諾のお知らせ');
    }
}
