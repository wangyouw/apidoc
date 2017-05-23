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
<link href="/Public/highlight/default.min.css" rel="stylesheet"> 
<link href="/Public/css/page/index.css?v=1.123456" rel="stylesheet">
<h3 id="page_title"><?php echo ($page["page_title"]); ?></h3>
<!-- 这里开始是内容 -->
<div id="page_md_content" ><textarea style="display:none;">
<?php echo ($page["page_md_content"]); ?></textarea></div>

<div id="page_html_content" style="display:none;"><?php echo ($page["page_html_content"]); ?></div>

    
	<script src="/Public/js/common/jquery.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/common/showdoc.js?v=1.1"></script>
    <script src="/Public/layer/layer.js"></script>
    <div style="display:none">
    	<?php echo C("STATS_CODE");?>
    </div>
  </body>
</html> 

 <script src="/Public/highlight/highlight.min.js"></script>
 <script src="/Public/editor.md/lib/marked.min.js"></script>
 <script src="/Public/editor.md/lib/prettify.min.js"></script>
 <script src="/Public/editor.md/lib/flowchart.min.js"></script>
 <script src="/Public/editor.md/lib/raphael.min.js"></script>
 <script src="/Public/editor.md/lib/underscore.min.js"></script>
 <script src="/Public/editor.md/lib/sequence-diagram.min.js"></script>
 <script src="/Public/editor.md/lib/jquery.flowchart.min.js"></script>
 <script src="/Public/editor.md/editormd.min.js"></script>
 <script src="/Public/js/page/index.js?a=abcedefgh"></script>