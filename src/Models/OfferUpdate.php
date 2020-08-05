<?php

namespace Sparav\Subscription\Models;

class OfferUpdate
{

    /**
     * @OA\Property(type="string")
     */
    public string $subscription_id;

    /**
     * @OA\Property(type="integer")
     */
    public int $offer_id;

    /**
     * @OA\Property(type="integer")
     */
    public int $product_id;

    public function __construct(string $subscription_id, int $offer_id, int $product_id)
    {
        $this->subscription_id = $subscription_id;
        $this->offer_id = $offer_id;
        $this->product_id = $product_id;
    }
}
