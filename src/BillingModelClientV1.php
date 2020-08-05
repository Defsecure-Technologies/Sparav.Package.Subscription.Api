<?php


namespace Sparav\Subscription;


use Illuminate\Support\Facades\Http;
use Sparav\Subscription\Models\BillingModelUpdate;

class BillingModelClientV1
{

    /**
     * Updates the billing model for a
     * @param BillingModelUpdate $billingModelUpdate
     * @return \Illuminate\Http\Client\Response
     */
    public function updateBillingModel(BillingModelUpdate $billingModelUpdate) {
        $subscription = Http::withBasicAuth(env('SPARAV_SUBSCRIPTION_API_AUTH_USERNAME'), env('SPARAV_SUBSCRIPTION_API_AUTH_PASSWORD'))
            ->put("https://sparavsubscriptionapiprod.azurewebsites.net/api/v1/billingmodel", (array) $billingModelUpdate);
        return $subscription;
    }

}
