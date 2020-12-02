<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>POST-ME</title>
</head>
<body>
    <div class="login-page">
        <div class="form">
          <form class="login-form" action=<?php echo $_SERVER['PHP_SELF'];?> method="GET" >
            <input type="text" name="username" placeholder="username" required />
            <input type="password" name="password" placeholder="password" required/>
            <button>login</button>
            
          </form>
        </div>
      </div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    echo "Oops ! can't GET any data try another method plz.";}
elseif ($_SERVER['REQUEST_METHOD']=='POST') {
        if(isset($_POST['username']) && isset($_POST['password']))
            echo "Congratz ! securinets{Don\'t_send_sensitive_data_with_GET_request}";
        else 
            echo "POST ur username and password :)";
        
    }


?>

