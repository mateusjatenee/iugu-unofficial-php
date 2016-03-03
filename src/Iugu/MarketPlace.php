<?php

namespace mateusjatenee\Iugu;

use mateusjatenee\Iugu\Base;

class MarketPlace extends Base
{
    /**
     * @param array $data
     * @return array
     */
    public function createSubAccount($data)
    {
        return $this->post('marketplace/create_account', $data);
    }

    /**
     * @param string $id
     * @return array
     */
    public function requestSubAccountVerification($id)
    {
        return $this->post('accounts/' . $id . '/request_verification');
    }

    /**
     * @param string $id
     * @return array
     */
    public function fetchSubAccountInformation($id)
    {
        return $this->get('accounts/' . $id);
    }

    /**
     * @param string $id
     * @return array
     */
    public function requestSubAccountWithdraw($id)
    {
        return $this->post('accounts' . $id . '/request_withdraw');
    }
}
