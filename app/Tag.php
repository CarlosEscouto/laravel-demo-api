<?php

namespace App;

use Sarala\Filterable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Filterable;

    protected $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany(Post::class)->using(PostTag::class);
    }
}
