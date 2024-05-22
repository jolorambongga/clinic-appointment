<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edict Doctors</title>
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
              <a href="editDoctors.php" class="sidebar-link sidebar-link-active">
                <i class="fas fa-user-md"></i>
                <span>Edit Doctors</span>
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
      <!-- table container -->
      <div class="container">
        <div class="table-container">
          <h1 class="table-title">Doctor's List</h1>
          <button type="button" class="btn btn-primary mt-3 mb-3 float-end" data-bs-toggle="modal"
            data-bs-target="#modAddDoctor">Add Doctor</button>
          <!-- modal add doctor -->
          <div class="modal fade" id="modAddDoctor" tabindex="-1" aria-labelledby="modAddDoctorLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="modAddDoctorLabel">Add New Doctor</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="addDoctor">
                    <label for="doctorName" class="form-label">Doctor's Name</label>
                    <input type="text" id="doctorName" name="doctorName" class="form-control">
                    <pre></pre>
                    <label for="doctorContact" class="form-label">Contact Number</label>
                    <input type="text" id="doctorContact" name="doctorContact" class="form-control">
                    <pre></pre>
                    <label for="doctorEmail" class="form-label">E-mail Address</label>
                    <input type="text" id="doctorEmail" name="doctorEmail" class="form-control">
                    <pre></pre>
                    <label for="doctorAddress" class="form-label">Address</label>
                    <input type="text" id="doctorAddress" name="doctorAddress" class="form-control">
                    <pre></pre>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" id="addCancelbtn" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" id="addSaveBtn" class="btn btn-success">Add</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal add doctor -->
          <!-- start table -->
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Doctoctor's Name</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Email Address</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody id="doctorsTableBody">
              <!-- Add more rows as needed -->
            </tbody>
          </table>
          <!-- end table -->
        </div>
      </div>
      <!-- end table container -->
      <!-- modal -->
      <form id="frmEditDoctor">
        <div class="modal fade" id="modEditDoctor" tabindex="-1" aria-labelledby="modEditDoctorLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="modEditDoctorLabel">Edit Doctor's Info</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div id="getDoctor">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" id="editCancelBtn" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="button" id="editSaveBtn" class="btn btn-success">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </form>
      <!-- end modal -->
    </div>
  </div>
  <!-- end wrapper -->

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function () {
      loadDoctors();
      function loadDoctors() {
        $.ajax({
          type: 'GET',
          url: 'handles/readDoctors.php',
          dataType: 'html',
          success: function (response) {
            $('#doctorsTableBody').html(response);
            console.log(response);
          },
          error: function (error) {
            console.log("ERROR: ", error);
          }
        });
      }

      $(document).on('click', '#btnEdit', function () {
        var doctorId = $(this).data('doctor-id');
        $.ajax({
          type: 'GET',
          url: 'handles/getDoctor.php',
          data: { doctorId: doctorId },
          dataType: 'html',
          success: function (response) {
            $('#getDoctor').html(response);
            console.log(response);
          },
          error: function (error) {
            console.log("ERROR: ", error);
          }
        });
      });

      $(document).on('click', '#addSaveBtn', function () {
        var doctorName = $('#doctorName').val();
        var doctorContact = $('#doctorContact').val();
        var doctorEmail = $('#doctorEmail').val();
        var doctorAddress = $('#doctorAddress').val();

        var doctorData = {
          doctorName: doctorName,
          doctorContact: doctorContact,
          doctorEmail: doctorEmail,
          doctorAddress: doctorAddress
        };
        $.ajax({
          type: 'POST',
          url: 'handles/addDoctor.php',
          data: doctorData,
          dataType: 'json',
          success: function (response) {
            console.log(response);
            loadDoctors();
          },
          error: function (error) {
            console.log("ERROR: ", error);
          }
        });
      });

    });
  </script>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="custom.js"></script>

</body>

</html>