<?php 
namespace App\DbRepositorys;

use App\InterfaceRepositorys;
use App\Models;

class UserRepository implements UserRepositoryInterface{

	public function all(){
		return User::all()->toArray();
	}
} 