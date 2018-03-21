<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/defaults.css" />
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery.1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/loading.js"></script>
  
      <link rel="stylesheet" href="css/style.css">

	  <style>
            /* CSS used here will be applied after bootstrap.css */
            body { 
                /*background: url('<?php echo $baseUrl; ?>/images/bg_check2.jpg') no-repeat center center fixed;*/
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            .panel-default {
                opacity: 0.9;
                margin-top:30px;
            }
            .form-group.last {
                margin-bottom:0px;
            }
        </style>
  
</head>

<body>

  <div class="wrapper">
	<div class="container">
		<h1>Login</h1>
		
		<form class="form-horizontal" role="form" action="<?php echo $baseUrl; ?>/back/user/form_login/1" method="post">
			<input id="email" placeholder="อีเมล์" required="" type="text" name="email">
			<input  id="password" placeholder="รหัสผ่าน" required="" type="password" name="password">

			<button type="submit" id="login-button">ลงชื่อเข้าใช้</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
