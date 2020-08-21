<?php
namespace Sparav\Subscription;

use Illuminate\Support\Facades\Http;

class SubscriptionClientV1
{

    public function subscription(string $subscription_id) {
        $subscription = Http::withBasicAuth(env('SPARAV_SUBSCRIPTION_API_AUTH_USERNAME'), env('SPARAV_SUBSCRIPTION_API_AUTH_PASSWORD'))
            ->get("https://sparavsubscriptionapiprod.azurewebsites.net/api/v1/subscription/{$subscription_id}");
        return $subscription;
    }

    /**
     * @param array $subscriptions (SubscriptionAdd model).
     * @return \Illuminate\Http\Client\Response
     */
    public function add(array $subscriptions) {
        $add = Http::withBasicAuth(env('SPARAV_SUBSCRIPTION_API_AUTH_USERNAME'), env('SPARAV_SUBSCRIPTION_API_AUTH_PASSWORD'))
            ->get("https://sparavsubscriptionapiprod.azurewebsites.net/api/v1/subscription", $subscriptions);
        return $add;
    }

}
