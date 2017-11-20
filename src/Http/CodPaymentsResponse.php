<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Speedy\Http;

use Carbon\Carbon;
use Omniship\Common\CodPaymentBag;

class CodPaymentsResponse extends AbstractResponse
{
    /**
     * The data contained in the response.
     *
     * @var \CODPayment[]
     */
    protected $data;

    /**
     * @return CodPaymentBag
     */
    public function getData()
    {
        $result = new CodPaymentBag();
        if(!is_array($this->data)) {
            return $result;
        }

        /** @var \CODPayment $data */
        foreach($this->data AS $bol_id => $data) {
            if($data instanceof \CODPayment) {
                $result->put($bol_id, [
                    'id' => $bol_id,
                    'date' => $data->getDate() ? Carbon::createFromFormat('Y-m-d\TH:i:sP', $data->getDate()) : null,
                    'price' => $data->getTotalPayedOutAmount(),
                    'error' => null
                ]);
            } else {
                $result->put($bol_id, [
                    'id' => $bol_id,
                    'date' => Carbon::now(),
                    'price' => 0,
                    'error' => $data
                ]);
            }
        }

        return $result;
    }

}