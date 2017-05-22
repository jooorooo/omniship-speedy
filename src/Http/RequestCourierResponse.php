<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Speedy\Http;

use ResultOrderPickingInfo;

class RequestCourierResponse extends AbstractResponse
{
    /**
     * The data contained in the response.
     *
     * @var ResultOrderPickingInfo[]
     */
    protected $data;

    /**
     * @return bool
     */
    public function getData()
    {
        if(!is_null($this->getCode()) || !is_array($this->data)) {
            return false;
        }

        foreach($this->data as $res) {
            if($error = $res->getErrorDescriptions()) {
                $this->getRequest()->getClient()->setError($error);
                return false;
            }
        }
        return true;
    }

}