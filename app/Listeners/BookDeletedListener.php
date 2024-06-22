<?php

namespace App\Listeners;

use App\Events\BookDeleted;
use App\Jobs\DecrementAuthorBooksCount;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BookDeletedListener
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
    public function handle(BookDeleted $event): void
    {
        DecrementAuthorBooksCount::dispatch($event->book->author);
    }
}
