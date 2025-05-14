<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Custom Admin Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->

</head>
<body>

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar" class="bg-dark text-white p-3 vh-100">
  <a href="admin.php" class="text-white text-decoration-none"><h4>Dashboard</h4></a>
  <ul class="nav flex-column mt-4">
    
    <li class="nav-item sidebar-dropdown">
      <a href="#" class="nav-link text-white">Course</a>
      <ul class="dropdown-items list-unstyled ps-3">
        <li><a href="course.php" class="nav-link text-white small">Add Course</a></li>
        <li><a href="show.php" class="nav-link text-white small">Show Course</a></li>
      </ul>
    </li>

    <li class="nav-item mt-2">
      <a class="nav-link text-white" href="#">Department</a>
    </li>

  </ul>
</div>

    <!-- Page Content -->
    <div id="content" class="flex-grow-1">
      <nav class="navbar navbar-rgb(34 34 34) bg-rgb(34 34 34)">
        <button id="toggleSidebar" class="btn btn-primary">Toggle Sidebar</button>
      </nav>
      <div class="container-fluid mt-3">
        <!-- <h1>Welcome to Admin</h1> -->
        <!-- <p>This is your main content area.</p> -->
      </div>