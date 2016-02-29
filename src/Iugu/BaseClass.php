<?php

namespace Iugu\Iugu;

use GuzzleHttp\Client;

/**
 * Base class
 */
class BaseClass
{

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    protected $base_url = 'https://api.iugu.com/v1/';

    public function create($type, $data, $url)
    {
        $client = new Client();
        $response = $client->request($type, $base_url . $url, [
            $this->apiKey,
            $data,
        ]);

        return $response->getBody();
    }
}
