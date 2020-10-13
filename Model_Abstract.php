<?php
abstract class Model_Abstract
{
    abstract public function getAll() : array;

    abstract public function getRecord(string $id) : array;

    public function loadData(array $data)
    {

    }
}