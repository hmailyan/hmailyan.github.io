<?php $proffList = getProffList($conn);?>
<div>
<div class="container-fluid">
    <div class="row">
      <form method="POST" action="" class="form-horizontal">
          <div class="row">
          <div class="col-lg-6">
                  <input type="text" class="form-control" required name="fname" placeholder="First name">
              </div>

              <div class="col-lg-6">
                  <input type="text" class="form-control" required name="lname" placeholder="Last name">
              </div>
              <div class="col-lg-6">
                  <input type="number" class="form-control" required name="age" placeholder="Age">
              </div>
              <div class="col-lg-6">
                  <input type="email" class="form-control" required name="mail" placeholder="Email">
              </div>
              <select name="profession" id="study_id" onchange="getSomething(this);" style="margin-left:43%; margin-right:36%;">
		        <option>Please Select Profession</option>
		            <?php if(!empty($proffList)):?>
			            <?php foreach($proffList as $proff):?>
				            <option value="<?=$proff['profession']?>"><?=$proff['profession']?></option>
			            <?php endforeach;?>
		            <?php endif;?>
              </select>
                <div style="margin:auto;">
                    <button type="submit" name="addTeacher" class="btn btn-success">Add Teacher</button>
                </div>
          </div>
      </form>
    </div>
</div>
</div>
