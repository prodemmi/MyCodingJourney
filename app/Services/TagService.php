<?php

namespace App\Services;

use App\Repositories\Tag\TagRepository;
use Illuminate\Support\Collection;

class TagService
{
    public function __construct(private readonly TagRepository $tagRepository)
    {
    }

    public function getAll(string ...$selects): Collection
    {
        return $this->tagRepository->list(...$selects);
    }
}
