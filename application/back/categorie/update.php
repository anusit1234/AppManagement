<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();
$option_pc = array(
    "table" => "fixed_expenses_categories",
    "condition" => "id='{$_GET['id']}' "
);
$query_pc = $db->select($option_pc);
$rs_pc = $db->get($query_pc);

$title = 'แก้ไขหมวดหมู่รายจ่ายคงที่ : ' .$rs_pc['name'];
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
            <h1 class="page-header"><font size="5">แก้ไขข้อมูล <?php echo $rs_pc['name']; ?></font></h1>
        </div>
    </div>
    <form id="product-form" action="<?php echo $baseUrl; ?>/back/fixedExpensesCategorie/form_update" method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-horizontal" style="margin-top: 10px;">
                
                    <input type="hidden" name="id" value="<?php echo $rs_pc['id'];?>">
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ชื่อหมวดรายจ่ายคงที่ <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" id="name" name="name" class="form-control input-sm"  value="<?php echo $rs_pc['name']; ?>" required >
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">รหัส <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" id="codename" name="codename" class="form-control input-sm" data-validation="required" value="<?php echo $rs_pc['codename']; ?>">
                        </div>
                    </div>-->
                
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="subhead">
            <input role="button" id="save" type="submit"  class="btn btn-success btn-xs new-data" href="#" value="บันทึก"class="glyphicon glyphicon-floppy-save" >
                <a role="button" class="search-button btn btn-default btn-xs" href="<?php echo $baseUrl; ?>/back/fixedExpensesCategorie">
                    <i class="glyphicon glyphicon-remove-circle"></i>
                    ยกเลิก
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

