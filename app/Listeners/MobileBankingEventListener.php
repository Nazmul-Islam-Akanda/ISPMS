<?php

namespace App\Listeners;

use App\Events\MobileBankingEvent;
use Illuminate\Support\Facades\Cache;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MobileBankingEventListener
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
     * @param  MobileBankingEvent  $event
     * @return void
     */
    public function handle(MobileBankingEvent $event)
    {
        if(Cache::has('Mobile_banking')){
            Cache::forget('Mobile_banking');
        }
    }
}
