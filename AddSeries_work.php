<?php
	session_start();
	include("connect.php");
	
	/*$_SESSION['token']='123';
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




<html lang="en">
<head>
    <link href="css/icon-font.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>添加新的活动</title>
</head>
<body>
    
    <nav>
        <div class="nav-wrapper teal">
            <a href="#" class="brand-logo">此处为Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="active"><a href="AddSeries.php">申请系列活动</a></li>
                <li><a href="AddMatters.php">添加事件</a></li>
                <li><a href="AddNotice.php">添加通知</a></li>
               
            </ul>
        </div>
    </nav>
	
    <div class="container">
     	<h5>   
		    <?php
			$name = $_POST['series_name'];
			try{
				$selectID=$DBH->prepare("SELECT SID FROM series WHERE Sname= ( ? )");
				$selectID->bindParam(1,$name);
				$selectID->execute();
				$SID=$selectID->fetch(PDO::FETCH_NAMED);
				//echo $SID['SID'];
			}
			catch(PDOException $e){
				die($e->getMessage());
			}
			if (!isset($SID['SID'])){
				try{
				$insertnotice=$DBH->prepare("insert into series (Sname) values (?)");
				$insertnotice->bindParam(1,$name);
				$insertnotice->execute();
				}
				catch(PDOException $e){
					die($e->getMessage());
				}
				try{
				$selectID=$DBH->prepare("SELECT SID FROM series WHERE Sname= ( ? )");
				$selectID->bindParam(1,$name);
				$selectID->execute();
				$SID=$selectID->fetch(PDO::FETCH_NAMED);
				//echo $SID['SID'];
			}
			catch(PDOException $e){
				die($e->getMessage());
			}
			echo "系列活动已生成，ID为";
			echo $SID['SID'];
			}else 
			{echo "已存在该系列活动，ID为";
			echo $SID['SID'];
		}
		?>
		</h5>
    </div>
    <script type="text/javascript" src="js/init.js"></script>
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>

    
</body>
</html> 
