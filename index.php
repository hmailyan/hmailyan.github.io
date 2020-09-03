<?php session_start();?>
<?php   include("db.php");?>
<?php   include("functions.php");?>
<?php   include("header.php");?>

<?php if(!empty($_POST) && isset($_POST['addUser'])):?>
    <?php addUser($conn,$_POST);?>
<?php endif?>
<?php if(!empty($_POST) && isset($_POST['login'])):?>
    <?php login($conn,$_POST) ;?>
        
<?php endif?>
<?php if(isset($_GET['page' ]) && $_GET['page'] == 'deleteUser'):?>
    <?php if(deleteUser($conn,$_GET['id'])){
        header("Location:index.php?page=users");
    }?>
<?php endif;?>
<?php if(!empty($_POST) && isset($_POST['addTeacher'])):?>
    <?php addTeacher($conn,$_POST);?>
<?php endif?>
<?php if(isset($_GET['page' ]) && $_GET['page'] == 'deleteTeacher'):?>
    <?php if(deleteTeacher($conn,$_GET['id'])){
        header("Location:index.php?page=teachers");
    }?>
    <?phpif(isset($_GET['exit'])){
    unset($_SESSION['admin']);
    exit;
}
?>
<?php endif;?>
<?php if(isset($_GET['page' ]) && $_GET['page'] == 'portfolio'){?>
    <?php  include('portfolio.php');?>
<?php }elseif(isset($_GET['page' ]) && $_GET['page'] == 'users'){?>
    <?php  include('./users/index.php');?> 
<?php }elseif(isset($_GET['page' ]) && $_GET['page'] == 'teachers'){?>
    <?php  include('./teachers/index.php');?> 
<?php }elseif(isset($_GET['page' ]) && $_GET['page'] == 'lessons'){?>
    <?php  include('lessons.php');?> 
<?php }elseif(isset($_GET['page' ]) && $_GET['page'] == 'about'){?>
    <?php  include('about.php');?> 
<?php }elseif(isset($_GET['page' ]) && $_GET['page'] == 'login'){?>
    <?php  include('login.php');?> 
<?php }elseif(isset($_GET['page' ]) && $_GET['page'] == 'logout'){?>
    <?php  include('logout.php');?> 
<?php }elseif(isset($_GET['page' ]) && $_GET['page'] == 'addUser'){?>
    <?php  include('./users/add.php');?>
<?php }elseif(isset($_GET['page' ]) && $_GET['page'] == 'addTeacher'){?>
    <?php  include('./teachers/add.php');?>
<?php }elseif(isset($_GET['page' ]) && $_GET['page'] == 'editUser'){?>
    <?php  include('./users/edit.php');?>
<?php }?>
<?php include("footer.php");?> 
