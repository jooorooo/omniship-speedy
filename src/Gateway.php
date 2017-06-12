<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 11.5.2017 г.
 * Time: 17:18 ч.
 */

namespace Omniship\Speedy;

use Carbon\Carbon;
use Omniship\Common\Address;
use Omniship\Speedy\Http\CancelBillOfLadingRequest;
use Omniship\Speedy\Http\CodPaymentRequest;
use Omniship\Speedy\Http\CreateBillOfLadingRequest;
use Omniship\Speedy\Http\RequestCourierRequest;
use Omniship\Speedy\Http\ShippingServicesRequest;
use Omniship\Speedy\Http\TrackingParcelRequest;
use Omniship\Common\AbstractGateway;
use Omniship\Speedy\Http\ValidateAddressRequest;
use Omniship\Speedy\Http\ValidateCredentialsRequest;
use Omniship\Speedy\Http\ValidatePostCodeRequest;

class Gateway extends AbstractGateway
{

    private $name = 'Speedy';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return array(
            'username' => '',
            'password' => '',
        );
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->getParameter('username');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setUsername($value)
    {
        return $this->setParameter('username', $value);
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->getParameter('password');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }

    /**
     * @param array $parameters
     * @return ShippingServicesRequest
     */
    public function getServices(array $parameters = [])
    {
        return $this->createRequest(ShippingServicesRequest::class, $this->getParameters() + $parameters);
    }

    /**
     * @param array $parameters
     * @return TrackingParcelRequest
     */
    public function trackingParcel(array $parameters = [])
    {
        return $this->createRequest(TrackingParcelRequest::class, $this->getParameters() + $parameters);
    }

    /**
     * @param array $parameters
     * @return CreateBillOfLadingRequest
     */
    public function createBillOfLading(array $parameters = [])
    {
        return $this->createRequest(CreateBillOfLadingRequest::class, $this->getParameters() + $parameters);
    }

    /**
     * @param $bol_id
     * @param null $cancelComment
     * @return CancelBillOfLadingRequest
     */
    public function cancelBillOfLading($bol_id, $cancelComment = null)
    {
        $this->setBolId((float)$bol_id)->setCancelComment($cancelComment);
        return $this->createRequest(CancelBillOfLadingRequest::class, $this->getParameters());
    }

    /**
     * @param $bol_id
     * @param null|Carbon $date
     * @return RequestCourierRequest
     */
    public function requestCourier($bol_id, Carbon $date = null)
    {
        return $this->createRequest(RequestCourierRequest::class, $this->setBolId(array_map('floatval', (array)$bol_id))->setDate($date)->getParameters());
    }

    /**
     * @param $bol_id
     * @return CodPaymentRequest
     */
    public function codPayment($bol_id)
    {
        return $this->createRequest(CodPaymentRequest::class, $this->setBolId($bol_id)->getParameters());
    }

    /**
     * @param Address $address
     * @return ValidateAddressRequest
     */
    public function validateAddress(Address $address)
    {
        return $this->createRequest(ValidateAddressRequest::class, $this->setAddress($address)->getParameters());
    }

    /**
     * @param array $parameters
     * @param null|bool $test_mode
     *      if set null get mode from currently instance
     * @return ValidateCredentialsRequest
     */
    public function validateCredentials(array $parameters = [], $test_mode = null)
    {
        $instance = new Gateway();
        $instance->initialize($parameters);
        $instance->setTestMode(is_null($test_mode) ? $this->getTestMode() : (bool)$test_mode);
        return $instance->createRequest(ValidateCredentialsRequest::class, $instance->getParameters());
    }

    /**
     * @param Address $address
     * @return ValidatePostCodeRequest
     */
    public function validatePostCode(Address $address)
    {
        return $this->createRequest(ValidatePostCodeRequest::class, $this->setAddress($address)->getParameters());
    }

    /**
     * Supports Cash On Delivery
     *
     * @return boolean True if this gateway supports the Cash On Delivery
     */
    public function supportsCashOnDelivery()
    {
        return true;
    }

    /**
     * Supports Insurance
     *
     * @return boolean True if this gateway supports the Insurance
     */
    public function supportsInsurance()
    {
        return true;
    }
}