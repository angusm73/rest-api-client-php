<?php
namespace Smsglobal\RestApiClient2\Http;

use Smsglobal\RestApiClient2\Http\Request;

class CurlTest extends \PHPUnit_Framework_TestCase
{
    const ADAPTER = 'Smsglobal\\RestApiClient\\Http\\Request\\Curl';

    public function testStatusCode()
    {
        $request = new Request('http://httpbin.org/status/418', self::ADAPTER);
        $this->assertEquals(418, $request->get()->getStatusCode());
    }
}
