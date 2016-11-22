<td>

     <a href="editdata.php? id=<?php echo $row["stwUser_id"]; ?>" class="btn btn-success btn-xs" role="button" >แก้ไขข้อมูล
     </a>
 </td>

<td>

    <button class="btn btn-danger btn-xs" onclick="return delete_user(<?php echo $row['stwUser_id']?>);">ลบ
    </button>
  
</td>