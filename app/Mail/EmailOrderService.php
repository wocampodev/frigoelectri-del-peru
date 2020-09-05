<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailOrderService extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Orden de Servicios';
    public $client;
    public $service;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($client, $service)
    {
        $this->client = $client;
        $this->service = $service;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.orders.service');
    }
}
