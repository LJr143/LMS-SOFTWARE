<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../../css/dataTables.bootstrap5.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <link rel="stylesheet" href="../../css/AdminDashboard.css" />
  <link rel="stylesheet" href="../../css/SA-StaffManagement.css" />
  <title>Admin Staff Management</title>
  <style>
.pagination-container {
  font-family: poppins, sans-serif;
  font-weight:400;
    margin-left: 25%;
    text-align: center;
}

.pagination a {
    position: relative;
    display: inline-block;
    color: #2c3e50;
    text-decoration: none;
    font-size: 15px;
    padding: 5px 10px 5px;
}

.pagination a:before {
    z-index: -1;
    position: absolute;
    height: 100%;
    width: 100%;
    content: "";
    top: 0;
    left: 0;
    background-color: #2c3e50;
    border-radius: 24px;
    transform: scale(0);
    transition: all 0.2s;
    padding: 5px 7px; 
}

.pagination a:hover,
.pagination-active {
    color: #fff;
}

.pagination a:hover:before,
.pagination-active:before {
    transform: scale(1);
}

.pagination-active {
    color: #fff;
}

.pagination-newer {
    margin-right: 10px;
}

.pagination-older {
    margin-left: 10px;
}

  </style>

</head>


<body>
  <!-- offcanvas -->
  <div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="sidebar" style="width: 220px;">
    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <!-- <div class="text-muted usep fw-bold text-uppercase px-3 py-2">
              University of Southeastern Philippines
            </div> -->
          </li>
          <li>
            <a href="#" class="nav-link px-3 text-white  mt-5">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard </span>
            </a>
          </li>
          </li>
          <li>
            <a href="#" class="nav-link px-3 text-white">
              <span class="me-2"><i class="bi bi-people"></i></span>
              <span>Staff</span>
            </a>
          </li>

          </li>
          <li>
            <a href="#" class="nav-link px-3 text-white">
              <span class="me-2"><i class="bi bi-chat-left"></i></span>
              <span>Feedback</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-3 text-white">
              <span class="me-2"><i class="bi bi-clipboard-data"></i></span>
              <span>Report</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>


  <!-- top navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark navbarTop fixed-top">
    <div class="container-fluid" id="upper">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon " data-bs-target="#sidebar"></span>
      </button>
      <img src="../../images/usep-logo.png" class="logo navbar-toggler-icon " style="width: 40px ;height:40px">
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase  fw-bold px-3" href="#" style="color: black">Library
        Mangement System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavBar">
        <form class="d-flex ms-auto my-3 my-lg-0">

        </form>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-fill text-dark " style="font-size: 24px;"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item custom-dropdown-item" href="#">My Profile</a></li>

              <li><button class="dropdown-item custom-dropdown-item" onclick="showLogoutConfirmation()">Log out</button>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- top navigation bar -->




  <main class="mt-5 pt-3">
    <div class="container-fluid MainContent">
      <div class="row rowStaff">
        <div class="col-md-6 col-xs-4 col-sm-7 col-xl-6">
          <div class="col-md-12">
            <h4>Staff Management</h4>
          </div>
        </div>
      </div>


      <div class="row rowButton">

        <div class="col-4 col-md-3 col-xl-3 col-xs-4 col-lg-4 col-sm-4 mt-4 ms-2">
          <div class="input-group searchBar col-sm-3">
            <!--SEARCH BAR-->
            <div class="input-group-text border-end-0 bg-transparent">
              <i class="bi bi-search"></i>
            </div>
            <input type="text" class="form-control border-start-0" id="searchInput" placeholder="  Search...">
          </div>
        </div>

        <!--CREATE ADMIN/STAFF BUTTON-->
        <div class=" col-md-12 col-xs-5 col-sm-5 col-lg-11 col-xl-11 ">
          <div class="createButton col-lg-4 ">
            <button id="createAdminButton" class="btn btn-warning">CREATE ADMIN/STAFF</button>
          </div>
        </div>
      </div>



      <!--TABLE-->
      <div class="card-body overflow-auto" id="staffTable">
        <table id="staffDataTable" class="table px-4">
          <thead class="thead">
            <tr>
              <th scope="col" class="cell-padding1" style="font-size: 12px;" id="checkall">
                <input class="checkbox selectAllCheckbox" type="checkbox" id="selectAll">
                <!-- Display this small text when hovering -->
                <p class="hover-text">Select All</p>
              </th>
              <th scope="col" class="cell-padding1"></th>
              <th scope="col" class="cell-padding1">
                <div class="d-flex align-items-center"> Employee <img class="imgSort1" src="../../images/icons8-sort-50.png" id="employeeSort"></div>
              </th>
              <th scope="col" class="cell-padding1">
                <div class="d-flex align-items-center">Role<img class="imgSort2" src="../../images/icons8-sort-50.png" id="roleSort"></div>
              </th>
              <th scope="col" class="cell-padding1">
                <div class="d-flex align-items-center">Status<img class="imgSort3" src="../../images/icons8-sort-50.png" id="statusSort"></div>
              </th>
              <th scope="col" class="cell-padding2">Manage</th>
            </tr>
          </thead>
          <tbody>
            <br>
            <tr class="row1" id="row-spacing">
              <td class="cell-padding"><input type="checkbox" class="individualCheckbox" id="checkbox1"></td>
              <td class="cell-padding"><img class="imgProf" src="../../images/avatar.png" style="width: 30px; height: 30px;">
              </td>
              <td class="cell-padding">Joanna Doe</td>
              <td class="cell-padding">Staff</td>
              <td class="cell-padding">Full Time</td>
              <td class="cell-padding2">
                <div class="btn-group" role="group">
                  <a href="#" class="btn custom-btn"> <img class="imgmng" src="../../images/icons8-edit-50.png" alt="Image Button">
                  </a>
                  <img class="imgmngline" src="../../images/icons8-line-50.png">
                  <a href="#" class="btn custom-btn" id="deleteUserButton1"> <img class="imgmng" src="../../images/icons8-delete-50.png" alt="Image Button"> </a>
                  <img class="imgmngline" src="../../images/icons8-line-50.png">
                  <a href="#" class="btn custom-btn" id="suspendUserButton1"> <img class="imgmng" src="../../images/icons8-cancel-50.png" alt="Image Button"> </a>
                </div>
              </td>
            </tr>
            <tr class="row1" id="row-spacing">
              <td class="cell-padding"><input type="checkbox" class="individualCheckbox" id="checkbox1"></td>
              <td class="cell-padding"><img class="imgProf" src="../../images/avatar.png" style="width: 30px; height: 30px;">
              </td>
              <td class="cell-padding">Joanna Doe</td>
              <td class="cell-padding">Staff</td>
              <td class="cell-padding">Full Time</td>
              <td class="cell-padding2">
                <div class="btn-group" role="group">
                  <a href="#" class="btn custom-btn"> <img class="imgmng" src="../../images/icons8-edit-50.png" alt="Image Button">
                  </a>
                  <img class="imgmngline" src="../../images/icons8-line-50.png">
                  <a href="#" class="btn custom-btn" id="deleteUserButton2"> <img class="imgmng" src="../../images/icons8-delete-50.png" alt="Image Button"> </a>
                  <img class="imgmngline" src="../../images/icons8-line-50.png">
                  <a href="#" class="btn custom-btn" id="suspendUserButton2"> <img class="imgmng" src="../../images/icons8-cancel-50.png" alt="Image Button"> </a>
                </div>
              </td>
            </tr>
            <tr class="row1" id="row-spacing">
              <td class="cell-padding"><input type="checkbox" class="individualCheckbox" id="checkbox1"></td>
              <td class="cell-padding"><img class="imgProf" src="../../images/avatar.png" style="width: 30px; height: 30px;">
              </td>
              <td class="cell-padding">John Doe</td>
              <td class="cell-padding">Staff</td>
              <td class="cell-padding">Part Time</td>
              <td class="cell-padding2">
                <div class="btn-group" role="group">
                  <a href="#" class="btn custom-btn"> <img class="imgmng" src="../../images/icons8-edit-50.png" alt="Image Button">
                  </a>
                  <img class="imgmngline" src="../../images/icons8-line-50.png">
                  <a href="#" class="btn custom-btn" id="deleteUserButton3"> <img class="imgmng" src="../../images/icons8-delete-50.png" alt="Image Button"> </a>
                  <img class="imgmngline" src="../../images/icons8-line-50.png">
                  <a href="#" class="btn custom-btn" id="suspendUserButton3"> <img class="imgmng" src="../../images/icons8-cancel-50.png" alt="Image Button"> </a>
                </div>
              </td>
            </tr>
            <tr class="row1" id="row-spacing">
              <td class="cell-padding"><input type="checkbox" class="individualCheckbox" id="checkbox1"></td>
              <td class="cell-padding"><img class="imgProf" src="../../images/avatar.png" style="width: 30px; height: 30px;">
              </td>
              <td class="cell-padding">Elena Whiskey</td>
              <td class="cell-padding">Staff</td>
              <td class="cell-padding">Full Time</td>
              <td class="cell-padding2">
                <div class="btn-group" role="group">
                  <a href="#" class="btn custom-btn"> <img class="imgmng" src="../../images/icons8-edit-50.png" alt="Image Button">
                  </a>
                  <img class="imgmngline" src="../../images/icons8-line-50.png">
                  <a href="#" class="btn custom-btn" id="deleteUserButton4"> <img class="imgmng" src="../../images/icons8-delete-50.png" alt="Image Button"> </a>
                  <img class="imgmngline" src="../../images/icons8-line-50.png">
                  <a href="#" class="btn custom-btn" id="suspendUserButton4"> <img class="imgmng" src="../../images/icons8-cancel-50.png" alt="Image Button"> </a>
                </div>
              </td>
            </tr>
            <tr class="row1" id="row-spacing">
              <td class="cell-padding"><input type="checkbox" class="individualCheckbox" id="checkbox1"></td>
              <td class="cell-padding"><img class="imgProf" src="../../images/avatar.png" style="width: 30px; height: 30px;">
              </td>
              <td class="cell-padding">Albert Tessla</td>
              <td class="cell-padding">Staff</td>
              <td class="cell-padding">Full Time</td>
              <td class="cell-padding2">
                <div class="btn-group" role="group">
                  <a href="#" class="btn custom-btn"> <img class="imgmng" src="../../images/icons8-edit-50.png" alt="Image Button">
                  </a>
                  <img class="imgmngline" src="../../images/icons8-line-50.png">
                  <a href="#" class="btn custom-btn" id="deleteUserButton5"> <img class="imgmng" src="../../images/icons8-delete-50.png" alt="Image Button"> </a>
                  <img class="imgmngline" src="../../images/icons8-line-50.png">
                  <a href="#" class="btn custom-btn" id="suspendUserButton5"> <img class="imgmng" src="../../images/icons8-cancel-50.png" alt="Image Button"> </a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

        <!--BOTTOM BUTTONS DELETEALL/SUSPENDALL-->
      <div class="row rowButtonBottom  mt-3 mb-3">
        <div class="deleteButton col-sm-3 col-md-3 col-sm-4  col-xl-2 col-lg-3 ">
          <button id="deleteallAdminButton" class="btn px-4" style="border-radius: 29px; background-color: #711717; color: #f0f0f0;" disabled>DELETE ALL</button>
        </div>
        &nbsp;
        <div class="suspendButton col-6 col-md-3 col-sm-3 col-xl-3 col-lg-4">
          <button id="suspendallAdminButton" class="btn" style="border-radius: 29px; background-color: #711717; color: #f0f0f0; " disabled>SUSPEND ALL</button>
        </div>
      </div>



  </main>
  <script src="../../script/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="../../script/jquery-3.5.1.js"></script>
  <script src="../../script/jquery.dataTables.min.js"></script>
  <script src="../../script/dataTables.bootstrap5.min.js"></script>
  <script src="../../script/script.js"></script>
  <script src="../../script/SA-StaffManagement.js"></script>
  <script>
    $(document).ready(function() {
      // Initialize DataTables with search and sorting
      const table = $('#staffDataTable').DataTable({
        "paging": false, // Disable pagination for a simple table
        "searching": false, // Enable search functionality
        "ordering": true, // Enable sorting
        "bInfo": false, // Remove pagination text
        "order": []
      });

      // Function to toggle select all checkboxes
      $('#selectAll').on('change', function() {
        const checkboxes = $('.individualCheckbox');
        checkboxes.prop('checked', this.checked);
      });

      function customSearch() {
        const searchText = $('#searchInput').val().toLowerCase();

        // Loop through each row in the table body
        $('#staffDataTable tbody tr').each(function() {
          const rowData = $(this).text().toLowerCase();

          // Check if the row data contains the search text
          if (rowData.includes(searchText)) {
            $(this).show(); // Show the row if it matches the search
          } else {
            $(this).hide(); // Hide the row if it doesn't match
          }
        });
      }

      // Bind the customSearch function to the input field's keyup event
      $('#searchInput').keyup(customSearch);
    });
  </script>
  <script>
    // Wait for the DOM to be ready
    $(document).ready(function() {
      // Function to check if at least one checkbox is checked
      function isAnyCheckboxChecked() {
        return $('.individualCheckbox:checked').length > 0 || $('#selectAll').is(':checked');
      }

      // Disable the buttons initially
      $('#deleteallAdminButton, #suspendallAdminButton').prop('disabled', true);

      // When a checkbox is clicked
      $('.individualCheckbox, #selectAll').on('change', function() {
        // Enable or disable the buttons based on whether any checkbox is checked
        const enableButtons = isAnyCheckboxChecked();
        $('#deleteallAdminButton, #suspendallAdminButton').prop('disabled', !enableButtons);
      });

      // Handle the click event for the "DELETE ALL" button
      $('#deleteallAdminButton').on('click', function() {
        const selectedCount = $('.individualCheckbox:checked').length;

        // Display SweetAlert2 confirmation dialog
        Swal.fire({
          title: 'ARE YOU SURE?',
          text: `Do you really want to delete ${selectedCount} selected items?`,
          icon: null,
          iconHtml: '<div style="background-color: white; padding: 21px; "><img src="../../images/icons8-warning-100.png" style="width: 90px;"></div>',
          showCancelButton: true,
          cancelButtonText: 'CANCEL',
          cancelButtonColor: '#e3e6e9',
          confirmButtonColor: '#711717',
          confirmButtonText: 'DELETE',
          customClass: {
            popup: 'my-swal-popup',
            content: 'my-swal-content',
            title: 'my-swal-title',
            cancelButton: 'my-cancel-button',
            confirmButton: 'my-confirm-button'
          }
        }).then((result) => {
          // Check if the user confirmed the action
          if (result.isConfirmed) {
            // Add your delete logic here
            Swal.fire('Deleted!', 'Selected items have been deleted.', 'success');
          }
        });
      });

      // Handle the click event for the "SUSPEND ALL" button
      $('#suspendallAdminButton').on('click', function() {
        const selectedCount = $('.individualCheckbox:checked').length;

        // Display SweetAlert2 confirmation dialog
        Swal.fire({
          title: 'ARE YOU SURE?',
          text: `Do you really want to suspend ${selectedCount} selected items?`,
          icon: null,
          iconHtml: '<div style="background-color: white; padding: 30px; "><img src="../../images/icons8-warning-100.png" style="width: 90px;"></div>',
          showCancelButton: true,
          cancelButtonText: 'CANCEL',
          cancelButtonColor: '#e3e6e9',
          confirmButtonColor: '#711717',
          confirmButtonText: 'SUSPEND',
          customClass: {
            popup: 'my-swal-popup1',
            content: 'my-swal-content1',
            title: 'my-swal-title1',
            cancelButton: 'my-cancel-button1',
            confirmButton: 'my-confirm-button1'
          }
        }).then((result) => {
          // Check if the user confirmed the action
          if (result.isConfirmed) {
            // Add your suspend logic here
            Swal.fire('Suspended!', 'Selected items have been suspended.', 'success');
          }
        });
      });
    });
  </script>

</body>

</html>