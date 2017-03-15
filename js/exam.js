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