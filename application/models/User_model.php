<?php
	defined('BASEPATH') or die('No direct access script allowed!');

    require_once(APPPATH.'core/BaseModel.php');

	class User_model extends BaseModel
	{
		var $table = 'users';

		public function search($params){
			if($params){
				foreach($params as $item){
					$this->db->group_start();
				    $this->db->like('name',$item);
				    $this->db->or_like('nick_name',$item);
				    $this->db->or_like('email',$item);
				    $this->db->or_like('mobile',$item);
				    $this->db->or_like('phone',$item);
				    $this->db->or_like('address',$item);
				    $this->db->group_end();
				}
			}
			return parent::getAll();
		}
	}