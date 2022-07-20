<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Newuser extends Mailable
{
    use Queueable, SerializesModels;

    public $customSenderName;
    public $subject;
    public $reply_to;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customSenderName,$subject,$reply_to)
    {
        $this->customSenderName = $customSenderName;
        $this->reply_to = $reply_to;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($subject)->view('emails.newuser')->with(['reply_to'=>$this->reply_to,'custom_sender'=>$customSenderName]);
    }
}
