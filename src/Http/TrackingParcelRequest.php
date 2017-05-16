<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 12.5.2017 г.
 * Time: 18:03 ч.
 */

namespace Omniship\FedEx\Http;

use FedEx\TrackService\Request;
use FedEx\TrackService\ComplexType;
use FedEx\TrackService\SimpleType\TrackIdentifierType;

class TrackingParcelRequest extends AbstractRequest
{
    /**
     * @return ComplexType\TrackRequest
     */
    public function getData() {
        $trackRequest = new ComplexType\TrackRequest();

        //authentication & client details
        $trackRequest->WebAuthenticationDetail->UserCredential->Key = $this->getKey();
        $trackRequest->WebAuthenticationDetail->UserCredential->Password = $this->getPassword();
        $trackRequest->ClientDetail->AccountNumber = $this->getUsername();
        $trackRequest->ClientDetail->MeterNumber = $this->getMeter();
        $trackRequest->ClientDetail->Localization->LanguageCode = $this->getLanguageCode();

        $trackRequest->TransactionDetail->CustomerTransactionId = $this->getTransactionId();

        //version
        $trackRequest->Version->ServiceId = 'trck';
        $trackRequest->Version->Major = 5;
        $trackRequest->Version->Minor = 0;
        $trackRequest->Version->Intermediate = 0;

        $trackRequest->PackageIdentifier->Type = TrackIdentifierType::_TRACKING_NUMBER_OR_DOORTAG;
        $trackRequest->PackageIdentifier->Value = $this->getParcelId();

        return $trackRequest;
    }

    public function sendData($data) {
        $rateServiceRequest = new Request();
        $rateServiceRequest->getSoapClient()->__setLocation($this->getEndpoint());
        $response = $rateServiceRequest->getTrackReply($data);

        return $this->createResponse($response);
    }

    /**
     * @param $data
     * @return TrackingParcelResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new TrackingParcelResponse($this, $data);
    }

    /**
     * Get url associated to a specific service
     *
     * @return string URL for the service
     */
    public function getEndpoint()
    {
        return $this->getTestMode() ? Request::TESTING_URL : Request::PRODUCTION_URL;
    }
}