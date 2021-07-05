<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'core/AdminController.php');

class Users extends AdminController {
	
	public function __contruct(){
		parent::__construct();
	}


	public function index()
	{
		$data["page_title"] = "Files";
		$this->render("admin/files", $data);
	}

	/** function to save one image pair */
	public function save(){
		$this->load->model("User_model", "model");
		$data = $this->input->post();
		if($data["id"]){
			$this->model->updateData($data);
			$this->json(array("success"=> true, "id"=>$data["id"]));
		}else{
			$id = $this->model->setData($data);
			$this->json(array("success"=>true, "id"=>$id));
		}
	}

	// delete image pair
	public function delete($id){
		$this->recipe->unsetDataById($id);
		$this->json(array("success"=>true, "msg"=>"Deleted!"));
	}

	public function api(){
		$filter = $this->input->post();
		$user = $this->user_data();
		$data["meta"] = $filter;
		$data["data"] = $this->recipe->getDataByParam(array("user_id"=>$user["id"]));
		$this->json($data);
	}
}
