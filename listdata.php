<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 

</head>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">                 
                </button>
                <a class="navbar-brand" href="index.html">Welcome</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">                        
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Adminstator <b class="caret"></b></a>
                    <ul class="dropdown-menu">                       
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- ***************************Start left bar************************************ -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"> 
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-file""></i> เนื้อหาการอบรม <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>                   
                    <li>                 
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> สร้างหัวข้อการอบรม</a>
                    </li>

                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> รายงานการอบรม</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> จัดการข้อมูลสมาชิก</a>
                    </li>
                    <li>
                        <a href="1.html"><i class="fa fa-fw fa-table"></i> กิด</a>
                    </li>
                    <li>
                        <a href="2.html"><i class="fa fa-fw fa-table"></i> รูปแบบ</a>
                    </li>
                    <li>
                        <a href="3.html"><i class="fa fa-fw fa-table"></i> หน้าเปล่า</a>
                    </li>  
                                                    
            </div>
        </nav>
<!-- *********************************end left bar********************************************* -->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       <center> <h1 class="page-header">
                            ข้อมูลสมาชิก</h1> </center>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> ข้อมูลสมาชิก
                            </li>
                        </ol>
<!-- *********************************start database******************************* -->
    <?php
    

   
    $memid = null;

    if(isset($_GET["id"]))
    {
        $memid = $_GET["id"];
    }
    include("connect.php");
    $sql = "SELECT * FROM stwUser 
                        WHERE stwUser_id = '".$memid."' ";
    $query = mysqli_query($conn,$sql);
    $result=mysqli_fetch_array($query,MYSQLI_ASSOC);


    ?>
    

    
    

<!-- *********************************start from********************************************* -->
<form class="form-horizontal" action="checklogin.php" method="POST"> 

<!-- *****************************first from********************************************* -->
          <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">คำนำหน้า</label>
                    <div class="col-md-4">
                    <select  name="stwPrefix_id" class="form-control input-md">
                <option value="1" <?php if($result['stwPrefix_id'] == '1'){echo "selected='selected'";} ?> >นาย </option>
                <option value="2" <?php if($result['stwPrefix_id'] == '2'){echo "selected='selected'";} ?> >นาง</option>
                <option value="3" <?php if($result['stwPrefix_id'] == '3'){echo "selected='selected'";} ?>>นางสาว</option>
                </select>
                </div>
            </div>

            
<!-- *********************************first from********************************************* -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อ</label>  
                <div class="col-md-4">
                    <input name="stwFirstname" type="text" placeholder="Firstname" class="form-control input-md"  value="<?php echo $result['stwFirstname']; ?>">
    
                </div>
            </div>
<!-- *********************************last from********************************************* -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">นามสกุล</label>  
                <div class="col-md-4">
                    <input  name="stwLastname" type="text" placeholder="Lastname" class="form-control input-md" required="" value="<?php echo $result["stwLastname"]; ?>">
    
                </div>
            </div>
<!-- *********************************gender********************************************* -->
            <div class="form-group">
           
                <label class="col-md-4 control-label" for="selectbasic">เพศ</label>
                    <div class="col-md-4">
               </select>
               
                 <select  name="stwGender" class="form-control input-md">
                <option value="1" <?php if($result['stwGender'] == '1'){echo "selected='selected'";} ?> >ชาย </option>
                <option value="2" <?php if($result['stwGender'] == '2'){echo "selected='selected'";} ?>>หญิง</option>
                </select>
                </div>
            </div>
<!-- **********************************email***************************************************** -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">อีเมลล์</label>  
                <div class="col-md-4">
                    <input  name="stwEmail" type="email" placeholder="Email" class="form-control input-md" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $result["stwEmail"]; ?>">
    
                </div>
            </div>
<!-- **********************************tel**************************************************** -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">เบอร์โทร</label>  
                <div class="col-md-4">
                    <input name="stwTel" type="text" placeholder="Tel" class="form-control input-md" required="" value="<?php echo $result['stwTel']; ?>">
    
                </div>
            </div>
<!-- **********************************dept**************************************************** -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">แผนก</label>
                    <div class="col-md-4">
                    <select  name="stwDept_id" class="form-control input-md">
                <option value="1" <?php if($result['stwDept_id'] == '1'){echo "selected='selected'";} ?>>แผนก 1  </option>
                <option value="2" <?php if($result['stwDept_id'] == '2'){echo "selected='selected'";} ?>>แผนก 2</option>
                <option value="2" <?php if($result['stwDept_id'] == '3'){echo "selected='selected'";} ?>>แผนก 3</option>

              
                    </select>
                </div>
            </div>

<!-- **********************************dept**************************************************** -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">สถานะ</label>
                    <div class="col-md-4">
                    <select  name="stwStatus_id" class="form-control input-md">
                <option value="1"<?php if($result['stwStatus_id'] == '1'){echo "selected='selected'";} ?> >Administrator </option>
                <option value="2" <?php if($result['stwStatus_id'] == '2'){echo "selected='selected'";} ?>>Super User</option>
                <option value="3" <?php if($result['stwStatus_id'] == '3'){echo "selected='selected'";} ?>>User</option>
                    </select>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">สถานะการอบรม</label>
                    <div class="col-md-4">
                    <select  name="stwActivate" class="form-control input-md">
                <option value="1"<?php if($result['stwActivate'] == '1'){echo "selected='selected'";} ?>>อนุมัติ </option>
                <option value="2"<?php if($result['stwActivate'] == '2'){echo "selected='selected'";} ?>>ไม่อนุมัติ</option>
                
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
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
