<?php
class View implements Observer_Interface
{
    private $tpl ='';
    private $data = [];

    public function setTemplate(string $filename)
    {
        $this->tpl = $filename;
    }

    public function addVar(string $name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display()
    {
        extract($this->data);
        echo $this->tpl;
    }

    public function update(Observable_Model $obs)
    {
        $rec = $obs->giveUpdate();
        foreach ($rec as $r) {
            $this->addVar($r['name'], $r['val']);
        }
        $this->display();
    }
}