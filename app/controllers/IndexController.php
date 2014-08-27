<?php

class IndexController extends ControllerBase
{
    public function initialize()
    {
	    parent::initialize(); 
    }

    public function indexAction()
    {
	    $tpl='home_page';
	    $this->view->pick($tpl);

	    // if (!$this->request->isPost()) {
       //     $this->flash->notice('wo cheng gong le');
	    // }
    }
}
?>
