<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>简易留言版</title>
    <link rel="stylesheet" type="text/css" media="screen" href="/blog/Public/style/message.css"/>
    <link rel="shortcut icon" href="/blog/Public/images/bitbug_favicon.ico" />

</head>

<body>
<style>
.logo {
	width:291px;
	float:left;
	background:url(/blog/Public/images/logo.png) no-repeat 0 0;
	height:86px;
	display:block;
	overflow:hidden;
	line-height:100px;
	font-size:18px;
	font-weight:bold;
	color:#fff;
}
.logo a {
	height:32px;
	display:block;
	color:#fff;
}
.sidebar{
	float:right;
	width:300px;
	padding: 5px 30px 0 12px;
	position:absolute;
	right:-2px;
	margin-left:-10px;
	margin: 0px 150px 0px 0px;

}
 #ds-thread{
	  /* width: 800px;
       margin-left: 179px;*/
       position: absolute;
       font-weight: normal;
       font-size: 14px;
       font-size-adjust: none;
       color: #333;
       line-height: 1;
       text-align: left;
       margin: 0px 0px 0px 190px;
       width: 605px;
    }
    /*chang yan*/
#SOHUCS #SOHU_MAIN .module-cmt-notice{display:none !important;}
.section-service-w{display:none !important;}
#SOHUCS #SOHU_MAIN .module-cmt-box .post-wrap-w .post-wrap-main{background:none;background-image:url(http://www.hao7di.com/logocy.png) !important;}
#SOHUCS{position:relative;z-index:0 !important;}
#SOHUCS #SOHU_MAIN .changyan-login-dialog-wrapper .platform-login .split-hr{display:none !important;}
.phone-login{display:none !important;}
#SOHUCS #SOHU_MAIN .changyan-login-dialog-wrapper.changyan-login-dialog-wrapper-main{height:250px !important;}
#SOHUCS #SOHU_MAIN .changyan-login-dialog-wrapper .platform-login .login-group .login-item .login-logo-phone{display:none !important;}
#SOHUCS #SOHU_MAIN .changyan-login-dialog-wrapper .platform-login .login-group .login-item .login-logo-wechat{display:none !important;}
#SOHUCS #SOHU_MAIN .changyan-login-dialog-wrapper .platform-login .login-instruction{display:none !important;}
#SOHUCS #SOHU_MAIN .changyan-login-dialog-wrapper.changyan-login-dialog-wrapper-main{background:none;background-image:url(http://www.hao7di.com/login-bg-high-new.png) !important;}
#SOHUCS #SOHU_MAIN .changyan-login-dialog-wrapper .cy-logo{background:none !important;}
#SOHUCS #SOHU_MAIN .module-cmt-box .post-wrap-w .wrap-action-w .action-issue-w .issue-btn-w a .btn-fw{background:none;background-image:url(http://www.hao7di.com/post-btn.png) !important;}
#SOHUCS #SOHU_MAIN .module-cmt-footer .section-service-w, #SOHUCS #SOHU_MAIN .module-cmt-footer .section-service-w .service-wrap-w, #SOHUCS #SOHU_MAIN .module-cmt-footer .section-service-w .service-wrap-w a{height:0px !important;overflow:hidden !important;}
#SOHUCS{
	margin: 0;
margin-left: auto;
margin-right: auto;
padding: 0;
border: 0;
font-weight: 400;
text-align: left;
width: 100%;
height: auto;
overflow: visible;
font-size: 12px;
color: #333;
background-color: transparent;
line-height: 1;
}
.liuyan{
width: 660px;
height: auto;
padding: 0px 0px;
margin-left: 170px;
position: absolute;
}
</style>
<div class="content" id="#">
      <!-- top -->
<div class="topbar">
	<div class="inner">
		<a class="logo" href="/blog/Public/images/logo.png" title="简易博客阅读网"></a>
		<ul class="nav">
			  <li class="top-ye" style="margin:0px 20px;">
			     <a href="/blog/index.php/Home/Index/index.html">首页</a>
			  </li>
		</ul>
		<ul class="nav" style="margin: 21px -10px;">
			<?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($current == $vo['id']): ?>class='current-menu-item'<?php endif; ?> >
			     <a href="/blog/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a>
			  </li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<ul class="nav topmenu">
			<li id="menu-item-12460" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12460"><a href="/blog/index.php/Home/Message/index.html">给我留言</a></li>
		</ul>
	</div>
</div>

<h1 class="t_nav"><a href="/blog/index.php/Home/Index/index.html" class="n1">网站首页</a><a href="/blog/index.php/Home/Message/index.html" class="n2">留言版</a></h1>
<div class="liuyan">
  <!--PC版-->
<div id="SOHUCS" ></div>
<script charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/changyan.js" ></script>
<script type="text/javascript">
window.changyan.api.config({
appid: 'cysIFYLzg',
conf: 'prod_d0e0a1cf4b75ce68b6e54a7943ef6bf0'
});
</script>
</div>
      
    <!-- right -->
	<div class="sidebar"> 
	<div class="mypages"><iframe width="250" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=1"></iframe></div>
	   <ul class="mypages">
		<li><a href="http://t.qq.com/A1020733278" class="my-a my-tqq" target="_blank" rel="nofollow"><span><strong>腾讯微博</strong></span>腾讯微博 »</a></li>
		<li><a href="http://weibo.com/u/5075649715/home?wvr=5&lf=reg" class="my-a my-weibo" target="_blank" rel="nofollow"><span><strong>新浪微博</strong></span>新浪微博 »</a></li>
		<li><a href="" class="my-a my-feed" target="_blank" rel="nofollow"><span><strong>关于本人</strong></span>关于本人»</a></li>
		<li><a href="http://user.qzone.qq.com/1020733278/infocenter?ptsig=8t-CRE75B2ez6**50IhY2V2GquqnxYL4M3pe4vxXmt0_" class="my-a my-theme" target="_blank" rel="nofollow"><span><strong>QQ空间</strong></span>QQ空间 »</a></li>
	</ul>
	<div class="widget widget_categories"><h3 class="widget-tit">文章分类</h3>		
<ul>
     <?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cat-item cat-item-18"><a title="" href="/blog/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
    </div>
<div class="widget widget_recent_entries"><h3 class="widget-tit">最新发表</h3>		
            <ul>
           
				<?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
				           <a href="/blog/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
				       </li><?php endforeach; endif; else: echo "" ;endif; ?>	
            </ul>
		</div>		
		<div class="widget widget_links"><h3 class="widget-tit">友情链接</h3>
	<ul class="xoxo blogroll">

   <?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
              <a target="_blank" rel="friend" href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?></a>
         </li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
</div>
	<!-- footer -->
    <!--<div class="footer">
	<div class="inner">
		<div class="manage">
			<a target="_blank" href="www.loveinyeu.cn/blog">站内导航</a>  | <script src="https://s4.cnzz.com/z_stat.php?id=1260722023&web_id=1260722023" language="JavaScript"></script>
            <script src=" " type="text/javascript"></script>		
        </div>		
		<div class="copyright">
			<a href="">Derek的博客</a>，版权所有！ © 2016 <img src="">
			 <a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn ">闽ICP备16038037号</a> 
			 <a rel="nofollow" target="_blank" href="">Design by Derek</a>
		</div>
	<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1260722023'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1260722023%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
	</div>
</div> -->
	</div>
</body>
</html>