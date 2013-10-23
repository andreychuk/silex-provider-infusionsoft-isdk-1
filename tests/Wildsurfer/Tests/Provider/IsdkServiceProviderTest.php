<?php

namespace Wildsurfer\Tests\Provider;

use Silex\Application;
use Silex\Provider\SerializerServiceProvider;
use Wildsurfer\Provider\IsdkServiceProvider;

/*
 * IsdkServiceProviderTest
 */
class IsdkServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    /*
     * testRegister
     */
    public function testRegister()
    {
        $key = 'nokey';
        $appName = 'noname';
        $app = new Application();
        $app->register(new IsdkServiceProvider(), array(
            'isdk.key' => $key,
            'isdk.appName' => $appName
        ));
        $this->assertInstanceOf("\iSDK", $app['isdk']);
        $this->assertEquals($app['isdk']->key, $key);
    }
}
