<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {

  public function __construct(){
    parent::__construct();
    if (!session('id')) {
      $this->error('请先登录系统，为您跳转到登录页面中...',U('Login/index'));
    }
  }
  
}