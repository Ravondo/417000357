<?php
class Registry
{
    private static $instance = null;
    private $session;

    public static function instance(): self
    {
        if(is_null(self::$instance))
        {
            self::$intance = new self();
        }
        return self::instance;
    }

    public function getSession(): Session
    {
        if(is_null($this->session))
        {
            $this->session = new Session();
        }
        return $this->session;
    }
}