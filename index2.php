<html>
<head>
<title>租借登入</title>
<meta charset="UTF-8"/>
</head>
<body>
<form action="" method="post">
<p>
<p>
<p>
<p>
<p>

<center>
<h1>登入</h1>
<hr size="2" align="center" noshade width="70%" color="black">
<input type="text" name="uid" onkeyup="value=value.replace(/[\W]/g,'')" placeholder="請輸入您的學號"><p>
<input type="password" name="uid2" onkeyup="value=value.replace(/[\W]/g,'')"  placeholder="請輸入您的密碼"><p>
<input type="submit"  onClick="">
<input type="reset"  onClick="index2.php"><p>

<a href="#">回租借頁面</a>

</center>
</form>
<?php

session_start();
$link=mysqli_connect("localhost","root","Lui1995#","borrow");

if(isset($_POST["uid"])){
	$uid=$_POST["uid"];
	$uid2=$_POST["uid2"];


$sql="SELECT * from user2 WHERE uid='$uid'AND uid2='$uid2'"; 
$result=mysqli_query($link,$sql);

$row=mysqli_num_rows($result);

if($row){    
	echo "登入成功!";
	$_SEESION['check']="yes";
	header('Location:#');
}else{

	echo "<script language = 'javascript'>"; 
	echo "alert('輸入錯誤！請重新輸入！');location.href='index2.php';"; 
	echo "</script>"; 

 


}

}

?>
</body>
</html>
