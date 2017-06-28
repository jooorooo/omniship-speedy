<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 12.5.2017 г.
 * Time: 18:03 ч.
 */

namespace Omniship\Speedy\Http;

class GetPdfRequest extends AbstractRequest
{
    /**
     * @return integer
     */
    public function getData() {
        return [
            'bol_id' => $this->getBolId(),
            'type' => $this->getOtherParameters('printer_type')
        ];
    }

    /**
     * @param mixed $data
     * @return GetPdfResponse
     */
    public function sendData($data) {
        $response = $this->getClient()->createPDF($data['bol_id'], $data['type']);
        return $this->createResponse(!$response && $this->getClient()->getError() ? $this->getClient()->getError() : ['pdf' => $response]);
    }

    /**
     * @param $data
     * @return GetPdfResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new GetPdfResponse($this, $data);
    }
}