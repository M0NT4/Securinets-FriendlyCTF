<!DOCTYPE html>
<html>
<head>
	<title>PING</title>
	<link rel="stylesheet" type="text/css" href="./styles.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    
    	<div class="row height d-flex justify-content-center align-items-center">
        	<div class="col-md-8">
        		<center><h1>WELCOME TO MY NEW PING SERVICE !!</h1></center>
            	<div class="search"> <i class="fa fa-search"></i>
            		<form method="GET" action=<?php echo $_SERVER['PHP_SELF'];?> > 
            			<input type="text" class="form-control" name ="ip" placeholder="www.google.com"> 
            		<button class="btn btn-primary">Search</button> 
            		</form>
            	</div>
            	<?php
            		
					if(isset($_GET['ip']))
						$cmd=$_GET['ip'];
					if(preg_match("/;|&/", $cmd)){
						echo "hey Hacker u are in the right way just try to bypass my strong filter x_x";
					}else{
					$output = shell_exec('ping -c3 -w3 '.$cmd);
					echo "<pre>$output</pre>";}
				?>
        	</div>

    	</div>
    
    
</div>
</body>
</html>
