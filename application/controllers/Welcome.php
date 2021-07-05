<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'core/BaseController.php');

class Welcome extends BaseController {
	
	var $layout = "admin";
	var $id = "admin@admin.com";
	var $password = "admin";

	public function __contruct(){
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
		$user = $this->user_data();
		if(!$user){
			$data["page_title"] = "Login";
			$this->load->view("login", $data);		
		}else{
			$data["page_title"] = "Langing Page";
			$data["user"] = $user;
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
				$this->json(array("success" => true, "msg" => "Success Login", "user" => $user));
			}else{
				$this->json(array("success" => false, "msg"=>"Password incorrect"));
			}	
		}else{
			$this->json(array("success" => false, "msg"=>"User ID incorrect"));
		}
		
	}

	public function signout(){
		$user = $this->session->userdata("user");
		$user["logged_status"] = "1";
		$this->admin->updateData($user);
	 	$this->session->unset_userdata('user');
		redirect("/");
	}
}
