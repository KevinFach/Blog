<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image_path',
        'excerpt',
        'content',
        'is_published',
        'published_at',
        'user_id',
        'category_id'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime'
    ];

    // Relaciones uno a muchos inversa
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacion uno a muchos
    public function commets()
    {
        return $this->hasMany(Commet::class);
    }

    //  Relación muchos a muchos
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
