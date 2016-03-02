<?php

namespace mateusjatenee\Iugu;

use mateusjatenee\Base;

class Charge extends Base
{
    public function charge($data)
    {
        return $this->get('charge', $data);
    }
}
