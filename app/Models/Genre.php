<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model //mapping ke table Genres
{
    //
    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class);
    }
}
