<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewCommandeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $commande;
    public $pictures;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($commande, $pictures)
    {
        $this->commande = $commande;
        $this->pictures = $pictures;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $view = $this->markdown('emails.newCommandeMail');

        foreach($this->pictures as $picture){
            $view->attach('storage/'.$picture);
        }
        return $view->subject("Nouvelle commande");
    }
}
