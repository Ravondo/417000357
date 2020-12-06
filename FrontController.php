<?php
class FrontController extends FrontController_Abstract
{
    private function __construct()
    {
        $this->$req = Registry::instance();
    }

    private function __clone()
    {
        $this->$controller = clone $this->$controller;
    }

    public static function run()
    {
        $controller = new FrontController();
        $controller->init();
        $controller->handleRequest();
    }

    protected function init()
    {
        $this->$req->get('application helper')->init();
    }

    protected function handleRequest()
    {
        /*$context = new CommandContext();
        //$req = (string) $context->get('request');
        $handler = RequestHandlerFactory::makeRequestHandler();
        
        if($handler->execute($context) === false)
        {
            //do some error handling
        }*/

        $request = $req->getRequest();
        $context = new CommandContext();
        $cmd = $context->getCommand($request);
        $cmd->execute($request);
    }
}
