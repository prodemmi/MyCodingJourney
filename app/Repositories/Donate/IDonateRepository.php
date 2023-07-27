<?php

namespace App\Repositories\Donate;

use App\Models\Donate;

interface IDonateRepository
{
    public function create(array $data): Donate;
}
