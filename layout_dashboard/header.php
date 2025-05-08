<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Custom Admin Sidebar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body>

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar" class="bg-dark text-white p-3">
      <h4>Dashboard</h4>
      <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link text-white" href="#">Course</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="course.php">Department</a></li>
      </ul>
    </div>

    <!-- Page Content -->
    <div id="content" class="flex-grow-1">
      <nav class="navbar navbar-rgb(34 34 34) bg-rgb(34 34 34)">
        <button id="toggleSidebar" class="btn btn-primary">Toggle Sidebar</button>
      </nav>
      <div class="container-fluid mt-3">
        <h1>Welcome to Admin</h1>
        <!-- <p>This is your main content area.</p> -->
      </div>