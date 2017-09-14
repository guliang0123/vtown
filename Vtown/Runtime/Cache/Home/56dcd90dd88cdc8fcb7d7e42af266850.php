<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="/vtown/Public/bs/css/bootstrap.min.css">
		<script src="/vtown/Public/bs/js/bootstrap.min.js"></script>
		<script src="/vtown/Public/bs/js/holder.min.js"></script>
		<script src="/vtown/Public/bs/js/jquery.min.js"></script>
		<title>用户登录</title>
		<style>
			.logo{
				padding: 0;
				margin: 30px auto;
				text-align: center;
			}
			.mt30{
				margin-top:30px;
			}
			.mt10{
				margin-top:10px;
			}
			.center{
				margin:0 auto;
				text-align: center;
			}
			.login{
				background:#ec4a4a;
				color:#fff;
				border-radius:100px;
				width:260px;
				height:32px;

			}
			.forget{
				font-family:.PingFangSC-Regular;
				font-size:12px;
				color:#ec4a4a;
				letter-spacing:-0.29px;
				text-align:center;
			}
			.reg{
				font-family:.PingFangSC-Regular;
				font-size:15px;
				color:#777777;
				letter-spacing:-0.36px;
				text-align:center;
			}
			input{border: none}
			input{border-bottom:1px solid #ccc;width: 230px;}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row center-block logo">
				<div class="col-xs-12 "><img src="/vtown/Public/home/images/login_tx.png" alt="" ></div>
			</div>
			<form action="/vtown/index.php/Home/Index/index">
			<div class="row mt30">
				<div class="col-xs-1 col-xs-offset-1"><img src="/vtown/Public/home/images/phone.png" alt="" width="18px"></div>
				<div class="col-xs-9 "><input type="text" id="username" name="name" placeholder="请输入手机"></div>
			</div>
			<div class="row mt30">
				<div class="col-xs-1 col-xs-offset-1"><img src="/vtown/Public/home/images/pass.png" alt="" width="18px"></div>
				<div class="col-xs-9 "><input type="pasword" id="pass" name="pass" placeholder="请输入密码"></div>
			</div>
			<div class="row mt10">
				<div class="col-xs-4 col-xs-offset-7"><a href="" class="forget">忘记了密码?</a></div>
			</div>
			<div class="row mt30 center" style="margin-top:30px">
				<input type="submit" class="login" value="登录" />
			</div>
			<div class="row mt10 reg">
				<div class="col-xs-12 "><span >注册</span></div>
			</div>
			</form>
		</div>	
	</body>
	<script>
		$('form').submit(function(){
			if($('#username').val()==''){
				alert('请输入手机');
				return false;
			}
			if(!$("#username").val().match(/(13\d|14[57]|15[^4,\D]|17[13678]|18\d)\d{8}|170[0589]\d{7}/)){
				alert('手机格式不正确');
				return false;
			}
			if($('#pass').val()==''){
				alert('请输入密码');
				return false;
			}
		});
	</script>
</html>