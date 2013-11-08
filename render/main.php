<?php 
if($_GET['f'] != '')
$file=$_GET['f'];
else
$file = '';
?>
<?php include 'header.php';?>
<?php include $file.'.php';?>
    <!-- footer -->
    <?php include 'footer.php';?>
    <!-- / footer -->