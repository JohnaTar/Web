<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="saveLesson.php">
<div class="modal fade" id="addLesson" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h1 class="modal-title">เพิ่มเนื้อหา</h1>

        
         
        
<div class="modal-body">
           <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">Title</label>  
                <div class="col-md-4">
                    <input name="titile" type="text" placeholder="Title" class="form-control input-md" required="">
    
                </div>
            </div>
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">Content</label>  
                <div class="col-md-4">
                    <textarea cols="40" rows="5" name="content" required=""></textarea>
                </div>
            </div>
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">Picture</label>  
                <div class="col-md-4">
                    <input name="imgae" type="file" placeholder="Title" class="form-control input-md" >
    
                </div>
            </div>
          

         <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
           <input type="submit" name="addinfo" value="Save"  class="btn btn-xl btn-info"/>
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