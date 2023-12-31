<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Item extends Model
{
    use HasFactory;

    /**
     * Get the collection that owns the comment.
     */
    public function collections(): BelongsToMany
    {
        return $this->BelongsToMany(Collection::class);
    }
}
