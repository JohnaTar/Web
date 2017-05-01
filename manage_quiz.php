<?php 
include ("connect.php");
if (isset($_POST['show_choice'])) {

    $sql = "SELECT * FROM stwChoice WHERE stwChoice_id ='".$_POST['show_choice']."'";
    $query =mysqli_query($conn,$sql);
  $result =mysqli_fetch_array($query,MYSQLI_ASSOC);
   echo ' <form class="form-horizontal" id="edit_choice_data"> 
             <div class="form-group">
                    <label class="col-md-2 control-label" for="fn">ตัวเลือก</label>  

                <div class="col-md-10">
                    <input  name="edit_choice_name"  type="text" placeholder="Choice" class="form-control input-md" required="" value="'.$result['stwChoice_text'].'">

                  </div>
            </div>
                  <input name="edit_choice_id" value="'.$result['stwChoice_id'].'"  type="hidden">
                    </div>
            </div>

';


}
if (isset($_POST['edit_choice_id'])) {
  $sql ="UPDATE stwChoice SET
          stwChoice_text = '".$_POST["edit_choice_name"]."'
          WHERE stwChoice_id = '".$_POST['edit_choice_id']."' "; 
           $result = mysqli_query($conn,$sql);

    if($result) {

        echo "แก้ไขตัวเลือกเรียบร้อย"; 
        exit();
    
    
    }else {
        echo "ไม่สามารถแก้ไขตัวเลือกได้"; 
        exit();
    

    }
  
}

if (isset($_POST['show_quiz'])) {

    $sql = "SELECT * FROM stwQuestion WHERE stwQuestion_id ='".$_POST['show_quiz']."'";
    $query =mysqli_query($conn,$sql);
  $result =mysqli_fetch_array($query,MYSQLI_ASSOC);
   echo ' <form class="form-horizontal" id="edit_choice_data"> 
             <div class="form-group">
                    <label class="col-md-2 control-label" for="fn">คำถาม</label>  

                <div class="col-md-10">
                    <input  name="edit_quiz_name"  type="text" placeholder="Question" class="form-control input-md" required="" value="'.$result['stwQuestion_text'].'">

                  </div>
            </div>
                  <input name="edit_quiz_id" value="'.$result['stwQuestion_id'].'"  type="hidden">
                    </div>
            </div>

';
}

if (isset($_POST['edit_quiz_id'])) {
 $sql ="UPDATE stwQuestion SET
          stwQuestion_text = '".$_POST["edit_quiz_name"]."'
          WHERE stwQuestion_id = '".$_POST['edit_quiz_id']."' "; 
           $result = mysqli_query($conn,$sql);

    if($result) {

        echo "แก้ไขคำถามเรียบร้อย"; 
        exit();
    
    
    }else {
        echo "ไม่สามารถแก้ไขคำถามได้"; 
        exit();
    

    }
}
if (isset($_POST['delete_quiz'])){
	

   $sql="DELETE from stwQuestion Where stwQuestion_id = '".$_POST['delete_quiz']."' ";
 $result = mysqli_query($conn,$sql);

    if($result) {

        echo "ลบคำถามเรียบร้อย";
        exit();


    }else {
        echo "ไม่สามารถลบคำถามได้";
        exit();


    }


}


?>
