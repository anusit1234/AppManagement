<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/defaults.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/css/datatables.css" />
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery.1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/loading.js"></script>
        <title><?php echo $title; ?></title>
    </head>

    <body>
        <div id="warpper">
            <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#154f87; role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" ><font color="#fff">ระบบจัดการข้อมูลแอปพลิเคชันตรวจสุขภาพทางการเงิน</font></a>
                </div>
                <ul class="nav navbar-top-links navbar-right"  >
                <a ><?php echo  $_SESSION[_ss . 'email']; ?></a>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i> <span class="caret"></span>
                        </a>
                        <ul class="dropdown dropdown-menu">
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/user/profile"><i class="glyphicon glyphicon-user"></i>
                                    ข้อมูลส่วนตัว 
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/user/changepassword"><i class="glyphicon glyphicon-pencil"></i>
                                    เปลี่ยนรหัสผ่าน
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/user/logout"><i class="glyphicon glyphicon-log-out"></i>
                                    ออกจากระบบ
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-default navbar-static-side"style="background-color:#f9f9f9; role="navigation">
                    <div class="sidebar-collapse">
                        <ul id="side-menu" class="nav" >
                            <li>
                                <a href="<?php echo $baseUrl; ?>/itoffside-admin"><i class="glyphicon glyphicon-home"></i> หน้าแรก</a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/memberApp"><i class="glyphicon glyphicon-user"></i> ผู้ใช้งานแอปพลิเคชัน</a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/user"><i class="glyphicon glyphicon-user"></i> ผู้ใช้ (ผู้ดูแลระบบ)</a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo $baseUrl; ?>/back/income_categories"><i class="glyphicon glyphicon-list-alt"></i> หมวดหมู่รายรับ</a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/fixed_expenses_categories"><i class="glyphicon glyphicon-list-alt"></i> หมวดหมู่รายจ่ายคงที่</a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/daily_expenses_categories"><i class="glyphicon glyphicon-list-alt"></i> หมวดหมู่รายจ่ายรายวัน</a>
                            </li> -->
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/categorie"><i class="glyphicon glyphicon-list-alt"></i> หมวดหมู่</a>
                            </li>
                            

                        </ul>
                    </div>
                </div>
            </nav>
        </body>
    </html>
