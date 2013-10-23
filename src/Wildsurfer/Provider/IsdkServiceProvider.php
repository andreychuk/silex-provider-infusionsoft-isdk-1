<?php

namespace Wildsurfer\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;

class IsdkServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['isdk'] = $app->share(function() use ($app) {
            $isdk = new \iSDK();
            $isdk->cfgCon($app['isdk.appName'], $app['isdk.key']);
            return $isdk;
        });
    }
    public function boot(Application $app)
    {
    }
}
