<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends PublicController {
    public function index(){
        $this->display();
    }

//链接列表
  public function lst(){
     
       $link=D('link');//实例化表link；
       $count= $link->count();// 查询满足要求的总记录数；
       $Page= new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)；
       $show= $Page->show();// 分页显示输出；
       $list = $link->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();// 进行分页数据查询 注意limit方法的参数要使用Page类的属性；
       $this->assign('list',$list);// 赋值数据集；
       $this->assign('page',$show);// 赋值分页输出；
       $this->display();
    }


//链接添加
  public function add(){
  $link=D('link');
       if (IS_POST) {
         # code...
        $data['title']=I('title');//获取title值；并保存在数组$data内；
        $data['url']=I('url');
        $data['desc']=I('desc');
         if ($link->create($data)) {      //验证$data数据；
            if ($link->add()) {
                 $this->success('链接添加成功！',U('lst'));
          }else{
                 $this->error('添加链接失败!');

          }
      }else{
                 $this->error($link->getError());
        }
          return;
       }
          $this->display();    
  }


//链接删除
  public function del(){
        $link=D('link');
       // $id=I('id');
        if ($link->delete(I('id'))){
         
           $this->success('删除链接成功！',U('lst'));
      }else{

              $this->error('删除链接失败！');
        }
       
    }



//链接修改
  public function edit(){
    $link=D('link');
    $links=$link->find((I('title')));
    $links=$link->find((I('url')));
    $links=$link->find((I('desc')));
    $links=$link->find((I('id')));
    $this->assign('links',$links);
    
        if (IS_POST) {
          $data['linkname']=I('linkname');
          $id['id']=I('id');
          if ($link->create()) {
            $save=$link->save();
               if ($save!==false) {
                  $this->success('修改链接成功！',U('lst'));
              }else{
                  $this->error('修改链接失败！');
            }
        }else{

              $this->error($link->getError());

          }
           return;
        }

        $this->display();
    }



//链接排列
    /*public function sort(){
     $link=D('link');
       foreach ($_POST as $id => $sort) {
      
        $link->where(array('id' => $id))->setField('sort',$sort);

       }
       $this->success('排序成功！',U('lst'));
     
    }*/
}