<?php 
namespace App\InterfaceRepositorys;

interface BaseInterface{
	public function all();
	public function save($elem);
	public function update($elem);
	public function delete($elem);
}

interface UserRepositoryInterface extends BaseInterface{

}