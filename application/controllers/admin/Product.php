<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'core/AdminController.php');

class Product extends AdminController {
	
	var $layout = "admin";

	public function __contruct(){
		parent::__construct();
	}
	public function save(){
		$data = $this->input->post();
		if($data["product_id"]){
			$data["id"] = $data["product_id"];
			unset($data["product_id"]);
			$this->product->updateData($data);
			$this->json(array("success"=> true, "id"=>$data["user_id"]));
		}else{
			unset($data["product_id"]);
			$id = $this->product->setData($data);
			$this->json(array("success"=>true, "id"=>$data["user_id"]));
		}
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
	public function api(){
		$filter = $this->input->post("query");
		$user = $this->user_data();
		$data["meta"] = $filter;
		$data["data"] = $this->product->getDataByParam(array("user_id"=>$filter["user_id"]));
		$this->json($data);
	}
}
