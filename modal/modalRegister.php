<form class="form-horizontal" id="add_user_form" onsubmit="return add_user_form();"> 

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h1 class="modal-title">สมัครสมาชิก</h1>
        </div>
        
         
        

            <!-- *****************username from******************************** -->
    

        <div class="modal-body">
            
  
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อเข้าใช้งาน</label>  

                <div class="col-md-4">
                    <input  name="stwUsername" id="UserName" type="text" placeholder="Username" class="form-control input-md" required="" maxlength="15">
                    <span id="msg1"></span>
                         
    
                </div>
            </div>
            
<!-- *****************password from***************************************** -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">รหัสเข้าใช้งาน</label>  
                <div class="col-md-4">
                    <input id="Password" name="stwPassword" type="password" placeholder="Password" class="form-control input-md" required="" maxlength="12">
    
                </div>
            </div>

             <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ยืนยันรหัสเข้าใช้งาน</label>  
                <div class="col-md-4">
                    <input  id="rePassword" type="password" placeholder="Re-password" class="form-control input-md" required="" maxlength="12">
                    <span id="verify" ></span>
    
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">คำนำหน้า</label>
                    <div class="col-md-4">
                    <select  name="stwPrefix_id" class="form-control input-md">
                <?php    include('connect.php');
                        $sql = "SELECT * FROM stwPrefix";
                        $result = mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            echo "<option value =$row[stwPrefix_id]>$row[stwPrefix_name]</option>";
        }
                        

                        




                 ?>
                
                </select>
                </div>
            </div>
<!-- *********************************first from******************************** -->
              <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อ</label>  
                <div class="col-md-4">
                    <input name="stwFirstname" type="text" placeholder="Firstname" class="form-control input-md" required="">
    
                </div>
            </div>

              <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">นามสกุล</label>  
                <div class="col-md-4">
                    <input  name="stwLastname" type="text" placeholder="Lastname" class="form-control input-md" required="">
    
                </div>
            </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">เพศ</label>
                    <div class="col-md-4">
                    <select  name="stwGender" class="form-control input-md">
                <option value="1">ชาย </option>
                <option value="2">หญิง</option>
                </select>
                </div>
            </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">อีเมลล์</label>  
                <div class="col-md-4">
                    <input  name="stwEmail" type="email" placeholder="Email" class="form-control input-md" required="" id="Email" data-validation="email">
                     <span id="msg2"></span>
    
                </div>
            </div>

            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">เบอร์โทร</label>  
                <div class="col-md-4">
                    <input name="stwTel" type="text" placeholder="Tel" class="form-control input-md" required="" pattern="([0-9])+(?:-?\d){9,}" title="กรุณากรอกตัวเลข 10 ตัว">
    
                </div>
            </div>
<!-- **********************************dept****************************** -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">แผนก</label>
                    <div class="col-md-4">
                    <select  name="stwDept_id" class="form-control input-md">
        <?php   
            $sql = "SELECT * FROM `stwDepartment` ";
            $result = mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            echo "<option value =$row[stwDept_id]>$row[stwDept_name]</option>";
        }
               ?>



                    </select>
                </div>
            </div>

<!-- **********************************default value******************************* -->
               <div class="form-group">                 
                    <input name="stwStatus_id" value="3" type="hidden">
                    <input type="hidden" name="stwActivate" value="2">
                    
                    
    
               </div>
            

           
            
            
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button id="btnSubmit" name="submit" class="btn btn-primary" >ตกลง</button>
                </div>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</form>