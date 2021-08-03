<?php
	defined('BASEPATH') or die('No direct access script allowed!');

    require_once(APPPATH.'core/BaseModel.php');

	class Product_model extends BaseModel
	{
		var $table = 'products';

		public function search($filter){
			$query = "SELECT  users.*, a.*, a.name product_name, a.user_name customer_name FROM users 
			LEFT JOIN ( SELECT id, MAX( date ) date, price, user_id, user_name, name, making FROM products GROUP BY user_id ) a ON a.user_id = users.id WHERE 1 ";
			if($filter["name"]){
				$keywords = explode(" ", $filter["name"]);
				foreach($keywords as $index => $item){
					$where = " AND ( users.name LIKE '%".$item."%' 
					OR users.nick_name LIKE '%".$item."%' 
					OR a.name LIKE '%".$item."%' 
					OR user_name LIKE '%".$item."%' 
					OR users.address LIKE '%".$item."%'
					OR users.mobile LIKE '%".$item."%'
					OR users.phone1 LIKE '%".$item."%'
					OR users.extra LIKE '%".$item."%' ) ";
					$query = $query  . $where;
				}
			}
			if($filter['customer']){
				$query = $query . " AND users.customer = '2' ";
			}
			if ($filter["making"] == "true") {
				$query = $query . " AND a.making = '2' ";
			}
			if($filter["price_from"])
			{
				$query = $query . " AND a.price >= '" . $filter['price_from'] . "' ";
			}
			if($filter["price_to"])
			{
				$query = $query . " AND a.price <= '" . $filter['price_to'] . "' ";
			}
			if($filter["date_from"])
			{
				$query = $query . " AND a.date >= '" . $filter['date_from'] . "' ";
			}
			if($filter["date_to"])
			{
				$query = $query . " AND a.date <= '" . $filter['date_to'] . "' ";
			}
			if($filter["hobby"])
			{
				$query = $query . " AND users.hobby = '" . $filter['hobby'] . "' ";
			}
			if($filter["habit"])
			{
				$query = $query . " AND users.habit = '" . $filter['habit'] . "' ";
			}
			
			$query = $query. "ORDER BY a.date DESC";
			// print_r($query);
			$data = $this->db->query($query)->result();
			return $data;
		}

		public function getAll(){
			$this->db->join("users", "users.id = products.user_id");
			$this->db->select("users.name user_name, products.*");
			return parent::getAll();
		}
	}