<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CallOrder extends Mailable
{
    use Queueable, SerializesModels;

    /** @var string the address to send the email */
    protected $to_address;

    /**
     * Create a new message instance.
     *
     * @param string $to_address the address to send the email
     *
     * @return void
     */
    public function __construct($to_address)
    {
        $this->to_address = $to_address;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->to($this->to_address)
            ->subject('Заказ звонка')
            ->view('emails.call');
    }
}
