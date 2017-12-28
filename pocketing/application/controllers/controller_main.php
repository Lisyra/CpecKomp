<?php
class Controller_Main extends Controller
{
 function __construct()
	{
		$this->model = new Model();
		$this->view = new View();
	}
public function action_index()
{	
  // echo ("1"); 
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	$email = $_POST['email'];  
        $password = $_POST['password']; 
        User::register($email, $password);
        
        }
    
    $data = $this->model->get_data();
    $this->view->generate('main_view.php', null, $data);
    return true;
}    
}


