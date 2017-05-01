<?php
session_start();

if ($_SESSION['ses_id']=='') {
     echo "<script>alert('PLEASE LOGIN')</script>";
     echo "<script>window.location='index.php'</script>";
 
  } 
  

?>
<!DOCTYPE html>



    <head>
        <?php 
        include("head/head.php");        
        ?>
      
      <script language="javascript" src="js/jquery-1.2.6.min.js"></script>
<script type="text/javascript">
$(function(){
    var minFont=8; // กำหนดขนาดตัวอักษรต่ำสุด
    var maxFont=18; //  กำหนดขนาดตัวอักษรสูงสุด
    var nowFont=12; // กำหนดขนาดตัวอักษรเริมต้น
    var objSet="p"; // แท็กที่ต้องการกำหนดขนาดตัวอักษร อาจใช้เป็น * หรือ a หรือ a.menu เป็นต้น
    $(objSet).css("font-size",nowFont);
    $(".mFont button").click(function(){
            var inCase=$(this).text();
            if(inCase=="A +"){
                if(nowFont<maxFont){
                    nowFont++;
                }else{
                    nowFont=maxFont;
                }
                $(objSet).css("font-size",nowFont);
            }
            if(inCase=="A -"){
                if(nowFont>minFont){
                    nowFont--;
                }else{
                    nowFont=minFont;
                }
                $(objSet).css("font-size",nowFont);
            }
    });
});
</script> 
<style type="text/css">
                   


mFont button{
    width:50px;
    height:20px;
    text-align:center;
    display:block;
    float:left;
    background-color:#000000;
    color:#FFFFFF;
    font-size:12px;
    font-weight:bold;
    border:1px solid #666666;
    margin-right:2px;
    line-height:17px;
    cursor:pointer;
        font-family:tahoma;
}
                    </style>
       


       
            
  
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
                                <i class="fa fa-puzzle-piece"></i> เนื้อหา
                            </li>
                        </ol>
                    </div>
                </div> 
<!-- *********************************start table************ -->   
                <div class="row">
                    <div class="col-md-12">
                    <?php
                    include("connect.php");
$ID =$_GET['ID'];
 $sql ="SELECT stwContent.stwContent_detail, stwSubject.stwSubject_id, stwSubject.stwSubject_name FROM stwContent INNER JOIN stwSubject ON stwSubject.stwSubject_id = stwContent.stwSubject_id WHERE stwSubject.stwSubject_id ='".$ID."'";



$res =mysqli_query($conn,$sql);
$row =mysqli_fetch_array($res,MYSQLI_ASSOC);


?>
    <div class="row">
      <div class="col-md-12"> 
         <div class="page-header">
         <div class="mFont">
<button>A -</button>
<button>A +</button>
</div>
                 <h1><?php echo $row['stwSubject_name'];  ?></h1>
        </div>
       </div> 
    </div>
   
  
   

    <br> 
    <br>
     
  
    
    <br>

  <div class="row">
   <div class="col-md-12">
       
 <?php echo $row['stwContent_detail']; ?>
       
                 
         
  </div>
</div>

                
    
            







                        

                    </div>                   
                </div>




 

          
 
                    <!-- Row -->
                 </div>
    </div>
</div>
 <!-- *******************end table************************ -->


 



 
 





    </body>

</html>