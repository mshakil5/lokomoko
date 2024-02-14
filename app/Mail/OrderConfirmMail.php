<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderConfirmMail extends Mailable
{
    use Queueable, SerializesModels;

    public $array;
    /**
     * Create a new message instance.
     */
    public function __construct($array)
    {
        $this->array = $array;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Order Confirm Mail',
        );
    }

    public function build()
    {
        return $this->from('do-not-reply@thelokomoko.com', 'thelokomoko.com')
        ->replyTo($this->array['cc'], 'Thelokomoko')
        ->subject('Order confirmed successfully.')
        ->markdown('emails.orderconfirm');
    }
}
