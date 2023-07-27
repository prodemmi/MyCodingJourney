<?php

namespace App\Repositories\Tag;

use App\Models\Tag;
use Illuminate\Support\Collection;

class TagRepository implements ITagRepository
{
    public function list(string ...$selects): Collection
    {
        return Tag::select($selects)->whereHas('posts')->orderBy('weight')->get();
    }
}
