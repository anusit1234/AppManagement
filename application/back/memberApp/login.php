<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/defaults.css" />
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery.1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/loading.js"></script>
        <title>เข้าสู่ระบบ</title>

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
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <br></br>
                        <br></br>
                            
                    <div class="panel panel-default">
                        <div class="panel-heading"> <strong class="">เข้าสู่ระบบ</strong>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" action="<?php echo $baseUrl; ?>/back/user/form_login/1" method="post">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">อีเมล์</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="email" placeholder="อีเมล์" required="" type="text" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">รหัสผ่าน</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="password" placeholder="รหัสผ่าน" required="" type="password" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <div class="checkbox">
                                            <label class="">
                                                <input class="" type="checkbox" name="remember">จำไว้ในระบบ</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group last">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-success btn-sm">ตกลง</button>
                                        <button type="reset" class="btn btn-default btn-sm">ล้างค่า</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--<div class="panel-footer">ต้องการติดต่อผู้พัฒนาระบบ? <a href="http://www.itoffside.com" class="">คลิกที่นี้</a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div> -->
    </body>
</html>