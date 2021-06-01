<?php include("conn.php");?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<style>
	*{
		margin:0;
		padding: 0;
	}
	body{
		background-image: url("登录背景图片.jpg");
		background-repeat: no-repeat;
	}
	.c{
		position: relative;
		top: 50%;
		left: 50%;
	}
	.w{
		margin:20% auto;
		width: 200px;
		height: 200px;
	}
</style>
<title>登录界面</title>
	<!-- <link rel="stylesheet" href="../css/style.css"> -->
</head>
<body>
	<?php
if(isset($_POST["tj"])){
	$name=$_POST["name"];
	$pass=$_POST["pass"];

	if($name==""){
        echo " <script language='javascript'>alert('用户名不能为空！');</script>";
}elseif($pass==""){
	echo "<script language='javascript'>alert('密码不能为空！');</script>";}else{
		$sql="select * from users where name='".$name."'and pass ='".$pass."'";
		$query=mysqli_query($con,$sql);
		$num=mysqli_num_rows($query);
		if($num==0){
		echo "<script language='javascript'>alert('输入用户名和密码错误');</script>";
		}else{
			$_SESSION["name"]=$name;
			echo "<script language='javascript'>alert('登录成功！');location.href='sunlee.html';</script>";
			}
	  }
}
?>

	<div class="box w">
		<form form name="login" action="login.php" method="post">
			
				<label>用户名</label>
				<input type="text" name="name">
			    <br/>
			
				<label>密码</label> 
				<br/>
				<input type="password" name="pass">
				<br/>
				<br/>
			<input type="submit" name="tj" value="登录">
			<a href="reg.php">注册</a>
		</form>
		</div>

</body>
</html>

