<?php
	session_start();
	include("connect.php");
	/*
	$_SESSION['token']='123';
	$_SESSION['usrid']='988793';
	$_SESSION['name']='Atlas';*/
	/*验证易班的session*/
	if(!isset($_SESSION['token'])||!isset($_SESSION['usrid'])||!isset($_SESSION['name'])){
        exit('illegal access!');
	}else{
		$user_id=$_SESSION['usrid'];
		$nickname=$_SESSION['name'];
	}
?>
<?php
	
	$datetime=$_POST['date'].' '.$_POST['time'];
	$name=$_POST['mName'];
	$type=$_POST['group1'];
	$detail=$_POST['detail'];
	$images=$_POST['posterName'];
	$locate=$_POST['mLocate'];
	$SID=$_POST['SID'];
	$QRcode=$_POST['QRname'];
	try{
		$insertnotice=$DBH->prepare("insert into matters (datetime,name,type,detail,images,locate,SID,QRcode) values (?,?,?,?,?,?,?,?)");
		$insertnotice->bindParam(1,$datetime);
		$insertnotice->bindParam(2,$name);
		$insertnotice->bindParam(3,$type);
		$insertnotice->bindParam(4,$detail);
		$insertnotice->bindParam(5,$images);
		$insertnotice->bindParam(6,$locate);
		$insertnotice->bindParam(7,$SID);
		$insertnotice->bindParam(8,$QRcode);
		$insertnotice->execute();
    }
	catch(PDOException $e){
		die($e->getMessage());
	}
    //print_r($insertnotice->errorInfo());
?>