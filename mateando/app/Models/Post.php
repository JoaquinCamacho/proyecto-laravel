<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $table = 'posts';

    protected $primaryKey = 'id';

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
