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
<form action="uploadPIC.php" method="post" enctype="multipart/form-data" ">
<input type="file" name="image" class="btn btnn-info" required ="" accept="image/*">
<center><input type="submit" name="Submit" value="Change"  class="btn  btn-xl btn-info"/></center>




</form>
  </a>
</li>
<?php
    

   
        $sql = "SELECT stwUser.stwUser_id,stwUser.stwFirstname,stwUser.stwLastname,stwUser.stwGender,stwUser.stwTel,stwUser.stwEmail,stwPrefix.stwPrefix_name,
            stwDepartment.stwDept_name,stwUser.stwCreated_date
                FROM stwUser
                
                INNER JOIN stwDepartment
                ON stwUser.stwDept_id = stwDepartment.stwDept_id
                INNER JOIN stwPrefix
                ON stwUser.stwPrefix_id = stwPrefix.stwPrefix_id 
                WHERE stwUser_id = '".$_SESSION['ID']."'";
    $query =mysqli_query($conn,$sql);
  $result =mysqli_fetch_array($query,MYSQLI_ASSOC);
  if ($result['stwGender']==1) {
                        $B = "ชาย";
                        }else {
                        $B = "หญิง";

                            }
   
  
?>
            <li>
               <a>
                <i class="fa fa-user"> : <?php echo $result['stwPrefix_name']." ".
                    $result['stwFirstname']." ".
                    $result['stwLastname']; ?>
                    
                </i>
               </a>
            </li> 
            <li>
                <a>
                   <i class="fa fa-tags" > : <?php echo $B ?> </i>
                </a>
            </li>
             <li>
                <a>
                   <i class="fa fa-list" > : <?php echo $result['stwDept_name']; ?> </i>
                </a>
            </li>
            <li>
                <a>
                   <i class="fa fa-phone" > : <?php echo $result['stwTel']; ?> </i>
                </a>
            </li>
            <li>
                <a>
                   <i class="fa fa-mail-forward" > : <?php echo $result['stwEmail']; ?> </i>
                </a>
            </li>

                     <li>

                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-file""></i> เนื้อหา<i class="fa fa-fw fa-caret-down"></i></a>
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
                        </ul>
                    </li> 
                    <li>                 
                        <a href="File_upload"><i class="fa fa-fw fa-file-word-o"></i> เอกสารเพิ่มเติม</a>
                    </li>                    



                    <li>                 
                        <a href="Create"><i class="fa fa-fw fa-edit"></i> หัวข้อการอบรม</a>
                    </li>
                     <li>

                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-file""></i> เมนูจัดการ<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            
                <li>
                     <?php $User = $_SESSION['ID']; ?>
                        <a href="editdata2">
                        <i class="fa fa-fw fa-pencil"></i> แก้ไขข้อมูลส่วนตัว</a>
                </li>    

                            <li>
                             <a href="editpass">
                        <i class="fa fa-fw fa-plus"></i> เปลี่ยนรหัสผ่าน</a>

                        
                                  
                            </li>
                        </ul>
                    </li>  
                    
                </li>
            
                
            </ul> 

                                                    
            </div>
        </nav>

    