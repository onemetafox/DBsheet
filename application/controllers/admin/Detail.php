<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'core/AdminController.php');

class Detail extends AdminController {
	
	var $layout = "admin";

	public function __construct(){
		
		parent::__construct();
		$this->load->model("Detail_model", "model");
	}
	public function save(){
		$data = $this->input->post();
		$admin = $this->user_data();
		$data["admin_id"] = $admin["id"];
		if($data["id"]){

			$this->model->updateData($data);
			$this->json(array("success"=> true, "id"=>$data["id"]));
		}else{
			$id = $this->model->setData($data);
			$this->json(array("success"=>true, "id"=>$id));
		}
	}
	public function delete(){
		$id = $this->input->post("id");
		$this->model->unsetDataById($id);
		$this->json(array("success"=>true, "msg"=>"削除されました!"));
	}
	public function api(){
		$filter = $this->input->post("query");
		$user = $this->user_data();
		$data["meta"] = $filter;
		if(isset($filter["product_id"])){
			$data["data"] = $this->detail->getDataByParam(array("product_id"=>$filter["product_id"]));	
		}else if(isset($filter['id'])){
			$data["data"] = $this->detail->getDataById($filter["id"]);	
		}
		$this->json($data);
	}
	// public function all(){
	// 	$this->model->all();
	// }
}
