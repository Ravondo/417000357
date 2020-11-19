<?php
interface ResponseHandler_Interface
{
    public function giveHeader() : ResponseHeader;

    public function  giveState() : ResponseState;

    public function giveLogger() : ResponseLogger;
}