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
            <h1 class="page-header"><font size="5">เพิ่มผู้ใช้งาน (ผู้ดูแลระบบ)</font></h1>
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
                            <table width="460">
                                <tr>
                                    <td><input placeholder="กรอกข้อมูลชื่อจริง" id="name" name="name" class="form-control input-sm" minlength="4" maxlength="50" type="text" required></td>
                                    <td><font color="red">&nbsp;<b>*</b></font></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_name">นามสกุล <span class="required"></span></label>
                        <div class="col-sm-4">
                            <table width="460">
                                <tr>
                                    <td><input placeholder="กรอกข้อมูลนามสกุล" id="surname" name="surname" class="form-control input-sm" minlength="4" maxlength="50" type="text" required></td>
                                    <td><font color="red">&nbsp;<b>*</b></font></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_username">Username <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" minlength="4" maxlength="50" name="username" id="username" type="text" required>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_email">อีเมล์</label>
                        <div class="col-sm-4">
                        <table width="460">
                            <tr>
                                <td><input placeholder="กรอกข้อมูลอีเมล์ ตัวอย่าง test@example.com" class="form-control input-sm" maxlength="200" name="email" id="email" type="email" required></td>
                                <td><font color="red">&nbsp;<b>*</b></font></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label required" for="User_username">รหัสผ่าน<span class="required"></span></label>
                        <div class="col-sm-4">
                        <table width="460">
                            <tr>
                                <td><input  placeholder="กรอกรหัสผ่านไม่ต่ำกว่า 8 ตัวอักษร" class="form-control input-sm" minlength="8" maxlength="20" name="password" id="password" type="password" required></td>
                                <td><font color="red">&nbsp;<b>*</b></font></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_age">อายุ</label>
                        <div class="col-sm-5">
                        <table width="100%">
                            <tr>
                                <td><select class="form-control input-sm" name="age" id="age" required>
                                    <option value="">--เลือก--</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="60">60</option>
                                    <option value="61">61</option>
                                    <option value="62">62</option>
                                    <option value="63">63</option>
                                    <option value="64">64</option>
                                    <option value="65">65</option>
                                    <option value="66">66</option>
                                    <option value="67">67</option>
                                    <option value="68">68</option>
                                    <option value="69">69</option>
                                    <option value="70">70</option></td>
                                    <td><font color="red">&nbsp;<b>*</b></font></td>
                            </tr>
                            </select>
                        </table>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_sex">เพศ</label>
                        <div class="col-sm-5">
                        <table width="100%">
                            <tr>
                                <td><select class="form-control input-sm" name="sex" id="sex" required>
                                <option value="">--เลือก--</option>
                                <option value="ชาย">ชาย</option>
                                <option value="หญิง">หญิง</option></td>
                                <td><font color="red">&nbsp;<b>*</b></font></td>
                            </tr>
                                </select>
                        </table>
                        </div>
                    </div>
                    
                    <!-- <div class="form-group">
                        <label class="col-sm-2 control-label" for="User_career">อาชีพ</label>
                        <div class="col-sm-4">
                        <table width="460">
                            <tr>
                                <td><input placeholder="กรอกข้อมูลอาชีพ" class="form-control input-sm" maxlength="100" name="career" id="career" type="text" required></td>
                                <td><font color="red">&nbsp;<b>*</b></font></td>
                            </tr>
                        </table>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <!-- <label class="col-sm-2 control-label" for="User_permission">สิทธิ์การใช้งาน</label> -->
                        <!-- <div class="col-sm-5">
                        <table width="479">
                            <tr>
                                <td><select class="form-control input-sm" name="permission" id="permission" required>
                                <!-- <option value="" >--เลือก--</option> -->
                                <!-- <option value="member">สมาชิก</option>
                                <option value="admin">ผู้ดูแลระบบ</option></td>
                            <td><font color="red">&nbsp;<b>*</b></font></td>
                            </tr>
                            </select>
                            
                        </table>
                        </div> -->
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="100" name="permission" id="permission" type="hidden" value="admin" />
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

