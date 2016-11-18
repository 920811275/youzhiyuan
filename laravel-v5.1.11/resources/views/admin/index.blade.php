<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="../css/slick.css" />
		<link rel="stylesheet" type="text/css" href="../css/base.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/all.css"/>
		<link rel="stylesheet" type="text/css" href="../css/swiper.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/iconfont/iconfont.css" />
		<title>首页</title>
	</head>

	<body>
		<div class="header">
			<span>优智源</span>
			<a href="{{url('login/index')}}"><span class="user"><i class="iconfont icon-person"></i></span></a>
		</div>
		<!--<div class="banner autoplay">

			<div>

				<a href="#" class="banner-img"><img src="../img/banner1.png" alt=""></a>

			</div>

			<div>

				<a href="#" class="banner-img"><img src="../img/banner1.png" alt=""></a>

			</div>

			<div>

				<a href="#" class="banner-img"><img src="../img/banner1.png" alt=""></a>

			</div>

		</div>-->
		<div class="banner swiper-container">
            <div class="swiper-wrapper">
            <?php foreach($arr as $v){?>
                <div class="swiper-slide"><a href="javascript:void(0)"><img class="swiper-lazy" data-src="<?php echo $v['img']?>" alt=""></a>
                </div>

            <?php }?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
		<?php include('dao/dao.php');?>
		</div>
		<div class="brief">
			<h3 class="brief-tit">校园简介</h3>
			<div class="brirf-content clearfix">
			<?php foreach($arr1 as $k){?>
				<div class="bc-left fl">
					<img src="<?php echo $k['img']?>">
				</div>
				<div class="bc-right fr">
					<?php echo $k['desc']?>
				</div>
			<?php }?>
			</div>
		</div>
		<dl class="news">
			<dt class="news-tit">校园资讯</dt>
			<dd class="news-content clearfix">
			<?php foreach($data as $key){?>
				<div class="nc-left fl">
					<img src="<?php echo $key['img']?>">
				</div>
				<div class="nc-right fr">
					<a class="ncr-top"><?php echo $key['news']?>
					</a>
					<span class="nc-time"><?php echo $key['date']?></span>
				</div>
			<?php }?>
			</dd>
			
		</dl>
		<?php include('footer/footer.php') ?>
		<script src="../js/jquery.min.js"></script>
	    <script src="../js/fastclick.js"></script>
		<script src="../js/slick.min.js"></script>
		
		<script src="../js/rem.js"></script>
		<script src="../js/basic.js"></script>
		<script src="../js/swiper.jquery.min.js"></script>
		<script>
			$(function() {
				$('.autoplay').slick({
				  slidesToScroll: 1,
				  autoplay: true,
				  autoplaySpeed: 2000,
				   dots:true,
				});
			});
		</script>
		<script >
		    $(function () {
		        var banner = new Swiper('.banner',{
		            autoplay: 5000,
		            pagination : '.swiper-pagination',
		            paginationClickable: true,
		            lazyLoading : true,
		            loop:true
		        });		
		    });
		</script>
	</body>
</html>
 <!-- <script> -->
<!-- // 	$.ajax({
// 		url:"admin/index";
// 		type:"get";
// 		success.function(msg)
// 		{

// 		}
// 	})
// </script> -->