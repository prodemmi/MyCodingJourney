<?php

namespace App\Repositories\Newsletter;

use App\Models\Newsletter;

class NewsletterRepository implements INewsletterRepository
{
    public function create(string $email, string $ipAddress)
    {
        if (! Newsletter::where('email', $email)->exists()) {
            return Newsletter::create([
                'email' => $email,
                'ip_address' => $ipAddress,
            ]);
        }

        return false;
    }
}
