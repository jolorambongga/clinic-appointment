<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="custom.css">

</head>

<body>
  <!-- whole content -->
  <div class="wrapper">
    <!-- sidebar -->
    <aside id="sidebar">
      <div class="d-flex">
        <button class="toggle-btn" type="button">
          <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
          <a href="#">Admin</a>
        </div>
      </div>
      <ul class="sidebar-nav">
        <li class="sidebar-item">
          <a href="adminDashboard.php" class="sidebar-link">
            <i class="fas fa-chart-line"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="adminProfile.php" class="sidebar-link">
            <i class="fas fa-user"></i>
            <span>Profile</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth"
            aria-expanded="false" aria-controls="auth">
            <i class="lni lni-protection"></i>
            <span>Manage</span>
          </a>
          <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
              <a href="viewAppointments.php" class="sidebar-link">
                <i class="far fa-calendar-alt"></i>
                <span>View Appointments</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="viewUsers.php" class="sidebar-link">
                <i class="fas fa-users"></i>
                <span>View Users</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="editAdmins.php" class="sidebar-link sidebar-link-active">
                <i class="fas fa-user-cog"></i>
                <span>Edit Admins</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="editServices.php" class="sidebar-link">
                <i class="fas fa-cogs"></i>
                <span>Edit Services</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="sidebar-item">
          <a href="adminLogs.php" class="sidebar-link">
            <i class="fas fa-history"></i>
            <span>Logs</span>
          </a>
        </li>
      </ul>
      <div class="sidebar-footer">
        <a href="#" class="sidebar-link">
          <i class="lni lni-exit"></i>
          <span>Logout</span>
        </a>
      </div>
    </aside>
    <!-- main content -->
    <div class="main p-3">
      <div class="text-center">
        <h1>
          <!-- Sidebar Bootstrap 5 -->
        </h1>
      </div>
      <!-- table -->
      <div class="container">
        <div class="table-container">
          <h1 class="table-title">User's List</h1>
          <button class="btn btn-primary mt-3 mb-3 float-end" type="sbumit" name="submit">Add User</button>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Admins's Username</th>
                <th scope="col">Admins's Full Name</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Role</th>
                <th scope="col">Registered On</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>johndoe</td>
                <td>John A. Doe</td>
                <td>+63 966-123-4567</td>
                <td>Admin</td>
                <td>2024-05-15 23:39:07</td>
                <td>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start text-center">
                    <button class="btn btn-success" type="button">Edit</button>
                    <button class="btn btn-danger" type="button">Delete</button>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>johndoe</td>
                <td>John A. Doe</td>
                <td>+63 966-123-4567</td>
                <td>Junior Admin</td>
                <td>2024-05-15 23:39:07</td>
                <td>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start text-center">
                    <button class="btn btn-success" type="button">Edit</button>
                    <button class="btn btn-danger" type="button">Delete</button>
                  </div>
                </td>
              </tr>
              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="custom.js"></script>

</body>

</html>