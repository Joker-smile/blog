<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

//后台登陆界面
  public function index(){
  	$admin=D('admin');
  	if (IS_POST) {
  		if ($admin->create($_POST,4)) {
  		    if ($admin->login()) {
  		    	$this->success('登录成功，跳转中...',U('Index/index'));
  		    }else{
                $this->error('登录失败，您的用户账号或密码错误！'); 
  		    }

  		}else{

        $this->error($admin->getError());

  		}

  		return;
  	}
     
       $this->display('login');
    }
  public function verify(){
    $Verify =     new \Think\Verify();
    $Verify->fontSize = 40;
    $Verify->length   = 4;
    $Verify->useNoise = false;
    $Verify->useImgBg = false; 
    $Verify->entry();

}

}