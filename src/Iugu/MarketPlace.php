<?php

namespace mateusjatenee\Iugu;

use mateusjatenee\Iugu\Base;

class MarketPlace extends Base
{
    public function createSubAccount($data)
    {
        return $this->post('marketplace/create_account', $data);
    }

    public function requestSubAccountVerification($id)
    {
        return $this->post('accounts/' . $id . '/request_verification');
    }

    public function fetchSubAccountInformation($id)
    {
        return $this->get('accounts/' . $id);
    }

    public function requestSubAccountWithdraw($id)
    {
        return $this->post('accounts' . $id . '/request_withdraw');
    }
}
