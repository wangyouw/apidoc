<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo ($item["item_name"]); ?> ShowDoc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/showdoc.css" rel="stylesheet">
      <script type="text/javascript">
      var DocConfig = {
          host: window.location.origin,
          app: "<?php echo U('/');?>",
          server: "server/index.php?s=",
          pubile:"/Public",
      }

      DocConfig.hostUrl = DocConfig.host + "/" + DocConfig.app;
      </script>
      <script src="/Public/js/lang.<?php echo LANG_SET;?>.js?v=21"></script>
  </head>
  <body>
<link rel="stylesheet" href="/Public/css/item/index.css?v=1.2" />
    <div class="container-narrow">

      <div class="masthead">
        <div class="btn-group pull-right">
        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown" href="#">
        <?php echo (L("more")); ?>
        <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
        <!-- dropdown menu links -->
          <li><a href="<?php echo U('Home/User/setting');?>"><?php echo (L("personal_setting")); ?></a></li>
<!--           <li><a href="#share-home-modal"  data-toggle="modal"><?php echo (L("share_home")); ?></a></li>
 -->          <li><a href="https://github.com/star7th/showdoc/issues" target="_blank"><?php echo (L("feedback")); ?></a></li>
          <li><a href="<?php echo U('Home/index/index');?>"><?php echo (L("web_home")); ?></a></li>
          <li><a href="<?php echo U('Home/User/exist');?>"><?php echo (L("logout")); ?></a></li>

        </ul>
        </div>

        </ul>
        <h3 class="muted"><img src="/Public/logo/b_64.png" style="width:50px;height:50px;margin-bottom:15px;" alt="">ApiDoc</h3>
      </div>

      <hr>

    <div class="container-thumbnails">
      <ul class="thumbnails">

        <?php if(is_array($items)): foreach($items as $key=>$item): ?><li class="span3 text-center">
            <a class="thumbnail" href="<?php echo U('Home/Item/show',array('item_id'=>$item['item_id']));?>" title="<?php echo ($item["item_description"]); ?>">
              <p class="my-item"><?php echo ($item["item_name"]); ?></p>
            </a>
          </li><?php endforeach; endif; ?>

        <li class="span3 text-center">
          <a class="thumbnail" href="<?php echo U('Home/Item/add');?>" title="<?php echo (L("add_an_item")); ?>添加一个新项目">
            <p class="my-item "><?php echo (L("new_item")); ?>&nbsp;<i class="icon-plus"></i></p>
          </a>
        </li>
      </ul>
    </div>


    </div> <!-- /container -->

<!-- 分享项目框 -->
<div class="modal hide fade" id="share-home-modal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3><?php echo (L("share_my_home")); ?></h3>
  </div>
  <div class="modal-body">
    <p><?php echo (L("home_address")); ?>：<code id="share-home-link"><?php echo ($share_url); ?></code></p>
    <p><?php echo (L("home_address_description")); ?></p>
  </div>
</div>


    
	<script src="/Public/js/common/jquery.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/common/showdoc.js?v=1.1"></script>
    <script src="/Public/layer/layer.js"></script>
    <div style="display:none">
    	<?php echo C("STATS_CODE");?>
    </div>
  </body>
</html> 

 <script type="text/javascript">


 </script>