<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movie extends Model //mapping ke table movies
{
    //
    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }
}
