//sweetAlert delete
document.getElementById('deleteUserButton1').addEventListener('click', function () {
    showDeleteConfirmation(1); // Pass a unique identifier
});

document.getElementById('deleteUserButton2').addEventListener('click', function () {
    showDeleteConfirmation(1); // Pass a unique identifier
});

document.getElementById('deleteUserButton3').addEventListener('click', function () {
    showDeleteConfirmation(1); // Pass a unique identifier
});

document.getElementById('deleteUserButton4').addEventListener('click', function () {
    showDeleteConfirmation(1); // Pass a unique identifier
});

document.getElementById('deleteUserButton5').addEventListener('click', function () {
    showDeleteConfirmation(1); // Pass a unique identifier
});

function showDeleteConfirmation(id) {
    Swal.fire({
        title: 'ARE YOU SURE?',
        text: 'Do you really want to delete this Student? Process cannot be undone.',
        icon: null,
        iconHtml: '<div style="background-color: white; padding: 21px; "><img src="../../images/icons8-delete-50.png" style="width: 90px;"></div>',
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
        if (result.isConfirmed) {

            // If the user confirms, you can proceed with the deletion logic here

            Swal.fire('Deleted!', 'The account has been deleted.', 'success');
        }
    });
};



// Suspend staff 

document.getElementById('suspendUserButton1').addEventListener('click', function () {
    showSuspendConfirmation(1); // Pass a unique identifier
});

document.getElementById('suspendUserButton2').addEventListener('click', function () {
    showSuspendConfirmation(1); // Pass a unique identifier
});

document.getElementById('suspendUserButton3').addEventListener('click', function () {
    showSuspendConfirmation(1); // Pass a unique identifier
});


document.getElementById('suspendUserButton4').addEventListener('click', function () {
    showSuspendConfirmation(1); // Pass a unique identifier
});


document.getElementById('suspendUserButton5').addEventListener('click', function () {
    showSuspendConfirmation(1); // Pass a unique identifier
});

function showSuspendConfirmation(id) {
    Swal.fire({
        title: 'ARE YOU SURE YOU WANT TO SUSPEND THIS STUDENT?',
        text: 'Suspending a user disables the account without deleting the user profile and their related information. A user cannot sign in to a suspended account, and new information are blocked. The account can be restored at any time..',
        icon: null,
        iconHtml: '<div style="background-color: white; padding: 30px; "><img <img src="../../images/icons8-cancel-50.png" style="width: 90px;">',
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
        if (result.isConfirmed) {

            // If the user confirms, you can proceed with the deletion logic here

            Swal.fire('Suspended!', 'The account has been suspended.', 'success');
        }
    });
};



// Get the "Select All" checkbox element
const selectAllCheckbox = document.querySelector('.selectAllCheckbox');
const individualCheckboxes = document.querySelectorAll('.individualCheckbox');
selectAllCheckbox.addEventListener('click', function () {
   
    individualCheckboxes.forEach(function (checkbox) {
        checkbox.checked = selectAllCheckbox.checked;
    });
});


 // Get the filter dropdown and search input elements
 const filterDropdown = document.getElementById('filter');
        
 // Get the employee list
 const employeeList = document.getElementById('employeeList').getElementsByTagName('li');

 // Add an event listener to the search input
 searchInput.addEventListener('input', function () {
     const filter = filterDropdown.value.toLowerCase();

    // Iterate through the employee list and show/hide based on the filter and search term
     for (let i = 0; i < employeeList.length; i++) {
         const employee = employeeList[i];
         const name = employee.getAttribute('data-name').toLowerCase();
 const role = employee.getAttribute('data-role').toLowerCase();

 if ((filter === 'name' && name.includes(searchTerm)) || (filter === 'role' && role.includes(searchTerm))) {
     employee.style.display = 'block';
 } else {
     employee.style.display = 'none';
 }
}
});

$(document).ready(function () {
    // Cache the table rows for searching
    const tableRows = $('#staffTable tbody tr');
  
    $('#searchInput').on('input', function () {
      const searchValue = $(this).val().toLowerCase();
      
      // Loop through table rows to hide/show based on search
      tableRows.each(function () {
        const rowText = $(this).text().toLowerCase();
        if (rowText.includes(searchValue)) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    });
  });

 
  // Function to show the logout confirmation dialog
  function showLogoutConfirmation() {
      Swal.fire({
          title: 'Do you really want to log out?',
          
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: ' #fda700',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Log out',
          cancelButtonText: 'Cancel',
          showCloseButton: true,
          html: '<button id="logout-button" class="btn "></button>'
      }).then((result) => {
          if (result.isConfirmed) {
              // Perform logout action here
              // You can redirect the user to a logout page or trigger a logout API call
              Swal.fire('Logged Out!', 'You have been successfully logged out.', 'success');
          }
      });

      // Handle the click event of the custom "Log Out" button
      document.getElementById('logout-button').addEventListener('click', function() {
          // Perform the logout action here
          // You can redirect the user or trigger a logout API call
          Swal.close(); // Close the SweetAlert dialog
      });
  }

  ///sorting
  $(document).ready(function () {
    // Initialize DataTables for your table
    var table = $('#staffDataTable').DataTable();

    // Define the initial sorting column and order (e.g., sorting by the first column in ascending order)
    table.order([1, 'asc']).draw();

    // Click event handler for Employee sorting
    $('#employeeSort').click(function () {
        table.order([1, 'asc']).draw(); // Sort by the Employee column in ascending order
    });

    // Click event handler for Role sorting
    $('#roleSort').click(function () {
        table.order([2, 'asc']).draw(); // Sort by the Role column in ascending order
    });

    // Click event handler for Status sorting
    $('#statusSort').click(function () {
        table.order([3, 'asc']).draw(); // Sort by the Status column in ascending order
    });
});


// Add an event listener to the search input
const searchInput = document.getElementById('searchInput');
searchInput.addEventListener('input', handleSearch);

// Add click event listeners to filter items
const filterItems = document.querySelectorAll('.dropdown-item');
filterItems.forEach((item) => {
    item.addEventListener('click', function () {
        filterItems.forEach((fi) => fi.classList.remove('active-filter'));
        this.classList.add('active-filter');
        handleSearch();
    });
});

// Function to handle custom search
function customSearch() {
    const searchText = $('#searchInput').val().toLowerCase();
  
    // Loop through each row in the table body
    $('#staffDataTable tbody tr').each(function () {
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

