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
       <style type="text/css">
         p { display: inline-block; }
  .font-size-label { margin-right: 20px; }
  #font-size { margin: 0 5px; }
  button { 
    width: 30px;
    height: 30px;
  }

h1 { 
  height: 60px; 
  padding: 0;
  margin: 0;
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
                 <h1><?php echo $row['stwSubject_name'];  ?></h1>
        </div>
       </div> 
    </div>
   
  
   

    <br> 
    <br>
     
  
    
    <br>

  <div class="row">
   <div class="col-md-12">
              <h1>Resize Me</h1>
  <p class="font-size-label">Font Size</p>
  <button id="up">+</button>
  <p id="font-size"></p>
  <button id="down">-</button>
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

  
  <script type="text/javascript">
    function getSize() {
  size = $( "h1" ).css( "font-size" );
  size = parseInt(size, 10);
  $( "#font-size" ).text(  size  );
}

//get inital font size
getSize();

$( "#up" ).on( "click", function() {

  // parse font size, if less than 50 increase font size
  if ((size + 2) <= 50) {
    $( "h1" ).css( "font-size", "+=2" );
    $( "#font-size" ).text(  size += 2 );
  }
});

$( "#down" ).on( "click", function() {
  if ((size - 2) >= 12) {
    $( "h1" ).css( "font-size", "-=2" );
    $( "#font-size" ).text(  size -= 2  );
  }
});
  </script>


 
 





    </body>

</html>