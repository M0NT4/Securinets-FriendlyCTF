<html lang="en">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<style lang="en" type="text/css" id="dark-mode-custom-style"></style>
<head>

 <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">

<link rel="stylesheet" href="./styles.css">

<title>easy SQLi</title>

<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no">
  <div class="wrapper">
	<div class="container">
		<h1>Welcome To My New Website</h1>
		
		<form class="form" method="POST" action=<?php echo $_SERVER['PHP_SELF'];?> >
			<input type="text" name="username" placeholder="username" required>
			<input type="password" name="password" placeholder="password" required>
			<button type="submit" id="login-button">Login</button>
		</form>
<?php


//$conn = new mysqli('db', 'monta', '9liwa', 'db');

$conn = new mysqli('loclahost', 'root', 'root', 'db');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['username']) and isset($_POST['password']))
{

	$username=$_POST['username'];
	$password=$_POST['password'];

	if ($username=='admin')
	{
		die('"admin" detected .. what are u doing Hacker ?! *.*');
	}

	$sql = "SELECT username FROM users WHERE username='".$username."'and password='".$password."';";
	$result = $conn->query($sql);
	$row = $result -> fetch_assoc();
	if ($result->num_rows > 0) {
		if($row['username']=='semah')
			echo "<h1>Hello semah .. sorry can't give u the FLAG <h1>";
		else if($row['username']=='admin')
			echo "Hello admin..here is your flag :\n Securinets{G33d_J0b_H4Ck3R_Do_u_L3ve_SQLi???}";
	}
	else
	{
	echo "Your Login username or password is invalid !";
	}
$conn->close();
}
?>
	</div>
	
</div>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  

    </script>



 
</body></html>