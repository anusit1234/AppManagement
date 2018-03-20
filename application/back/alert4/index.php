<?php
/*
 * php code///////////**********************************************************
 */
$title = 'ระบบจัดการข้อมูลแอปพลเคชัน';
$db = new database();
$option_user = array(
    "table" => "admin"
);
$query_user = $db->select($option_user);

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
            <h1 class="page-header">บันทึกข้อมูลสำเร็จ!</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-info" role="alert">ระบบเพิ่มหมวดหมู่รายจ่ายรายวันเรียบร้อยแล้ว</div>
        </div>
    </div>
    <div class="subhead">
                <a role="button" class="btn btn-success btn-xs new-data"
                   href="<?php echo $baseUrl; ?>/back/dailyExpensesCategorie">
                    ตกลง
                </a>
    </div>
    <!--<script type="text/javascript">
        $(document).ready(function () {
            $('.search-button').click(function () {
                $('.search-form').toggle();
                return false;
            });
        });
    </script>-->
</div>

<?php
/*
 * footer***********************************************************************
 */
require 'template/back/footer.php';
/*
 * footer***********************************************************************
 */