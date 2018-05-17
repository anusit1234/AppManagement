<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();

$title = 'เพิ่มหมวดหมู่รายจ่ายคงที่';
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
            <h1 class="page-header"><font size="5">เพิ่มหมวดหมู่รายจ่ายคงที่</font></h1>
        </div>
    </div>
    <form id="product-form" action="<?php echo $baseUrl; ?>/back/fixedExpensesCategorie/form_create" method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-horizontal" style="margin-top: 10px;">
                
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ชื่อหมวดหมู่รายจ่ายคงที่ <span class="required">*</span></label>
                        <div class="col-sm-4">
                        <table width="420">
                            <tr>
                                <td><input placeholder="กรอกชื่อหมวดหมู่รายจ่ายคงที่" id="name" name="name" class="form-control input-sm" minlength="4" manlength="40" type="text" required></td>
                                <td><font color="red">&nbsp;<b>*</b></font></td>
                            </tr>
                        </table>
                                <br>
                        </div>
                    </div>
<!--                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">รหัส <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" id="codename" name="codename" class="form-control input-sm" data-validation="required">
                        </div>
                    </div>-->
                
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-8">
            <div class="submit">
                <input role="button" id="save" type="submit"  class="btn btn-success btn-xs new-data" href="#" value="บันทึก"class="glyphicon glyphicon-floppy-save">
                
                

                <a role="button" class="search-button btn btn-default btn-xs" href="<?php echo $baseUrl; ?>/back/fixedExpensesCategorie">
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

