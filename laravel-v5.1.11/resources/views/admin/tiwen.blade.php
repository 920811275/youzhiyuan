<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="../css/slick.css" />
		<link rel="stylesheet" type="text/css" href="../css/base.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/iconfont/iconfont.css" />
		<title>我要提问</title>

		<body>
			<div class="header">
				<span>我要提问</span>
				<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="../img/self-report.png">
			</div>
			<div class="contain"  style="padding-top:3%;">
				 <div class="reason">	
				<textarea id="desc"  placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
			</div>
			<div class="step-btn">
					<a href="javascript:void(0)" class="ta-center db" id="submit">提交</a>
			</div>
			</div>
			<script src="../js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="../js/basic.js"></script>
			<script type="text/javascript" src="../js/rem.js"></script>
		</body>
</html>
<script>
	$("#submit").click(function(){
		var desc = $("#desc").val();
		$.ajax({
			url:"http://www.ten.com/tiwen?callback=?",
			type:'GET',
			data:{desc:desc},
			dataType:"jsonp",
			// jsonp:"callback",
			success:function(msg)
			{
				console.log(msg['data'])
				if(msg['data'] == true)
				{
					alert('提问成功!');
					location.href='http://www.wangjianmin.com/shixun1/laravel-v5.1.11/public/admin/myanswer';
				}else
				{
					alert("提问失败");
				}
			}
		})
	})
</script>