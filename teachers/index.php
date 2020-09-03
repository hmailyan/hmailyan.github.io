<body style="background-color: #1ABC9C;">
  

<?php 
  $teacherList = getTeacherList($conn);
?>
<a href="index.php?page=addTeacher" class="btn btn-success" style="margin-left: 47%;" >Add Teacher</a>
<section id="teachersTable">
<table class="table table-dark" style="margin-bottom: 0px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Age</th>
      <th scope="col">Mail</th>
      <th scope="col">Professon</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($teacherList as $key=>$teacher):?>
    <tr>
      <th ><?= $key+1;?></th>
      <td><?= $teacher['fname']?></td>
      <td><?= $teacher['lname']?></td>
      <td><?= $teacher['age']?></td>
      <td><?= $teacher['email']?></td>
      <td><?= $teacher['profession']?></td>
      <td>
        <a href="index.php?page=editTeacher&id=<?=$teacher['id']?>" class="btn btn-info">Edit</a>
        <a href="index.php?page=deleteTeacher&id=<?=$teacher['id']?>#teachersTable" class="btn btn-warning">Remove</a>
      </td>
    </tr>
<?php endforeach;?>
    
  </tbody>
</table>
</section>
</body>