<?php
namespace Sparav\Subscription;

use Illuminate\Support\Facades\Http;

class SubscriptionClientV1
{

    /**
     * Returns the subscription from our db.
     * @param int $subscription_id
     * @return \Illuminate\Http\Client\Response
     */
    public function subscription(int $subscription_id) {
        $subscription = Http::withBasicAuth(env('SPARAV_SUBSCRIPTION_API_AUTH_USERNAME'), env('SPARAV_SUBSCRIPTION_API_AUTH_PASSWORD'))
            ->get("https://sparavsubscriptionapiprod.azurewebsites.net/api/v1/subscription/{$subscription_id}");
        return $subscription;
    }

    /**
     * Returns subscription from sticky.
     * @param string $subscription_id
     * @return \Illuminate\Http\Client\Response
     */
    public function stickysubscription(string $subscription_id) {
        $subscription = Http::withBasicAuth(env('SPARAV_SUBSCRIPTION_API_AUTH_USERNAME'), env('SPARAV_SUBSCRIPTION_API_AUTH_PASSWORD'))
            ->get("https://sparavsubscriptionapiprod.azurewebsites.net/api/v1/subscription/sticky/{$subscription_id}");
        return $subscription;
    }

    /**
     * @param array $subscriptions (SubscriptionAdd model).
     * @return \Illuminate\Http\Client\Response
     */
    public function add(array $subscriptions) {
        $add = Http::withBasicAuth(env('SPARAV_SUBSCRIPTION_API_AUTH_USERNAME'), env('SPARAV_SUBSCRIPTION_API_AUTH_PASSWORD'))
            ->post("https://sparavsubscriptionapiprod.azurewebsites.net/api/v1/subscription", $subscriptions);
        return $add;
    }

    /**
     * @param int $customer_id
     * @param int $subscription_type
     * @return \Illuminate\Http\Client\Response
     */
    public function customersubscriptions(int $customer_id, int $subscription_type) {
        $subscriptions = Http::withBasicAuth(env('SPARAV_SUBSCRIPTION_API_AUTH_USERNAME'), env('SPARAV_SUBSCRIPTION_API_AUTH_PASSWORD'))
            ->get("https://sparavsubscriptionapiprod.azurewebsites.net/api/v1/customer/{$customer_id}/{$subscription_type}");
        return $subscriptions;
    }

    /**
     * Cancels the given subscription IDS.
     * @param array $subscription_ids
     * @param int $customer_id (the holder of subscriptions).
     * @return object
     */
    public function cancel(array $subscription_ids, int $customer_id) {
        $subscriptions = Http::withBasicAuth(env('SPARAV_SUBSCRIPTION_API_AUTH_USERNAME'), env('SPARAV_SUBSCRIPTION_API_AUTH_PASSWORD'))
            ->post("https://sparavsubscriptionapiprod.azurewebsites.net/api/v1/subscription/cancel", ['subscription_ids' => $subscription_ids, 'customer_id' => $customer_id])->object();
        return $subscriptions;
    }


}
