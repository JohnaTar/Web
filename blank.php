<?php
    if (isset($_GET['action'])) {
         
     } else {
        echo "<script>alert('NO PERMISSION')</script>";
        echo "<script>window.location='index.php'</script>";
     }
?>
<!DOCTYPE html>


    <head>
        <?php include("head/head.php");
        
        ?>
        <title>SB Admin - Bootstrap Admin Template</title>

  
    </head>

        <body>
            
            
            <div id="wrapper">

<!-- *************************MENU BAR************************** -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>    
                    <span class="icon-bar"></span>  
                    <span class="icon-bar"></span>               
                </button>
                <a class="navbar-brand" href="index.php">FORGET PASSWORD</a>
            </div>
            <!-- Top Menu Items **************************************************-->           
            
            
<!-- ***************************Start left bar**************** -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav side-nav">


                    <li class="active"> 

                    <img class="img-responsive" src="img/pro.png" alt="">
                   
                   
            </ul> 

                                                    
            </div>
        </nav>
             
<!-- *********************************************************** -->
        <div id="page-wrapper">
            <div class="container-fluid">            
                <div class="row">
                    <div class="col-md-12">                    
                        <ol class="breadcrumb">
                            
                            <li class="active">
                                <h1><i class="fa fa-table"></i> ลืมรหัสผ่าน</h1>
                            </li>
                        </ol>
                    </div>
                </div> 
                <?php
        include("connect.php");
        if (isset($_POST['button1'])) {
            $encrypt = mysqli_real_escape_string($conn,$_POST['user_ID']);
            $password =mysqli_real_escape_string($conn,$_POST['stwPassword']);
            $sql="SELECT stwUser_ID FROM stwUser WHERE md5(55+10+stwUser_ID)='".$encrypt."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                if (count($row)>=1) {

                    $sql = "UPDATE stwUser SET stwPassword ='".md5($password)."' WHERE stwUser_ID='".$row['stwUser_ID']."'";
                    mysqli_query($conn,$sql);
                    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>เปลี่ยนรหัสผ่านเรียบร้อย.</div>';
                } else{

                   echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Invalid key please try again ไม่สามารถเปลี่ยนรหัสผ่านได้</div>';
                }
        }
   

        




            
        

?>

<!-- *****************start table************************* -->
<form class="form-horizontal" method="POST">                                               
                <div class="row">
                    <div class="col-md-12">
                    <?php   
                        $UserID= $_GET['encrypt'];


                    ?>
                   
                   <input type="hidden" name="user_ID" value="<?php echo $UserID;?>"> 

<div id="pass_form">
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
<div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button id="btnSubmit" name="button1" class="btn btn-primary" >ตกลง</button>
                </div>
            </div>
  </div>
</div>
</form>
                        
                    </div>
                </div> <!-- row  -->

            </div>  <!-- container-fluid  -->

        </div>  <!-- Page wraper -->


  


 
 
  






    </body>

</html>
