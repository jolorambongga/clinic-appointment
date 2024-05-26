<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Services</title>
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
            <a href="editDoctors.php" class="sidebar-link">
              <i class="fas fa-user-md"></i>
              <span>Edit Doctors</span>
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
  <div class="main p-3">
    <div class="text-center">
      <h1>
        <!-- Sidebar Bootstrap 5 -->
      </h1>
    </div>
    <!-- add modal -->
    <div class="modal fade" id="modAdd" tabindex="-1" aria-labelledby="modAddLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modAddLabel">Add New</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="modAddBody">
            <form id="frmAddService">
              <label for="procedureName" class="form-label">Procedure Name</label>
              <input type="text" id="procedureName" name="procedureName" class="form-control">
              <pre></pre>
              <label for="procedurePrice" class="form-label">Procedure Price</label>
              <input type="text" id="procedurePrice" name="procedurePrice" class="form-control">
              <pre></pre>
              <label for="doctorName" class="form-label">Doctor</label>
              <!-- doctors dropdwon -->
              <div class="btn-group w-100">
                <button id="selectedDoctor" type="button" class="btn btn-primary dropdown-toggle text-start"data-bs-toggle="dropdown" aria-expanded="false">Select Doctor</button>
                <ul id="addDoctorMenu" class="dropdown-menu w-100">
                  <!-- get doctors through load doctors -->
                </ul>
              </div>
              <!-- end dropdown -->
              <pre></pre>
            </form>
          </div>
          <div class="modal-footer">
            <button id="modCancel" type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            <button id="modSubmit" type="submit" class="btn btn-success">Add</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal -->
    <!-- edit modal -->
    <div class="modal fade" id="modEdit" tabindex="-1" aria-labelledby="modEditLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modEditLabel">Edit Procedure</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="modEditBody">
            <form id="frmEditService">
              <label for="eProcedureName" class="form-label">Procedure Name</label>
              <input type="text" id="eProcedureName" name="procedureName" class="form-control">
              <pre></pre>
              <label for="eProcedurePrice" class="form-label">Procedure Price</label>
              <input type="text" id="eProcedurePrice" name="procedurePrice" class="form-control">
              <pre></pre>
              <label for="eDoctorName" class="form-label">Doctor</label>
              <!-- doctors dropdwon -->
              <div class="btn-group w-100">
                <button id="eSelectedDoctor" type="button" class="btn btn-primary dropdown-toggle text-start"data-bs-toggle="dropdown" aria-expanded="false">Select Doctor</button>
                <ul id="eDoctorMenu" class="dropdown-menu w-100">
                  <!-- get doctors through load doctors -->
                </ul>
              </div>
              <!-- end dropdown -->
              <pre></pre>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal -->
    <!-- table -->
    <div class="container">
      <div class="table-container">
        <h1 class="table-title">Edit Services</h1>
        <button class="btn btn-primary mt-3 mb-3 float-end" type="submit" name="submit" data-bs-toggle="modal"
        data-bs-target="#modAdd">Add New Service</button>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Procedure Name</th>
              <th scope="col">Procedure Price</th>
              <th scope="col">Doctor</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody id="tbodyServices">
            <!-- tbody services -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function () {
      // LOAD
    loadServices();
    function loadServices() {
      $.ajax({
        type: 'GET',
        url: 'handles/readServices.php',
        dataType: 'json',
        success: function (response) {
          console.log(response);
          response.forEach(function (services) {
            const rowServices = `
            <tr>
            <th scope="row">${services.procedureId}</th>
            <td>${services.procedureName}</td>
            <td>${services.procedurePrice}</td>
            <td>${services.doctorName}</td>
            <td>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start text-center">
            <button id='btnEdit' type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#modEdit' data-service-id='${services.procedureId}'>${services.procedureName}</button>
            <button id='btnDel' type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#modDel' data-service-id='${services.procedureId}'>${services.procedureName}</button>
            </div>
            </td>
            </tr>`;
            $('#tbodyServices').append(rowServices);
          });
        },
        error: function (error) {
          console.log("ERROR: ", error);
        }
      })
    }

    function addLoadDoctors() {
      $.ajax({
        type: 'GET',
        url: 'handles/loadDoctors.php',
        dataType: 'json',
        success: function (response) {
            // console.log(response);
          response.forEach(function (doctors) {
            const items = `
            <li id="doctorId" name="doctorId" class="dropdown-item" style="cursor: pointer;" data-doctor-id="${doctors.doctorId}">${doctors.doctorName}</li>`;
            $('#addDoctorMenu').append(items);
            $('#addDoctorMenu li').click(function () {
              $('#addDoctorMenu li').removeClass('selected');
              $(this).addClass('selected');
              const selectedDoctor = $(this).text();
              $('#selectedDoctor').text(selectedDoctor);
            });
          });
        },
        error: function (error) {
          console.log("ERROR: ", error);
          resetAddService();
        }
      });
    }

    addLoadDoctors();

    function editLoadDoctors() {
      $.ajax({
        type: 'GET',
        url: 'handles/loadDoctors.php',
        dataType: 'json',
        success: function(response) {
          response.forEach(function (doctors) {
            const items = `
            <li id="eDoctorId" name="eDoctorId" class="dropdown-item" style="cursor: pointer;" data-eDoctor-id="${doctors.doctorId}">${doctors.doctorName}</li>`;
            $('#eDoctorMenu').append(items);
            $('#eDoctorMenu li').click(function () {
              $('#eDoctorMenu li').removeClass('selected');
              $(this).addClass('selected');
              const selectedDoctor = $(this).text();
              $('#eSelectedDoctor').text(selectedDoctor);
            });
          });
        },
        error: function(error) {
          console.log("ERROR:", error);
        }
      });
    }

    editLoadDoctors();

      // CREATE

    $(document).on('click', '#modSubmit', function () {
      var procedureName = $('#procedureName').val();
      var procedurePrice = $('#procedurePrice').val();
      var doctorId = $('#addDoctorMenu li.selected').data('doctor-id');

      var serviceData = {
        procedureName: procedureName,
        procedurePrice: procedurePrice,
        doctorId: doctorId
      };
      console.log(serviceData);
      $.ajax({
        type: 'POST',
        url: 'handles/addService.php',
        data: serviceData,
        dataType: 'json',
        success: function (response) {
          console.log(response);
          closeModal();
          $('#tbodyServices').empty();
          loadServices();
        },
        error: function (error) {
          console.log("ERROR:", error);
        }
      });
    });

      // GET

    $(document).on('click', '#btnEdit', function(){
      var serviceId = $(this).data('service-id');
      $.ajax({
        type: 'GET',
        url: 'handles/getService.php',
        data: {procedureId: serviceId},
        dataType: 'json',
        success: function(response){
          console.log(response);
          if (response.status === "NA-GET ANG getService" && response.data.length > 0) {
            var procedure = response.data[0];
            var procedureId = procedure.procedureId;
            var procedureName = procedure.procedureName;
            var procedurePrice = procedure.procedurePrice;
            var doctorId = procedure.doctorId;

            console.log('Procedure ID:', procedureId);
            console.log('Name:', procedureName);
            console.log('Price:', procedurePrice);
            console.log('Doctor:', doctorId);

            $('#eProcedureName').val(procedureName);
            $('#eProcedurePrice').val(procedurePrice);
            $.ajax({
              type: 'GET',
              url: 'handles/loadDoctors.php',
              dataType: 'json',
              success: function(doctorsResponse) {
                $('#eDoctorMenu').empty();
                doctorsResponse.forEach(function(doctor) {
                  var isSelected = (doctor.doctorId === doctorId) ? 'selected' : '';
                  var doctorItem = `<li id="eDoctorId" name="eDoctorId" class="dropdown-item ${isSelected}" style="cursor: pointer;" data-doctor-id="${doctor.doctorId}">${doctor.doctorName}</li>`;
                  $('#eDoctorMenu').append(doctorItem);
                });

                var selectedDoctor = doctorsResponse.find(function(doc) {
                  return doc.doctorId === doctorId;
                });
                if (selectedDoctor) {
                  $('#eSelectedDoctor').text(selectedDoctor.doctorName);
                }

                $('#eDoctorMenu li').click(function() {
                  $('#eDoctorMenu li').removeClass('selected');
                  $(this).addClass('selected');
                  const selectedDoctorName = $(this).text();
                  $('#eSelectedDoctor').text(selectedDoctorName);
                });
              },
              error: function(error) {
                console.log("ERROR:", error);
              }
            });

          } else {
            console.log('No data found for the specified procedure ID or invalid status.');
          }
        },
        error: function(error) {
          console.log("ERROR:", error);
        }
      });
    });

    // EDIT

    $('#frmEditService').submit(function (e) {
      e.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        url: 'handles/updateService.php',
        method: 'POST',
        data: formData,
        success: function (response) {
          console.log(response);
          loadServices();
          closeModal();
        }, error: function (error) {
          console.log("ERROR: ", error);
        }
      });
    });

    function closeModal() {
      $('#modAdd .btn-close').click();
      $('#modEdit .btn-close').click();
      resetModal();
    }

    function resetModal() {
      clearFormInputs();
    }

    function clearFormInputs() {
      $('#procedureName').val('');
      $('#procedurePrice').val('');
      $('#selectedDoctor').text('Select Doctor');

      $('#eProcedureName').val('');
      $('#eProcedurePrice').val('');
      $('#eSelectedDoctor').text('Select Doctor');
    }

    $(document).on('click', '#modCancel', function () {
      resetModal();
    });

    $('#modAdd').on('hidden.bs.modal', function () {
      resetModal();
    });
  });
</script>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="custom.js"></script>
</body>

</html>