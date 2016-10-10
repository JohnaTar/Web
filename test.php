<?php

include("connect.php");



        $sql = "SELECT * FROM stwUser";

     $result = mysqli_query($conn, $sql);

		<?php while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                        
                                         echo $row["stwFirstname"];  ?>
                                         echo $row["stwLastname"];  ?>
					}
?>
