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
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="lip/css/froala_editor.css">
  <link rel="stylesheet" href="lip/css/froala_style.css">
  <link rel="stylesheet" href="lip/css/plugins/code_view.css">
  <link rel="stylesheet" href="lip/css/plugins/colors.css">
  <link rel="stylesheet" href="lip/css/plugins/emoticons.css">
  <link rel="stylesheet" href="lip/css/plugins/image_manager.css">
  <link rel="stylesheet" href="lip/css/plugins/image.css">
  <link rel="stylesheet" href="lip/css/plugins/line_breaker.css">
  <link rel="stylesheet" href="lip/css/plugins/table.css">
  <link rel="stylesheet" href="lip/css/plugins/char_counter.css">
  <link rel="stylesheet" href="lip/css/plugins/video.css">
  <link rel="stylesheet" href="lip/css/plugins/fullscreen.css">
  <link rel="stylesheet" href="lip/css/plugins/file.css">
  <link rel="stylesheet" href="lip/css/plugins/quick_insert.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
   <style>
    

      div#editor {
          width: 90%;
          margin: auto;
          text-align: left;
      }

      .class1 {
        border-radius: 10%;
        border: 2px solid #efefef;
      }

      .class2 {
        opacity: 0.5;
      }
  </style>


       
  
    </head>

        <body>
        
            
            <div id="wrapper">


<!-- *************************MENU BAR************************** -->
                <?php include("menu/menubar.php"); ?>
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
                                <i class="fa fa-table"></i> เพิ่มเนื้อหา
                            </li>
                        </ol>
                    </div>
                </div> 
<?php 


    include("connect.php");
    $ID =$_GET['ID'];
    $sql ="SELECT stwContent.stwContent_detail, stwSubject.stwSubject_id, stwSubject.stwSubject_name FROM stwContent INNER JOIN stwSubject ON stwSubject.stwSubject_id = stwContent.stwSubject_id WHERE stwSubject.stwSubject_id ='".$ID."'";
    $res =mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($res,MYSQLI_ASSOC);


?>          


<center><h2>แก้ไขเนื่อหา :<?php echo $row['stwSubject_name']; ?></h2></center>
 

 <form class="form-horizontal" action="saveLesson" method="POST">                   
<div class="row">
    <div class="col-md-12">
    
        <div id="editor">

      <div class="form-group">
       <button id="btnSubmit" name="submit" class="btn btn-success" ><i class="fa fa-floppy-o fa-2x" aria-hidden="true"></i></button>
       <br>
       <br>
        <textarea id="edit" name="conntent" ><?php echo $row['stwContent_detail'];?></textarea>
        
      </div> 

          <input type="hidden" name="lesson" value="<?php echo $_GET['ID'];?>"> 
 
            
    
  
    
    
  </div>
</form>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

  <script type="text/javascript" src="lip/js/froala_editor.min.js" ></script>
  <script type="text/javascript" src="lip/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/file.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/fullscreen.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/quick_insert.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/quote.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/save.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="lip/js/plugins/video.min.js"></script>

  <script>
    $(function(){
      $('#edit').froalaEditor( {
     
      heightMax: 600
    })

        .on('froalaEditor.image.beforeUpload', function (e, editor, files) {
          if (files.length) {
            var reader = new FileReader();
            reader.onload = function (e) {
              var result = e.target.result;

              editor.image.insert(result, null, null, editor.image.get());
            };

            reader.readAsDataURL(files[0]);
          }

          return false;
        })
    });
  </script>

                        </div>
                        <!-- Grid -->
                    </div>
                    <!-- Row -->
                 </div>
    </div>
</div>
 <!-- *******************end table***********************   
 
     -->

  


    </body>

</html>