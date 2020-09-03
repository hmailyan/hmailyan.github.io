<div><a href="?exit">Exit</a></div>
<?php
if(isset($_GET['exit']))
{
    unset($_SESSION['admin']);
    exit;
}
?>
