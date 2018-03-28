<?php
/*
 * include file start***********************************************************
 */
require 'library/pagination.php';
/*
 * php code///////////**********************************************************
 */
$title = 'ระบบจัดการข้อมูลแอปพลิเคชัน : หมวดหมู่รายรับ';
$db = new database();
$pagination = new Zebra_Pagination();

$sql_pc = "SELECT * FROM income_categories  ";

$sql_pc .= isset($_GET['name']) ? "AND name LIKE '%{$_GET['name']}%'" : "";



$query_pc = $db->query($sql_pc);
$rows_pc = $db->rows($query_pc);

$per_page = 20;
$page_start = (($pagination->get_page() - 1) * $per_page);
$sql_pc .= "ORDER BY id DESC LIMIT {$page_start},{$per_page} ";
$pagination->records($rows_pc);
$pagination->records_per_page($per_page);
$pagination->base_url('', FALSE);
$query_pc_page = $db->query($sql_pc);

$page = ($page_start!=0) ? $page_start : "1";
$pages = ceil($rows_pc/$per_page);

$uri = $_SERVER['REQUEST_URI']; // url

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

<script language="javascript">
$(document).ready(function() {
    $('#status').hide(); //hide field on start
  
    $('#cate_table').change(function() {
  
     var $index = $('#cate_table').index(this);
  
     if($('#cate_table').val() == 'daily_expenses_categories') { //if this value is NOT selected
     $('#status').show(); //this field is hidden
     } 
     else {
     $('#status').hide();//else it is shown
  
     }
        });
 });
</script>

<div id="page-warpper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><font size="5"><font color="#000">เพิ่มหมวดหมู่</font></font></h1>
        </div>
    </div>

<div class="row">
<form id="product-form" action="<?php echo $baseUrl; ?>/back/categorie/form_create" method="post">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-horizontal" style="margin-top: 10px;">
            
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="cate">ประเภทหมวดหมู่</label>
                    <div class="col-sm-4">
                                <select class="form-control input-sm" name="cate_table" id="cate_table" required>
                                    <option value="">--เลือก--</option>
                                    <option value="income_categories">รายรับ</option>
                                    <option value="fixed_expenses_categories">รายจ่ายคงที่</option>
                                    <option value="daily_expenses_categories">รายจ่ายรายวัน</option>
                                </select>
                    </div>
                </div>
                    <br>
                <div class="form-group">
                    <label for="Product_name" class="col-sm-2 control-label required">ชื่อหมวดหมู่ <span class="required"></span></label>
                        <div class="col-sm-4">
                            <input placeholder="กรอกชื่อหมวดหมู่รายจ่ายคงที่" id="name" name="name" class="form-control input-sm" minlength="4" type="text" required>
                        </div>
                </div>
                <div class="form-group" id="status">
                        <label class="col-sm-2 control-label" for="User_ststus">สถานะ</label>
                        <div class="col-sm-4">
                            <select class="form-control input-sm" name="status" id="status" >
                                <option value="" >--เลือก--</option>
                                <option value="1">จำเป็น</option>
                                <option value="0">ไม่จำเป็น</option>
                            </select>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="submit">
                <input role="button" id="save" type="submit"  class="btn btn-success btn-xs new-data" href="#" value="บันทึก"class="glyphicon glyphicon-floppy-save">
        
                <a role="button" class="btn btn-default btn-xs" href="<?php echo $baseUrl; ?>/back/income_categories">
                <i class="glyphicon glyphicon-remove-circle"></i>
                ยกเลิก
                </a>
            </div>
        </div>
    </div>
</form>
</div>
<br><br>

<table border="1" bordercolor="#f3f3fa" width="100%">
<!-- <body bg color="#00000"> -->
    <tr>
        <td bgcolor="#7daed8" align="center">
                    <ul  class="nav" >
                        <li>
                           <a href="<?php echo $baseUrl; ?>/back/income_categories"><i class="glyphicon glyphicon-list-alt"></i>  <font color="#000000">หมวดหมู่รายรับ</font></a>
                        </li>
                    </ul>
        </td>
        <td bgcolor="#7daed8" align="center">
                    <ul id="side-menu" class="nav" >
                        <li class="dropdown">
                            <a href="<?php echo $baseUrl; ?>/back/fixed_expenses_categories"><i class="glyphicon glyphicon-list-alt"></i>  <font color="#000000">หมวดหมู่รายจ่ายคงที่</font></a>
                        </li>
                    </ul>
        </td>
        <td bgcolor="#7daed8" align="center">
                    <ul id="side-menu" class="nav" >
                        <li class="dropdown">
                            <a href="<?php echo $baseUrl; ?>/back/daily_expenses_categories"><i class="glyphicon glyphicon-list-alt"></i>  <font color="#000000">หมวดหมู่รายจ่ายรายวัน</font></a>
                        </li>
                    </ul>
        </td>
    </tr>
