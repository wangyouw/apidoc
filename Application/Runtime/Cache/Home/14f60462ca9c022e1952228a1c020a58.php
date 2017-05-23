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
<link rel="stylesheet" href="/Public/css/login.css" />

    <div class="container">

      <form class="form-signin" method="post">
        <h3 class="form-signin-heading"><?php echo (L("update_personal_info")); ?></h3>
        <input type="text" class="input-block-level" value="<?php echo ($user["username"]); ?>" disabled >
        <input type="password" class="input-block-level" name="new_password"  placeholder="<?php echo (L("new_password_description")); ?>">
        <input type="password" class="input-block-level" name="password"  placeholder="<?php echo (L("old_password_description")); ?>">
        <button class="btn  btn-primary" type="submit"><?php echo (L("submit")); ?></button>
        <a href="javascript:history.go(-1)" class="btn"><?php echo (L("goback")); ?></a>
      </form>

    </div> <!-- /container -->


    
	<script src="/Public/js/common/jquery.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/common/showdoc.js?v=1.1"></script>
    <script src="/Public/layer/layer.js"></script>
    <div style="display:none">
    	<?php echo C("STATS_CODE");?>
    </div>
  </body>
</html>