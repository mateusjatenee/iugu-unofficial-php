<?php

namespace mateusjatenee\Iugu;

use mateusjatenee\Iugu\Base;

class Charge extends Base
{
    /**
     * Charges a customer
     * Transação direta a um usuário
     *
     * Charges a customer. It needs the token parameter which can be gathered using iugu.js
     * Gera uma cobrança direta a um usuário. Necessita do envio de um token que pode ser capturado pelo iugu.js
     *
     * @param array $data
     * @return array
     */
    public function chargeCustomer($data)
    {
        return $this->get('charge', $data);
    }
}
