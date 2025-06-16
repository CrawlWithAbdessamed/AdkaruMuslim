<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adkar extends Model
{
    /**
     * The users that belong to the adkar.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
