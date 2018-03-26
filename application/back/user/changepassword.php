<?php
/*
 * php code///////////**********************************************************
 */
if (isset($_SESSION[_ss . 'msg_result'])) {
    $msg_result = $_SESSION[_ss . 'msg_result'];
    unset($_SESSION[_ss . 'msg_result']);
} else {
    $msg_result = false;
}

$db = new database();
$user_id = $_SESSION[_ss . 'id'];
$option_user = array(
    "table" => "users",
    "condition" => "id='$user_id'"
);
$query_user = $db->select($option_user);
$rs_user = $db->get($query_user);


$title = 'เปลี่ยนรหัสผ่าน : ' . $rs_user['email'];
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
            <h1 class="page-header"><font size="5">เปลี่ยนรหัสผ่าน <?php echo $rs_user['email']; ?></font></h1>
        </div>
        <!-- <?php if ($msg_result == true) { ?>
            <div class="col-lg-12">
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    รหัสผ่านเก่าไม่ถูกต้อง!
                </div>
            </div>
        <?php } ?> -->
    </div>
    <!-- <form id="user-form" action="<?php echo $baseUrl; ?>/back/user/form_changepassword/<?php echo $rs_user['id']; ?>" method="post"> -->
    <form  id="user-form" action="<?php echo $baseUrl; ?>/back/user/form_changepassword" method="post" >
    <div class="row">
        <div class="col-lg-12">
            <div class="form-horizontal" style="margin-top: 10px;">
               
                    <input type="hidden" name="id" value="<?php echo $rs_user['id']; ?>">
                    <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_username">อีเมล</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" readonly="" maxlength="50" name="username" id="username" type="text" placeholder="<?php echo $rs_user['email']; ?>" value="<?php echo $rs_user['email']; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">รหัสผ่านเก่า</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="50" name="oldpassword" id="oldpassword" type="password" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">รหัสผ่านใหม่</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" minlength="8" name="password" id="password" type="password" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">รหัสผ่านใหม่อีกครั้ง</label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" minlength="8" name="password" id="password" type="password" required />
                        </div>
                    </div>    
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="submit">
                
                &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                <input role="button" id="save" type="submit"  class="btn btn-success btn-xs new-data" href="#" value="บันทึก"class="glyphicon glyphicon-floppy-save" >
                    
                <a role="button" class="search-button btn btn-default btn-xs" href="<?php echo $baseUrl; ?>/back/user">
                    <i class="glyphicon glyphicon-remove-circle"></i>
                    Cancel
                </a>
            </div>
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