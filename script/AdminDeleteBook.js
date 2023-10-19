document.addEventListener('DOMContentLoaded', function () {
  // Get the search input element
  const searchInput = document.getElementById('searchInput');

  // Check if the search input exists
  if (searchInput) {
    // Add an event listener to the search input
    searchInput.addEventListener('input', function () {
      const searchText = this.value.toLowerCase();
      const boxes = document.querySelectorAll('.box');

      boxes.forEach(function (box) {
        const title = box.querySelector('.bookTitle').textContent.toLowerCase();
        if (title.includes(searchText)) {
          box.style.display = 'inline-block'; // Display as inline-block if it matches the search
        } else {
          box.style.display = 'none';
        }
      });

      // Rearrange the displayed boxes based on visibility
      rearrangeBoxes();
    });
  }
});


function rearrangeBoxes() {
  const boxesContainer = document.querySelector('.container');
  const displayedBoxes = document.querySelectorAll('.box[style="display: inline-block;"]');

  const hiddenBoxes = document.querySelectorAll('.box[style="display: none;"]');

  displayedBoxes.forEach(function (box, index) {
    boxesContainer.insertBefore(box, hiddenBoxes[index] || null);
  });
}


// Get the "Select All" checkbox
const selectAllCheckbox = document.getElementById('selectAll');

// Get all the individual checkboxes
const checkboxes = document.querySelectorAll('.form-check-input');

// Add an event listener to the "Select All" checkbox
selectAllCheckbox.addEventListener('change', function () {
  checkboxes.forEach(function (checkbox) {
    checkbox.checked = selectAllCheckbox.checked;
  });
});

$(document).ready(function () {
  // Function to check if at least one checkbox is checked
  function isAnyCheckboxChecked() {
    return $('.form-check-input:checked').length > 0 || $('#selectAll').is(':checked');
  }

  // Disable the buttons initially
  $('#deleteallAdminButton, #clearallAdminButton').prop('disabled', true);

  // When a checkbox is clicked
  $('.form-check-input, #selectAll').on('change', function () {
    console.log('Checkbox clicked');
    // Enable or disable the buttons based on whether any checkbox is checked
    const enableButtons = isAnyCheckboxChecked();
    $('#deleteallAdminButton, #clearallAdminButton').prop('disabled', !enableButtons);
  });

  // Handle the click event for the "DELETE ALL" button
  $('#deleteallAdminButton').on('click', function () {
    console.log('Delete All button clicked');
    const selectedCount = $('.form-check-input:checked').length;

    // Display SweetAlert2 confirmation dialog
    Swal.fire({
      title: 'ARE YOU SURE?',
      text: `Do you really want to delete ${selectedCount} selected items?`,
      icon: null,
      iconHtml: '<div style="background-color: white; padding: 21px; "><img src="../images/icons8-warning-100.png" style="width: 90px;"></div>',
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

  // Handle the click event for the "CLEAR" button
  $('#clearallAdminButton').on('click', function () {
    // Uncheck all checkboxes
    $('.form-check-input:checked').prop('checked', false);

    // Clear the search input
    $('#searchInput').val('');

    // Reset the display of all boxes
    $('.box').css('display', 'block');

    // Disable the "DELETE" button after clearing
    $('#deleteallAdminButton').prop('disabled', true);
  });

});

document.getElementById('deleteUserButton5').addEventListener('click', function () {
  showDeleteConfirmation(1); // Pass a unique identifier
});

function showDeleteConfirmation(id) {
  Swal.fire({
      title: 'ARE YOU SURE?',
      text: 'Do you really want to delete this book? Process cannot be undone.',
      icon: null,
      iconHtml: '<div style="background-color: white; padding: 21px; "><img src="../images/icons8-warning-100.png" style="width: 90px;"></div>',
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

          Swal.fire('Deleted!', 'The book has been deleted.', 'success');
      }
  });
};