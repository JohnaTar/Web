<form class="form-horizontal" action="saveadmin.php" method="POST"> 

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h1 class="modal-title">สมัครสมาชิก</h1>
        </div>
        
         
        
<!-- *********************************username from************************************* -->
        <div class="modal-body">
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">คำนำหน้า</label>
                    <div class="col-md-4">
                    <select  name="stwPrefix_id" class="form-control input-md">
                <option value="1">นาย </option>
                <option value="2">นาง</option>
                <option value="3">นางสาว</option>
                </select>
                </div>
            </div>

            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อเข้าใช้งาน</label>  

                <div class="col-md-4">
                    <input  name="stwUsername" type="text" placeholder="Username" class="form-control input-md" required="">
    
                </div>
            </div>
<!-- ***************************password from********************************************* -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">รหัสเข้าใช้งาน</label>  
                <div class="col-md-4">
                    <input name="password" type="password" placeholder="Password" class="form-control input-md" required="">
    
                </div>
            </div>

             <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ยืนยันรหัสเข้าใช้งาน</label>  
                <div class="col-md-4">
                    <input id="stuPassword" name="fn" type="password" placeholder="Re-password" class="form-control input-md" required="">
    
                </div>
            </div>
<!-- *********************************first from********************************************* -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อ</label>  
                <div class="col-md-4">
                    <input name="stwFirstname" type="text" placeholder="Firstname" class="form-control input-md" required="">
    
                </div>
            </div>
<!-- *********************************last from********************************************* -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">นามสกุล</label>  
                <div class="col-md-4">
                    <input  name="stwLastname" type="text" placeholder="Lastname" class="form-control input-md" required="">
    
                </div>
            </div>
<!-- *********************************gender********************************************* -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">เพศ</label>
                    <div class="col-md-4">
                    <select  name="stwGender" class="form-control input-md">
                <option value="1">ชาย </option>
                <option value="2">หญิง</option>
                </select>
                </div>
            </div>
<!-- **********************************email***************************************************** -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">อีเมลล์</label>  
                <div class="col-md-4">
                    <input  name="stwEmail" type="email" placeholder="Email" class="form-control input-md" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
    
                </div>
            </div>
<!-- **********************************tel**************************************************** -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">เบอร์โทร</label>  
                <div class="col-md-4">
                    <input name="stwTel" type="text" placeholder="Tel" class="form-control input-md" required="">
    
                </div>
            </div>
<!-- **********************************dept**************************************************** -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">แผนก</label>
                    <div class="col-md-4">
                    <select  name="stwDept_id" class="form-control input-md">
                <option value="1">แผนก 1  </option>
                <option value="2">แผนก 2</option>
                <option value="3">แผนก 3</option>
                
                    </select>
                </div>
            </div>

<!-- **********************************dept**************************************************** -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">สถานะ</label>
                    <div class="col-md-4">
                    <select  name="stwStatus_id" class="form-control input-md">
                
                <option value="2">Super User</option>
                <option value="3">User</option>
                    </select>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">สถานะการอบรม</label>
                    <div class="col-md-4">
                    <select  name="stwActivate" class="form-control input-md">
                <option value="1">อนุมัติ </option>
                <option value="2">ไม่อนุมัติ</option>
                
                    </select>
                    </div>
            </div>


              
            
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button id="submit" name="submit" class="btn btn-primary">ตกลง</button>
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