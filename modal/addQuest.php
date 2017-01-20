<form class="form-horizontal" id="add_quest" onsubmit="return add_question();">
<div class="modal fade" id="addQuest" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h1 class="modal-title">เพิ่มคำถาม</h1>

         <div id="quest_form">
            </div>
         
        
<div class="modal-body">
           
          

            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">คำถาม</label>  

                <div class="col-md-4">
                    <input  name="question"  type="text" class="form-control input-md" required=""  >
                       
                </div>
            </div>
            
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">* ไฟล์ภาพประกอบ(ถ้ามี)</label>  

                <div class="col-md-4">
                <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                    <input type="file"  name="file">
                    <span class="label label-success">ขนาดไฟล์ไม่เกิน 1 MB</span>
               </div>
            </div>
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ตัวเลือกและคำตอบ</label>  

                <div class="col-md-4">
                    <input  name="choice[1]"  type="text"  class="form-control input-md" required="" maxlength="250"> 
                    <input type="radio" name="answer" required="" value="1">(คำตอบ)
                       
                </div>
            </div>
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ตัวเลือกและคำตอบ</label>  

                <div class="col-md-4">
                    <input  name="choice[2]"  type="text"  class="form-control input-md" required="" maxlength="250"> 
                    <input type="radio" name="answer" required="" value="2">(คำตอบ)
                       
                </div>
            </div>
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ตัวเลือกและคำตอบ</label>  

                <div class="col-md-4">
                    <input  name="choice[3]"  type="text"  class="form-control input-md" required=""  maxlength="250"> 
                    <input type="radio" name="answer" required="" value="3">(คำตอบ)
                       
                </div>
            </div>
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ตัวเลือกและคำตอบ</label>  

                <div class="col-md-4">
                    <input  name="choice[4]"  type="text" class="form-control input-md" required=""  maxlength="250"> 
                    <input type="radio" name="answer" required="" value="4">(คำตอบ)
                       
                </div>
            </div>


            


 


         
            

       
         <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button   type="submit"  
             class="btn btn-primary" >ตกลง</button>
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
