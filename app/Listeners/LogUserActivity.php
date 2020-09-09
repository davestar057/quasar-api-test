<?php

namespace App\Listeners;

use App\ActivityLog;
use App\Events\UserActivity;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class LogUserActivity
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
     * @param  UserActivity  $event
     * @return void
     */
    public function handle(UserActivity $event)
    {
        $Log = new ActivityLog();

        $Log->user_id = $event->user->id;
        $Log->activity = $event->type;
        $Log->save();

    }
}
