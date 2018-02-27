<?php
namespace Smsglobal\RestApiClient2\Http\Response;

use Smsglobal\RestApiClient2\Http\HeaderBag;

/**
 * An interface for HTTP responses using different HTTP libraries
 *
 * @package Smsglobal\RestApiClient2\Http\Response
 */
interface Adapter
{
    /**
     * Gets the body content
     *
     * @return string
     */
    public function getContent();

    /**
     * Gets the headers from the response
     *
     * @return HeaderBag
     */
    public function getHeaders();

    /**
     * Gets the status code
     *
     * @return int
     */
    public function getStatusCode();
}
