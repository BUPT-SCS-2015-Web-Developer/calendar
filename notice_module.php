<?php
	session_start();
	include("connect.php");
	/*验证易班的session*/
	if(!isset($_SESSION['token'])||!isset($_SESSION['usrid'])||!isset($_SESSION['name'])){
        exit('illegal access!');
	}else{
		$user_id=$_SESSION['usrid'];
		$nickname=$_SESSION['name'];
	}
?>
<?php
	/*notice关联的id不为0的情况下，显示所关联id还没发生的数据*/
	date_default_timezone_set('Asia/Shanghai');
	$date = new DateTime();
	$nowtime = $date->format('Y-m-d H:i:s');
	$sql = $DBH->prepare("select Ndetail from notice where ID in (select ID from matters where datetime > '$nowtime')");
	$sql->execute();
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
//	print_r($sql->errorInfo());
	echo json_encode($result);
?>