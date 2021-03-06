<?php
	session_start();
	include("connect.php");
	/**/
	$_SESSION['token']='123';
	$_SESSION['usrid']='988793';
	$_SESSION['name']='Atlas';
	/*验证易班的session*/
	if(!isset($_SESSION['token'])||!isset($_SESSION['usrid'])||!isset($_SESSION['name'])){
        exit('illegal access!');
	}else{
		$user_id=$_SESSION['usrid'];
		$nickname=$_SESSION['name'];
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>邮动力</title>

	<!-- jquery -->
	<script src="js/jquery-1.7.2.min.js"></script>
	<!-- materialize -->
	<link rel="stylesheet" href="css/materialize.min.css">
	<!-- common.css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/common.css">
	<script src="js/jQueryTween-aio-min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/calendar.js"></script>
	<script src="js/notice_moudle.js"></script>

</head>
	<body>
		<div id="body" class="">
			<div class="row">
				<div class="col s3 leftpart"></div>
				<div class="col s6 main">
					<div class="monthSelect">
						<ul class="wrapper">
							<li class="branch branch1"><img src="img/JAN.png" width='100%' height='100%' ondragstart="return false" alt=""></li>
							<li class="branch branch2"><img src="img/FEB.png" width='100%' height='100%' ondragstart="return false" alt=""></li>
							<li class="branch branch3"><img src="img/MAR.png" width='100%' height='100%' ondragstart="return false" alt=""></li>
							<li class="branch branch4"><img src="img/APR.png" width='100%' height='100%' ondragstart="return false" alt=""></li>
							<li class="branch branch5"><img src="img/MAY.png" width='100%' height='100%' ondragstart="return false" alt=""></li>
							<li class="branch branch6"><img src="img/JUN.png" width='100%' height='100%' ondragstart="return false" alt=""></li>
							<li class="branch branch7"><img src="img/JUL.png" width='100%' height='100%' ondragstart="return false" alt=""></li>
							<li class="branch branch8"><img src="img/AUG.png" width='100%' height='100%' ondragstart="return false" alt=""></li>
							<li class="branch branch9"><img src="img/SEP.png" width='100%' height='100%' ondragstart="return false" alt=""></li>
							<li class="branch branch10"><img src="img/OCT.png" width='100%' height='100%' ondragstart="return false" alt=""></li>
							<li class="branch branch11"><img src="img/NOV.png" width='100%' height='100%' ondragstart="return false" alt=""></li>
							<li class="branch branch12"><img src="img/DEC.png" width='100%' height='100%' ondragstart="return false" alt=""></li>
						</ul>
					</div>
					<div class="dateSelect">
						<div class="row">
							<div class="col s7">
								<div id="circle">
									<?php
										date_default_timezone_set('Asia/Shanghai');
										$date = new DateTime();
										$nowtime = $date->format('Y-m-d');
										/*显示今天的所有活动*/
										$sql=$DBH->prepare("select name,ID from matters where datetime like '$nowtime%' order by datetime");
										$sql->execute();
										$result = $sql->fetchAll(PDO::FETCH_ASSOC);
										//print_r($sql->errorInfo());
										//var_dump($result);
										foreach ($result as $onematter) {
											?>
											<div id="matter-<?=$onematter['ID']?>">
											<?php echo $onematter['name'];?>
											</div>
											<?php
										}
									?>
								</div>
							</div>
							<div class="col s5">
								<div id="date">
									<div class="calendar">
										<div class="calendarNum">

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col s3 rightpart"></div>
			</div>
			<!--特别通知-->
			<div class="important-notice">
			</div>
			<!---->
		</div>
		<div id="act" class="hide">
			<div class="actBg"></div>
			<div class="container">
				<div class="row" id="actContent">
					<div class="col s4">
						<div class="hostcard center-align z-depth-2">
							<h1>计算机学院</h1>
							<div class="hostimg"></div>
						</div>
						<div class="classifycard hide z-depth-2">
							<ul class="nav-classify no-padding">
								<li id="outside" class="nav-button selected waves-effect waves-light">
									<span class="nav-content">路演</span>
									<span class="icon-home"></span>
								</li>
								<li id="normal" class="nav-button waves-effect waves-light">
									<span class="nav-content">正式活动</span>
									<span class="icon-trophy"></span>
								</li>
								<li id="speech" class="nav-button waves-effect waves-light">
									<span class="nav-content">讲座</span>
									<span class="icon-office"></span>
								</li>
							</ul>
							<a class="waves-effect waves-light btn center-align"><span class="icon-plus"></span>添加关注</a>
						</div>
					</div>
					<div class="col s8 page-segment">
						<ul class="page-container no-padding ">
							<li id="page-container-outside" class="page-container-branch selected">
								
								<div class="title-container z-depth-2 hide">
									<h1><span class="actYellow">欢迎参加</span>秋之韵</h1>
								</div>
								<div class="description-container z-depth-2 hide">
									<div class="poster-container">
										<img class="materialboxed" src="img/banner.jpg" width="100%" alt="">
									</div>
									<div class="fade-text">
										<div class="fade-text-title">
											秋之韵<span>路演活动</span>
										</div>
										<p class="fade-text-content">字体使用是网页设计中不可或缺的一部分。经常地，我们希望在网页中使用某一特定字体，但是该字体并非主流操作系统的内置字体，这样用户在浏览页面的时候就有可能看不到真实的设计。美工设计师最常做的办法是把想要的文字做成图片，这样做有几个明显缺陷</p>
									</div>
									<h3 class="suspect-info-title">活动信息</h3>
									<ul class="suspect-info no-padding">
										<li class="suspect-info-branch">
											<span class="suspect-info-branch-left">活动名称</span>
											<span class="suspect-info-branch-right">秋之韵</span>
										</li>
										<li class="suspect-info-branch">
											<span class="suspect-info-branch-left">时间</span>
											<span class="suspect-info-branch-right">2月14日9:00-11:00</span>
										</li>
										<li class="suspect-info-branch">
											<span class="suspect-info-branch-left">地点</span>
											<span class="suspect-info-branch-right">美食汇路演地点</span>
										</li>
										<li class="suspect-info-branch">
											<span class="suspect-info-branch-left left">二维码</span>
											<div class="bin-search-code">
												<img class="materialboxed" src="img/bincode.jpg" width="100%" height="100%" alt="">
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li id="page-container-normal" class="page-container-branch hide">
								
								<div class="title-container z-depth-2">
									<h1><span class="actYellow">欢迎参加</span>秋之韵</h1>
								</div>
								<div class="description-container z-depth-2">
									<div class="poster-container">
										<img class="materialboxed" src="img/banner.jpg" width="100%" alt="">
									</div>
									<div class="fade-text">
										<div class="fade-text-title">
											秋之韵<span>正式活动</span>
										</div>
										<p class="fade-text-content">字体使用是网页设计中不可或缺的一部分。经常地，我们希望在网页中使用某一特定字体，但是该字体并非主流操作系统的内置字体，这样用户在浏览页面的时候就有可能看不到真实的设计。美工设计师最常做的办法是把想要的文字做成图片，这样做有几个明显缺陷</p>
									</div>
									<h3 class="suspect-info-title">活动信息</h3>
									<ul class="suspect-info no-padding">
										<li class="suspect-info-branch">
											<span class="suspect-info-branch-left">活动名称</span>
											<span class="suspect-info-branch-right">秋之韵</span>
										</li>
										<li class="suspect-info-branch">
											<span class="suspect-info-branch-left">时间</span>
											<span class="suspect-info-branch-right">2月14日18:30-20:30</span>
										</li>
										<li class="suspect-info-branch">
											<span class="suspect-info-branch-left">地点</span>
											<span class="suspect-info-branch-right">学活小剧场</span>
										</li>
										<li class="suspect-info-branch">
											<span class="suspect-info-branch-left left">二维码</span>
											<div class="bin-search-code">
												<img class="materialboxed" src="img/bincode.jpg" width="100%" height="100%" alt="">
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li id="page-container-speech" class="page-container-branch hide">
								
								<div class="title-container z-depth-2">
									<h1><span class="actYellow">欢迎参加</span>秋之韵</h1>
								</div>
								<div class="description-container z-depth-2">
									<div class="poster-container">
										<img class="materialboxed" src="img/banner.jpg" width="100%" alt="">
									</div>
									<div class="fade-text">
										<div class="fade-text-title">
											秋之韵<span>演讲</span>
										</div>
										<p class="fade-text-content">字体使用是网页设计中不可或缺的一部分。经常地，我们希望在网页中使用某一特定字体，但是该字体并非主流操作系统的内置字体，这样用户在浏览页面的时候就有可能看不到真实的设计。美工设计师最常做的办法是把想要的文字做成图片，这样做有几个明显缺陷</p>
									</div>
									<h3 class="suspect-info-title">活动信息</h3>
									<ul class="suspect-info no-padding">
										<li class="suspect-info-branch">
											<span class="suspect-info-branch-left">活动名称</span>
											<span class="suspect-info-branch-right">秋之韵</span>
										</li>
										<li class="suspect-info-branch">
											<span class="suspect-info-branch-left">时间</span>
											<span class="suspect-info-branch-right">2月14日15:00-17:00</span>
										</li>
										<li class="suspect-info-branch">
											<span class="suspect-info-branch-left">地点</span>
											<span class="suspect-info-branch-right">报告厅</span>
										</li>
										<li class="suspect-info-branch">
											<span class="suspect-info-branch-left left">二维码</span>
											<div class="bin-search-code">
												<img class="materialboxed" src="img/bincode.jpg" width="100%" height="100%" alt="">
											</div>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
</body>
</html>