<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'core/BaseController.php');

class Welcome extends BaseController {
	
	var $layout = "admin";
	var $id = "admin@admin.com";
	var $password = "admin";

	public function __construct(){
		parent::__construct();
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$admin = $this->user_data();
		if(!$admin){
			$data["page_title"] = "Login";
			$this->load->view("login", $data);		
		}else{
			$this->admin->updateData(array("update_status"=>1, "id"=>$admin["id"]));
			$this->user->deleteByParam(array("status"=>1, "admin_id"=>$admin["id"]));
			$this->product->deleteByParam(array("status"=>1,"admin_id"=>$admin["id"]));
			$this->family->deleteByParam(array("status"=>1,"admin_id"=>$admin["id"]));
			$this->detail->deleteByParam(array("status"=>1,"admin_id"=>$admin["id"]));
			$data["user"] = $admin;
			$data["list"] = $this->db->query("SELECT * FROM `users` WHERE status = 2 ORDER BY created_at DESC LIMIT 0, 3")->result_array();
			$this->render("public/index", $data);	
		}
		
	}	
	public function signin(){
		$data = $this->input->post();
		$user = $this->admin->getOneByParam(array("user_id"=> $data["id"]));
		if($user){
			if($user["password"] == sha1($data["password"])){
				$user["last_activity"] = date("y-m-d h:s:i");
				$user["logged_status"] = 2;
				$this->session->set_userdata("user",$user);
				$this->admin->updateData($user);
				$this->json(array("success" => true, "msg" => "成功ログイン", "user" => $user));
			}else{
				$this->json(array("success" => false, "msg"=>"Password 間違った"));
			}	
		}else{
			$this->json(array("success" => false, "msg"=>"User ID 間違った"));
		}
		
	}

	public function signout(){
		$user = $this->session->userdata("user");
		$user["logged_status"] = "1";
		$this->admin->updateData($user);
	 	$this->session->unset_userdata('user');
		redirect("/");
	}
	public function checkPassword(){
		$data = $this->input->post();
		$admin = $this->user_data();
		if($admin["digit_pwd"] == $data["digit_pwd"]){
			$this->json(array("success"=>true));
		}else{
			$this->json(array("success"=>false ,"msg"=>"間違った数字"));
		}
	}
}