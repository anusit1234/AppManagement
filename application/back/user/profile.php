<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$user_id = $_SESSION[_ss . 'id'];

$option_user = array(
    "table" => "users",
    "condition" => "id='$user_id'"
);
$query_user = $db->select($option_user);
$rs_user = $db->get($query_user);


$title = 'แก้ไขผู้ใช้งาน : ' . $rs_user['name']  . $rs_user['surname'];
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
<div id="page-warpper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><?php echo $rs_user['name'];?>&nbsp;<?php echo $rs_user['surname']; ?></h2>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="form-horizontal" style="margin-top: 10px;">
                <form id="user-form" action="<?php echo $baseUrl; ?>/back/user/form_update/<?php echo $rs_user['id']; ?>" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_firstname">ชื่อ <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input maxlength="100" class="form-control input-sm" name="name" id="name" type="text" value="<?php echo $rs_user['name'];?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_firstname">นามสกุล <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input maxlength="100" class="form-control input-sm" name="surname" id="surname" type="text" value="<?php echo $rs_user['surname'];?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_email">อีเมล</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="200" name="email" id="email" type="text" value="<?php echo $rs_user['email'];?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_age">อายุ</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="100" name="age" id="age" type="text" value="<?php echo $rs_user['age'];?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_sex">เพศ</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="20" name="sex" id="sex" type="text" value="<?php echo $rs_user['sex'];?>" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_career">อาชีพ</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="100" name="career" id="career" type="text" value="<?php echo $rs_user['career'];?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_permission">สิทธิ์การใช้งาน</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm"  maxlength="100" name="permission" id="permission" type="hidden" value="<?php echo $rs_user['permission'];?>" />

                            <p class="form-control input-sm"  readonly=""><i><?php if($rs_user['permission']=="member"){echo"สมาชิก";}else{echo"ผู้ดูแลระบบ";}?></i></p>

                            <!-- <select class="form-control input-sm" name="permission" id="permission">
                                <option value="<?php echo $rs_user['permission'];?>" ><?php if($rs_user['permission']=="member"){echo"สมาชิก";}else{echo"ผู้ดูแลระบบ";}?></option>
                                <!-- <option value="member">สมาชิก</option> 
                                <option value="admin">ผู้ดูแลระบบ</option>
                            </select> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
             
            <div class="subhead">
                
                &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                <a role="button" id="save" class="btn btn-success btn-xs new-data" href="#">
                    <i class="glyphicon glyphicon-floppy-save"></i>
                    บันทึก
                </a>
                <a role="button" class="search-button btn btn-default btn-xs" href="<?php echo $baseUrl; ?>/back/user">
                    <i class="glyphicon glyphicon-remove-circle"></i>
                    ยกเลิก
                </a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#save").click(function() {
            $("#user-form").submit();
            return false;
        });
    });
</script>
<?php
/*
 * footer***********************************************************************
 */
require 'template/back/footer.php';
/*
 * footer***********************************************************************
 */