<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="../css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="../css/base.css"/>
  <link rel="stylesheet" type="text/css" href="../css/style.css"/>
  <link rel="stylesheet" type="text/css" href="../css/jcDate.css" media="all" />
  <link rel="stylesheet" type="text/css" href="../css/iconfont/iconfont.css"/>
  <title>抵校登记</title>
	<body>
		<div class="header">
			<span>抵校登记</span>
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
    			<span class="step-icon passbg">3</span>
    			<p class="step-txt">抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="../img/pro-line1.png"></span>
		</div>
		<ul class="dorm-book">
			<li>
			<!-- <div class="show-btn"> -->
			   <span class="book-tit">交通方式</span>
		        <input type="text" placeholder="请输入您的交通方式" id="traffic" name="traffic"/>
		   <!-- </div> -->
		    <!-- <span class="goin"><i class="iconfont icon-right"></i></span>
		    <div class="checkshow">
	        	<p class="checked">飞机</p>
	        	<p>火车</p>
	        	<p>汽车</p>
	       </div> -->
			</li>
			<li>
				<span class="book-tit">接站站点</span>
		        <input type="text" id="engagement" name="engagement" placeholder="请选择您目的地的站点位置"/>  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">出发时间</span>
		        <input type="text" id="gotime" class="jcDate" name="gotime" placeholder="请填写您的出发时间" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">到达时间</span>
		        <input type="text" id="reachtime" class="jcDate" name="reachtime" placeholder="请选择您的预计到达时间" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<div class="show-btn">					
					<span class="book-tit">是否陪同</span>
			        <input type="text" id="escort" name="escort" placeholder="请选择是否有人陪同"/>  
		        </div>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
		        <!-- <div class="checkshow">
	        	<p class="checked">是</p>
	        	<p>否</p> -->
	      <!--  </div> -->
			</li>
			<li>
				<span class="book-tit">陪同人数</span>
		        <input type="text" id="escort_number" name="escort_number" placeholder="请填写您的陪同人数" />  
			</li>
		</ul>
		<div class="step-btn">
			    <a href="dorm">上一步</a>
				<a href="javascript:void(0)" id="submit">下一步</a>
		</div>
	  <script src="../js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="../js/basic.js"></script>	
      <script type="text/javascript" src="../js/rem.js"></script>
      <script type="text/javascript" src="../wjm.js"></script>
      <script src="../js/jquery.min.js" type="text/javascript"></script>
	  <script type="text/javascript" src="../js/jQuery-jcDate.js" charset="utf-8"></script>	
	</body>
</html>
<script>
$(function (){
	$("#submit").click(function(){
		// alert(123)
		var traffic = $("#traffic").val();
		var engagement = $("#engagement").val();
		var gotime = $("#gotime").val();
		var reachtime = $("#reachtime").val();
		var escort = $("#escort").val();
		var escort_number = $("#escort_number").val();
		var data = {traffic:traffic,engagement:engagement,gotime:gotime,reachtime:reachtime,escort:escort,escort_number:escort_number};
		var json = ajax('arrive',data);
				if (msg['data']==true){
					alert("添加成功!");
					location.href='http://www.wangjianmin.com/shixun1/laravel-v5.1.11/public/admin/reportcard';
				} else {
					alert("添加失败!");
					location.href='http://www.wangjianmin.com/shixun1/laravel-v5.1.11/public/admin/arrive';
				}
	})
	
	$("input.jcDate").jcDate({					       
			IcoClass : "jcDateIco",
			Event : "click",
			Speed : 100,
			Left : 0,
			Top : 28,
			format : "-",
			Timeout : 100
	});
});

</script>
