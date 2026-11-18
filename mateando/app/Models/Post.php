<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $table = 'posts';

    protected $primaryKey = 'id';

    protected $fillable = [
    'titulo',
    'contenido',
    'autor',
    'categoria',
    'category_id',
    'fecha_publicacion'
];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
