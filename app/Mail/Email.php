<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email extends Mailable
{
    use Queueable, SerializesModels;


    private $stringView;
    private $params;

    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($stringView, $params)
    {
        $this->stringView = $stringView;
        $this->params = $params;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $params = $this->params;

        return $this->view($this->stringView, compact("params"))->subject($this->params->subject)
                ->with([
                    'params' => $this->params
                ]);
    }
}
