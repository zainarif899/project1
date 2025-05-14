<?php  include_once('../layout_dashboard/header.php'); ?> 

<h1>Show Course</h1>

<?php include_once('../function/function.php');
$display = new showcourse();
$display->displayCourses();
?>



<!-- <h1>Show Course</h1> -->


<?php include_once('../layout_dashboard/footer.php');?>