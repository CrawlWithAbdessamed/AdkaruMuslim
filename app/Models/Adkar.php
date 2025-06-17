<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Adkar extends Model
{
    use HasFactory;
    /**
     * The users that belong to the adkar.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    
}
