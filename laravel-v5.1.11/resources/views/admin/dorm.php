<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="../css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="../css/base.css"/>
  <link rel="stylesheet" type="text/css" href="../css/style.css"/>
  <link rel="stylesheet" type="text/css" href="../css/iconfont/iconfont.css"/>
  <title>宿舍预定</title>
	<body>
		<div class="header">
			<span>宿舍预定</span>
			<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="banner">
			<img src="../img/self-report.png">
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon passbg">2</span>
    			<p class="step-txt">宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon">3</span>
    			<p>抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="../img/pro-line.png"></span>
		</div>
		<!-- <form action="handle_dorm" method="post"> -->
		<ul class="dorm-book">
			<li>
		    <span class="book-tit">校区</span>
		    <input type="text" id="campus" name="campus" placeholder="请选择你所在的校区" /> 
		    <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">楼栋号</span>
		        <input type="text" id="building" name="building" placeholder="请填写您宿舍的楼栋号" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">宿舍类型</span>
		        <input type="text" id="type" name="type" placeholder="请填写您的宿舍类型" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">房间号</span>
		        <input type="text" id="number" name="number" placeholder="请选择您的房间号" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">铺位</span>
		        <input type="text" id="bed" name="bed" placeholder="请选择您的床铺位置" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
		</ul>
		
		<div class="step-btn">
				<a href="user_info">上一步</a>
				<a href="javascript:void(0)" id="submit">下一步</a>
				<!-- <input type="submit" value="下一步"> -->
		</div>
		<!-- </form> -->
	  <script src="../js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="../js/rem.js"></script>	
	</body>
</html>
<script>
	$("#submit").click(function(){
		// alert(123);
		var campus = $("#campus").val();
		var building = $("#building").val();
		var type = $("#type").val();
		var number = $("#number").val();
		var bed = $("#bed").val();
		var {campus:campus,building:building,type:type,number:number,bed:bed};
		var json = ajax('handle_dorm',data);
				if (msg['data']== true){
					alert("添加成功!");
					location.href='http://www.wangjianmin.com/shixun1/laravel-v5.1.11/public/admin/arrive';
				} else {
					alert("失败!");
					location.href='http://www.wangjianmin.com/shixun1/laravel-v5.1.11/public/admin/dorm';
				}
		
	})
</script>
