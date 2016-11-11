
    <?php
    

   
    $memid = null;

    if(isset($_POST["id"]))
    {
        $memid = $_POST["id"];
    }
    include("connect.php");
    $sql = "DELETE  FROM stwUser 
                        WHERE stwUser_id = '".$memid."' ";
    $query = mysqli_query($conn,$sql);

    if (mysqli_affected_rows($conn)) {
        echo "<script>";
        echo "alert(\"ลบแล้วนาจา\");";
        echo "window.history.back()";

  
        echo "</script>";
    }else {
        echo "<script>";
        echo "alert(\"ลบไม่ได้นาจา\");"; 
        echo "window.history.back()";
    echo "</script>";
    }
    


    ?>
    

    
    














        