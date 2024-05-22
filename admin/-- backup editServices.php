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
              <a href="editAdmins.php" class="sidebar-link">
                <i class="fas fa-user-cog"></i>
                <span>Edit Admins</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="editServices.php" class="sidebar-link sidebar-link-active">
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
    <main class="main p-3">
      <!-- table -->
      <div class="container">
        <div class="table-container">
          <h1 class="table-title">Edit Services</h1>
          <button class="btn btn-primary mb-3 float-end" type="button" data-bs-toggle="modal"
            data-bs-target="#modalAddService">Add New Service</button>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Procedure</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody id="servicesTableBody">
              <!-- Rows will be added here by jQuery -->
            </tbody>
          </table>
        </div>
      </div>
      <!-- modal for add new service-->
      <div class="modal fade" id="modalAddService" tabindex="-1" aria-labelledby="modalAddServiceLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modalAddServiceLabel">Add New Service</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="inputServiceName" class="form-label">Service Name</label>
                <input type="text" class="form-control" id="inputServiceName" placeholder="Enter service name">
                <pre></pre>
                <label for="inputServicePrice" class="form-label">Service Price</label>
                <input type="text" class="form-control" id="inputServicePrice" placeholder="Enter service price">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-success">Save</button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal for edit -->
      <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="modalEditLabel">Edit Service</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="editServiceName" class="form-label">Service Name</label>
                <input type="text" id="editServiceName" name="editServiceName" class="form-control"
                  placeholder="Enter service name">
                <pre></pre>
                <label for="editServicePrice" class="form-label">Service Price</label>
                <input type="text" id="editServicePrice" name="editServicePrice" class="form-control"
                  placeholder="Enter service price">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
              <button type="button" id="btnUpdate" class="btn btn-success">Update</button>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>

  <!-- jQuery and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- load procedures -->
  <script>
 $(document).ready(function () {

// Function to fetch data and update table
function updateServicesTable() {
    $.ajax({
        url: 'handles/readServices.php',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            var servicesTableBody = $('#servicesTableBody');
            servicesTableBody.empty();
            if (data.length > 0) {
                console.log(data);
                $.each(data, function (index, service) {
                    var row = `<tr>
                                 <th scope="row">${service.procedureId}</th>
                                 <td>${service.procedureName}</td>
                                 <td>₱ ${service.procedurePrice}</td>
                                 <td>
                                   <div class="d-grid gap-2 d-md-flex justify-content-md-start text-center">
                                     <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalEdit" data-procedure-id="${service.procedureId}">Edit</button>
                                      
                                   </div>
                                 </td>
                               </tr>`;
                    servicesTableBody.append(row);
                });
            } else {
                servicesTableBody.append('<tr><td colspan="4">No services found</td></tr>');
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('Error:', textStatus, errorThrown);
        }
    });
}

// Call the function initially
updateServicesTable();

// Update table every 5 seconds (adjust interval as needed)

});

  </script>
  <!-- update existing procedures -->
  <script>
    $(document).ready(function () {

      $('#btnUpdate').click(function () {
        // Get the procedure ID, name, and price
        var procedureId = $('#modalEdit').data('procedure-id');
        var procedureName = $('#editServiceName').val();
        var procedurePrice = $('#editServicePrice').val();

        // Create an object to hold the data
        var updateData = {
          procedureId: procedureId,
          procedureName: procedureName,
          procedurePrice: procedurePrice
        };

        // Send AJAX request
        $.ajax({
          type: 'POST',
          url: 'handles/updateServices.php',
          data: updateData,
          dataType: 'json',
          success: function (response) {
            console.log(response);
            console.log(updateData);
            // Handle success response
          },
          error: function (error) {
            console.log("Error: ", error);
            // Handle error
            console.log(updateData);
          }
        });
      });
    });
  </script>

<script>
$(document).ready(function() {
    // Edit button click handler
    $('button.btn-success').click(function() {
        var procedureId = $(this).data('procedure-id');
        // Now you have the procedure ID, you can use it for further actions
        console.log("Edit Procedure ID:", procedureId);
        // Further actions (e.g., opening a modal with the selected procedure data)
    });

    // Delete button click handler
    $('button.btn-danger').click(function() {
        var procedureId = $(this).data('procedure-id');
        // Now you have the procedure ID, you can use it for further actions
        console.log("Delete Procedure ID:", procedureId);
        // Further actions (e.g., confirming deletion and sending AJAX request)
    });
});
</script>
</body>

</html>