<?php
use Phalcon\Tag as Tag;

class SessionController extends ControllerBase
{
  public function initialize() 
  {
      Tag::setTitle('Sign Up/Sign In');
      parent::initialize();
  }

  public function indexAction()
  {
	  $tpl='signin';
	  $this->view->pick($tpl);
  }

  private function _registerSession($user)
  {
      $this->session->set('auth', array(
          'id' => $user->id,
          'name' => $user->user_name
      ));
  }

  public function loginAction()
  {
	  
	    
	  if($this->request->isPost())
      {
		  
          //Taking the variables sent by POST
          $user_name = $this->request->getPost('email');
          $password  = $this->request->getPost('password');

          $password = sha1($password);

          //Find for the user in the database
          $user = Users::findFirst("user_name='$user_name' AND password='$password'");
	  if ($user != false) {
              $this->_registerSession($user);
              $this->flash->success('Welcome '.$user->user_name);
              
              header('Location: http://'.$_SERVER['HTTP_HOST'].'/index');
              exit;
	  }
          $this->flash->error("Wrong user_name or password"); 
	  }
      header('Location: http://'.$_SERVER['HTTP_HOST'].'/session');
  }

  public function registerAction()
  {
	  if($this->request->isPost())
	  {
		  $user_name = $this->request->getPost('user_name',array('string', 'striptags'));
		  $password = $this->request->getPost('password');
		  $repeatPassword = $this->request->getPost('repeatPassword');

		  if($password != $repeatPassword)
		  {
			  $this->flash->error('Passwords are different');
			  return false;
		  }

		  $user = new Users();
		  $user->user_name = $user_name;
		  $user->password = sha1($password);

		  if ($user->save() == false) 
		  {
			  foreach ($user->getMessages() as $message) 
			  {
		             $this->flash->error((string) $message);
			  }
		  }
		  else
		  {
			  Tag::setDefault('user_name','your name');
			  Tag::setDefault('password', '');
			  $this->flash->success('Thanks for sign-up, please log-in');
			  return $this->forward('index/index');
		  }

	  }
  
  }

  public function logoutAction()
  {
	  $this->session->remove('auth');
	  $this->flash->success('Goodbye!');
	  return $this->forward('index/index');
  
  }


}

?>
