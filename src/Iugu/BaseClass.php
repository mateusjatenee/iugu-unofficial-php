<?php

namespace Iugu\Iugu;

/**
 * Base class
 */
class BaseClass
{

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public static function hello()
    {
        return 'hello';
    }
}
