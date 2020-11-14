<?php
use PHPUnit\Framework\TestCase;

class ObservableModelTest
{
    public function modelObjectCreatedTest()
    {
        
    }

    public function checkObservableDetachTest()
    {

    }

    public function checkObservableAttachTest()
    {

    }

    public function getAllRecordsTest()
    {
        $model = new Observable_Model();
        $json = $model->getAll();
        $this->assertCount(1, $json[0]);
    }

    public function getRecordTest()
    {
        $model = new Observable_Model();
        $json = $model->getRecord();
        $this->assertCount(1, $json[0]);
    }
}