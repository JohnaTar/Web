<form class="form-horizontal" action="emailphp.php" method="POST">

<div class="modal fade" id="forget_email" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h1 class="modal-title">FORGET PASSWORD</h1>
        </div>
        
         
        
<div class="modal-body">
            
  
                <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">อีเมลล์</label>  
                <div class="col-md-4">
                    <input  name="email" type="email" placeholder="Email" class="form-control input-md" required="" id="Email" data-validation="email">
                     <span id="msg2"></span>
    
                </div>
            </div>

 
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button id="btnSM" name="submit" class="btn btn-primary" >ตกลง</button>
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
