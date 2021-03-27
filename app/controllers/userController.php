<?php
class userController extends Controller
{
    public $controller;
    public $model;
	public function __construct($fun='main')
	{
        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('user');
        $this->$fun();
       
    }
    function main(){

	}
	function register(){
        $this->controller->view_object->create_view('register');

	}
	function login(){
        $this->controller->view_object->create_view('login');

	}
function signup(){
	$this->controller->view_object->create_view('register');
		$user_name=$_POST['user_name'];
		$email_id=$_POST['email_id'];
		$count=$this->model->check_user($user_name,$email_id);
					if($count > 0){
						echo 'This User Already Exists';
					}
					else{
		$data = array(
		'user_name' =>"'".$_POST['user_name']."'",
		'email_id' =>"'".$_POST['email_id']."'",
		'password' =>"'".md5($_POST['password'])."'"
		);
		$this->model->signup($data);
					}
//  header('location:home');
}

	function run()
	{    $this->controller->view_object->create_view('login');

		$this->model->login();
		header('location: home');
	}
	
	function logout()
	{
		Session::destroy();
		header('location: ');
		exit;
	}
	function changepassword() {
				
		$this->controller->view_object->create_view('changepassword');
	}
	function runchangepassword() {
		   if(md5($_POST['oldpassword'])==Session::get('password')){
			$arg=$_POST['id'];
			$data=array(
				'password'=>"'".md5($_POST['confirmpassword'])."'"
				   );
	
	 $this->model->changepassword($data,$arg);
	 echo "Your Password is updated Successfully.";
	
		 }
		 else{
			echo "You Entered an Invalid Password.";
			
		}
		
	}
	function forgotpassword(){
		if(isset($_POST['forgot']))
        {
		$this->controller->view_object->create_view('forgotpassword');

		$email=$_POST['email'];
		$this->model->forgotpassword($email);
		
	
		}
		$this->controller->view_object->create_view('forgotpassword');
		
		}
}
?>