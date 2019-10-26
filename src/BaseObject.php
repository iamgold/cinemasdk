<?php

namespace iamgold\cinema;

use Requests;

/**
 * This is a base object for all resources of Cinema.
 *
 * @author Eric Huang <iamgold0105@gmail.com>
 * @version 1.0.0
 * @since 2.0.0
 */
class BaseObject
{

    /**
     * construct
     */
    public function __construct()
    {
        if (!$this->apiPath || !is_string($this->apiPath))
            throw new Exception("Undefined apiPath", 404);

        if (!$this->methods || !is_array($this->methods))
            throw new Exception("Undefined methods", 404);
    }

    /**
     * __call
     *
     * @return Requests_Response
     */
    public function __call($name, $args)
    {
        if (!in_array($name, $this->methods))
            throw new Exception("The method $name was not found", 404);

        // get session id
        $sessId = $args[1] ?? null;

        // handle path
        $path = $this->apiPath;
        if (Cinema::$env !== 'prod')
            $path = 'copy/' . $path;

        $headers = ['Cookie' => $sessId];
        $qs = $args[0] ?? null;
        $requestUri = sprintf('http://%s/%s?method=%s', Cinema::$host, $path, $name);
        if (isset($args[0]) && !empty($args[0]))
            $requestUri .= '&' . http_build_query($args[0]);

        $res = Requests::get($requestUri, $headers);
        return $res;
    }
}
