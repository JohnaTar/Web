function edit_exam_user(id){
  $.ajax({
        type:"POST",
        url:"example_1.php",
        data:{edit_exam_user:id},
      success:function(data)
      { 
        alert(data);
          $("#myTable1").load(location.href + " #myTable1");
   


      }
  });
    return false;

}


function delete_quest_exam(id){
  $.ajax({
        type:"POST",
        url:"example_1.php",
        data:{delete_quest_id:id},
      success:function(data)
      {
        alert(data);
        
        $("#myTable2").load(location.href + " #myTable2");

      }
  });
    return false;

}
function edit_quest_exam(id){
  $.ajax({
        type:"POST",
        url:"example_1.php",
        data:{edit_quest_exam:id},
      success:function(data)
      { 
        alert(data);
        $("#myTable2").load(location.href + " #myTable2");
   
   


      }
  });
    return false;

}
