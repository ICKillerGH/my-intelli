<?php

namespace App\Listeners;

use App\Events\BookCreated;
use App\Jobs\IncrementAuthorBooksCount;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BookCreatedListener
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
    public function handle(BookCreated $event): void
    {
        IncrementAuthorBooksCount::dispatch($event->book->author);
    }
}
