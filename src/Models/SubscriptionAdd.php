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


    /**
     * @OA\Property(type="string")
     */
    public string $product_name;


    public function __construct(int $order_id, string $sticky_subscription_id, string $sticky_order_id, int $customer_id, string $sticky_customer_id, string $product_name)
    {

        $this->order_id = $order_id;
        $this->sticky_subscription_id= $sticky_subscription_id;
        $this->sticky_order_id = $sticky_order_id;
        $this->customer_id = $customer_id;
        $this->sticky_customer_id = $sticky_customer_id;
        $this->product_name = $product_name;


    }


}
