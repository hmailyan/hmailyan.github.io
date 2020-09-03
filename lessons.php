<body style="background-color: #1ABC9C;">
    

<?php 
  $userList = getUsersList($conn);
  $teacherList = getTeacherList($conn);
?>
<section id="usersTable">
<table class="table table-dark" style="margin-bottom: 0px;">
  <thead>
  <?php foreach($teacherList as $key=>$teacher):?>
    <tr style="border-top: 10px solid #1ABC9C;">
      <th >Teacher</th>
      <th><?= $teacher['fname']?></td>
      <th><?= $teacher['lname']?></td>
      <th><?= $teacher['email']?></td>
      <th><?= $teacher['profession']?></td>
    </tr>
  </thead>
  <tbody>

    <?php foreach($userList as $key=>$user):?>
        <?php if($teacher['profession'] == $user['study']):?>
            <?php$key=0?>
        <tr>
            <th>Student</th>
            <td><?= $user['fname']?></td>
            <td><?= $user['lname']?></td>
            <td><?= $user['email']?></td>
            <td><?= $user['age']?></td>
            
        </tr>
        <?php endif;?>
    <?php endforeach;?>
<?php endforeach;?>
    
  </tbody>
</table>
</section>
</body>