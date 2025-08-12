<?php

class database
{
    public $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "university_project";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            // echo "Connected successfully"; // Only for debugging
        }

        return $conn;
    }
}


class course extends database
{
    public function course()
    {
        try {
            // Use already connected $this->conn
            $conn = $this->conn;

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn_submit'])) {
                $course_name   = trim($_POST['course_name']);
                $course_code   = trim($_POST['course_code']);
                $course_type   = trim($_POST['course_type']);
                $credit_hours  = (int) $_POST['credit_hours'];

                if (empty($course_name) || empty($course_code) || empty($course_type) || $credit_hours <= 0) {
                    echo "<div class='alert alert-danger'>Please fill in all fields correctly.</div>";
                    return;
                }

                $query = "INSERT INTO course (course_name, course_code, course_type, credit_hours) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("sssi", $course_name, $course_code, $course_type, $credit_hours);
                $stmt->execute();

                echo "<script>alert('Course added successfully!');</script>";

                $stmt->close();
            }

        } catch (mysqli_sql_exception $e) {
            error_log("Course Insert Error: " . $e->getMessage());
            echo "<div class='alert alert-danger'>Something went wrong. Please try again later.</div>";
        }
    }
}

class showcourse extends database
{
    public function displayCourses()
    {
        $conn = $this->conn;

        $query = "SELECT * FROM course";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
            echo "<table class='table'>";
            echo "<tr><th>Course id</th><th>Course Name</th><th>Course Code</th><th>Course Type</th><th>Credit Hours</th><th>Active</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['course_id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['course_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['course_code']) . "</td>";
                echo "<td>" . htmlspecialchars($row['course_type']) . "</td>";
                echo "<td>" . htmlspecialchars($row['credit_hours']) . "</td>";
                echo "<td><a href='edit.php?id=" . htmlspecialchars($row['course_id']) . "' class='btn btn-primary btn-sm'>Edit</a>--<a href='delete.php?id=" . htmlspecialchars($row['course_id']) . "' class='btn btn-danger btn-sm'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No courses found.";
        }
    }
}


class edit_course extends database
{
    public function editCourse($course_id)
    {
        $conn = $this->conn;

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn_update'])) {
            $course_name   = trim($_POST['course_name']);
            $course_code   = trim($_POST['course_code']);
            $course_type   = trim($_POST['course_type']);
            $credit_hours  = (int) $_POST['credit_hours'];

            if (empty($course_name) || empty($course_code) || empty($course_type) || $credit_hours <= 0) {
                echo "<div class='alert alert-danger'>Please fill in all fields correctly.</div>";
                return;
            }

            $query = "UPDATE course SET course_name=?, course_code=?, course_type=?, credit_hours=? WHERE course_id=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("sssii", $course_name, $course_code, $course_type, $credit_hours, $course_id);
            $stmt->execute();
            $stmt->close();
            header("Location: show.php");
            // echo "<script>alert('Course updated successfully!');</script>";
            exit();
        }
        $stmt = $conn->prepare("SELECT * FROM course WHERE course_id = ?");
        $stmt->bind_param("i", $course_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        $stmt->close();

        return $data;
    }
}

class delete_course extends database
{
    public function deleteCourse($course_id)
    {
        $conn = $this->conn;

        // Ab GET request bhi allow hai
        if (!empty($course_id)) {
            $query = "DELETE FROM course WHERE course_id=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("i", $course_id);
            $stmt->execute();
            $stmt->close();

            // Redirect after delete
            header("Location: show.php");
            exit();
        } else {
            echo "Invalid course ID.";
        }
    }
}

?>
