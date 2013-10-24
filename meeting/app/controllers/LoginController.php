<?php

use App\DbRepositorys;

class LoginController extends BaseController {

	public function _construct (UserRepositoryInterface $users){
		$this->users = $users;
	}

	public function getIndex(){		
		return View::make('home');
	}

	public function getIndex2(){		
		echo "prueba";
	}
	
}