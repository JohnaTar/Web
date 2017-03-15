
function delete_subject(id){
  if(confirm("คุณต้องการลบข้อมูลหรือไม่")){
    $.ajax({
      type:"POST",
      url:"ckAjaxs-nattee.php",
      data:{exam_id:id},
      success:function(data){
        alert(data);
        location.reload();
      }
    });
  }
  return false;
}




