<?php
class FrontController extends FrontController_Abstract
{
    private function __construct()
    {

    }

    private function __clone()
    {

    }

    public static function run()
    {
        $controller = new FrontController();
        $controller->init();
        $controller->handleRequest();
    }

    protected function init()
    {

    }

    protected function handleRequest()
    {

    }
}