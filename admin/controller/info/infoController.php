<?php
class infoController{

	public function dashboard(){

		$data = array();
		$data["title"] = "Welcome";
		Output::adminLoad("info/dashboardView", $data);
	}

	public function products(){

		$data = array();
		$data["title"] = "Products";
		$data["total_products"] = Database::query("SELECT count(`id`) FROM product")["count(`id`)"];

		Output::adminLoad("info/productsView", $data);
	}

	public function users(){

		$data = array();
		$data["title"] = "Users";
		$data["total_users"] = Database::query("SELECT count(`id`) FROM user")["count(`id`)"];

		Output::adminLoad("info/usersView", $data);
	}

	public function error_managent(){

		$data = array();
		$data["title"] = "Errors";
		$data["warnings"] = "";
		$data["exceptions"] = "";
		
		$file_errors_path = SYSTEM."logs/errors.log";
		
		if(filesize($file_errors_path) > 0){
			$file_errors_handler = fopen($file_errors_path, "r");
			$data["exceptions"] = fread($file_errors_handler, filesize($file_errors_path));
			fclose($file_errors_handler);
		}

		$file_warnings_path = SYSTEM."logs/notice.log";
		
		if(filesize($file_warnings_path) > 0){
			$file_warnings_handler = fopen($file_warnings_path, "r");
			$data["warnings"] = fread($file_warnings_handler, filesize($file_warnings_path));
			fclose($file_warnings_handler);
		}

		Output::adminLoad("info/errorsView", $data);
	}

}