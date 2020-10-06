<?php

class userModel extends Model
{
	function __construct(){
		$this->db=new DB();
		Session::init();
	}
	 function check_user($user_name,$email_id)
	{ $table=array('register');
		$result= $this->db->cols()
		->table($table)
		->where('user_name','=',"'".$user_name."'")
		->where('email_id','=',"'".$email_id."'")
		->get()
		->execute()
		->fetch();
		$count = count($result);
		echo $count;
		return $count;
	}
	 function signup($data)
	{$table=array('register');
		echo 'hhhh';
		$result=  $this->db->cols($data)->table($table)->insert()->execute();
	
	}
	public function login()
	{
		$table=array('register');
		echo 'ffsdf';
		
		$user_name=$_POST['user_name'];
		$password=md5($_POST['password']);
		
		$res= $this->db->cols()
		->table($table)->where('user_name','=',"'".$user_name."'")
		->where('password','=',"'".$password."'")
		->get()
		->execute()
		->fetch();
		$count = count($res);
		
		if ($count > 0) {
			echo 'ffsdf';
			Session::init();
			Session::set('role', "user");
			Session::set('id', $res[0]['id']);
			Session::set('loggedIn', true);
			Session::set('user_name', $user_name);
			Session::set('password', $res[0]['password']);
		
		} 
		   else {
			Session::set('loggedIn', false);
		
		}
		
		
	}
	public function changepassword($data,$arg)
	{$table=array('register');
		print_r( $data);
		$que= $this->db->cols($data)->settingcol()->table($table)->
		where('id','=',Session::get('id'))->
		update()->execute();
			
	}
	public function forgotpassword($email){
		$table=array('register');
		
		$que=$this->db->cols()
		->table($table)
		->where('email_id','=',"'".$email."'")
		->get()
		->execute()
		->fetch();
				if((!strcmp($email, $que[0]['email_id']))){
						/*Mail Code*/
						$to =  $que[0]['email_id'];
						$subject = "Password";
						$txt = "Your password is  ".$que[0]['email_id'] ;
						$headers = "From: password@example.com" . "\r\n" .
						"CC: jone@example.com";
						mail($to,$subject,$txt,$headers);
				}
	}
}
?>