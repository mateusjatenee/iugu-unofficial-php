<?php

namespace mateusjatenee;

require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;

/**
 * Base class
 */
class Base
{

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new Client(['base_uri' => 'https://api.iugu.com/v1/']);
    }

    public function post($url, $data)
    {
        $request = $this->client->request('POST', $url, [
            'auth' => [$this->apiKey, ''],
            $data,
        ]);

        $response = json_decode($request->getBody());
    }

    public function get($url, $data = null)
    {
        $request = $this->client->request('GET', $url, [
            'auth' => [$this->apiKey, ''],
        ]);
        $response = json_decode($request->getBody(), true);
        return $response;

    }
}
