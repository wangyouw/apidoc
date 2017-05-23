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

<link rel="stylesheet" type="text/css" href="/Public/css/tab-tpl.css?v=1">
<style type="text/css">
.member-desc{
  width: 300px;
  margin: 0 auto;
}

</style>
<div class="tab-header"></div>
<div class="container tab-doc-container">
 <div class="tab-doc-title-box">
  <span  class="dn"></span>
  <h3 >项目设置 &nbsp;&nbsp;<small><a href="javascript:history.go(-1)">返回</a></small></h3>
</div>
<div class="tab-doc-body" >

  <div class="tab-doc-content" >
    <ul class="nav nav-tabs" id="myTab">
      <li><a href="#base-info" data-toggle="tab">基础信息</a></li>
      <li><a href="#member" data-toggle="tab">成员管理</a></li>
      <li><a href="#adv-seting" data-toggle="tab">高级设置</a></li>
      <li><a href="#item-api" data-toggle="tab">开放API</a></li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane" id="base-info" >
        <form class="form-horizontal">
         <div class="control-group">
          <label class="control-label" for="">项目名:</label>
          <div class="controls">
            <input type="text" id="item_name" placeholder="">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="">项目描述:</label>
          <div class="controls">
            <input type="text" id="item_description" placeholder="">
          </div>
        </div>
        <div class="control-group" style="display:none">
          <label class="control-label" for="">个性域名:</label>
          <div class="controls">
            <input type="text" id="item_domain" placeholder="">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputPassword">访问密码:</label>
          <div class="controls">
            <input type="password" id="password" placeholder="(可选)私有项目请设置访问密码">
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" id="item_save" class="btn">保存</button>
          </div>
        </div>
      </form>
    </div>

    <div class="tab-pane" id="member">
      <p><button  id="add-member-btn" class="btn ">新增成员</button></p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th style="width:80px;">用户名</th>
            <th style="width:80px;">添加时间</th>
            <th style="width:80px;">权限</th>
            <th style="width:80px;">操作</th>

          </tr>
        </thead>
        <tbody id="member-list">

        </tbody>
      </table>

    </div>
    <div class="tab-pane" id="adv-seting">
      <div style="width:300px;margin:0 auto;padding-top:20px;">
        <p><button  id="attorn-btn" class="btn ">转让</button></p>
        <p><small>你可以将项目转让给他人</small></p>
        <hr>
        <p><button  id="delete-item-btn" class="btn btn-danger">删除</button></p>
        <p><small>删除后将不可恢复</small></p>
        <hr> 
      </div>

    </div>
    <div class="tab-pane" id="item-api">
        <form class="form-horizontal">
         <div class="control-group">
          <label class="control-label" for="">api_key:</label>
          <div class="controls">
            <!-- <input type="text" id="api_key" style="width:260px;" placeholder="" disabled> -->
            <code id="api_key" ></code>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="">api_token:</label>
          <div class="controls">
            <!-- <input type="text" id="api_token" placeholder="" style="width:260px;" disabled> -->
            <code id="api_token" ></code>
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" id="reset_api_token" class="btn">重新生成api_token</button>
          </div>
        </div>
      </form>
      <div style="width:450px;margin:0 auto;padding-top:20px;">
        <p>showdoc开放文档编辑的API，供使用者更加方便地操作文档数据。利用开放API，你可以自动化地完成很多事</p>
        <p>关于API详细用法，请参考我们的<a href="https://www.showdoc.cc/page/102098" target="_blank">API文档</a></p>
        <hr> 
      </div>
    </div>
  </div>

</div>

</div>

<input type="hidden" id="item_id" value="<?php echo ($item_id); ?>">


<!-- 转让项目的弹窗 -->
<div id="attorn-modal" class="modal hide fade">
  <div class="">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4>转让项目</h4>
    </div>
    <div class="">
      <form class="form-horizontal">
        <div class="control-group">
          <label class="control-label" for="inputEmail"><?php echo (L("username")); ?></label>
          <div class="controls">
            <input type="text" id="attorn_username" placeholder="<?php echo (L("receiver_name")); ?>" value="">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputEmail"><?php echo (L("verify_identity")); ?></label>
          <div class="controls">
            <input type="password" id="attorn_password" placeholder="<?php echo (L("your_password")); ?>" value="">
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn" id="attorn_save"><?php echo (L("attorn")); ?></button>
          </div>
        </div>
      </form>

    </div>
  </div>

  <div class="modal-footer">
    <a href="#" class="btn exist-attorn" data-dismiss="modal" aria-hidden="true" ><?php echo (L("close")); ?></a>
  </div>
