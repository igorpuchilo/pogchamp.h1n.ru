<?php

namespace App\Mail\Shop;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user,$order,$order_prods,$title;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$order,$order_prods,$title)
    {
        $this->user = $user;
        $this->order = $order;
        $this->order_prods = $order_prods;
        $this->title = $title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Order Notification')->markdown('emails.shop.order');
    }
}
