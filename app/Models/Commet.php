<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commet extends Model
{
    protected $fillable = ['body'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
