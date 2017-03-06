<form class="form-horizontal well" action="save_exel.php" method="post" name="upload_excel" enctype="multipart/form-data">

<div class="modal fade" id="add_exel" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h1 class="modal-title">Import CSV/Excel file</h1>
        </div>
        
         
        
<div class="modal-body">
            
  
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">Import file</label>  

                <div class="col-md-4">
                   <input type="file" name="file" id="file" class="input-large">
                    
                  
                         
    
                </div>
            </div>

 
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
           <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
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
