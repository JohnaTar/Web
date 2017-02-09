        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>    
                    <span class="icon-bar"></span>  
                    <span class="icon-bar"></span>               
                </button>
                <a class="navbar-brand" href="index">Welcome</a>
            </div>
            <!-- Top Menu Items **************************************************-->           
             <ul class="nav navbar-right top-nav">
             <?php 
             if ($_SESSION['status']==1) {
                 $C = "Administrator";
             }else if ($_SESSION['status']==2) {
                 $C = "Super User";
             }else{
                $C= "User";

             }  
             ?>

                                   
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i><?php echo $C; ?> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">                       
                        <li>
                            <a href="logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
<!-- ***************************Start left bar**************** -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav side-nav">


                    <li class="active"> 

<?php  

    include ("connect.php");
    $sql ="SELECT * FROM stwUser WHERE stwUser_id = '".$_SESSION['ID']."' ";

    $result =mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo '<p><img class="img-circle" width="200" height="200" border="2" src="'.$row['stwProfileurl'].'"></p>';


}

?>

</li>
<li>
  <a>
<form action="uploadPIC.php" method="post" enctype="multipart/form-data" >
<input type="file" name="image" class="btn btnn-info" required ="" accept="image/*">
<center><input type="submit" name="Submit" value="Change"  class="btn-xl btn-info"/></center>




</form>
  </a>
</li>
                   
                    
                    <li>

                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-file""></i> เนื้อหา <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="Content?ID=1">บทที่ 1</a>
                            </li>
                            <li>
                                <a href="Content?ID=2">บทที่ 2</a>
                            </li>
                            <li>
                                <a href="Content?ID=3">บทที่ 3</a>
                            </li>
                            <li>
                                <a href="Content?ID=4">บทที่ 4</a>
                            </li>
                            <li>
                                <a href="Content?ID=5">บทที่ 5</a>
                            </li>
                            <li>
                                <a href="Content?ID=6">บทที่ 6</a>
                            </li>
                        </ul>
                    </li>  
                    <li>
                     <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-bookmark"></i> แก้ไขเนื้อหา <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            
                        
                            <li>
                                <a href="edit_lesson?ID=1"> บทที่ 1</a>
                            </li>
                            <li>
                                <a href="edit_lesson?ID=2"> บทที่ 2</a>
                            </li>
                           <li>
                                <a href="edit_lesson?ID=3"> บทที่ 3</a>
                            </li>
                             <li>
                                <a href="edit_lesson?ID=4"> บทที่ 4</a>
                            </li>
                             <li>
                                <a href="edit_lesson?ID=5"> บทที่ 5</a>
                            </li>
                             <li>
                                <a href="edit_lesson?ID=6"> บทที่ 6</a>
                            </li>
                            
                        </ul>
                        
                    </li> 
                    <li>                 
                        <a href="File_upload"><i class="fa fa-fw fa-file-word-o"></i> เอกสารเพิ่มเติม</a>
                    </li>                
                    <li>                 
                        <a href="Create"><i class="fa fa-fw fa-edit"></i> สร้างหัวข้อแบบทดสอบ</a>
                    </li>

                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> รายงานการอบรม</a>
                    </li>
                    
                    <li>

                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-table"></i> เมนูจัดการ <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            
                        
                            <li>
                                <a href="Tables"> จัดการข้อมูลสมาชิก</a>
                            </li>
                            <li>
                                <a href="Tables1"> จัดการข้อมูลแผนก</a>
                            </li>
                            <li>
                                <a href="Logo"> เปลี่ยนโลโก็</a>
                            </li>
                            
                        </ul>
                    </li>  



                   
                </li>
            </ul> 

                                                    
            </div>
        </nav>