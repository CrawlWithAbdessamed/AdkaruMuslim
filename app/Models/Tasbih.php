<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tasbih extends Model
{
    use HasFactory;

    // The users that belongs to the tasbih
    public function users(): belongsToMany 
    {
        return $this->belongsToMany(User::class);
    }
}
