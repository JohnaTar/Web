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
      
  
/*basic reset*/
* {margin: 0; padding: 0;}




/*form styles*/
#msform {
    width: 700px;
    margin: 40px auto;
    text-align: center;
    position: relative;
}
#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 3px;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
    padding: 20px 30px;
    box-sizing: border-box;
    width: 100%;
    margin: 0 10%;
    
    /*stacking fieldsets above each other*/
    position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}
/*inputs*/
#msform input, #msform textarea {
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 13px;
}
/*buttons*/
#msform .action-button {
    width: 100px;
    background: #27AE60;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 1px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
    font-size: 18px;
    text-transform: uppercase;
    color: #2C3E50;
    margin-bottom: 10px;
}
.fs-subtitle {
    font-weight: normal;
    font-size: 13px;
    color: #666;
    margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    /*CSS counters to number the steps*/
    counter-reset: step;
}
#progressbar li {
    list-style-type: none;
    color: black;
    text-transform: uppercase;
    font-size: 9px;
    width: 33.33%;
    float: left;
    position: relative;
}
#progressbar li:before {
    content: counter(step);
    counter-increment: step;
    width: 20px;
    line-height: 20px;
    display: block;
    font-size: 10px;
    color: #333;
    background: white;
    border-radius: 3px;
    margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: white;
    position: absolute;
    left: -50%;
    top: 9px;
    z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
    /*connector not needed before the first step*/
    content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
    background: #27AE60;
    color: white;
}


label.btn span {
  font-size: 18px;
}

label input[type="radio"] ~ i.fa.fa-circle-o{
    color: black;    display: inline;
}
label input[type="radio"] ~ i.fa.fa-dot-circle-o{
    display: none;
}
label input[type="radio"]:checked ~ i.fa.fa-circle-o{
    display: none;
}
label input[type="radio"]:checked ~ i.fa.fa-dot-circle-o{
    color: green;    display: inline;
}
label:hover input[type="radio"] ~ i.fa {
color:green;
}


div[data-toggle="buttons"] label.active{
    color: green;
}

div[data-toggle="buttons"] label {
display: inline-block;
padding: 6px 12px;
margin-bottom: 0;
font-size: 14px;
font-weight: normal;
line-height: 2em;
text-align: left;
white-space: nowrap;
vertical-align: top;
cursor: pointer;
background-color: none;
border: 0px solid 
#c8c8c8;
border-radius: 3px;
color: black;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
user-select: none;

}

div[data-toggle="buttons"] label:hover {
color: green;
}

div[data-toggle="buttons"] label:active, div[data-toggle="buttons"] label.active {
-webkit-box-shadow: none;
box-shadow: none;
}




  </style>      
  
    </head>

        <body>
        
            
            <div id="wrapper">


<!-- *************************MENU BAR************************** -->
                  <?php include("menu/menuUser.php"); ?>
<!-- *********************************************************** -->
        <div id="page-wrapper">
            <div class="container-fluid">            
                
<!-- *********************************start table************************************* -->
  <div class="row">
                <div class="col-md-12 ">
                <?php 
                include("connect.php");
      $subject_id = $_GET['subject_id'];
      $sql = "SELECT stwExam_name,
        DATE_FORMAT(stwExam_date, '%d/%m/%Y'), 
        TIME_FORMAT(stwExam_start, '%H:%i'),  
        TIME_FORMAT(stwExam_end, '%H:%i'),
        stwExam_date, stwExam_start, stwExam_end
      FROM stwExam WHERE stwExam_id = $subject_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$datetime = $row[1] . "   " . $row[2]. "-" . $row[3];

?>
<center><h2><div class="alert alert-warning alert-dismissable">เรื่อง : <?php echo $row['stwExam_name']; ?></div></h2> </center>
<center><h2><div class="alert alert-success alert-dismissable"> <?php echo "[$datetime]"; ?></div></h2> </center>
                </div>
    </div>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php

$now = strtotime("now");
$start = $row[4] . " " . $row[5];
$end = $row[4] . " " . $row[6];
$start = strtotime($start);
$end = strtotime($end);
//ถ้าเป็นผู้ทำแบบทดสอบ และกำหนดวันเวลาที่แน่นอนในการทำแบบทดสอบ
//แล้วถ้าไม่อยู่ในช่วงวันเวลาที่กำหนดในการทำแบบทดสอบ จะไม่แสดงคำถาม
if(($_SESSION['status'] == "3") && ($row[1] != "00/00/0000") && (($start > $now) || ($end < $now))) {
  echo "<script>alert('ขณะนี้ไม่อยู่ในช่วงวันเวลาที่กำหนดในการทำแบบทดสอบ')</script>";
  
    echo "<script>window.location='Create'</script>";

  
  exit;
} 
if(isset($_SESSION['ID'])) {
  $testee_id = $_SESSION['ID'];
  // $sql = "SELECT COUNT(*) FROM stwscore WHERE stwSubject_id = $subject_id AND stwUser_id = $testee_id";

  $sql ="SELECT COUNT(*) FROM stwExam_User WHERE stwUser_id =$testee_id AND stwExam_id=$subject_id AND stwScore";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  if($row[0] !=0) {
    mysqli_close($conn);
    echo "<script>alert('ท่านได้ทำแบบสอบทดสอบหัวข้อนี้ไปแล้ว ไม่สามารถทำซ้ำได้อีก')</script>";
    echo "<script>window.location='Create'</script>";
    exit;
  }
}
?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->









