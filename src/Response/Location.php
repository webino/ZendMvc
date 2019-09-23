<?php

namespace Zend\Mvc\Response;

use Zend\Http\PhpEnvironment\Response as PhpResponse;

/**
 * Class Location
 */
class Location extends PhpResponse
{
    /**
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->setStatusCode(301);
        $this->getHeaders()->addHeaderLine('Location', $url);
    }
}
