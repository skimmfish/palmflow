<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReserveStakingActivation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $first_name;
    public $amount;
    
    public function __construct($f_name,$amount)
    {
      $this->first_name = $f_name;
      $this->amount = $amount;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->subject("Confirmation of New Reserve Staking")->withSwiftMessage(function($swift){
        $swift->setReplyTo('no-reply@balmflow.com');
      })->view('emails.staking_confirmations')->with(['first_name'=>$this->first_name,'amount'=>$this->amount]);
    }
}
