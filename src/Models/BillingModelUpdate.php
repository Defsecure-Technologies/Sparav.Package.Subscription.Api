<?php

namespace Sparav\Subscription\Models;

class BillingModelUpdate
{

    /**
     * @OA\Property(type="string")
     */
    public string $subscription_id;

    /**
     * @OA\Property(type="integer")
     */
    public int $billing_model_id;

    public function __construct(string $subscription_id, int $billing_model_id)
    {
        $this->subscription_id = $subscription_id;
        $this->billing_model_id = $billing_model_id;
    }
}

