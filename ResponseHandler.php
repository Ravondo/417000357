<?php
class ResponseHandler extends ResponseHandler_Interface
{
    protected $data = [];

    public function __construct(ResponseHeader $head, State $state, Logger $log)
    {
        $this->data['header'] = $head;
        $this->data['state'] = $state;
        $this->data['log'] = $log;
    }

    public function giveHeader() : ResponseHeader
    {
        return clone $this->data['header'];
    }

    public function giveState() : ResponseState
    {
        return clone $this->data['state'];
    }

    public function giveLogger() : ResponseLogger
    {
        return clone $this->data['log'];
    }
}
