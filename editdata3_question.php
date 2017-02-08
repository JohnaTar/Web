<?php
session_start();
if ($_SESSION['ses_id']=='') {
     echo "<script>alert('PLEASE LOGIN')</script>";
     echo "<script>window.location='index'</script>";
 
  } else if ($_SESSION['status']== 3 ) {
    echo "<script>alert('NO PERMISSION')</script>";
    echo "<script>window.location='index'</script>";
  
} else{
}
?>
<!DOCTYPE html>



    <head>
        <?php 
        include("head/head.php");
        
        ?>
    
   
  
    </head>

        <body>
        
            
            <div id="wrapper">


<!-- *************************MENU BAR************************** -->
                <?php if ($_SESSION['status']==3) {
                    
                    include ("menu/menuUser.php");
                }else {
                include("menu/menubar.php");
            }
                 ?>
<!-- *********************************************************** -->
        <div id="page-wrapper">
            <div class="container-fluid">            
                <div class="row">
                    <div class="col-md-12">                    
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-puzzle-piece"></i> แก้ไขคำถาม
                            </li>
                        </ol>
                    </div>
                </div> 
<!-- *********************************start table************ -->   
       
              
         

<?php 
        include("connect.php");
       $question_id = $_GET['id'];
       $sql = "SELECT * FROM stwQuestion WHERE stwQuestion_id = $question_id ";
       $result = mysqli_query($conn, $sql);
    
       $data = mysqli_fetch_array($result,MYSQLI_ASSOC) ;
                $question_text = $data['stwQuestion_text'];
                $question_id = $data['stwQuestion_id'];
                 
        ?>

                    <form class="form-horizontal" method="POST" action="editquestion.php">

                    <div class="form-group">
                    <label class="col-md-4 control-label">คำถาม</label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $question_text; ?> " class="form-control"  >
                    </div>
                </div>  
                           
   
  

                      
          

        <?php
            $sql = "SELECT * FROM stwChoice WHERE stwQuestion_id = $question_id ORDER BY stwChoice_id ASC";
                 $r = mysqli_query($conn, $sql);
                 $i =1;
                 while($ch = mysqli_fetch_array($r)) {
?>                  
                
                    <div class="form-group">
                    <label class="col-md-4 control-label">คำตอบ</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" value="<?php echo $ch['stwChoice_text']; ?>" name="<?php echo $i;?>" >
                        <div class="radio">
                        <label><input type="radio" name="s" <?php if($ch['stwAnswer'] == 'yes'){echo "checked='checked'";} ?>>ตัวเลือก</label>
                          </div>
                    </div>
                </div>  
                   



                   <?php $i++; } ?>


                                                      
                <div class="form-group">
                <label class="col-md-4 control-label" for=""></label>
                <div class="col-md-4">
            <button id="btnSubmit" name="submit" class="btn btn-primary" >ตกลง</button>
            <input type=button class="btn btn-danger" onclick=window.history.back() value=ยกเลิก>

                </div>
            </div>
            </form>
         
                            


   
                                


<?php 
                                mysqli_close($conn);
                            
?>
     
        </div>
    </div>
 
          
 
                    <!-- Row -->
                 </div>
    </div>
</div>
 <!-- *******************end table************************ -->

  
  


 
 
  <?php include("modal/addQuest.php");?>





    </body>

</html>