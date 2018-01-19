<!DOCTYPE html>
<?php
	$con=mysqli_connect("127.0.0.1","root","root","moamour");
	if(mysqli_connect_errno()){
		echo "链接失败：".mysqli_connect_error();
	}
	mysqli_query($con, "set names utf8");
	$result=mysqli_query($con,"SELECT * FROM bangdan");
?>
<html>

	<head>
		<meta charset="utf-8" />
		<title>美沫艾莫尔-面部护理-面膜</title>
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/header.css" />
		<link rel="stylesheet" type="text/css" href="css/bangdan.css" />
		<link rel="stylesheet" type="text/css" href="css/footer.css" />
				<link rel="stylesheet" type="text/css" href="css/story.css"/>

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.cbp-hrmenu li').hover(function() {
					$('.cbp-hrsub', this).css('display', 'block');
				}, function() {
					$('.cbp-hrsub', this).css('display', 'none');
				});
			});
		</script>

	</head>

	<body>
		<div class="container-fluid">
			<div class="zhuangtai">
				<div class="container font">
					<span><a href="register.html">注册</a></span>
					<span><a href="login.php">登录</a></span>
				</div>
			</div>
			<div class="container">
				<!--头部-->
				<div class="header">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-lg-12">
							<div class="row">
								<div class="col-sm-3">
									<a href="index.php"><img src="img/logo.png" /></a>
								</div>
								<div class="col-sm-8">
									<img src="img/search_03.png" class="search-img" /><input type="text" placeholder="请输入搜索的商品" class="search" />
								</div>
								<div class="col-sm-1">
									<div class="zhengpin">
										<span>正品认证</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-lg-12">
							<nav id="cbp-hrmenu" class="cbp-hrmenu">
								<ul>
									<li>
										<a href="story.html">品牌故事</a><span class="activehr"></span>
									</li>
									<li>
										<a href="#">产品类别</a><span class="activehr"></span>
										<div class="cbp-hrsub">
											<div class="cbp-hrsub-inner">
												<div>
													<h4>面部护理</h4>
													<ul>
														<li>
															<a href="#">卸妆</a>
														</li>
														<li>
															<a href="#">洁面</a>
														</li>
														<li>
															<a href="#">爽肤水</a>
														</li>
														<li>
															<a href="#">面霜</a>
														</li>
														<li>
															<a href="mask.php">面膜</a>
														</li>
														<li>
															<a href="#">精华</a>
														</li>
													</ul>

												</div>
												<div>
													<h4>美体保养</h4>
													<ul>
														<li>
															<a href="#">洗发护发</a>
														</li>
														<li>
															<a href="#">美体精油</a>
														</li>
														<li>
															<a href="#">身体滋养</a>
														</li>
													</ul>
												</div>
												<div>
													<a href=" "><img src="img/shouye1.jpeg" style="width: 300px;height: 300; margin: 40px;" /></a >
												</div>
											</div>
											<!-- /cbp-hrsub-inner -->
										</div>
										<!-- /cbp-hrsub -->
									</li>
									<li>
										<a href="#">产品系列</a><span class="activehr"></span>
										<div class="cbp-hrsub">
											<div class="cbp-hrsub-inner">
												<div>
													<h4>系列甄选</h4>
													<ul>
														<li>
															<a href="productxilie.php">亮肤润白</a>
														</li>
														<li>
															<a href="#">祛痘净肤</a>
														</li>
														<li>
															<a href="#">修护润养</a>
														</li>
														<li>
															<a href="#">紧致提升</a>
														</li>
													</ul>
												</div>
												<div>
													<a href=" "><img src="img/shouye4.png" style="width: 600px;height: 300px; margin: 40px;" /></a >
												</div>
											</div>
											<!-- /cbp-hrsub-inner -->
										</div>
										<!-- /cbp-hrsub -->
									</li>
									<li>
										<a href="#">产品榜单</a><span class="activehr"></span>
										<div class="cbp-hrsub">
											<div class="cbp-hrsub-inner">
												<div>
													<h4>爱你所爱</h4>
													<ul>
														<li>
															<a href="bangdan.php">热销爆款</a>
														</li>
														<li>
															<a href="#">超值套餐</a>
														</li>
													</ul>
												</div>
												<div>
													<a href=" "><img src="img/shouye2.jpeg" style="width: 300px;height: 300; margin: 40px;"/></a >

												</div>
												<div>
													<a href=" "><img src="img/shouye3.jpeg" style="width: 300px;height: 300; margin: 40px;" /></a >
												</div>
											</div>
										</div>
									</li>
									<li>
										<a href="#">社区活动</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>

			<div class="container-main">
				<div class="container">
					<!--内容部分 中部-->
					<div class="main">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-lg-12">
								<center>
									<div class="liangfu"><span>热销爆款</span></div>
									<div><img src="img/198439057425009894.png" /></div>
									<img>
								</center>
							</div>
						</div>
						<div class="row">
							<hr />
						</div>
						<div class="row product-detail">
						<?php
			               while($row=mysqli_fetch_array($result)){
			            ?>
							<div class="col-xs-6 col-sm-3 col-lg-3">
								
									<div class="thumbnail">
										<a href=""><img src="<?php echo $row['bd_pic'];?>" alt="【沫凡力荐】美沫艾莫尔白玫瑰喷雾 秋季必备补水保湿喷雾"class="img-responsive" /></a>
										
										<div class="caption">
											<center>
												<div class="row">
													<div class="col-lg-offset-3 col-lg-2">
												<p class=""style="border: solid #86ceb9 1px;border-radius: 5px;color: #86ceb9;margin-top:12px;">
													<?php echo $row['bd_size1'];?>
												</p>
													</div>
													<div class="col-lg-4">
														<p class=""style="border: solid #86ceb9 1px;border-radius: 5px;color: #86ceb9;margin-top:12px;">
													<?php echo $row['bd_size2'];?>
												</p>
													</div>
												
												</div>
											</center>
											<p>
												<center>
													<a class="btn btn-default btn-sm buttons" role="button" href="#">查看详情</a>
												</center>
											</p>
										</div>
									</div>
								
							</div>
							
							 <?php
                             }
   	                     ?>						
						</div>
					</div>
					<!--底部-->
					<div class="footer">
						<hr class="foot-hr" />
						<div class="row" style="margin-top: 5%;">
							<div class="col-xs-1 col-sm-1 col-md-1 col-sm-offset-1">
								<img src="img/footlogo.png" />
							</div>
							<div class="col-xs-9 col-sm-9 col-md-9 footer-font">
								<span>阿里巴巴集团  | 阿里巴巴国际站 | 阿里巴巴中国站 | 全球速卖通 | 淘宝网 | 天猫|聚划算 | 一淘 | 阿里妈妈|阿里云计算 | 云OS| 万网 | 中国雅虎 | </span>

								<span>关于淘宝 合作伙伴 营销中心 联系客服 开放平台 诚征英才 联系我们 网站地图 法律声明 © 2015 Taobao.com 版权所有</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="footer-new">
							<center>
								<span>© COPYRIGHT THEFACESHOP 美沫艾莫尔(北京)化妆品销售有限公司 | 隐私声明  沪ICP备12046938号-2</span>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>