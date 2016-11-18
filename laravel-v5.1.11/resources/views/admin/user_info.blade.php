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
  <title>个人信息</title>
	<body>
		<div class="header">
			<span>个人信息</span>
			<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon">2</span>
    			<p>宿舍预定</p>
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
    	<span class="pro-line"><img src="../img/pro-line4.png"></span>
		</div>
		<form action="handle_user_info" method="post" enctype="multipart/form-data">
		<ul class="dorm-book">
			<li class="upload-head ta-center">
				<!-- <span>
					<img src="../img/take-photo.png">
					<input type="file" />
				</span> -->
				<input type="file" name="file">
				<p>上传头像</p>
			</li>
			<li>
			    <span class="book-tit">姓名</span>
			    <input type="text" id="uname" name="uname" placeholder="请输入姓名" /> 
			    <div class="sex">
					<input type="radio" name="sex" id="sex" value="男">男
					<input type="radio" name="sex" id="sex" value="女">女
			    </div>
			</li>
			<li>
				<span class="book-tit">邮箱</span>
		        <input type="text" id="email" name="email" placeholder="请填写您的个人邮箱地址" />  
			</li>
			<li>
				<span class="book-tit">手机</span>
		        <input type="text" id="tel" name="tel" placeholder="请填写您的个人手机号码" />  
			</li>
			<li>
				<span class="book-tit">家庭主机</span>
		        <input type="text" id="phone" name="phone" placeholder="请填写您的家庭主机号码" />  
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人1电话</span>
			    <input type="text" id="unames" name="unames" placeholder="请输入姓名" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" id="nexus" name="nexus" placeholder="请填写您与联系人1的关系" />  
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人1电话</span>
			    <input type="text" id="unamess" name="unamess" placeholder="请输入姓名" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" id="nexuss" name="nexuss" placeholder="请填写您与联系人1的关系" />  
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">现居住地址</span>
			    <input type="text" id="address" name="address" placeholder="现居住地址"/> 
			    <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">详细地址</span>
		        <input type="text" id="addresss" name="addresss" placeholder="请填写您的详细地址" />  
			</li>
		</ul>
		<div class="step-btn">
				<!-- <a href="javascript:void(0)" id="submit" class="ta-center db">下一步</a> -->
				<input class="ta-center db" type="submit" value="下一步">
		</div>
		</form>
  <script src="../js/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="../js/basic.js"></script>	
  <script type="text/javascript" src="../js/rem.js"></script>	
	</body>
</html>
<script>
	// $("#submit").click(function(){
	// 	// alert(123)
	// 	var uname = $("#uname").val();
	// 	var sex = $("#sex").val();
	// 	var email = $("#email").val();
	// 	var tel = $("#tel").val();
	// 	var phone = $("#phone").val();
	// 	var unames = $("#unames").val();
	// 	var nexus = $("#nexus").val();
	// 	var unamess = $("#unamess").val();
	// 	var nexuss = $("#nexuss").val();
	// 	var address = $("#address").val();
	// 	var addresss = $("#addresss").val();
	// 	$.ajax({
	// 		url:"dorm",
	// 		type:"POST",
	// 		data:{uname:uname,sex:sex,email:email,tel:tel,phone:phone,unames:unames,nexus:nexus,unamess:unamess,nexuss:nexuss,address:address,addresss:addresss},
	// 		success:function(msg)
	// 		{
	// 			alert(msg)
	// 		}
	// 	})
	// })
</script>
