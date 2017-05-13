<?php
namespace Admin;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;

class IndexController implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        // TODO : check user session
        $factory = $app['controllers_factory'];
        $factory->get('/','Admin\IndexController::index');

        return $factory;
    }

    public function index(){
        return "Hello world";
    }
}