<?php include_once('../function/function.php'); 

if (isset($_GET['id'])) {
    $course = new delete_course();
    $course->deleteCourse($_GET['id']);
} else {
    echo "No course ID provided.";
}
?>

