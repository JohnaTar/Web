<!DOCTYPE html>


    <head>
        <?php include("head/head.php");?>
        <title>SB Admin - Bootstrap Admin Template</title>
  
    </head>

        <body>
            
            
    <div id="wrapper">

<!-- *************************MENU BAR************************** -->
                <?php include("template/menubar.php"); ?>
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
                                <i class="fa fa-external-link-square"></i> สร้างหัวข้อการอบรม
                            </li>
                        </ol>
                    </div>
                </div> 

<!-- *****************start table************************* -->                                               
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" id="CreateRoom" onsubmit="return cre_room();">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อหัวข้อการอบรม</label>  
                  <div class="col-md-4">
                    <input name="TopicName" type="text" placeholder="Name of Topic" class="form-control input-md" required="" value="">
    
                  </div>
                </div>
<!-- ****************************************************** -->                                               

                
                <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">วันเริ่ม</label>  
                  <div class="col-md-4">
                    <input name="Start" type="datetime-local"  class="form-control input-md" required="" value="">
    
                  </div>
                </div>
<!-- ********************************************************** -->                                               

                <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">วันสิ้นสุด</label>  
                  <div class="col-md-4">
                    <input name="End" type="datetime-local"   class="form-control input-md" required="" value="">
    
                  </div>
                </div>
<!-- ********************************************************** -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">สถานะการอบรม</label>
                    <div class="col-md-4">       
            <select  name="approve" class="form-control input-md">
                <option value="1"  >อนุมัติ </option>
                <option value="2" >ไม่อนุมัติ</option>
            </select>
                </div>
            </div>

            <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">แบบทดสอบ</label>
                    <div class="col-md-4">       
            <select  name="Quiz" class="form-control input-md">
                    <?php    include('connect.php');
                        $sql = "SELECT * FROM stwQuiztype";
                        $result = mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            echo "<option value =$row[stwQuiztype_id]>$row[stwQuiztype_name]</option>";
        }

                 ?>
            </select>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button id="btnSubmit" name="submit" class="btn btn-primary" >ตกลง</button>
                </div>
            </div>












                </form>


                        
            </div>
        </div> <!-- row  -->

            </div>  <!-- container-fluid  -->
        </div>  <!-- Page wraper -->
    </div>
                                  
  


 
 
  






    </body>

</html>
