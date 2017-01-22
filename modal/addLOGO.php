<form class="form-horizontal"  action="uploadLOGO.php" method="post" enctype="multipart/form-data">
<div class="modal fade" id="addLOGO" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h1 class="modal-title">เพิ่มคำถาม</h1>

         <div id="quest_form">
            </div>
         
        
<div class="modal-body">
           
          

            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">รูปภาพ</label>  

                <div class="col-md-6">
                    <input type="file" name="image" class="btn btnn-info" required ="">
                       
                </div>
            </div>
          
      
         <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
           <input type="submit" name="Submit" value="Save"  class="btn btn-xl btn-info"/>
                </div>
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</form>
