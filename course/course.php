<?php include_once('../layout_dashboard/header.php'); ?>
<?php include_once('../function/function.php'); ?>
<?php 

$course = new course();
$course->course();

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $course_name = $_POST['course_name'];
//     $course_code = $_POST['course_code'];
//     $course_type = $_POST['course_type'];
//     $credit_hours = $_POST['credit_hours'];

//     $course = new course();
//     $course->addCourse($course_name, $course_code, $course_type, $credit_hours);
// }
?>

<div class="container mt-5">
    <h2 class="mb-4">Add New Course</h2>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="course_name" class="form-label">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" required>
        </div>

        <div class="mb-3">
            <label for="course_code" class="form-label">Course Code</label>
            <input type="text" class="form-control" id="course_code" name="course_code" required>
        </div>

        <div class="mb-3">
            <label for="course_type" class="form-label">Course Type</label>
            <select class="form-select" id="course_type" name="course_type" required>
                <option value="">Select Type</option>
                <option value="Core">Core</option>
                <option value="Elective">Elective</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="credit_hours" class="form-label">Credit Hours</label>
            <input type="number" class="form-control" id="credit_hours" name="credit_hours" min="1" max="6" required>
        </div>

        <button type="submit" name="btn_submit" class="btn btn-primary">Add Course</button>
    </form>
</div>


<?php include_once('../layout_dashboard/footer.php'); ?>