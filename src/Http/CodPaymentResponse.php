<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Econt\Http;

use Carbon\Carbon;
use Omniship\Common\CodPayment;
use ResultPickingExtendedInfo;

class CodPaymentResponse extends AbstractResponse
{
    /**
     * The data contained in the response.
     *
     * @var ResultPickingExtendedInfo
     */
    protected $data;

    /**
     * @return CodPayment
     */
    public function getData()
    {
        if(!is_null($this->getCode()) || is_null($cod_payment = $this->data->getCodPayment())) {
            return null;
        }

        $cod_payment = new CodPayment([
            'id' => $this->getRequest()->getBolId(),
            'date' => Carbon::createFromFormat('Y-m-d\TH:i:sP', $cod_payment->getDate()),
            'price' => $cod_payment->getTotalPayedOutAmount()
        ]);
        return $cod_payment;
    }

}