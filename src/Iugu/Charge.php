<?php

namespace mateusjatenee\Iugu;

use mateusjatenee\Base;

class Charge extends Base
{
    public function chargeCustomer($data)
    {
        return $this->get('charge', $data);
    }
}
