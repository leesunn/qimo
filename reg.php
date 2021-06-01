<?php include("conn.php");?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>注册页面</title>
<link rel="stylesheet" href="../css/style.css">
	</head>
<body>
	<?php
if(isset($_POST["tj"])){
	$name=$_POST["name"];
	$pass=$_POST["pass"];
	$rpass=$_POST["rpass"];
	if($name==""){
        echo "<script language='javascript'>alert('用户名不能为空！');</script>";
}elseif($pass==""){
	echo "<script language='javascript'>alert('密码不能为空！');</script>";
}elseif($rpass==""){
	echo "<script language='javascript'>alert('确认密码不能为空！');</script>";
}else if($pass!=$rpass){
  echo "<script language='javascript'>alert('密码不一样!');</script>";

}
else{
      date_default_timezone_set("PRC");
	  $sql="insert into users(name,pass,date)values('".$name."','".$pass."',now())"	;
	  mysqli_query($con,$sql);
	 echo "<script language='javascript'>alert('注册成功！');location.href='login.php';</script>";
}
}
?>
	
	
	<div class="box">
		<h2>注册</h2>
		<form action="reg.php" method="post">
			<div class="inputBox">
				<label>用户名</label>
				<input type="text" name="name">
				</div>
			<div class="inputBox">
				<label>密码</label>
				<input type="password" name="pass">
				</div>
			<div class="inputBox">
				<label>确认密码</label>
				<input type="password" name="rpass">
				</div>
					<div class="inputBox">
						</div>
						<input type="submit" name="tj" value="注册">
			   <input type="reset" name="rest" value="重置">
			</form>
		</div>
</body>
</html>
