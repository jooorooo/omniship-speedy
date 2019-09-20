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
use MoneyTransferPayment AS SpeedyMoneyTransferPayment;

class CodPaymentResponse extends AbstractResponse
{
    /**
     * The data contained in the response.
     *
     * @var SpeedyCODPayment|SpeedyMoneyTransferPayment
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

        return new CodPayment([
            'id' => $this->getRequest()->getBolId(),
            'date' => Carbon::createFromFormat('Y-m-d\TH:i:sP', $this->data->getDate(), 'Europe/Sofia'),
            'price' => $this->data->getTotalPayedOutAmount(),
            'type' => $this->data instanceof SpeedyMoneyTransferPayment ? 'money_transfer' : 'cod'
        ]);
    }

}