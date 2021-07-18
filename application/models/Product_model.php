<?php
	defined('BASEPATH') or die('No direct access script allowed!');

    require_once(APPPATH.'core/BaseModel.php');

	class Product_model extends BaseModel
	{
		var $table = 'products';

		public function search($filter){
			$this->db->join("users", "users.id = products.user_id","LEFT");
			$this->db->select("*, users.id user_id, users.name user_name, max(products.date)");
			$this->db->group_by("products.user_id");
			if($filter["customer"]){
				$this->db->where("users.customer","2");
				
			}else{
				// $this->db->where("users.customer","1");
			}

			if ($filter["making"]) {
				$this->db->where("products.making","2");
				
			}else{
				// $this->db->where("products.making","1");
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
				$this->db->where("products.date >= '" . $filter['date_to'] . "'");
			}
			if($filter["name"]){
				$this->db->group_start();
			    $this->db->or_like('users.name',$filter["name"]);
			    $this->db->or_like('products.name',$filter["name"]);
			    $this->db->group_end();
			}
			unset($filter["name"]);
		    unset($filter['date_to']);
			unset($filter["customer"]);
			unset($filter['date_from']);
			unset($filter['price_to']);
			unset($filter['price_from']);
			unset($filter["making"]);
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