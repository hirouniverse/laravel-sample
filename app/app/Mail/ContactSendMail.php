<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSendMail extends Mailable
{
    use Queueable, SerializesModels;

    private $emai;
    private $title;
    private $description;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->email = 'hiro.kikuchi.universe@gmail.com';
        $this->title = $inputs['title'];
        $this->description = $inputs['description'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('hironori.kikuchi.pgm@gmail.com')
            ->subject('自走送信メール')
            ->view('post.mail')
            ->with([
                'email' => $this->email,
                'title' => $this->title,
                'description' => $this->description
            ]);
    }
}
