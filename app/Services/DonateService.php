<?php

namespace App\Services;

use App\Models\Donate;
use App\Repositories\Donate\DonateRepository;
use Ramsey\Uuid\Uuid;

class DonateService
{
    const URL = 'https://test.bitpay.com/invoices';

    const HEADER = [
        'Content-Type'     => 'application/json',
        'X-Accept-Version' => '2.0.0',
        'accept'           => 'application/json',
    ];

    public function __construct(public DonateRepository $donateRepository)
    {
    }

    public function donate(string $name, string $email, string|float|int $price, string $currency, string $purpose) : Donate
    {
        $payload = [
            'token'                                  => env('BITPAY_TOKEN'),
            'price'                                  => $price,
            'currency'                               => 'USD',
            'bitpayIdRequired'                       => true,
            'merchantName'                           => 'Emad Malekpour',
            'forcedBuyerSelectedTranscationCurrency' => 'string',
            'forcedBuyerSelectedWallet'              => 'string',
            'orderId'                                => $orderId = Uuid::uuid4(),
            'itemDesc'                               => 'string',
            'itemCode'                               => 'string',
            'itemizedDetails'                        => [
                'amount'      => 'string',
                'description' => 'string',
                'isFee'       => true,
            ],
            'notificationEmail'                      => "donate-notification?email=$email&order-id=$orderId",
            'notificationURL'                        => "donate-notification?email=$email&order-id=$orderId",
            'redirectURL'                            => "donate-done?name=$name&email=$email&order-id=$orderId",
            'closeURL'                               => "donate-done?email=$email&order-id=$orderId",
            'autoRedirect'                           => true,
            'posData'                                => 'string',
            'guid'                                   => 'string',
            'transactionSpeed'                       => 'string',
            'fullNotifications'                      => true,
            'extendedNotifications'                  => true,
            'physical'                               => true,
            'buyerSms'                               => 'string',
            'buyer'                                  => [
                'name'   => $name,
                'email'  => $email,
                'notify' => true,
            ],
            'jsonPayProRequired'                     => 'string',
            'acceptanceWindow'                       => 0,
        ];

        $failed = false;

        //        try {
        //            $result = Http::withHeaders(self::HEADER)->post(self::URL, $payload);
        //            $failed = $result->status() !== 200;
        //
        //
        //        } catch (\Exception $exception) {}

        return $this->donateRepository->create(compact(
            'name',
            'email',
            'price',
            'currency',
            'purpose',
            'failed',
        ));
    }
}
