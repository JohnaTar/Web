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









<p><img class="img-circle" width="200" height="200" border="2" src="photos/teacher.png"></p>






</li>

                   
                    
                    <li>

                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-file""></i> เนื้อหา <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="Content?ID=1">การแนะนำเกี่ยวกับการทำงานและความปลอดภัย</a>
                            </li>
                            <li>
                                <a href="Content?ID=2">สภาพแวดล้อมที่ปลอดภัยและที่เป็นอันตรายในการทำงาน</a>
                            </li>
                            <li>
                                <a href="Content?ID=3">การป้องกันอันตรายส่วนบุคคล</a>
                            </li>
                            <li>
                                <a href="Content?ID=4">การป้องกันอันตรายเฉพาะด้าน อันตรายจากสภาพต่าง ๆ</a>
                            </li>
                            <li>
                                <a href="Content?ID=5">การป้องกันและการดับเพลิง</a>
                            </li>
                            <li>
                                <a href="Content?ID=6">การปฐมพยาบาลเบื้องต้น</a>
                            </li>
                        </ul>
                    </li>  
                    <li>
                     <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-bookmark"></i> แก้ไขเนื้อหา <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            
                        
                            <li>
                                <a href="add_lesson?ID=1"> การแนะนำเกี่ยวกับการทำงานและความปลอดภัย</a>
                            </li>
                            <li>
                                <a href="add_lesson?ID=2">สภาพแวดล้อมที่ปลอดภัยและที่เป็นอันตรายในการทำงาน</a>
                            </li>
                           <li>
                                <a href="add_lesson?ID=3"> การป้องกันอันตรายส่วนบุคคล</a>
                            </li>
                             <li>
                                <a href="add_lesson?ID=4"> การป้องกันอันตรายเฉพาะด้าน อันตรายจากสภาพต่าง ๆ</a>
                            </li>
                             <li>
                                <a href="add_lesson?ID=5"> การป้องกันและการดับเพลิง</a>
                            </li>
                             <li>
                                <a href="add_lesson?ID=6"> การปฐมพยาบาลเบื้องต้น</a>
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
                        <a href="View_report"><i class="fa fa-fw fa-bar-chart-o"></i> รายงานการทำแบบทดสอบ</a>
                    </li>
                    
                    <li>

                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-table"></i> เมนูจัดการ <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            
                        
                            <li>
                                <a href="Tables"> จัดการข้อมูลสมาชิก</a>
                            </li>
                            <li>
                                <a href="manage_question">จัดการแบบทดสอบ</a>
                            </li>
            <?php 
                    if ($_SESSION['status']==1) {
                        echo '<li>
                                <a href="Tables1"> จัดการข้อมูลแผนก</a>
                            </li>
                            <li>
                                <a href="Logo"> เปลี่ยนโลโก็</a>
                            </li>'
                            ;
                    }else{

                    }


            ?>
                           
                            
                        </ul>
                    </li>  



                   
                </li>
            </ul> 

                                                    
            </div>
        </nav>
