<?php
include("connect.php");

if (isset($_POST['UserName']))
	{
	
	$sql = "SELECT * FROM stwUser WHERE stwUserName='".$_POST['UserName']."'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) == 0)
		{
			
			echo true;
			exit();
		
		}
			
	else
		{ 	
			echo false;
			exit();
	
		}
	exit();
	}


//email *********************************

if (isset($_POST['Email'])) 
{
	

	$sql = "SELECT * FROM stwUser WHERE stwEmail='".$_POST['Email']."'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) == 0){
			
			echo true;
			exit();
		
		}
			
	else
		{ 	
			echo false;
			exit();

		}
	exit();
	}





	if(isset($_POST['delete'])){
		
    include("connect.php");
    $sql = "DELETE  FROM stwUser 
                        WHERE stwUser_id = '".$_POST['delete']."' ";
    $query = mysqli_query($conn,$sql);

    if ($query) {
        echo "ลบข้อมูลเรียบร้อย";
        exit();
     
    }else {
        echo "ไม่สามารถลบข้อมูลได้"; 
     	exit();
    }
}



	if(isset($_POST['stwUsername'])){


	$sql = "INSERT INTO `stwUser` (`stwUsername`, `stwPassword`, `stwFirstname`, `stwLastname`, `stwEmail`, `stwTel`, `stwGender`, `stwActivate`, `stwDept_id`,`stwStatus_id`,`stwPrefix_id`,`stwCreated_date`)
 			VALUES ('".$_POST["stwUsername"]."','".md5($_POST["stwPassword"])."'
 				   ,'".$_POST["stwFirstname"]."','".$_POST["stwLastname"]."',
 				   '".$_POST["stwEmail"]."','".$_POST["stwTel"]."','".$_POST["stwGender"]."',
 				   '".$_POST["stwActivate"]."','".$_POST["stwDept_id"]."','".$_POST["stwStatus_id"]."','".$_POST["stwPrefix_id"]."',NOW())";
 	$query = mysqli_query($conn,$sql);
 	
if($query) {

        echo "บันทึกข้อมูลเรียบร้อย"; 
        exit();
	}
}


if(isset($_POST['showuser'])){
	$sql = "SELECT * FROM stwUser
			WHERE stwUser_id = '".$_POST['showuser']."'";
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	echo'<id="edit_user_form" form class="form-horizontal">
		<div class="form-group">                 
    		<input name="stwUser_id" value="'.$result['stwUser_id'].'" type="hidden">
		</div>

		 <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">คำนำหน้า</label>
                    <div class="col-md-4">
                    <select  name="stwPrefix_id" class="form-control input-md">
    <option value="1"  >นาย </option>
    <option value="2"  >นาง</option>
    <option value="3"  >นางสาว</option>
                </select>
                </div>
            </div>

		<div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อ</label>  
                <div class="col-md-4">
                    <input name="stwFirstname" type="text" placeholder="Firstname" class="form-control input-md" required="" value="'. $result['stwFirstname'].'">
                </div>
         </div>

			  
        <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">นามสกุล</label>  
                <div class="col-md-4">
                    <input  name="stwLastname" type="text" placeholder="Lastname" class="form-control input-md" required="" value="'. $result["stwLastname"].'">
                </div>
         </div>

          <div class="form-group">
           
                <label class="col-md-4 control-label" for="selectbasic">เพศ</label>
                    <div class="col-md-4">
               </select>
               
                 <select  name="stwGender" class="form-control input-md">
                <option value="1"  >ชาย </option>
                <option value="2" >หญิง</option>
                </select>
                </div>
            </div>

        <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">อีเมลล์</label>  
                <div class="col-md-4">
                    <input  name="stwEmail" type="email" placeholder="Email" class="form-control input-md" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value=" '.$result["stwEmail"].' ">
                </div>
        </div>

        <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">เบอร์โทร</label>  
                <div class="col-md-4">
                    <input name="stwTel" type="text" placeholder="Tel" class="form-control input-md" required="" value="'. $result['stwTel'].' ">
                </div>
        </div>

        <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">แผนก</label>
                    <div class="col-md-4">
                    <select  name="stwDept_id" class="form-control input-md">
                <option value="1"> แผนก 1</option>
                <option value="2"> แผนก 2</option>
                <option value="2"> แผนก 3</option>

              
                    </select>
                </div>
          </div>

         <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">สถานะ</label>
                    <div class="col-md-4">
                    <select  name="stwStatus_id" class="form-control input-md">
                
                <option value="2"> Super User</option>
                <option value="3"> User</option>
                    </select>
                    </div>
         </div>

          <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">สถานะการอบรม</label>
                    <div class="col-md-4">
                    <select  name="stwActivate" class="form-control input-md">
                <option value="1"> อนุมัติ </option>
                <option value="2"> ไม่อนุมัติ</option>
                
                    </select>
                    </div>
            </div>













			  ';
	}	
	

?>