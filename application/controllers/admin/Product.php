<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'core/AdminController.php');

class Product extends AdminController {
	
	var $layout = "admin";

	public function __construct(){
		
		parent::__construct();
		$this->load->model("Product_model", "model");
	}
	public function save(){
		$data = $this->input->post();
		$admin = $this->user_data();
		$data["admin_id"] = $admin["id"];
		if($data["product_id"]){
			$data["id"] = $data["product_id"];
			unset($data["product_id"]);
			$this->product->updateData($data);
			$this->json(array("success"=> true, "msg"=>"正確に保管しました。","id"=>$data["user_id"]));
		}else{
			unset($data["product_id"]);
			$id = $this->product->setData($data);
			$this->json(array("success"=>true, "id"=>$data["user_id"]));
		}
	}
	public function delete(){
		$id = $this->input->post("id");
		$this->product->unsetDataById($id);
		$this->json(array("success"=>true, "msg"=>"削除しました。"));
	}
	public function edit($id = null){
		$update_user = $this->admin->getOneByParam(array("update_status" =>2));
		$user = $this->user_data();
		if(!$update_user || $update_user["id"] == $user["id"]){
			$admin =  $this->user_data();
			$this->admin->updateData(array("update_status"=>2, "id"=>$admin["id"]));
			$data["user"] = $admin;
			if(!$id){
				$this->render("admin/edit",$data);
			}else{
				$this->load->model("User_model");
				$data["customer"] = $this->User_model->getDataById($id);
				$data["id"] = $id; 	
				$this->render("admin/edit",$data);
			}
		}else {
			echo "<script language=\"javascript\">alert('他のユーザーがデータを変更しています。');window.location = '/';</script>";
		}
	}
	public function api(){
		$filter = $this->input->post("query");
		$user = $this->user_data();
		$data["meta"] = $filter;
		if($filter){
			if(isset($filter["user_id"])){
				$data["data"] = $this->product->getDataByParam(array("user_id"=>$filter["user_id"]));	
			}else{
				$data["data"] = $this->product->getDataById($filter["id"]);
			}
		}else{
			$data["data"] = $this->product->getAll();
		}
		
		$this->json($data);
	}

	public function detail($id){
		$data["product_id"] = $id;
		$product = $this->product->getDataById($id);
		$data["user_id"] = $product["user_id"];
		$data["images"] = json_decode($product["image"]);
		$data["customer"] = $this->user->getDataById($product["user_id"]);
		$data["product"] = $product;
		$this->load->view("admin/detail",$data);
	}

	public function saveImage(){
		$data = $this->input->post();
		$images = array();
		$startNum = 0;
		for($i =1; $i <= 8 ; $i++){
			if(isset($_FILES["file".$i]))
				if ( 0 < $_FILES["file".$i]['error'] ) {
					echo 'Error: ' . $_FILES["file".$i]['error'] . '<br>';
				}
				else {
					if($startNum == 0){
						$startNum = $i;
					}
					$name = $_FILES["file".$i]["name"];
					$ext = pathinfo($name, PATHINFO_EXTENSION);
					// print_r($_FILES["file".$i]['tmp_name']);
					move_uploaded_file($_FILES["file".$i]['tmp_name'], 'uploads/' . $data["product_id"] . "_". $i.".".$ext);
					$images[$i] = $data["product_id"]. "_". $i.".".$ext;
				}
		}
		$product = $this->product->getDataById($data["product_id"]);
		$old_images = (array)json_decode($product["image"]);
		if($old_images)
			$result = $old_images + $images;
		else
			$result = $images;
		$user = $data["user"];
		$this->user->updateDataByParam($user, array("id"=>$product["user_id"]));
		$this->product->updateData(array("id"=>$data["product_id"], "image"=>json_encode($result)));

		$this->json(array("success"=>true, "msg"=>"成功!", "data" => $data));
	}

	public function search(){
		$filter = json_decode($this->input->post("query[query]"));
		// print_r($filter);
		$data["data"] = $this->product->search((array)$filter);
		$data["filter"] = $filter;
		$this->json($data);
	}
}
