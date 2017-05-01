<?php
 include("connect.php");
 if (isset($_POST['change_answer'])) {
 	

        $sql = "SELECT * FROM stwQuestion WHERE stwQuestion_id = '".$_POST['change_answer']."' ";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($result,MYSQLI_ASSOC);
       $question_text = $data['stwQuestion_text'];
        $question_id = $data['stwQuestion_id'];

  echo '<div class="form-horizontal">

                    <div class="form-group">
                    <label class="col-md-2 control-label">คำถาม</label>
                    <div class="col-md-8">
                        <input type="text"  name="question_text" value="'.$question_text.'" class="form-control"  >
                   <input type="hidden" name="question_id" value="'.$question_id.'">
                    </div>
         
    
                
                 </div> '; 
             
 }
 	 $sql = "SELECT * FROM stwChoice WHERE stwQuestion_id = $question_id ORDER BY stwChoice_id ASC";
 	 $r = mysqli_query($conn, $sql);
                 while($ch = mysqli_fetch_array($r,MYSQLI_ASSOC)) {
if ($ch['stwAnswer']=='yes') {
	$check = "checked";
	$tt ='<i class="fa fa-check fa-2x" style="color:green"></i>';

}else{
	$check="";
	$tt="";
}
 if ($ch['stwAnswer']=='yes') {
                       
                       $div = '<div class="form-group has-success">';
                    } else{
                         $div = '<div class="form-group">';
                    }

echo '
                 	'.$div.'
                    <label class="col-md-3 control-label">คำตอบ</label>
                    <div class="col-md-7">
                        <input type="text" name="choice_text[]" value="'.$ch['stwChoice_text'].'" class="form-control"   > 
                         <input type="hidden" name="choice_edit[]" value="'.$ch['stwChoice_id'].'">
                    </div>
                      <input type="radio" name="choice_id" class="checkbox" value=" '.$ch['stwChoice_id'].'" '.$check.' >
                       </div>  
                          </div>  



                          ';

}
if (isset($_POST['question_id'])) {
	$question_text=$_POST['question_text'];
	$sql ="UPDATE stwQuestion SET stwQuestion_text ='$question_text'
	 WHERE stwQuestion_id ='".$_POST['question_id']."' ";
	 $r = mysqli_query($conn, $sql);
	 if ($r) {
	 	 $id=$_POST['choice_text'];
	 	 $dd =$_POST['choice_edit'];
                        $N = count($id);
                       for($i=0; $i < $N; $i++){
                       	$ss="UPDATE stwChoice SET stwChoice_text='$id[$i]' WHERE stwChoice_id ='$dd[$i]'";
                       	$rr= mysqli_query($conn, $ss);
                       	if ($rr) {
                       		$oo ="UPDATE stwChoice SET stwAnswer='no' WHERE stwQuestion_id='".$_POST['question_id']."'";
                       		$rrow= mysqli_query($conn, $oo);
                       		if ($rrow) {
                       			$tt =1;
                       		}
                       		
                       		
                       		

                       	}
     	          
     	      
	            }
	 	
	 }

if ($tt=='1') {
	$pp="UPDATE stwChoice SET stwAnswer='yes' WHERE stwChoice_id = '".$_POST['choice_id']."' ";
	$last= mysqli_query($conn, $pp);
	if ($last) {
		echo "แก้ไขข้อมูลเรียบร้อย";
	}

}else{
	echo "ไม่สามารถแก้ไขข้อมูลได้";
}
   
	
}
?>

