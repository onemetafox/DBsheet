<?php
	defined('BASEPATH') or die('No direct access script allowed!');

	require_once(APPPATH.'core/BaseController.php');

	class AdminController extends BaseController
	{
        var $layout = "admin";
		public function __construct() {
			parent::__construct();
			$admin = $this->user_data();
			if(!$admin){
				redirect("/");
			}
		}
	}