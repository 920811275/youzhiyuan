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
		<title>我的提问</title>

		<body>
			<div class="header">
				<span>我的提问</span>
				<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="../img/self-report.png">
			</div>
			<div class="contain">
				<div class="myanswer-box">
						<ul class="myanswer" id="div1">
							<!-- <a href="#">
							<li>
								<span class="route-icon"><i class="iconfont icon-zixun"></i></span>
								<span class="route-word">请问怎样才能申请助学贷款？</span>
								<span class="goin">2016-08-25</span>
							</li>
							</a> -->
							<?php foreach($myanswer_arr as $v){?>
							<li>
								<span class="route-icon"><i class="iconfont icon-zixun"></i></span>
								<span class="route-word"><?php echo $v['desc']?></span>
								<span class="goin"><?php echo $v['date']?></span>
							</li>
							<?php }?>
							<!-- <li>
								<span class="route-icon"><i class="iconfont icon-zixun"></i></span>
								<span class="route-word">请问怎样才能申请助学贷款？</span>
								<span class="goin">2016-08-25</span>
							</li>
							<li>
								<span class="route-icon"><i class="iconfont icon-zixun"></i></span>
								<span class="route-word">请问怎样才能申请助学贷款？</span>
								<span class="goin">2016-08-25</span>
							</li>
							<li>
								<span class="route-icon"><i class="iconfont icon-zixun"></i></span>
								<span class="route-word">请问怎样才能申请助学贷款？</span>
								<span class="goin">2016-08-25</span>
							</li> -->
						</ul>
					</div>
				</div>
			</div>

			<script src="../js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="../js/basic.js"></script>
			<script type="text/javascript" src="../js/rem.js"></script>
		</body>

</html>
<script>
	// $.ajax({
	// 	url:"http://www.ten.com/myanswer?callback=?",
	// 	type:"get",
	// 	dataType:"jsonp",
	// 	usccess:function(msg)
	// 	{
	// 		// var json = eval("("+msg+")")
	// 		console.log(json)
	// 		var str = "<ul>";
	// 		for(var i in msg['data'])
	// 		{
	// 			var str= "<li class='myanswer'>";
	// 			 str +="<span class='route-icon'><i class='iconfont icon-zixun'></i></span>";
	// 			 str +="<span class='route-word'>"+msg[i]['desc']+"</span>";
	// 			 str +="<span class='goin'>"+msg[i]['date']+"</span>";
	// 			 str +="</li>";
	// 		}
	// 		 str +="</ul>";
	// 		$("#div1").html(str);
	// 	}
	// })
</script>