<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class Homemail extends Mailable
{

    public function __construct($data)
    {
        $this->data = $data;
    }

    public  function build()
{
    return $this->subject('Your whitepaper download') //Опционально
    ->view('emails.homemail')->with(['data'=> $this->data]);

}


}