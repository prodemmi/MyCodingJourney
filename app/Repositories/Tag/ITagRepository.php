<?php

namespace App\Repositories\Tag;

use Illuminate\Support\Collection;

interface ITagRepository
{
    public function list(string ...$selects): Collection;
}
