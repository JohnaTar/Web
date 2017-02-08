function show_edit_choice(id){
  $.ajax({
        type:"POST",
        url:"manage_quiz.php",
        data:{show_choice:id},
      success:function(data)
      {
       $("#choice_form").html(data);


      }
  });
    return false;

}
function save_choice_form(){
  $.ajax({
    type:"POST",
    url:"manage_quiz.php",
    data:$("#edit_choice_data").serialize(),
    success:function(data){
      
     
      
      //show result
      alert(data);


      location.reload();
      
    }
  });
  return false;
}
function show_edit_quiz(id){
  $.ajax({
        type:"POST",
        url:"manage_quiz.php",
        data:{show_quiz:id},
      success:function(data)
      {
      $("#choice_form").html(data);


      }
  });
    return false;

}