<?php


namespace Sparav\Subscription\Models;


class SubscriptionAdd
{

    /**
     * @OA\Property(type="integer")
     */
    public int $order_id;

    /**
     * @OA\Property(type="string")
     */
    public string $sticky_subscription_id;

    /**
     * @OA\Property(type="string")
     */
    public string $sticky_order_id;

    /**
     * @OA\Property(type="integer")
     */
    public int $customer_id;

    /**
     * @OA\Property(type="string")
     */
    public string $sticky_customer_id;


}
