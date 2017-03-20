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
        
   $("#step-2").load(location.href + " #step-2");



      }
  });
    return false;

}

function add_user_exam(id){
  $.ajax({
        type:"POST",
        url:"example.php",
        data:{add_user_id:id},
      success:function(data)
      {
        alert(data);
        $("#step-2").load(location.href + " #step-2");
        
  
      }
  });
    return false;

}  
function exam_id(id){
  $.ajax({
        type:"POST",
        url:"example.php",
        data:{exam_id:id},
      success:function(data)
      {
        
        alert(data);
  
      }
  });
    return false;

}  







