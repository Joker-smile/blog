<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
   
   public function __construct(){
       
         parent::__construct();
         $this->nav();
         $this->news();
         $this->links();
   }

   public function nav(){
     $cate=D('cate');
     $cates=$cate->select();
     $this->assign('cates',$cates);

   }
   
   public function news(){
   	   $articles=D('article')->order('time desc')->limit(5)->select();
   	   $this->assign('articles',$articles);
   }

   public function links(){
       $links=D('link')->order('sort desc')->select();
       $this->assign('links',$links);

   }
   
}
