<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Speedy\Http;

use Carbon\Carbon;
use DHL\Entity\AM\GetQuote;
use FedEx\RateService\ComplexType;
use FedEx\RateService\Request;
use FedEx\RateService\SimpleType;
use Omniship\Speedy\Client AS SpeedyClient;
use Omniship\Http\Client;
use Symfony\Component\HttpFoundation\Request as HttpRequest;

class ShippingServicesRequest extends AbstractRequest
{

    /**
     * @var SpeedyClient
     */
    protected $client;

    /**
     * @return GetQuote
     */
    public function getData() {
        $paramCalculation = new \ParamCalculation();
        if(!$this->getClient()->getResultLogin()) {
            return $paramCalculation;
        }

        $paramCalculation->setSenderId($this->getClient()->getResultLogin()->getClientId());
        $paramCalculation->setParcelsCount(1);
        $paramCalculation->setWeightDeclared(1.200);
        $paramCalculation->setDocuments(false);
        $paramCalculation->setPalletized(false);
        if (false) {
            $paramCalculation->setSpecialDeliveryId($specialDeliveryId);
        }
        $paramCalculation->setFixedTimeDelivery(null);
        $paramCalculation->setFragile(true);
        $paramCalculation->setAmountInsuranceBase(99.99);
        $paramCalculation->setAmountCodBase(99.99);
        $paramCalculation->setPayerTypeInsurance(\ParamCalculation::PAYER_TYPE_RECEIVER);
        $paramCalculation->setPayerType(\ParamCalculation::PAYER_TYPE_RECEIVER);
        $paramCalculation->setReceiverSiteId(68134);
        $paramCalculation->setTakingDate(Carbon::now()->format('H:i'));
        $paramCalculation->setAutoAdjustTakingDate(true);
//        $paramCalculation->setWillBringToOfficeId($this->getManager()->getSetting('office_id'));
//        $paramCalculation->setOfficeToBeCalledId($data['office_id']);
        $paramCalculation->setReceiverCountryId(100);
        $paramCalculation->setReceiverPostCode(1000);
        $paramCalculation->setIncludeShippingPriceInCod(true);

        return $paramCalculation;
    }

    public function sendData($data) {
        $response = $this->getClient()->calculate($data);
        return $this->createResponse(!$response && $this->getClient()->getError() ? $this->getClient()->getError() : $response);
    }

    /**
     * @param $data
     * @return ShippingServicesResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new ShippingServicesResponse($this, $data);
    }

    /**
     * @return SpeedyClient
     */
    public function getClient()
    {
        if(is_null($this->client)) {
            $this->client = new SpeedyClient($this->getUsername(), $this->getPassword());
        }
        return $this->client;
    }

}