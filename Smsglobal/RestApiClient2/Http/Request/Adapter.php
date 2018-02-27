<?php
namespace Smsglobal\RestApiClient2\Http\Request;

use Smsglobal\RestApiClient2\Http\Response;

/**
 * An interface for making requests using different HTTP libraries
 *
 * @package Smsglobal\RestApiClient2\Http\Request
 */
interface Adapter
{
    /**
     * Makes a HTTP request
     *
     * @param string $url     URL to request
     * @param string $method  HTTP method to use
     * @param array  $headers Headers to include
     * @param null   $content Body contents if applicable
     * @return Adapter
     */
    public function request(
        $url,
        $method = 'GET',
        array $headers = array(),
        $content = null
    );
}
