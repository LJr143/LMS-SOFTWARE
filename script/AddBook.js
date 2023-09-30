
    let ProfilePic = document.getElementById("Profile-Pic");
    let InputFile = document.getElementById("input-file");

    InputFile.onchange = function () {
    ProfilePic.src = URL.createObjectURL(InputFile.files[0]);
}
    var toggle = document.getElementById("toggle");
    var bgred = document.getElementById("bgred");

    toggle.onclick = function () {
    bgred.classList.toggle('active');
}
    // Get references to the photo and dropdown
    const clickablePhoto = document.getElementById('clickable-photo');
    const dropdown = document.querySelector('.dropdown');

    // Add a click event listener to the photo
    clickablePhoto.addEventListener('click', function () {
    // Toggle the dropdown's visibility
    if (dropdown.style.display === 'block') {
    dropdown.style.display = 'none';
} else {
    dropdown.style.display = 'block';
}
});

    // Close the dropdown if the user clicks outside of it
    window.addEventListener('click', function (event) {
    if (!clickablePhoto.contains(event.target) && !dropdown.contains(event.target)) {
    dropdown.style.display = 'none';
}
});