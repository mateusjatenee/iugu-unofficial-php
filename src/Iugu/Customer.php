<?php

namespace mateusjatenee\Iugu;

use mateusjatenee\Iugu\Base;

class Customer extends Base
{

    /**
     * Returns all the clients
     * Retorna todos os clientes
     *
     * @return array
     */
    public function listClients()
    {
        return $this->get('customers');
    }

    /**
     * Creates a customer
     * Cria um cliente
     *
     * @param array $data
     * @return array
     */
    public function createCustomer($data)
    {
        return $this->post('customers', $data);
    }

    /**
     * Fetch a singular client based on his ID
     * Retorna um cliente baseado no ID dele
     *
     * @param string $id
     * @return array
     */
    public function fetchClient($id)
    {
        return $this->get('customers/' . $id);
    }

}
