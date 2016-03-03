<?php

namespace mateusjatenee\Iugu;

use mateusjatenee\Iugu\Base;

class Invoice extends Base
{
    public function createInvoice($data)
    {
        return $this->post('invoices', $data);
    }

    public function fetchInvoice($id)
    {
        return $this->get('invoices/' . $id);
    }

    public function changeInvoice($id, $data)
    {
        return $this->put('invoices' . $id, $data);
    }

    public function listInvoices()
    {
        return $this->get('invoices');
    }
}
