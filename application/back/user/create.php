<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();

$title = 'เพิ่มหมวดหมู่รายรับ';
/*
 * php code///////////**********************************************************
 */

/*
 * header***********************************************************************
 */
require 'template/back/header.php';
/*
 * header***********************************************************************
 */
?>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery.form-validator.min.js"></script>
<div id="page-warpper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">เพิ่มผู้ใช้งาน</h1>
        </div>
    </div>
    <form  id="user-form" action="<?php echo $baseUrl; ?>/back/user/form_create" method="post" >
    <div class="row">
        <div class="col-lg-12">
            <div class="form-horizontal" style="margin-top: 10px;">
            <!--    <form id="user-form" action="<?php echo $baseUrl; ?>/back/user/form_create" method="post">-->
               
                    <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_name">ชื่อ<span class="required"></span></label>
                        <div class="col-sm-4">
                            <table width="100%">
                                <tr>
                                    <td><input placeholder="กรอกข้อมูลชื่อ" id="name" name="name" class="form-control input-sm" minlength="4" maxlength="50" type="text" required></td>
                                    <td><font color="red">&nbsp;<b>*</b></font></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_name">นามสกุล <span class="required">*</span></label>
                        <div class="col-sm-4">
                             <input id="surname" name="surname" class="form-control input-sm" minlength="4" maxlength="50" type="text" required>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_username">Username <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" minlength="4" maxlength="50" name="username" id="username" type="text" required>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_email">email</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="200" name="email" id="email" type="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_username">Password <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" minlength="4" maxlength="20" name="password" id="password" type="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_age">อายุ</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="2" name="age" id="age" type="number" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_sex">เพศ</label>
                        <div class="col-sm-4">
                        <select class="form-control input-sm" name="sex" id="sex" required>
                                <option value="">--เลือก--</option>
                                <option value="ชาย">ชาย</option>
                                <option value="หญิง">หญิง</option>
                        </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_career">อาชีพ</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="100" name="career" id="career" type="text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_permission">สิทธิ์การใช้งาน</label>
                        <div class="col-sm-4">
                            <select class="form-control input-sm" name="permission" id="permission" required>
                                <!-- <option value="" >--เลือก--</option> -->
                                <!-- <option value="member">สมาชิก</option> -->
                                <option value="admin">ผู้ดูแลระบบ</option>
                            </select>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="submit">
                <input role="button" id="save" type="submit"  class="btn btn-success btn-xs new-data" href="#" value="บันทึก"class="glyphicon glyphicon-floppy-save" >
                    
                

                <a role="button" class="search-button btn btn-default btn-xs" href="<?php echo $baseUrl; ?>/back/user">
                    <i class="glyphicon glyphicon-remove-circle"></i>
                    ยกเลิก
                </a>
            </div>
            <!--<input class="submit" id="save" type="submit" value="Submit">-->
        </div>
    </div>
    </form>
</div>

<script >
$("#user-form").validate();
$(document).ready(function) {
    $("#save").submit();
}
    
</script>

<?php
/*
 * footer***********************************************************************
 */
require 'template/back/footer.php';
/*
 * footer***********************************************************************
 */

