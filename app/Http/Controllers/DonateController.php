<?php

namespace App\Http\Controllers;

use App\Services\DonateService;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function __construct(public DonateService $donateService)
    {
    }

    public function donate(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $price = $request->input('price');
        $currency = $request->input('currency');
        $purpose = $request->input('purpose');

        return $this->donateService->donate($name, $email, $price, $currency, $purpose);
    }
}
