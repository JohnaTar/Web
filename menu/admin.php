<td>
    <div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-bars   "></i> 
  </button>
  <ul class="dropdown-menu">
   
    
    <li><a href="editdata?id=<?php echo $row["stwUser_id"];  ?>"    >แก้ไขข้อมูล
     </a></li>
     <li role="separator" class="divider"></li>
    <li><a href="#" onclick="return delete_user(<?php echo $row['stwUser_id']?>);">ลบ</a></li>
    
  </ul>
</div>
</td>