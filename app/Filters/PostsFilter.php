<?php

namespace App\Filters;

use Carbon\Carbon;
use Sarala\FilterAbstract;

class PostsFilter extends FilterAbstract
{
    protected $lookup = [
        'my' => 'composedByMe',
        'published' => 'published',
        'title' => 'title',
        'slug' => 'slug'
    ];

    public function composedByMe()
    {
        // return $this->builder->composedBy(auth()->user());
    }

    public function published()
    {
        return $this->builder->where('published_at', '<=', Carbon::now()->toDateString());
    }

    public function scheduled()
    {
        return $this->builder->where('published_at', '>', Carbon::now()->toDateString());
    }

    public function title($title)
    {
        return $this->builder->where('title', 'regexp', $title);
    }

    public function slug($slug)
    {
        return $this->builder->where('slug', '=', $slug);
    }
}