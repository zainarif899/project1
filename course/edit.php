<?php include_once('../layout_dashboard/header.php'); ?>
<?php include_once('../function/function.php'); ?>
<?php 

$course = new edit_course();
$row = $course->editCourse($_GET['id']); 

?>

<div class="container mt-5">
    <h2 class="mb-4">Edit Course</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="course_name" class="form-label">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php echo htmlspecialchars($row['course_name']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="course_code" class="form-label">Course Code</label>
            <input type="text" class="form-control" id="course_code" name="course_code" value="<?php echo htmlspecialchars($row['course_code']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="course_type" class="form-label">Course Type</label>
            <select class="form-select" id="course_type" name="course_type"  required>
                <option value="">Select Type</option>
                <option value="Core" <?php echo $row['course_type'] === 'Core' ? 'selected' : ''; ?>>Core</option>
                <option value="Elective" <?php echo $row['course_type'] === 'Elective' ? 'selected' : ''; ?>>Elective</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="credit_hours" class="form-label">Credit Hours</label>
            <input type="number" class="form-control" id="credit_hours" name="credit_hours" min="1" max="6" value="<?php echo htmlspecialchars($row['credit_hours']); ?>" required>
        </div>

        <button type="submit" name="btn_update" class="btn btn-primary">Update Course</button>
    </form>
</div>


<?php include_once('../layout_dashboard/footer.php'); ?>