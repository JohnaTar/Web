<?php
include("connect.php");


if (isset($_POST['show_add_quest'])) {

  $id = $_POST['show_add_quest'];

    echo '
            <input name="suject_id" type="text" value="'.$id.'">
            
            
           ';
  } 

if (isset($_POST['suject_id'])) {
	echo $_POST['suject_id'];
} else


  






  

?>