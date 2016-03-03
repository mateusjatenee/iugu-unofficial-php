<?php

namespace mateusjatenee\Iugu;

use mateusjatenee\Iugu\Base;

class Customer extends Base
{

    public function listClients()
    {
        return $this->get('customers');
    }

    public function createCustomer($data)
    {
        return $this->post('customers', $data);
    }

    public function fetchClient($id)
    {
        return $this->get('customers/' . $id);
    }

    public function changeClient($id, $obj)
    {
    	return $this->put('customers/' . $id, $obj);
    }

    public function deleteClient($id);
    {
    	return $this->delete('customers/' . $id);
    }

}
