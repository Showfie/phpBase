<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function test(){
    	$this->assign('usagePercent',60);
    	$this->assign('usageMB',1587.56);
        $this->display();
    }
}