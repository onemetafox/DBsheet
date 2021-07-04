<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'core/AdminController.php');

class Products extends AdminController {
	
	var $layout = "admin";

	public function __contruct(){
		parent::__construct();
	}
	public function search(){
		$params = explode(" ", $this->input->get("q"));
		$this->load->model("User_model", "user");
		$data["users"] = $this->user->getAll($params);
		$this->render("admin/search",$data);
	}

	public function edit($id = null){
		$update_user = $this->admin->getOneByParam(array("update_status" =>2));
		$user = $this->user_data();
		if(!$update_user || $update_user["id"] == $user["id"]){
			$data["user"] = $this->user_data();
			if(!$id){
				$this->render("admin/edit",$data);
			}else{
				$this->load->model("User_model","user");
				// $data["user"] = $this->user
			}
		}else {
			echo "<script language=\"javascript\">alert('Someone is updating data');</script>";
		}
	}
}
