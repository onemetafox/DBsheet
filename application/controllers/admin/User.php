<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'core/AdminController.php');

class User extends AdminController {
	
	public function __construct(){

		parent::__construct();
		$this->load->model("User_model", "model");
	}


	public function save(){
		$data = $this->input->post();
		if(isset($data["customer"]) && ($data["customer"]  == "on")){
			$data["customer"] = 2;
		}else{
			$data["customer"] = 1;
		}
		$admin = $this->user_data();
		$data["admin_id"] = $admin["id"];
		if($data["id"]){
			$this->model->updateData($data);
			$this->json(array("success"=> true, "id"=>$data["id"]));
		}else{
			$data["created_at"] = date("Y-m-d H:s:i");
			$id = $this->model->setData($data);
			$this->json(array("success"=>true, "id"=>$id));
		}
	}

	// delete image pair
	public function delete($id){
		$this->recipe->unsetDataById($id);
		$this->json(array("success"=>true, "msg"=>"削除されました!"));
	}

	public function confirm(){
		$filter = $this->input->post();
		$admin = $this->admin->getOneByParam(array("user_id"=>$filter["admin_id"]));
		if($admin){
			if(sha1($filter["password"])== $admin["password"]){
				/// update status

				if($filter["confirm"] == "save") {
					$this->user->updateData(array("status"=>2, "id"=>$filter["id"]));
					$this->product->updateDataByParam(array("status"=>2), array("admin_id"=>$admin["id"], "user_id"=>$filter["id"]));
					$this->family->updateDataByParam(array("status"=>2), array("admin_id"=>$admin["id"], "user_id"=>$filter["id"]));
					$this->detail->updateDataByParam(array("status"=>2), array("admin_id"=>$admin["id"], "user_id"=>$filter["id"]));
				}else{
					$this->user->unsetDataById($filter["id"]);
					$this->product->deleteByParam(array("user_id"=>$filter["id"], "admin_id"=>$admin["id"]));
					$this->family->deleteByParam(array("user_id"=>$filter["id"], "admin_id"=>$admin["id"]));
					$this->detail->deleteByParam(array("user_id"=>$filter["id"], "admin_id"=>$admin["id"]));
				}
				$this->json(array("success"=>true, "msg"=>"正確に保管されてい"));
			}else{
				$this->json(array("success"=>false, "msg"=>"passwordが正しくありません"));
			}
		}else{
			$this->json(array("success"=>false, "msg"=>"IDが正しくありません"));
		}
	}

	public function api(){
		$filter = $this->input->post("query");
		$params = explode(" ", $filter["q"]);
		$data["meta"] = $filter;
		$data["data"] = $this->model->all($params);
		$this->json($data);
	}

	public function search(){
		$filter["query"] = $this->input->get("q");
		$params = explode(" ", $filter["query"]);
		$data["users"] = $this->model->all($params);
		$data["filter"] = $filter["query"];
		$this->render("admin/search",$data);
	}
	public function view(){
		$data["page_title"] = "View Page";
		$data["filter"] = $this->input->post();
		$this->render("admin/view", $data);
	}
}
