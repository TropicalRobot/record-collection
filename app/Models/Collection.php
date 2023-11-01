<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Collection extends Model
{
    use HasFactory;

    /**
     * Get the items for the blog post.
     */
    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }
}
