<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'core/AdminController.php');

class Family extends AdminController {
	
	public function __contruct(){
		parent::__construct();
	}


	/** function to save one image pair */
	public function save(){
		$data = $this->input->post();
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
	public function delete($id){
		$this->family->unsetDataById($id);
		$this->json(array("success"=>true, "msg"=>"Deleted!"));
	}

	public function api(){
		$filter = $this->input->post("query");
		$user = $this->user_data();
		$data["meta"] = $filter;
		$data["data"] = $this->family->getDataByParam(array("user_id"=>$filter["user_id"]));
		$this->json($data);
	}
}