</table>

    <div class="row">
        <div class="col-lg-12">
            <div class="subhead">
                <!-- <a role="button" class="btn btn-success btn-xs new-data"
                   href="<?php echo $baseUrl; ?>/back/incomeCategorie/create">
                    <i class="glyphicon glyphicon-plus-sign"></i>
                    เพิ่มใหม่
                </a> -->
                
                <a role="button" class="search-button btn btn-default btn-xs" href="#">
                    <i class="glyphicon glyphicon-search"></i>
                    ค้นหา
                </a>
                <!--<a role="button" class="btn btn-default btn-xs"
                   href="<?php echo $baseUrl; ?>/back/incomeCategorie">
                    <i class="glyphicon glyphicon-refresh"></i>
                    โหลดหน้าจอใหม่
                </a>-->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="search-form" style="display:none">

                <form id="yw0" action="<?php echo $baseUrl; ?>/back/income_categories/index" method="get">
                    <div class="form-horizontal" style="margin-top: 10px;">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">ชื่อหมวดหมู่รายรับ</label>
                            <div class="col-sm-4">
                                <input class="form-control input-sm" name="name" id="name" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <button type="submit" class="btn btn-primary searchbtn"><i class="glyphicon glyphicon-search"></i> ค้นหาเดี๋ยวนี้!</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- search-form -->
            
            <div id="user-grid" class="table table-striped table-bordered">
                <!-- <div class="summary">หน้า <?php echo $page;?> จากทั้งหมด <?php echo $pages; ?> หน้า</div> -->
                <table class="table table-striped table-custom">
                    <thead>
                        <tr bgcolor="#f3f3fa">
                            <!-- <th id="user-grid_c0">
                                <a class="sort-link" href="<?php echo $uri; ?>">ลำดับรายรับ</a>
                            </th> -->
                            <th id="user-grid_c0">
                                <a class="sort-link" href="<?php echo $uri; ?>">หมวดหมู่รายรับ</a>
                            </th>
                           <th id="user-grid_c1">
                                <a class="sort-link" href="<?php echo $uri; ?>">วันที่เพิ่ม/แก้ไข</a>
                            </th>
<!--                            <th id="user-grid_c4">
                                <a class="sort-link" href="<?php echo $uri; ?>">วันเวลาที่ร้าง</a>
                            </th>-->
                            <th class="button-column" id="user-grid_c6">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($rs_pc = $db->get($query_pc_page)) {
                            $tr = ($i % 2 == 0) ? "odd" : "even";
                            ?>
                            <tr class="<?php echo $tr; ?>">
                                
                                <td>
                                    <a class="load_data" href="<?php echo $baseUrl; ?>/back/income_categories/update/<?php echo $rs_pc['id']; ?>"><?php echo $rs_pc['name']; ?></a>
                                </td>
                                <td><?php echo date("d/m/Y", strtotime($rs_pc['created']));?></td>
                                <!--<td><?php echo $rs_pc['codename']; ?></td>-->
  <!--                              <td><?php echo thaidate($rs_pc['created']); ?></td>-->
                                <td class="button-column">
                                    <a class="btn btn-warning btn-xs load_data" title="" href="<?php echo $baseUrl; ?>/back/income_categories/update/<?php echo $rs_pc['id']; ?>"><i class="glyphicon glyphicon-edit"></i> แก้ไข</a>
                                    <a class="btn btn-danger btn-xs confirm" title="" href="#" data-toggle="modal" data-target="#deleteModal<?php echo $rs_pc['id'];?>"><i class="glyphicon glyphicon-remove"></i> ลบ</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal<?php echo $rs_pc['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">แจ้งเตือนการลบข้อมูล</h4>
                                                </div>
                                                <div class="modal-body">
                                                    คุณยืนยันต้องการจะลบข้อมูลนี้ ใช่หรือไม่?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">ไม่ใช่</button>
                                                    <a role="button" class="btn btn-primary" href="<?php echo $baseUrl; ?>/back/income_categories/delete/<?php echo $rs_pc['id']; ?>">ใช่ ยืนยันการลบ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div>
                    <?php $pagination->render(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <!-- <div class="col-sm-12">
          <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
              <ul class="pagination"><li class="paginate_button active"><a tabindex="0" data-dt-idx="1" aria-controls="itoffside.com" href="#">1</a></li><li class="paginate_button"><a data-ci-pagination-page="2" href="http://localhost/stock/flowprint/index/14">2</a></li><li class="paginate_button next"><a rel="next" data-ci-pagination-page="2" href="http://localhost/stock/flowprint/index/14">Next</a></li></ul>                            </div>

      </div> -->
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.search-button').click(function () {
                $('.search-form').toggle();
                return false;
            });
        });
    </script>
</div>

<?php
/*
 * footer***********************************************************************
 */
// require 'template/back/footer.php';
/*
 * footer***********************************************************************
 */

