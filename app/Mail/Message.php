<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Message extends Mailable
{
    use Queueable, SerializesModels;

    private $validated;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $validated)
    {
        $this->validated = $validated;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): Message
    {
        return $this->subject('Новое сообщение')
            ->view('emails.message')
            ->with(['validated' => $this->validated]);
    }
}
