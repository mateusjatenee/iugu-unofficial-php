<?php

namespace mateusjatenee\Iugu;

use mateusjatenee\Iugu\Base;

class Invoice extends Base
{
    /**
     * @param array $data
     * @return array
     */
    public function createInvoice($data)
    {
        return $this->post('invoices', $data);
    }

    /**
     * @param string $id
     * @return array
     */
    public function fetchInvoice($id)
    {
        return $this->get('invoices/' . $id);
    }

    /**
     * @param string $id
     * @param array $data
     * @return array
     */
    public function changeInvoice($id, $data)
    {
        return $this->put('invoices' . $id, $data);
    }

    /**
     * @return array
     */
    public function listInvoices()
    {
        return $this->get('invoices');
    }
}
