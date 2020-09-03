<div style="background-color: #1ABC9C;">
  

<?php 
  $userList = getUsersList($conn);
?>
<a href="index.php?page=addUser" class="btn btn-success" style="margin-left: 47%;" >Add User</a>
<section id="usersTable">
<table class="table table-dark" style="margin-bottom: 0px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Mail</th>
      <th scope="col">B Day</th>
      <th scope="col">Study</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($userList as $key=>$user):?>
    <tr>
      <th ><?= $key+1;?></th>
      <td><?= $user['fname']?></td>
      <td><?= $user['lname']?></td>
      <td><?= $user['age']?></td>
      <td><?= $user['gender']?></td>
      <td><?= $user['email']?></td>
      <td><?= $user['b_day']?></td>
      <td><?= $user['study']?></td>
      <td>
        <a href="index.php?page=editUser&id=<?=$user['id']?>" class="btn btn-info">Edit</a>
        <a href="index.php?page=deleteUser&id=<?=$user['id']?>#usersTable" class="btn btn-warning">Remove</a>
      </td>
    </tr>
<?php endforeach;?>
    
  </tbody>
</table>
</section>
    </div>