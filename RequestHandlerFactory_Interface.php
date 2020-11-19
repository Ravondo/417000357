<?php
namespace Quwi\framework;

interface RequestHandlerFactory_Interface
{
    public static function makeRequestHandler(string $requests = 'default'): PageController_Command_Abstract;
}