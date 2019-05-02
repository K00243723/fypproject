<?php 

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('User_Model');
		$this->load->library('session');
		$this->load->model('Notice_Model');
		$this->load->model('Benefit_Model');
		$this->load->helper('URL');
	}

	public function index() {
		//capture an array of all notices 
		//$data["AllNotices"] = $this->Notice_Model->getAllNotices();	
		//$noticeData = array('AllNoticeData'  => $data["AllNotices"]);
		//$this->session->set_userdata($noticeData);	
		$this->load->view("homePage");
	}
	public function doBarchart1(){
		$this->load->view("Barchart1");
	}
		
	public function writeBarchart1() {
		// csv file name
		$filename = "data.csv"; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
   
		// get data 
		$maternityLeaveData = $this->Notice_Model->getAllMaternityLeave();

		// csv file creation 
		$file = fopen('php://output', 'w');
 
		// csv file header
		$header = array("Country","Weeks"); 
		fputcsv($file, $header);
   
		// write each csv file line from table data
		foreach ($maternityLeaveData as $key=>$line){ 
			fputcsv($file,$line); 
		}
		
		//close csv file
		fclose($file); 
		exit;
	}
	public function doBarchart2(){
   $this->load->view("Barchart2");
}
public function writeBarchart2() {
		// csv file name
		$filename = "parentaldata.csv"; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
   
		// get data 
		$parentalLeaveData = $this->Notice_Model->getAllParentalLeave();

		// csv file creation 
		$file = fopen('php://output', 'w');
 
		// csv file header
		$header = array("Country","Weeks"); 
		fputcsv($file, $header);
   
		// write each csv file line from table data
		foreach ($parentalLeaveData as $key=>$line){ 
			fputcsv($file,$line); 
		}
		
		//close csv file
		fclose($file); 
		exit;
	}
	public function doBarchart3(){
   $this->load->view("Barchart3");
}
public function writeBarchart3() {
		// csv file name
		$filename = "paternitydata.csv"; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
   
		// get data 
		$paternityLeaveData = $this->Notice_Model->getAllPaternityLeave();

		// csv file creation 
		$file = fopen('php://output', 'w');
 
		// csv file header
		$header = array("Country","Weeks"); 
		fputcsv($file, $header);
   
		// write each csv file line from table data
		foreach ($paternityLeaveData as $key=>$line){ 
			fputcsv($file,$line); 
		}
		
		//close csv file
		fclose($file); 
		exit;
	}

	public function doBenefits(){
		$this->load->view("benefits");
	}
	public function doParental(){
		$this->load->view("parental");
	}
	public function doMaternity(){
		$this->load->view("maternity");
	}
	public function doPaternity(){
		$this->load->view("paternity");
	}
	public function doBenefits2(){
		//capture an array of all benefits
		$data["AllBenefits"] = $this->Benefit_Model->getAllBenefits();	
		$benefitData = array('AllBenefitData'  => $data["AllBenefits"]);
		$this->session->set_userdata($benefitData);	
		$this->load->view("benefits2");
	}
	
	public function doAnalytics(){
		$this->load->view("analytics");
	}

	public function doRegister(){
		$this->load->view("insertUser");
	}

	public function doLogon(){
		$this->load->view("logonUser");
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('User/index');
	}
	
	public function getUser() {
		//get customers name and password from form
		$UserName = $_POST['UserName'];
		$password = md5($_POST['password']);
		//pass $UserName, $password to model and get back an array of user details
		$data['User'] = $this->User_Model->getUser($UserName,$password);
		//if a user if found, display their details
		//otherwise display an error plage with an appropriate error message
		
		if ($data['User'] != null) {
			//put user id into session - need when adding notice
			$userData = array('user'  => $data['User']);
			$this->session->set_userdata($userData);
			$user= $data['User'];
			
			//capture an array of all notices for that user
			$data["AllNotices"] = $this->Notice_Model->getAllNotices();	
			$noticeData = array('noticeData'  => $data["AllNotices"]);
			$this->session->set_userdata($noticeData);	

          	$this->load->view("usersHomePage");
		}
		else {
			$data['msg'] = "Not found";
			$this->load->view('msgpage', $data);
		}
	}
	
	public function RegisterUser(){
		$UserName = $_POST['UserName'];
		$password = md5($_POST['Password']);

		$user = array(
			"UserName"=> $_POST["UserName"],
			"Password"=>md5($_POST["Password"]),
			"FirstName"=>$_POST["FirstName"],
			"SurName"=>$_POST["Surname"],
			"Mobile"=>$_POST["Mobile"],
			"AddressLine1"=>$_POST["AddressLine1"],
			"AddressLine2"=>$_POST["AddressLine2"],
			"AddressLine3"=>$_POST["AddressLine3"],
			"Email"=>$_POST["email"]
		);
		$flag = $this->User_Model->insertUser($user);
		if($flag){
		
			//pass $UserName, $password to model and get back an array of user details
			$data['User'] = $this->User_Model->getUser($UserName,$password);
			//if a user if found, display their details
			//otherwise display an error page with an appropriate error message
			if ($data['User'] != null) {
				//put user id into session - need when adding notice
				$userData = array('user'  => $data['User']);
				$this->session->set_userdata($userData);
				$user= $data['User'];
				//capture an array of all notices for that user
				$data["AllNotices"] = $this->Notice_Model->getNoticesByUserID($user['UserID']);	
				$noticeData = array('noticeData'  => $data["AllNotices"]);
				$this->session->set_userdata($noticeData);	
				$this->load->view("usersHomePage");
			}
			
		}else{
			$data["msg"] = "Error in database";
			$this->load->view("msgpage",$data);
		}
	}
	
	public function getUpdateDetails ($userid) {
       	$data['User'] = $this->User_Model->getUserByID($userid);
        if ( $data['User'] != null)
            $this->load->view('updateUserDetails', $data);
        else {
			$data['msg'] = "Error on user load";
		 	$this->load->view('msgpage', $data);
		 }
     }

	public function saveUserDetails($userID) {
		//prepare an array of user info submitted via the POST 
        $user = array(
			"UserName"=> $_POST["UserName"],
			"Password"=>$_POST["Password"],
			"FirstName"=>$_POST["FirstName"],
			"SurName"=>$_POST["Surname"],
			"Mobile"=>$_POST["Mobile"],
			"AddressLine1"=>$_POST["AddressLine1"],
			"AddressLine2"=>$_POST["AddressLine2"],
			"AddressLine3"=>$_POST["AddressLine3"],
			"Email"=>$_POST["email"],
			"UserID"=>$userID
		);
   		//call the function in the model to do the update and get back a boolean flag	
	    //$flag holds true/false value depending on whether the update was successful or not
        $flag = $this->User_Model->updateUser($user);
		//pass $flag to function to determine whether success/failure page should be displayed
        if($flag){
			$data['User'] = $user;
			$this->load->view("usersHomePage",$data);
		} else {
			$data['msg'] = "error on update to user details";
			$this->load->view('msgpage', $data);
		}
	}
	
	public function userHomePage($userID) {
		//capture an array of all notices for that user
		$data["AllNotices"] = $this->Notice_Model->getAllNotices();	
		$noticeData = array('noticeData'  => $data["AllNotices"]);
		$this->session->set_userdata($noticeData);	
		$this->load->view("usersHomePage");
	}
}
