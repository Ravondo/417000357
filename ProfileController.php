<?php
class ProfileController extends Controller_Abstract
{
    public function run()
    {
        SessionManager::create();

        //create model object
        $sess = new SessionManager();
        $sess->remove('user');

        $v = new View();
        $v->setTemplate(TPL_DIR . '/profile.tpl.php');

        //set model and view
        $this->setModel(new ProfileModel());
        $this->setView($v);

        $this->model->attach($this->view);

        //checks to see if user can access the page
        $user = $sess->see('user');

        if($sess->accessible($user, 'profile'))
        {
            //get all the courses I'm registered in
            $data = $this->model->getAll();

            //tell the model to update the changed data
            $this->model->updateThechangedData($data);

            //tell the model to contact the observers
            $this->model->notify();
        }
        else
        {
            $v->setTemplate(TPL_DIR . '/login.tpl.php');
            $v->display();
        }

        
    }
}