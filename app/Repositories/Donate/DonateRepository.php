<?php

namespace App\Repositories\Donate;

use App\Models\Donate;

class DonateRepository implements IDonateRepository
{
    public function create(array $data): Donate
    {
        return Donate::create($data);
    }
}
