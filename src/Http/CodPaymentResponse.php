<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Speedy\Http;

use Carbon\Carbon;
use Omniship\Common\CodPayment;
use CODPayment AS SpeedyCODPayment;

class CodPaymentResponse extends AbstractResponse
{
    /**
     * The data contained in the response.
     *
     * @var SpeedyCODPayment
     */
    protected $data;

    /**
     * @return CodPayment
     */
    public function getData()
    {
        if(!is_null($this->getCode()) || !$this->data) {
            return null;
        }

        $cod_payment = new CodPayment([
            'id' => $this->getRequest()->getBolId(),
            'date' => Carbon::createFromFormat('Y-m-d\TH:i:sP', $this->data->getDate()),
            'price' => $this->data->getTotalPayedOutAmount()
        ]);
        return $cod_payment;
    }

}