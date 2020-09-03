<div style="background-color: 1ABC9C;">

<?php
$teacherList = getTeacherList($conn);
$proffList = getProffList($conn);
?>
<div class="container-fluid" >
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
                  <select name="gender" class="form-control">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                  </select>
              </div>
              <div class="col-lg-6">
                  <input type="email" class="form-control" required name="mail" placeholder="Email">
              </div>
              <div class="col-lg-6">
                  <input type="date" class="form-control" required name="b_day" placeholder="B Day">
              </div>
              <select name="study" id="study_id" onchange="getSomething(this);" style="margin-left: 44%;">
		        <option>Please Select Language</option>
		            <?php if(!empty($proffList)):?>
			            <?php foreach($proffList as $proff):?>
				            <option value="<?=$proff['profession']?>"><?=$proff['profession']?></option>
			            <?php endforeach;?>
		            <?php endif;?>
	          </select><br>

                <div style="margin-top: 10px;margin-left:47%;">
                    <button type="submit" name="addUser" class="btn btn-success">Add User</button>
                </div>
                
          </div>
      </form>
    </div>
</div>
</div>