</div>

<!-- 删除项目的弹窗 -->
<div id="delete-item-modal" class="modal hide fade">
  <div class="">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4>删除项目</h4>
    </div>
    <div class="">
      <form class="form-horizontal">
        <div class="control-group">
          <label class="control-label" for="inputEmail"><?php echo (L("verify_identity")); ?></label>
          <div class="controls">
            <input type="password" id="delete_item_password" placeholder="<?php echo (L("your_password")); ?>" value="">
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn" id="delete_item_save"><?php echo (L("delete")); ?></button>
          </div>
        </div>
      </form>

    </div>
  </div>

  <div class="modal-footer">
    <a href="#" class="btn exist-attorn" data-dismiss="modal" aria-hidden="true" ><?php echo (L("close")); ?></a>
  </div>
</div>

<!-- 添加成员的弹窗 -->
<div id="member-modal" class="modal hide fade">
  <!-- 编辑框 -->
  <div class="">
    <div class="modal-header">
    <h4><?php echo (L("new_member")); ?></h4>
    </div>
    <div class="">
        <form class="form-horizontal">
          <div class="control-group">
            <label class="control-label" for="inputEmail"><?php echo (L("username")); ?></label>
            <div class="controls">
              <input type="text" id="member_username" placeholder="<?php echo (L("username")); ?>" value="">
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" id="member_group_id"><?php echo (L("member_group_id")); ?>
              </label>
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn" id="member_save"><?php echo (L("save")); ?></button>
            </div>
          </div>
        </form>
        <div class="member-desc">
          <p>权限说明：
            <br>默认成员可以新建/编辑项目页面，删除时将只能删除自己新建/编辑的页面。
            <br>勾选只读属性后，该成员对所有页面都只能查看，无法新增/编辑/删除</p>
        </div>
        
    </div>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn " data-dismiss="modal" aria-hidden="true"><?php echo (L("close")); ?></a>
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
$(function(){
  $('a[data-toggle="tab"]').on('shown', function (e) {
          //e.target // activated tab
          //e.relatedTarget // previous tab
          console.log($(e.target).attr("href"));
        })

    //展示第一个tab
    $("#myTab a:first").tab("show");

    var item_id = $("#item_id").val() ;

    

    //获取基础信息
    get_base_info() ;
    function get_base_info(){
      $.get(
        DocConfig.server+"/api/item/detail",
        {"item_id":item_id},
        function(data){
          if (data.error_code === 0 ) {
            //console.log(data.data);
            $("#item_name").val(data.data.item_name);
            $("#item_description").val(data.data.item_description);
            $("#item_domain").val(data.data.item_domain);
            $("#password").val(data.data.password);
          }else{
            layer.alert(data.error_message);
          }
        },
        "json"

        );
    }

    //保存项目基础信息
    $("#item_save").click(function(){

      var item_name = $("#item_name").val();
      var item_description = $("#item_description").val();
      var item_domain = $("#item_domain").val();
      var password = $("#password").val();
      $.post(
        DocConfig.server+"/api/item/update",
        {"item_id":item_id,"item_name":item_name,"item_description":item_description,"item_domain":item_domain,"password":password},
        function(data){
          if (data.error_code === 0 ) {
            layer.msg('保存成功',{"time":1000});
            get_base_info() ;
          }else{
            layer.alert(data.error_message);
          }
        },
        "json"
        );

      return false;
    });

    //点击转让按钮，弹出modal
    $("#attorn-btn").click(function(){
      $('#attorn-modal').modal({
        "backdrop":'static'
      });
    });

    //监听转让
    $("#attorn_save").click(function(){
      var username = $("#attorn_username").val();
      var password = $("#attorn_password").val();
      $.post(
        DocConfig.server+"/api/item/attorn",
        {"username": username ,"item_id": item_id , "password": password  },
        function(data){
          if (data.error_code == 0) {
            layer.msg('转让成功，正在跳转回主页..',{"time"500});
            //跳转
            setTimeout(function(){
              window.location.href="?s=/home/item/index";
            },500)
            
          }else{
            layer.alert(data.error_message);
          }
        },
        "json"

        );
      return false;
    });

    //删除项目
    $("#delete-item-btn").click(function(){
      $('#delete-item-modal').modal({
        "backdrop":'static'
      });
    });

    //监听删除
    $("#delete_item_save").click(function(){
      var password = $("#delete_item_password").val();
      $.post(
        DocConfig.server+"/api/item/delete",
        {"item_id": item_id , "password": password  },
        function(data){
          if (data.error_code == 0) {
            layer.msg('删除成功，正在跳转回主页..',{"time"500});
            //跳转
            setTimeout(function(){
              window.location.href="?s=/home/item/index";
            },500)
            
          }else{
            layer.alert(data.error_message);
          }
        },
        "json"

        );
      return false;
    });

    //点击添加成员，弹出modal
    $("#add-member-btn").click(function(){
      $('#member-modal').modal({
        "backdrop":'static'
      });
    });


    //获取成员列表
    get_member_list();
    function get_member_list(){
      $.get(
        DocConfig.server+"/api/member/getList",
        {"item_id":item_id},
        function(data){
          $("#member-list").html('');
          if (data.error_code === 0 ) {
            //console.log(data.data);
            var json = data.data ;
            if (json.length > 0 ) {
              for (var i = 0; i < json.length; i++) {
                var html = '<tr>'
                  +'<td><div class="type-parent">'+json[i].username+'</div></td>'
                  +'<td><div class="type-parent">'+json[i].addtime+'</div></td>'
                  +'<td><div class="type-parent">'+json[i].member_group+'</div></td>'
                  +'<td><a href="#" class="member-delete" data-id="'+json[i].item_member_id+'">删除</a></td>'
                +'</tr>';
                $("#member-list").append(html);
                
              };

            };
          }else{
            layer.alert(data.error_message);
          }
        },
        "json"

        );
    }

    //添加成员
    $("#member_save").click(function(){
      var username = $("#member_username").val();
      var member_group_id = $("#member_group_id").is(':checked') ? 0 : 1 ;
      $.post(
        DocConfig.server+"/api/member/save",
        {"item_id": item_id , "username": username ,"member_group_id":member_group_id  },
        function(data){
          if (data.error_code == 0) {
            $('#member-modal').modal('hide');
            $("#member_username").val('');
            $("#member_group_id").removeAttr("checked");
            layer.msg('添加成功',{"time":1000});
            get_member_list();
            
          }else{
            layer.alert(data.error_message);
          }
        },
        "json"

        );
      return false;
    });

    //删除成员
    $("#member-list").on("click",'.member-delete',function(){
      var item_member_id = $(this).data("id");
      layer.confirm("确定删除成员吗",{},function(){
          $.post(
            DocConfig.server+"/api/member/delete",
            {"item_id": item_id , "item_member_id": item_member_id  },
            function(data){
              if (data.error_code == 0) {
                layer.msg('删除成功',{"time":1000});
                get_member_list();
                
              }else{
                layer.alert(data.error_message);
              }
            },
            "json"

            );
      });
      return false;
    })

    //获取item api_key信息
    get_api_info() ;
    function get_api_info(){
      $.get(
        DocConfig.server+"/api/item/getKey",
        {"item_id":item_id},
        function(data){
          if (data.error_code === 0 ) {
            //console.log(data.data);
            $("#api_key").html(data.data.api_key);
            $("#api_token").html(data.data.api_token);
          }else{
            layer.alert(data.error_message);
          }
        },
        "json"

        );
    }

    $("#reset_api_token").click(function(){
      $.post(
        DocConfig.server+"/api/item/resetKey",
        {"item_id":item_id},
        function(data){
          if (data.error_code === 0 ) {
            //console.log(data.data);
            $("#api_key").html(data.data.api_key);
            $("#api_token").html(data.data.api_token);
          }else{
            layer.alert(data.error_message);
          }
        },
        "json"

        );
      return false;
    });

  });
</script>