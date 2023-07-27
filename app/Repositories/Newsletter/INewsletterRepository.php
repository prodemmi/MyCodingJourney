<?php

namespace App\Repositories\Newsletter;

interface INewsletterRepository
{
    public function create(string $email, string $ipAddress);
}
