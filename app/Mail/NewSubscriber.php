<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewSubscriber extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @param void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view( 'mail.subscription.new' )
            ->from( config('mail.from.address'), config('app.name') )
            ->replyTo( config('mail.from.address'), config('app.name') )
            ->subject( 'Välkommen till klubben - ' . config('app.name') )
            ->priority(2);
    }
}
