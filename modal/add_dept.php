<form class="form-horizontal" id="add_user_form" onsubmit="return add_user_form();">

<div class="modal fade" id="add_dept" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h1 class="modal-title">สมัครสมาชิก</h1>
        </div>
        
         
        
<div class="modal-body">
            
  
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อแผนก</label>  

                <div class="col-md-4">
                    <input  name="add_dept" id="add_dept" type="text" placeholder="Department" class="form-control input-md" required="" >
                    
                         
    
                </div>
            </div>




              
            
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button id="btnSubmit" name="submit" class="btn btn-primary">ตกลง</button>
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
