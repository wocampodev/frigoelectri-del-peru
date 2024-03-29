<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailConfirmService extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Servicio solicitado exitosamente';
    public $company;
    public $service;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($service)
    {
        $this->service = $service;
        $this->company = [
            'phone' => '934 466 479',
            'email' => 'ventas@frigoelectridelperu.com'
        ];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.orders.confirmService');
    }
}
