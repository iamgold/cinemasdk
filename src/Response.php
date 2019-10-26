<?php

namespace iamgold\cinema;

use Exception;
use Requests_Response;

/**
 * This class is used to access response of Requests
 *
 * @author Eric Huang <iamgold0105@gmail.com>
 * @version 1.0.0
 */
class Response
{
    /**
     * @var Requests_Response $raw
     */
    private $raw;

    /**
     * @var array $data
     */
    private $data;

    /**
     * @var Requests_Response $response
     */
    public function __construct(Requests_Response $raw)
    {
        $this->raw = $raw;
        $this->data = json_decode($raw->body, true);
    }

    /**
     * @return bool
     */
    public function isHttpSuccess()
    {
        return $this->raw->success;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data ?? null;
    }

    /**
     * @return Requests_Response
     */
    public function getRaw()
    {
        return $this->raw;
    }
}
