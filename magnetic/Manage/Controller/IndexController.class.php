<?php
namespace Manage\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo 'an bad error occured.';
    }
	
	//后台管理页面
	public function manage(){
		$this->display();
	}
}