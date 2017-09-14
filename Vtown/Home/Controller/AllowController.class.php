<?php
namespace Home\Controller;
use Think\Controller;
class AllowController extends Controller {
    public function _initialize(){
        if(!isset($_SESSION['username'])){
        	$this->redirect('Login/index');
        }
    }
}