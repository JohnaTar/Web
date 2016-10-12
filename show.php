<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>
<?php 
     include("connect.php");
     $sql = "SELECT stwUser.stwFirstname,stwUser.stwLastname,stwUser.stwActivate,
                    stwStatus.stwStatus_name,stwPrefix.stwPrefix_name
            FROM stwUser
            INNER JOIN stwStatus
            ON stwUser.stwStatus_id = stwStatus.stwStatus_id 
            INNER JOIN stwPrefix
            ON stwUser.stwPrefix_id = stwPrefix.stwPrefix_id";

     $result = mysqli_query($conn, $sql);

	                                                      
?>


      
     

    <div id="wrapper">

        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">                 
                </button>
                <a class="navbar-brand" href="index.html">Welcome</a>
            </div>
            <!-- Top Menu Items -->            <ul class="nav navbar-right top-nav">                        
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
                    <img class="img-responsive" src="img/profile.gif" alt="">
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
<!-- *********************************start table********************************************* -->
        <div id="page-wrapper">
            <div class="container-fluid">            
                <div class="row">
                    <div class="col-lg-12">                    
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> ตารางแสดงข้อมูลสมาชิก
                            </li>
                        </ol>
                    </div>
                </div> 
                                               
                <div class="row">
                    <div class="col-lg-12">
                        <center><h2>ตารางแสดงข้อมูลสมาชิก</h2></center>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">เพิ่มข้อมูลสมาชิก</button>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
					<th>คำนำหน้า</th>                                      
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>สถานะ</th>
					<th>สถานะการอบรม</th>
                                        <th>เมนู</th>                                            
                                    </tr>
                                 </thead>
                                <tbody>                       
                                    <tr>
			<?php while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){?>
                            <td><?php echo $row["stwPrefix_name"]; ?></td>
                            <td><?php echo $row["stwFirstname"]; ?></td>
					        <td><?php echo $row["stwLastname"]; ?></td>
		                    <td><?php echo $row["stwStatus_name"]; ?></td>
					        <td><?php echo $row["stwActivate"]; ?></td>

 
				    </tr>                       
                                   <?php } ?>
                                    </thead>
                                </tbody>
                            </table>
                        </div>
                    </div>
                 </div>
                </div>
 <!-- *********************************end table********************************************* -->
  <!-- *********************************startmodal********************************************* -->
<


            </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->







</body>

</html>
