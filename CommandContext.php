<?php
namespace Quwi\framework;

class CommandContext extends CommandContext_Abstract
{
    protected $data = [];
    protected $errors = [];

    public function add(string $key, $val)
    {
        $this->data = $_REQUEST;
    }

    public function get(string $key)
    {
        if(isset($this->data[$key]))
        {
            return $this->data[$key];
        }
        return null;
    }

    public function getErrors(): array
    {
        return [];
    }

    protected function setError($error)
    {
         $this->error = $error;
    }
}
