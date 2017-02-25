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
<?php
	$notice = $_GET['notice'];
	$notice_id = $_GET['notice_id'];
	$insertnotice=$DBH->prepare("insert into notice (ID,Ndetail) values (?,?)");
	$insertnotice->bindParam(1,$notice_id);
	$insertnotice->bindParam(2,$notice);
	$insertnotice->execute();
	print_r($insertnotice->errorInfo());
?>