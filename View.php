<?php
class View implements Observer_Interface
{
    private $tpl ='';
    private $data = [];

    public function setTemplate(string $filename)
    {
        if(!file_exists($filename))
        {
            trigger_error('Invalid template given (' . $filename .') No such file found', E_USER_ERROR);
            exit;
        }
        $this->tpl = $filename;
    }

    public function addVar(string $name, $value)
    {
        if(preg_match('/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/', $name) == 0)
        {
            trigger_error('Invalid variable name used', E_USER_ERROR);
        }
        $this->data[$name] = $value;
    }

    public function display()
    {
        extract($this->data);
        require $this->tpl;
    }

    public function update(Observable_Model $obs)
    {
        $rec = $obs->giveUpdate();
        foreach ($rec as $k=>$r) {
            $this->addVar($k, $r);
        }
        $this->display();
    }
}