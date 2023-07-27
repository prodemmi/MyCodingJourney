<?php

namespace App\Services;

use App\Repositories\Newsletter\NewsletterRepository;

class NewsletterService
{
    public function __construct(private readonly NewsletterRepository $newsletterRepository)
    {
    }

    public function create(string $email, string $ipAddress)
    {
        return $this->newsletterRepository->create($email, $ipAddress);
    }
}
