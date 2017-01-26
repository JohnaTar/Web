<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="saveLesson.php">
<div class="modal fade" id="addLesson" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h1 class="modal-title">เพิ่มเนื้อหา</h1>

        
        <input type="hidden" name="lesson" value="<?php echo $_GET['ID'];?>"> 
        
<div class="modal-body">
           <div class="form-group">
                    <label class="col-md-2 control-label" for="fn">Title</label>  
                <div class="col-md-10">
                    <input name="title" type="text" placeholder="Title" class="form-control input-md" required="">
    
                </div>
            </div>
            <div class="form-group">
                    <label class="col-md-2 control-label" for="fn">Content</label>  
                <div class="col-md-10">
                    <textarea cols="80" rows="10"  name="content" required=""></textarea>
                </div>
            </div>
            <div class="form-group">
                    <label class="col-md-2 control-label" for="fn">Picture</label>  
                <div class="col-md-10">
                    <input name="image" type="file" placeholder="Title" class="form-control input-md"  accept="image/*">
    
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
