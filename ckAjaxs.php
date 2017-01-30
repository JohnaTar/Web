<?php
include("connect.php");
 if (isset($_POST['del_logo'])){

$sql ="SELECT * FROM stwUrllogo WHERE stwUrllogo_id ='".$_POST['del_logo']."'";
$res =mysqli_query($conn,$sql);
$row =mysqli_fetch_array($res,MYSQLI_ASSOC);
$del =$row['stwUrlname'];
unlink($del);

$sql = "DELETE  FROM stwUrllogo
                        WHERE stwUrllogo_id = '".$_POST['del_logo']."' ";
$result = mysqli_query($conn,$sql);
    if($result) {
        echo "ลบโลโก้เรียบร้อย"; 
        exit();    
    }else {
        echo "ไม่สามารถลบโลโกได้"; 
        exit();
    

    }
}
if (isset($_POST['use_logo'])) {
  $id ="1";
  $logo =$_POST['use_logo'];
  $sql = "UPDATE stwShowlogo SET stwUrllogo_id = '$logo' where stwShowlogo_id = '$id'";
  $result = mysqli_query($conn,$sql);
    if($result) {
        echo "เปลี่ยนโลโก้เรียนร้อย"; 
        exit();    
    }else {
        echo "ไม่สามารถเปลี่ยนโลโก้เรียนร้อย"; 
        exit();
    

    }

  
}
/////////////////////////////////////////////////////////////////////////////////
if (isset($_POST['del_lesson'])) {

  $sqli = "SELECT stwContent_img FROM stwContent WHERE stwContent_id ='".$_POST['del_lesson']."'";
  $res = mysqli_query($conn,$sqli);
  $row =mysqli_fetch_array($res,MYSQLI_ASSOC);
  $del = $row['stwContent_img'];
  unlink($del);


  $sql= "DELETE FROM stwContent WHERE stwContent_id ='".$_POST['del_lesson']."'";
  $result = mysqli_query($conn,$sql);
    if($result) {
        echo "ลบข้อมูลเนื้อหา้เรียบร้อย"; 
        exit();    
    }else {
        echo "ไม่สามารถลบข้อมูลเนื้อหา้เรียบร้อย"; 
        exit();
    

    }

}
if (isset($_POST['edit_info'])) {
  $sql ="SELECT * FROM stwContent WHERE stwContent_id ='".$_POST['edit_info']."'";
  $query =mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($query,MYSQLI_ASSOC);

  echo ' 
  <div class="form-group" >
  <input type="hidden" name ="content_edit" value ="'.$row['stwContent_id'].' ">
                    <label class="col-md-2 control-label" for="fn">Title</label>  
                <div class="col-md-10">
                    <input name="title" type="text" placeholder="Title" class="form-control input-md" required="" value="'.$row['stwContent_title'].'">
    
                </div>
            </div>
            <div class="form-group">
                    <label class="col-md-2 control-label" for="fn">Content</label>  
                <div class="col-md-10">
                    <textarea cols="80" rows="10" name="content" required="" >'.$row['stwContent_detail'].'  </textarea>
                </div>
            </div>
            <div class="form-group">
                    <label class="col-md-2 control-label" for="fn">Picture</label>  
                <div class="col-md-10">
                    <input name="image" type="file" placeholder="Title" class="form-control input-md"  accept="image/*">
    
                </div>
            </div>
            
             <div class="form-group">
                    <label class="col-md-2 control-label" for="fn">Link-Video</label>  
                <div class="col-md-10">
                    <input name="video" type="text" placeholder="Title" class="form-control input-md" value="https://www.youtube.com/watch?v='.$row['stwYoutube'].'">
    
                </div>
            </div>'
            ;


 
}


?>