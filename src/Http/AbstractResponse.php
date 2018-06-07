<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Speedy\Http;

use Omniship\Message\AbstractResponse AS BaseAbstractResponse;

abstract class AbstractResponse extends BaseAbstractResponse
{
    /**
     * Get the initiating request object.
     *
     * @return AbstractRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if(is_string($this->data)) {
            return $this->data;
        }
        return null;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if(is_string($this->data)) {
            if(preg_match('~\(([a-z0-9]{2,})\)~i', $this->data, $match)) {
                return $match[1];
            }
            return md5($this->data);
        }
        return null;
    }
    /**
     * Get the formatted Request.
     *
     * @return null|string
     */
    public function getRequestFormatted()
    {
        if(method_exists($this->getRequest()->getData(), 'toStdClass')) {
            return var_export($this->getRequest()->getData()->toStdClass(), 1);
        }
        return json_encode($this->getData());
    }
    /**
     * {@inheritdoc}
     */
    public function getResponseFormatted()
    {
        return var_export(json_decode(json_encode($this->getRequest()->getClient()->getLatestResponse()), true), 1);
    }

}