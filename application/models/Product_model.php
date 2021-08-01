<?php
	defined('BASEPATH') or die('No direct access script allowed!');

    require_once(APPPATH.'core/BaseModel.php');

	class Product_model extends BaseModel
	{
		var $table = 'products';

		public function search($filter){
			$this->db->join("users", "users.id = products.user_id","LEFT");
			$this->db->select("*, `users.id user_id, users.name user_name, max(products.date)");
			$this->db->group_by("products.user_id");
			if($filter["customer"] == "true"){
				$this->db->where("users.customer","2");
			}
			if ($filter["making"] == "true") {
				$this->db->where("products.making","2");
			}
			if($filter["price_from"])
			{
				$this->db->where("products.price >= " . $filter['price_from']);
			}
			if($filter["price_to"])
			{
				$this->db->where("products.price <= " . $filter['price_to']);
			}
			if($filter["date_from"])
			{
				$this->db->where("products.date >= '" . $filter['date_from'] . "'");
			}
			if($filter["date_to"])
			{
				$this->db->where("products.date <= '" . $filter['date_to'] . "'");
			}
			if($filter["name"]){
				$keyword = explode(" ", $filter["name"]);
				foreach($keyword as $index => $value){
					$this->db->group_start();
				    $this->db->or_like('users.name',$value);
				    $this->db->or_like('users.address',$value);
				    $this->db->or_like('users.email',$value);
				    $this->db->or_like('users.mobile',$value);
				    $this->db->or_like('users.phone1',$value);
				    $this->db->or_like('users.nick_name',$value);
				    $this->db->or_like('products.name',$value);
				    $this->db->or_like('products.user_name',$value);
				    if($filter["dm"]){
				    	$this->db->or_like('users.extra',$value);
				    }
				    $this->db->group_end();
				}
			}
			unset($filter["name"]);
		    unset($filter['date_to']);
			unset($filter["customer"]);
			unset($filter['date_from']);
			unset($filter['price_to']);
			unset($filter['price_from']);
			unset($filter["making"]);
			unset($filter["dm"]);
			$this->db->order_by("products.date desc");
			$data = parent::getDataByParam($filter);
			// print_r($this->db->last_query());
			return $data;
		}

		public function getAll(){
			$this->db->join("users", "users.id = products.user_id");
			$this->db->select("users.name user_name, products.*");
			return parent::getAll();
		}
	}