<?php

namespace App\Models;

use App\Events\UserCreated;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dispatchesEvents = [
        'created' => UserCreated::class,
    ];

    public function frontPage(): Attribute
    {
        return new Attribute(
            get: fn (string $value) => asset(Storage::url($value)),
            set: fn (string|UploadedFile $value) => $value instanceof UploadedFile ? $value->storePublicly('public/books') : $value
        );
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
