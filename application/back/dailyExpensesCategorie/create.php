<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();

$title = 'เพิ่มหมวดหมู่รายจ่ายรายวัน';
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
            <h1 class="page-header">เพิ่มหมวดหมู่รายจ่ายรายวัน</h1>
        </div>
    </div>
    <form id="product-form" action="<?php echo $baseUrl; ?>/back/dailyExpensesCategorie/form_create" method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-horizontal" style="margin-top: 10px;">
                
                    <div class="form-group">
                        <label  for="Product_name" class="col-sm-2 control-label required">ชื่อหมวดหมู่รายจ่ายรายวัน <span class="required"></span></label>
                        <div class="col-sm-4">
                        <table width="420">
                            <tr>
                                <td><input placeholder="กรอกชื่อหมวดหมู่รายจ่ายรายวัน" id="name" name="name" class="form-control input-sm" minlength="5" type="text" required></td>
                                <td><font color="red">&nbsp;<b>*</b></font></td>
                            </tr>
                        </table>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_ststus">สถานะ</label>
                        <div class="col-sm-4">
                        <table width="440">
                            <tr>
                            <td><select class="form-control input-sm" name="status" id="status" required>
                                <option value="">--เลือก--</option>
                                <option value="1">จำเป็น</option>
                                <option value="0">ไม่จำเป็น</option></td>
                            </select>
                            <td><font color="red">&nbsp;<b>*</b></font></td>
                            </tr>
                        </table>
                            <br>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="submit">
                <input role="button" id="save" type="submit"  class="btn btn-success btn-xs new-data" href="#" value="บันทึก"class="glyphicon glyphicon-floppy-save">
                    
                

                <a role="button" class="search-button btn btn-default btn-xs" href="<?php echo $baseUrl; ?>/back/dailyExpensesCategorie">
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

