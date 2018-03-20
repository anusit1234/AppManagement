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
<?php
    $db = new database();
    $option_user = array(
        "table" => "users",
        "condition" => "id='{$_GET['id']}'"
    );
    $query_user = $db->select($option_user);
    $rs_user = $db->get($query_user);
    
?>
    <body>
        <div id="warpper">
            <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#33638c; role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href=""><font color="#fff">ระบบจัดการข้อมูลแอปพลิเคชันตรวจสุขภาพทางการเงิน</na></a>
                </div>
                                                                      
                <ul class="nav navbar-top-links navbar-right">
                    <a><?php echo $rs_user['username']; ?></a>
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
                <div class="navbar-default navbar-static-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul id="side-menu" class="nav">
                            <li>
                                <a href="<?php echo $baseUrl; ?>/itoffside-admin"><i class="glyphicon glyphicon-home"></i> หน้าแรก</a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/user"><i class="glyphicon glyphicon-user"></i> ผู้ใช้ (สมาชิก)</a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/incomeCategorie"><i class="glyphicon glyphicon-list-alt"></i> หมวดหมู่รายรับ</a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/fixedExpensesCategorie"><i class="glyphicon glyphicon-list-alt"></i> หมวดหมู่รายจ่ายคงที่</a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/dailyExpensesCategorie"><i class="glyphicon glyphicon-list-alt"></i> หมวดหมู่รายรายวัน</a>
                            </li>
                            
<!--                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/product"><i class="glyphicon glyphicon-book"></i> สินค้า</a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/order"><i class="glyphicon glyphicon-align-justify"></i> รายการสั่งซื้อ</a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/howtopay"><i class="glyphicon glyphicon-folder-open"></i> วิธีการสั่งซื้อ</a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>/back/aboutus"><i class="glyphicon glyphicon-hdd"></i> เกี่ยวกับเรา</a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl; ?>"><i class="glyphicon glyphicon-share-alt"></i> กลับไปเว็บไซต์</a>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </nav>
