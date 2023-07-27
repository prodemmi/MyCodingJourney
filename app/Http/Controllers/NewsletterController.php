<?php

namespace App\Http\Controllers;

use App\Services\NewsletterService;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __construct(public readonly NewsletterService $newsletterService)
    {
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        $result = $this->newsletterService->create($request->input('email'), $request->ip());

        return $result ? back()->with('email-added', 'Email added.') : back()->with('email-exists', 'Email exists.');
    }
}
