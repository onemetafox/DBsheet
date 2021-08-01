<?php
defined('BASEPATH') or die('No direct access script allowed!');

require_once(APPPATH.'core/BaseModel.php');

class User_model extends BaseModel
{
	var $table = 'users';

	public function all($params){
		$query = "SELECT users.*, a.*, a.name product_name FROM users 
		LEFT JOIN ( SELECT id, MAX( date ) date, price, user_id, user_name, name FROM products GROUP BY user_id ) a ON a.user_id = users.id WHERE 1 ";
		if($params){
			foreach($params as $item){
				$filter = " AND ( users.name LIKE '%".$item."%' 
				OR users.nick_name LIKE '%".$item."%' 
				OR a.name LIKE '%".$item."%' 
				OR user_name LIKE '%".$item."%' 
				OR users.address LIKE '%".$item."%'
				OR users.mobile LIKE '%".$item."%'
				OR users.phone1 LIKE '%".$item."%'
				OR users.extra LIKE '%".$item."%' ) ";
				$query = $query  . $filter;
			}
		}
		// print_r($query);
		$data = $this->db->query($query)->result();
		return $data;
	}
}