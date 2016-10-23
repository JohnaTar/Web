
    <?php
    

   
    $memid = null;

    if(isset($_GET["id"]))
    {
        $memid = $_GET["id"];
    }
    include("connect.php");
    $sql = "DELETE  FROM stwUser 
                        WHERE stwUser_id = '".$memid."' ";
    $query = mysqli_query($conn,$sql);

    if (mysqli_affected_rows($conn)) {
        echo "<script>";
        echo "alert(\"ลบแล้วนาจา\");"; 
        




    echo "</script>";
    }else {
        echo "<script>";
        echo "alert(\"ลบไม่ได้นาจา\");"; 
        echo "window.history.back()";
    echo "</script>";
    }
    


    ?>
    

    
    














        