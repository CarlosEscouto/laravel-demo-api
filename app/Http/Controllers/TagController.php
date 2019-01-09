<?php

namespace App\Http\Controllers;

use Sarala\JsonApiResponse;
use App\Filters\TagsFilter;
use App\Tag;
use App\Http\Transformers\TagTransformer;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return new JsonApiResponse($tags, new TagTransformer(), 'tags');
    }

    public function show(Tag $tag, TagsFilter $filter)
    {
      $data = Tag::filter($filter)->find($tag->id);

      return new JsonApiResponse($data, new TagTransformer(), 'tags');
    }
}
