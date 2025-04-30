<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Custom Admin Sidebar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    #sidebar {
      width: 250px;
      height: 100vh;
      transition: all 0.3s;
    }
    .collapsed #sidebar {
      width: 0;
      overflow: hidden;
    }
    #content {
      transition: margin-left 0.3s;
      margin-left: 250px;
    }
    .collapsed #content {
      margin-left: 0;
    }
  </style>
</head>
<body>

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar" class="bg-dark text-white p-3">
      <h4>Sidebar</h4>
      <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link text-white" href="#">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Users</a></li>
      </ul>
    </div>

    <!-- Page Content -->
    <div id="content" class="flex-grow-1">
      <nav class="navbar navbar-light bg-light">
        <button id="toggleSidebar" class="btn btn-primary">Toggle Sidebar</button>
      </nav>
      <div class="container-fluid mt-3">
        <h1>Welcome to Admin</h1>
        <p>This is your main content area.</p>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('toggleSidebar').addEventListener('click', function () {
      document.body.classList.toggle('collapsed');
    });
  </script>

</body>
</html>
