 
  document.addEventListener("DOMContentLoaded", function () {
    const searchForm = document.getElementById("searchForm");
    const searchInput = document.getElementById("searchInput");
    const searchButton = document.getElementById("searchButton");
    const bookItems = document.querySelectorAll(".totalU");

    // Function to filter book items based on search input
    function filterBooks() {
      const searchText = searchInput.value.toLowerCase();
      bookItems.forEach((item) => {
        const title = item.querySelector("h6.text-start").textContent.toLowerCase();
        if (title.includes(searchText)) {
          item.style.display = "block"; // Show matching items
        } else {
          item.style.display = "none"; // Hide non-matching items
        }
      });
    }

    // Add an event listener to the search button
    searchButton.addEventListener("click", function (e) {
      e.preventDefault();
      filterBooks();
    });

    // Add an event listener to the search input for real-time filtering
    searchInput.addEventListener("input", filterBooks);
  });

  document.addEventListener("DOMContentLoaded", function () {
  const homeButton = document.getElementById("homeButton");

  // Add the 'active' class to the button
  if (homeButton) {
    homeButton.classList.add("active");
  }
});
// Get the canvas element
var ctx = document.getElementById("myPieChart").getContext('2d');

// Data for the pie chart
var data = {
    labels: ["Label 1", "Label 2", "Label 3", "Label 4", "Label 5" ],
    datasets: [{
        data: [10, 20, 10, 20, 40], // Adjust the values as needed
        backgroundColor: ["#dc3545","#fd7e14","#ffc107", "#0d6efd", "#198754"], // Colors for the sections
    }]
};

// Create the pie chart
var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: data,
    options: {
        responsive: true,
    }
});

