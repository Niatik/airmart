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
    protected $phone;
    protected $name;

    /**
     * Create a new message instance.
     *
     * @param string $to_address the address to send the email
     * @param string $phone the client's phone
     * @param string $name the client's name
     *
     * @return void
     */
    public function __construct($to_address, $phone, $name)
    {
        $this->to_address = $to_address;
        $this->phone = $phone;
        $this->name = $name;
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
            ->view('emails.call')
            ->with(['name' => $this->name, 'phone' => $this->phone]);
    }
}
