<?php
 
class TestController extends ControllerBase
{
    public function indexAction()
    {
        $tpl='test';
        $this->view->setVar('name','test');
	$this->view->pick($tpl);
    }
}




?>
