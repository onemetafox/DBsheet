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
		$hope = $data["hope"];
		$real = $data["real"];
		
		$hope["admin_id"] = $admin["id"];
		$hope["user_id"] = $data["user_id"];
		$hope["product_id"] = $data["product_id"];
		$hope["status"] = 1;

		$real["admin_id"] = $admin["id"];
		$real["user_id"] = $data["user_id"];
		$real["product_id"] = $data["product_id"];
		$real["status"] = 1;
		
		if($data["id"]){
			$hope["id"] = $data["id"];
			$this->model->updateData($hope);
			$this->model->updateDataByParam($real, array("parent_id"=>$data["id"]));
			$this->json(array("success"=> true, "id"=>$data["id"]));
		}else{
			$id = $this->model->setData($hope);
			$real["parent_id"] = $id;
			$this->model->setData($real);
			$this->json(array("success"=>true, "id"=>$id));
		}
	}
	public function delete(){
		$id = $this->input->post("id");
		$this->model->deleteByParam(array("product_id"=>$id));
		$this->json(array("success"=>true, "msg"=>"削除しました。"));
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
}
