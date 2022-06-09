<?php

namespace App\Listeners;

use App\Events\MobileBankingEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MobileBankingDeletedNotificationListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(MobileBankingEvent $event)
    {
        // Mail::raw('Hi, A mobile banking deleted from database!', function ($message){
        //     $message->to('18103192nazmul@gmail.com')->subject('Mobile Banking Deleted');
        // });
    }
}
