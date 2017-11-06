<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends PublicController {
    public function index(){
        $this->display();
    }

//管理员列表
  public function lst(){
      $article=D('admin');//实例化表article；
       $count= $article->count();// 查询满足要求的总记录数；
       $Page= new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)；
       $show= $Page->show();// 分页显示输出；
       $list = $article->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();// 进行分页数据查询 注意limit方法的参数要使用Page类的属性；
       $this->assign('list',$list);// 赋值数据集；
       $this->assign('page',$show);// 赋值分页输出；
       $this->display();
    }

//管理员添加
 public function add(){
        $admin=D('admin');
      if(IS_POST){
            $data['username']=I('username');
            $data['password']=md5(I('password'));
            if($admin->create($data)){
                if($admin->add()){
                    $this->success('添加管理员成功！',U('lst'));
                }else{
                    $this->error('添加管理员失败！');
                }
            }else{
                $this->error($admin->getError());
            }

            return;
      }
        $this->display();
    }


//管理员删除
  public function del(){
        $admin=D('admin');
        $id=I('id');
        if ($id==1) {
         $this->error('删除管理员失败！');
        }else{if ($admin->delete(I('id'))){
         
                 $this->success('删除管理员成功！',U('lst'));
     }else{

                 $this->error('删除管理员失败！');
        } 
      }
         
       
    }


//管理员修改
  public function edit(){
    $admin=D('admin');
    $admins=$admin->find((I('id')));
    $this->assign('admins',$admins);
    
        if (IS_POST) {
          $data['username']=I('username');
          $data['id']=I('id');
          $admin_s=$admin->find($data['id']);
          $password=$admin_s['password'];
            if(I('password')){
                $data['password']=md5(I('password'));
          }else{
                $data['password']=$password;
            }

                 if ($admin->create($data)) {
                    $save=$admin->save();
                    if ($save!==false) {
                    $this->success('修改管理员成功！',U('lst'));
                  }else{
                $this->error('修改管理员失败！');
            }
              }else{
           $this->error($admin->getError());

          }
          return;
        }

        $this->display();
    }

 public function logout(){
      session(null); // 清空当前的session
      $this->success('已退出当前系统,跳转中...',U('Login/index'));
    }

}