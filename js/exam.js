function add_exam_form(){
  $.ajax({
    type:"POST",
    url:"example.php",
    data:$("#add_exam_form").serialize(),
    success:function(data){
      
      //close modal
      $(".close").trigger("click");
      
      //show result
      alert(data);


      
      //reload page
     location.replace("Create");
    }
  });
  return false;
}

function show_score(id){
  $.ajax({
        type:"POST",
        url:"example.php",
        data:{sub_id:id},
      success:function(data)
      {
        $("#score_form").html(data);

      }
  });
    return false;

} 
function delete_user_exam(id){
  $.ajax({
        type:"POST",
        url:"example.php",
        data:{exam_user_id:id},
      success:function(data)
      {
        alert(data);
        
   $("#myTable1").load(location.href + " #myTable1");



   



      }
  });
    return false;

}









