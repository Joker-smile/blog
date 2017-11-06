<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends PublicController {
    public function index(){
        $this->display();
    }

//文章列表
  public function lst(){
     
       $article=D('ArticleView');//实例化表article；
       $count= $article->count();// 查询满足要求的总记录数；
       $Page= new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)；
       $show= $Page->show();// 分页显示输出；
       $list = $article->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();// 进行分页数据查询 注意limit方法的参数要使用Page类的属性；
       $this->assign('list',$list);// 赋值数据集；
       $this->assign('page',$show);// 赋值分页输出；
       $this->display();
    }


//文章添加
  public function add(){
  $article=D('article');
  
       if (IS_POST) {
         # code...
        $data['title']=I('title');//获取title值；并保存在数组$data内；
        $data['desc']=I('desc');
        $data['content']=I('content');
        $data['cateid']=I('cateid');
        $data['time']=time();
         if($_FILES['pic']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $info   =   $upload->uploadOne($_FILES['pic']);
                if(!$info){
                    $this->error($upload->getError());
                }else{
                   $data['pic']=$info['savepath'].$info['savename'];
                }
            }


         if ($article->create($data)) {      //验证$data数据；
            if ($article->add()) {
                 $this->success('文章添加成功！',U('lst'));
          }else{
                 $this->error('添加文章失败!');

          }
      }else{
                 $this->error($article->getError());
        }
          return;
       }
         $cateres=D('cate')->select();
         $this->assign('cateres',$cateres);
         $this->display();   
      
  }


//文章删除
  public function del(){
        $article=D('article');
       // $id=I('id');
        if ($article->delete(I('id'))){
         
           $this->success('删除文章成功！',U('lst'));
      }else{

              $this->error('删除文章失败！');
        }
       
    }



//文章修改
public function edit(){
        $article=D('article');
        if(IS_POST){
            $data['title']=I('title');
            $data['content']=I('content');
            $data['desc']=I('desc');
            $data['cateid']=I('cateid');
            $data['id']=I('id');
            if($_FILES['pic']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $info   =   $upload->uploadOne($_FILES['pic']);
                if(!$info){
                    $this->error($upload->getError());
                }else{
                   $data['pic']=$info['savepath'].$info['savename'];
                }
            }
            if($article->create($data)){
                $save=$article->save();
                if($save !== false){
                    $this->success('修改文章成功！',U('lst'));
                }else{
                    $this->error('修改文章失败！');
                }
            }else{
                $this->error($article->getError());
            }

            return;
        }
        $articles=$article->find(I('id'));
        $this->assign('articles',$articles);
        $cateres=D('cate')->select();
        $this->assign('cateres',$cateres);
        $this->display();
    }

}