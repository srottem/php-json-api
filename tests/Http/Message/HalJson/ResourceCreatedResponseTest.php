<?php

/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 8/1/15
 * Time: 12:27 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace NilPortugues\Tests\Api\Http\Message\HalJson;

use NilPortugues\Api\Http\Message\HalJson\ResourceCreatedResponse;

class ResourceCreatedResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testResponse()
    {
        $json = json_encode([]);
        $response = new ResourceCreatedResponse($json);

        $this->assertEquals(201, $response->getStatusCode());
        $this->assertEquals(['application/hal+json'], $response->getHeader('Content-type'));
    }
}