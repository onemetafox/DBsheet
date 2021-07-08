<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'core/AdminController.php');

class Family extends AdminController {
	
	public function __construct(){
		
		parent::__construct();
		$this->load->model("Family_model", "model");
	}


	/** function to save one image pair */
	public function save(){
		$data = $this->input->post();
		$admin = $this->user_data();
		$data["admin_id"] = $admin["id"];
		if($data["family_id"]){
			$data["id"] = $data["family_id"];
			unset($data["family_id"]);
			$this->family->updateData($data);
			$this->json(array("success"=> true, "id"=>$data["user_id"]));
		}else{
			unset($data["family_id"]);
			$this->family->setData($data);
			$this->json(array("success"=>true, "id"=>$data["user_id"]));
		}
	}

	// delete image pair
	public function delete(){
		$id = $this->input->post("id");
		$this->family->unsetDataById($id);
		$this->json(array("success"=>true, "msg"=>"削除されました!"));
	}

	public function api(){
		$filter = $this->input->post("query");
		$user = $this->user_data();
		$data["meta"] = $filter;
		if(isset($filter["user_id"])){
			$data["data"] = $this->family->getDataByParam(array("user_id"=>$filter["user_id"]));
		}else{
			$data["data"] = $this->family->getDataById($filter["id"]);
		}
		$this->json($data);
	}
}
