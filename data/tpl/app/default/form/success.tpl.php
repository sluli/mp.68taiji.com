<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>
        操作成功
    </title>
    <meta name="format-detection" content="telephone=no, address=no">
    <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
    <meta name="apple-touch-fullscreen" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="shortcut icon" href="http://demo.fwei.net/attachment/images/global/wechat.jpg" />
    <script src="./resource/js/require.js"></script>
    <script type="text/javascript" src="./resource/js/lib/jquery-1.11.1.min.js?v=20160906"></script>
    <link href="./resource/css/bootstrap.min.css?v=20160906" rel="stylesheet">
</head>
<body>
<div class="container container-fill">
    <link href="./resource/css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        var checkform = function () {
            var err = null;
            $(".required").each(function (i) {
                if( err == null && $(this).val() == '' ){
                    err = $(this);
                }
            })
            if( err!= null ){
                err.focus();
                return false;
            }
            return true;
        }
    </script>
    <style type="text/css">
        .intors img{ max-width: 100%;}
        .normal{font-weight: normal;}
        .inpbox{ display:-webkit-box;}
        .inpbox label{ display:block;-webkit-box-flex:1;font-weight:normal; padding-left:5px;}
        .row{padding: 10px 0px;}
        .col-xs-3{padding-left: 5px!important; padding-right: 5px!important;}
    </style>
    <div class="container" style="padding-left: 5px; padding-right: 5px;">
        <div class="lead_box" id="step_1" style="margin: 20px 0px;">
            <h6>恭喜你，领取成功！</h6>

            <div class="lead_content">
                <div class="row" style="color: #ff0000;">
                    请确认以下信息:
                </div>
                <div class="row">
                    <div class="col-xs-3 item-label">款式:</div>
                    <div class="col-xs-9">
                        <?php  echo $orders['title'];?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3 item-label">收货人:</div>
                    <div class="col-xs-9">
                        <?php  echo $orders['name'];?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3 item-label">电话:</div>
                    <div class="col-xs-9">
                        <?php  echo $orders['mobile'];?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3 item-label">地址:</div>
                    <div class="col-xs-9">
                        <?php  echo $orders['address'];?>
                    </div>
                </div>
                <div class="row" style="text-align: left; color: #ff0000;">
                    <!--<img src="./resource/images/qrcode.png" width="200" />-->
                    </div>
                <div class="row" style="text-align: center;">
                    <a href="javascript:void(0);" onclick="WeixinJSBridge.call('closeWindow');" class="btn btn-primary">返回微信</a>
                </div>
            </div>
            <div style="clear: both"></div>
        </div>


    </div>
</div>
<div class="text-center footer" style="margin:10px 0; width:100%; text-align:center; word-break:break-all;">
    CopyRight © 2015 								&nbsp;&nbsp;			</div>
</div>
<style>
    h5{color:#555;}
</style>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
    $(function () {
        $("#dosave").click(function () {
            $("#form").submit();
        })
    })
</script>
</body>
</html>
