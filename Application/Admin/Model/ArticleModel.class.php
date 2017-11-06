<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model {
    
    protected $_validate=array(
        array('title','require','文章标题不得为空！',1,'regex',3), 
         
        array('content','require','文章不得为空！',1,'regex',3), 

        array('cateid','require','文章栏目不得为空！',1,'regex',3), 
         

        );

    
}