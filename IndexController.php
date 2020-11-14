<?php
class IndexController extends Controller_Abstract
{
    public function run()
    {
        //create model object
        $v = new View();
        $v->setTemplate(TPL_DIR . '/index.tpl.php');

        //set model and view
        $this->setModel(new IndexModel());
        $this->setView($v);

        $this->model->attach($this->view);

        //depending on what is needed
        $data = $this->model->getAll();

        //tell the model to update the changed data
        $this->model->updateThechangedData($data);

        //tell the model to contact the observers
        $this->model->notify();
    }
}