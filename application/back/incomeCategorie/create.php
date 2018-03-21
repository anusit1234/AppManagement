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
            <h1 class="page-header">เพิ่มหมวดหมู่รายรับ</h1>
            
        </div>
    </div>
    <form id="product-form" action="<?php echo $baseUrl; ?>/back/incomeCategorie/form_create" method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-horizontal" style="margin-top: 10px;">
                
                    <div class="form-group">
                        <label for="Product_name" class="col-sm-2 control-label required">ชื่อหมวดหมู่รายรับ <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input id="name" name="name" class="form-control input-sm" minlength="2" type="text" required>
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
        <div class="col-lg-12">
            <div class="submit">
                <input role="button" id="save" type="submit" class="btn btn-success btn-xs new-data" href="#" value="บันทึก">
                    
                

                <a role="button" class="search-button btn btn-default btn-xs" href="<?php echo $baseUrl; ?>/back/incomeCategorie">
                    <i class="glyphicon glyphicon-remove-circle"></i>
                    ยกเลิก
                </a>
            </div>
        </div>
    </div>
        </form>
</div>

<script >
$("#product-form").validate();
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

