<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tasbih extends Model
{
    // The users that belongs to the tasbih
    public function users(): belongsToMany 
    {
        return $this->belongsToMany(User::class);
    }
}
