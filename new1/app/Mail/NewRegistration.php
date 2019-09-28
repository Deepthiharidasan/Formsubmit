<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewRegistration extends Mailable
{
    use Queueable, SerializesModels;

    public $projects;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($projects)
    {
        $this->projects=$projects;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.new-registration');
    }
}
