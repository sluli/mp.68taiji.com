<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<body class="gray-bg">
<link href="./resource/css/plugins/summernote/summernote.css" rel="stylesheet">
<link href="./resource/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>订单详情 <small></small></h5>

                </div>
                <div class="ibox-content">
                    <form method="post" class="form-horizontal">
                        <input type="hidden" name="oid" value="<?php  echo $orders['oid'];?>">
                        <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                        <input type="hidden" name="submit" value="true" />
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品名称</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" value="<?php  echo $goods['name'];?>" readonly />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品价格</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" value="<?php  echo $goods['price'];?>" readonly />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">收件人</label>
                            <div class="col-sm-6">
                                <input type="text" name="submit_data[name]" class="form-control" value="<?php  echo $orders['name'];?>" />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">联系电话</label>
                            <div class="col-sm-6">
                                <input type="text" name="submit_data[mobile]" class="form-control" value="<?php  echo $orders['mobile'];?>" />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">收件地址</label>
                            <div class="col-sm-2">
                                <input type="text" name="submit_data[province]" class="form-control" value="<?php  echo $orders['province'];?>" />
                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="submit_data[city]" class="form-control" value="<?php  echo $orders['city'];?>" />
                            </div>
                            <div class="col-sm-2">
                                <input type="text" name="submit_data[district]" class="form-control" value="<?php  echo $orders['district'];?>" />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">&nbsp;</label>
                            <div class="col-sm-6">
                                <input type="text" name="submit_data[address]" class="form-control" value="<?php  echo $orders['address'];?>" />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">下单IP</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" value="<?php  echo $orders['ip'];?>" readonly />
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">异常订单</label>
                            <div class="col-sm-6">
                                <label>
                                    <input type="radio" name="submit_data[dubious]" value="1" <?php  if($orders['dubious']) { ?> checked <?php  } ?>/> 是
                                </label>
                                <label>
                                    <input type="radio" name="submit_data[dubious]" value="0" <?php  if(!$orders['dubious']) { ?> checked <?php  } ?> /> 否
                                </label>
                            </div>
                        </div>


                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">状态</label>
                            <div class="col-sm-6">
                                <label>
                                    <input type="radio" name="submit_data[status]" value="0" <?php  if($orders['status'] == 0) { ?> checked <?php  } ?>/> 取消
                                </label>
                                <label>
                                    <input type="radio" name="submit_data[status]" value="1" <?php  if($orders['status'] == 1) { ?> checked <?php  } ?> /> 未发货
                                </label>
                                <label>
                                    <input type="radio" name="submit_data[status]" value="2" <?php  if($orders['status'] == 2) { ?> checked <?php  } ?> /> 已发货
                                </label>
                                <label>
                                    <input type="radio" name="submit_data[status]" value="3" <?php  if($orders['status'] == 3) { ?> checked <?php  } ?> /> 已收货
                                </label>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">物流公司</label>
                            <div class="col-sm-6">
                                <input type="text" name="submit_data[delivery]" class="form-control" value="<?php  echo $orders['delivery'];?>" />
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">物流单号</label>
                            <div class="col-sm-6">
                                <input type="text" name="submit_data[delivery_code]" class="form-control" value="<?php  echo $orders['delivery_code'];?>" />
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" type="submit">保存</button>
                                <a class="btn btn-white" href="javascript:history.go(-1);">返回</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
<script src="./resource/js/plugins/summernote/summernote.min.js"></script>
<script src="./resource/js/plugins/summernote/summernote-zh-CN.js"></script>
<script>
    $(document).ready(function(){
        $(".summernote").summernote({lang:"zh-CN"})
    });
    var edit=function(){
        $("#eg").addClass("no-padding");
        $(".click2edit").summernote({lang:"zh-CN",focus:true})
    };
    var save=function(){
        $("#eg").removeClass("no-padding");
        var aHTML=$(".click2edit").code();
        $(".click2edit").destroy();
        alert(aHTML);
    };

</script>