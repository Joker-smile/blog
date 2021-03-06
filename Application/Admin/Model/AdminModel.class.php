<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model {
    
    protected $_validate=array(
    	//验证添加和修改
        array('username','require','管理员名称不得为空！',1,'regex',3), 
        array('password','require','密码不得为空！',1,'regex',1), 
        array('username','','管理员名称不得重复！',1,'unique',3), 
       //验证登录
        array('username','require','管理员名称不得为空！',1,'regex',4), 
        array('password','require','密码不得为空！',1,'regex',4), 
        array('verify','require','验证码不得为空！',1,'regex',4), 
        array('verify','check_verify','验证码输入错误！',1,'callback',4), 
        );

    public function login(){
      $password=$this->password;
      $info=$this->where(array('username' =>$this->username))->find();
      if ($info) {
          if ($info['password']==md5($password)) {
           session('id',$info['id']);
           session('username',$info['username']); 
           return  ture;
          }else{
          	  return false;
          }          
      }else{
      	      return false;
     }
    
   }

   function check_verify($code, $id = ''){   
    $verify = new \Think\Verify();    
    return $verify->check($code, $id);
  }

 }

