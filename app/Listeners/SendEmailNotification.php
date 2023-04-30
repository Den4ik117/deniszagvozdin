<?php

namespace App\Listeners;

use App\Events\ApplicationCreated as ApplicationCreatedEvent;
use App\Mail\ApplicationCreated;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ApplicationCreatedEvent $event): void
    {
        try {
            Mail::to(config('app.mail_to'))->send(new ApplicationCreated($event->application));

            $event->application->sent = true;
        } catch (Exception) {
            $event->application->sent = false;
        }

        $event->application->save();
    }
}