<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                <div class="row">
                    <div class="col-md-12 alert alert-info">
                      <form id="msform">
  <!-- progressbar  -->
  <?php  include("connect.php");
   $sql = "SELECT COUNT(*) FROM stwExam_detail WHERE stwExam_id = $subject_id ";  //
    $r = mysqli_query($conn, $sql);
    $num_q = 0;
    if($r) {
        $row = mysqli_fetch_array($r);
        $num_q = $row[0];
    } 

    ?>
  <ul id="progressbar">

    <li class="active"></li>
    <?php for ($i=1; $i<= $num_q-1 ; $i++) { 
          echo '<li></li>';
    }
    ?>
    
    
  </ul>
              
                      <?php 
                      include("connect.php");
//$sql = "SELECT * FROM stwQuestion WHERE stwSubject_id = '$subject_id' ORDER BY RAND ()";
$sql ="SELECT stwQuestion.stwQuestion_text,stwExam_detail.stwExam_id,
       stwExam_detail.stwQuestion_id
       FROM stwExam_detail
       INNER JOIN stwQuestion ON stwExam_detail.stwQuestion_id = stwQuestion.stwQuestion_id
       WHERE stwExam_id =$subject_id ORDER BY RAND ()" ;
$result = mysqli_query($conn, $sql);
  $i =1;
while($data = mysqli_fetch_array($result)) {
  //แสดงลำดับข้อ
  $question_text = $data['stwQuestion_text'];
  $question_id = $data['stwQuestion_id'];

  ?>
 
<?php
  $sql = "SELECT * FROM stwChoice WHERE stwQuestion_id = $question_id ORDER BY RAND ()";
  $r = mysqli_query($conn, $sql);
?>
              <fieldset>
    <h1 class="fs-title">  <?php echo $question_text; ?> </h1>
          <div class="form-group">
            <div class="btn-group btn-group-vertical" data-toggle="buttons">
                   
          
    


<?php

      
  while($ch = mysqli_fetch_array($r)) {




        echo ' 
                   
                    
    <label class="btn">
          <input type="radio" name="'.$question_id.'"  value="'.$ch['stwChoice_id'].'"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> :'.$ch['stwChoice_text'].'</span>
        </label>
    
    

                    
                                ';
?>


 
<?php }  

if ($i==1) {
    echo '</div></div><input type="button" name="next" class="next action-button" value="Next" />
 </fieldset>';
}else if ($i!=$num_q) {
    echo '</div></div><input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="button" name="next" class="next action-button" value="Next" />
 </fieldset>';
}else{
    echo '</div></div><input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="button" id="btnSubmit"  value="Save" class="next action-button"  />
 </fieldset>';
}
?>




<?php $i++;   }  mysqli_close($conn); ?>


                 
      
  <!-- fieldsets -->
  
  
  </form>
                           
                
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


                            
                            </div>

                        </div>
                        <!-- Grid -->
                    </div>
                    <!-- Row -->
                 </div>
    </div>
</div>

  
  


 
 
  
<script type="text/javascript">
    
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
            next_fs.css({'left': left, 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".previous").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".submit").click(function(){
    return false;
})
 $(function() {  
  $(':radio').change(function(event) {
    var subject_id = <?php echo $_GET['subject_id']; ?>;
    var question_id = event.target.name;
    var choice_id = event.target.value;
    
    $.ajax({
      url: 'Select-choice.php',
      type: 'post',
      data: {'stwSubject_id':subject_id, 'stwQuestion_id':question_id, 'stwchoice_id':choice_id},
      dataType: 'script',
      beforeSend: function() {
        $('body').css({cursor: 'wait'});
      }, 
      complete: function() {
        $('body').css({cursor: 'default'});
      }
    });
  });
  
  $('#btnSubmit').click(function() {
    if(confirm('ยืนยันการเสร็จสิ้นการทำแบบทดสอบ?')) {
      var stwSubject_id = <?php echo $_GET['subject_id']; ?>;
      window.location = 'finish.php?id=' + stwSubject_id;
    }else{
      location.reload();
    }
  });
});

</script>





    </body>

</html>
