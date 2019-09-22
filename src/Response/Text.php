<?php

namespace Zend\Mvc\Response;

use Zend\Http\PhpEnvironment\Response as PhpResponse;

/**
 * Class Text
 */
class Text extends PhpResponse
{
    /**
     * @inheritDoc
     */
    protected $headers = 'Content-Type: text/plain';

    /**
     * @param string $content
     */
    public function __construct($content)
    {
        $this->setContent($content);
    }
}
