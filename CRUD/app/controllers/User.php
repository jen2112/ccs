<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {
	public function sayGoodbye($name) {
		echo 'ouuccch ang sakit kuya ' . $name;
	}
	public function contactUs() {
		$data['greet']='Hello world';
		$data['fullname']='jennifer';
		$this->call->view('contact', $data);
	}
	public function greet(){
		$data['User']=$this->User_model->getusers();
		$this->call->view('greet', $data);
	}
}
?>
