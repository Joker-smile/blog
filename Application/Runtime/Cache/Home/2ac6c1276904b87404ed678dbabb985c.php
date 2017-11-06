<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="applicable-device" content="pc">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="viewport" content="width=device-width" />
<link rel="shortcut icon" href="/blog/Public/images/bitbug_favicon.ico" />
<link rel="stylesheet" type="text/css" media="screen" href="/blog/Public/style/style.css"  />
<script src="/blog/Public/style/jquery.min.js"></script> 
<script src="/blog/Public/style/post.js"></script>
<script type="text/javascript">
/*frame*/ 
if (top.location != self.location) { top.location=self.location } </script> 
<title>简易博客阅读网</title>
</head>
<body class="single single-post postid-42805 single-format-standard">

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


<div class="wrapper">
	<div class="content">

<div class="meta">
	<h1 class="meta-tit"><?php echo ($arts["title"]); ?></h1>
	<p class="meta-info">发表：<a href="/blog/index.php"><?php echo ($catename); ?></a> &nbsp;&nbsp; 发表日期：<?php echo (date("Y-m-d",$arts["time"])); ?> &nbsp;&nbsp; </p>
</div>
<div class="entry">
	<p><img class="aligncenter size-full wp-image-42806" src="/blog/<?php echo ($arts["pic"]); ?>" alt="" width="630" height="399" srcset="" sizes="(max-width: 630px) 100vw, 630px" /></p>
         <?php echo htmlspecialchars_decode($arts['content']);?>
</div>

<div>
<?php if($prevs): ?><strong>上一篇：</strong>
<a class="prev-post icon-right" href="/blog/index.php/Home/Article/index/id/<?php echo ($prevs["id"]); ?>">
<?php echo ($prevs["title"]); ?></a>
<?php else: ?>
<strong>上一篇：木有了</strong><?php endif; ?>
</div>

<div style="margin:10px 0;">
<?php if($nexts): ?><strong>下一篇：</strong>
<a class="next-post" href="/blog/index.php/Home/Article/index/id/<?php echo ($nexts["id"]); ?>">
<?php echo ($nexts["title"]); ?></a> 
<?php else: ?>
<strong>下一篇：木有了</strong><?php endif; ?>
</div>

<!-- 分享代码 -->
<div class="baidufenxiang" style="overflow:auto;">
<!-- Baidu Button BEGIN -->
<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
<a class="bds_bdhome"></a>
<a class="bds_renren"></a>
<a class="bds_kaixin001"></a>
<a class="bds_douban"></a>
<a class="bds_youdao"></a>
<a class="bds_sqq"></a>
<a class="bds_hi"></a>
<a class="bds_baidu"></a>
<a class="bds_qq"></a>
<a class="bds_tqq"></a>
<a class="bds_tsina"></a>
<a class="bds_qzone"></a>
<a class="bds_mshare"></a>
<span class="bds_more"></span>
<a class="shareCount"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=53164" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
</div>

<!-- 百度推荐 -->
<div style="margin-left: -12px; margin-bottom: -3px;">
<script>document.write(unescape('%3Cdiv id="hm_t_61751"%3E%3C/div%3E%3Cscript charset="utf-8" src="http://crs.baidu.com/t.js?siteId=99c2c06a529fc4c8787deb597141fe76&planId=61751&async=0&referer=') + encodeURIComponent(document.referrer) + '&title=' + encodeURIComponent(document.title) + '&rnd=' + (+new Date) + unescape('"%3E%3C/script%3E'));</script>
</div>


</div>
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
</div>
<div class="footer">
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
</div>
<!-- 百度自动推送 -->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</body>
</html>