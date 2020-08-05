<?php


namespace Sparav\Subscription;


use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Sparav\Subscription\Models\OfferUpdate;

class OfferClientV1
{

    /**
     * @param OfferUpdate $offerUpdate
     * @return Response
     */
    public function updateOfferId(OfferUpdate $offerUpdate)
    {
        $updateResponse = Http::withBasicAuth(env('SPARAV_SUBSCRIPTION_API_AUTH_USERNAME'), env('SPARAV_SUBSCRIPTION_API_AUTH_PASSWORD'))
            ->put("https://sparavsubscriptionapiprod.azurewebsites.net/api/v1/offer", (array) $offerUpdate);
        return $updateResponse;
    }

}
