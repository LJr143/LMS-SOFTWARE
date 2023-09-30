
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

