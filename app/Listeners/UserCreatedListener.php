<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Jobs\IncrementAuthorBooksCount;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserCreatedListener
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
    public function handle(UserCreated $event): void
    {
        IncrementAuthorBooksCount::dispatch($event->book->author);
    }
}
