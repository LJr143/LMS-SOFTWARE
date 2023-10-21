
// <!--script for bar chart-->

  //bar chart
  var ctxD = document.getElementById("barChart").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'bar',
    data: {
      labels: ["First Quarter", "Second Quarter", "Third Quarter"],
      datasets: [{
        data: [145, 257, 379],
        backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C"],
        hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870"]
      }]
    },
    options: {
      responsive: true
    }
  });



  // modal for borrow book
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})





  // for confirmation borrow
  function showBorrowConfirmation() {
    // Sample hardcoded date (October 17, 2023)
    const today = new Date(2023, 9, 17);
    // Format date as MM/DD/YYYY
    const formattedBorrowDate = today.toLocaleDateString();
    // Update book returned date after confirming
    const returnedDate = new Date(today);
    returnedDate.setDate(today.getDate() + 14); // Assuming a 14-day borrowing period
    const formattedReturnedDate = returnedDate.toLocaleDateString();

    Swal.fire({
      title: 'Borrow Book Confirmation',
      html: `
        <p><strong>Are you sure you want to borrow this book?</strong></p>
        <p><strong>Borrowed Date:</strong> ${formattedBorrowDate}</p>
        <p><strong>Return Date:</strong> ${formattedReturnedDate}</p>
      `,
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#711717',
      cancelButtonColor: 'gray',
      confirmButtonText: 'Confirm',
      cancelButtonText: 'Cancel',
      iconHtml: '<i class="bi bi-check-circle" style="color: darkred;"></i>',
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: 'Book Borrowed!',
          html: `
            <p><strong>Borrowed Date:</strong> ${formattedBorrowDate}</p>
            <p><strong>Return Date:</strong> ${formattedReturnedDate}</p>
            <p>Penalties will be given once it is overdue, including a daily late fee of $X and a suspension of borrowing privileges until the book is returned.<br>Proceed to the Library for pickup</p>
          `,
          icon: 'success'
        });
      }
    });
  }






  // for confirmation reserve
  function showReserveConfirmation() {
    // Get today's date
    const today = new Date();
    // Add 7 days to get the reserve date
    const reserveDate = new Date(today);
    reserveDate.setDate(today.getDate() -3);
    // Format dates as MM/DD/YYYY
    const formattedReserveDate = reserveDate.toLocaleDateString();
    const formattedReturnDate = today.toLocaleDateString();

    Swal.fire({
      title: 'Reserve Book Confirmation',
      html: `
        <p><strong>Are you sure you want to reserve this book?</strong></p>
        <p>Reserved Date: <span style="color: #711717;">${formattedReserveDate}</span></p>
        <p>Return Date: <span style="color: #711717;">${formattedReturnDate}</span></p>
      `,
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#711717',
      cancelButtonColor: 'gray',
      confirmButtonText: 'Confirm',
      cancelButtonText: 'Cancel',
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: 'Book Reserved!',
          html: `
            <p><strong>Reserved Date:</strong> ${formattedReserveDate}</p>
            <p><strong>Return Date:</strong> ${formattedReturnDate}</p>
            <p> Penalties will be given once it is overdue, including a daily late fee of $X and a suspension of borrowing privileges until the book is returned.<br>Proceed to the Library for pickup</p>
          
          `,
          icon: 'success'
        });
      }
    });
  }



  
  function showFeedbackDialog() {
    const smileyData = [
      { icon: 'smile', stars: 5 },
      { icon: 'grin', stars: 4 },
      { icon: 'meh', stars: 3 },
      { icon: 'frown', stars: 2 },
      { icon: 'angry', stars: 1 },
    ];

    const smileyLabels = smileyData.map((data, index) => {
      const starsHTML = Array(data.stars).fill('<i class="fas fa-star star"></i>').join('');
      return `
        <label class="smiley-label" data-rating="${index + 1}">
          <input type="radio" name="rating" value="${index + 1}" style="display: none;">
          <div class="stars">${starsHTML}</div>
          <i class="far fa-${data.icon}">
            <div class="star-count">${data.stars}</div>
          </i>
        </label>
      `;
    }).join('');

    Swal.fire({
      title: '<span class="feedback-title">Feedback</span>',
      html: `
        <div class="form-group">
          <div class="rating">
            ${smileyLabels}
          </div>
        </div>
        <div class="form-group mt-5">
          <label for="comment">Comment:</label>
          <textarea class="form-control" id="comment" rows="4"></textarea>
        </div>
      `,
      showCancelButton: true,
            confirmButtonText: 'Submit',
            cancelButtonText: 'Cancel',
            confirmButtonClass: 'swal2-confirm', 
            cancelButtonClass: 'swal2-cancel', 
            reverseButtons: true,
            preConfirm: () => {
        const rating = document.querySelector('input[name="rating"]:checked');
        const comment = document.getElementById('comment').value;

        if (!rating || !comment) {
          Swal.showValidationMessage('Please fill in both rating and comment fields');
        }

        return {
          rating: rating ? rating.value : null,
          comment: comment || null,
        };
      },
    }).then((result) => {
      if (result.isConfirmed) {
        // You can access the user's rating and comment here:
        const rating = result.value.rating;
        const comment = result.value.comment;

        // Perform any actions with the rating and comment (e.g., send to the server)
        console.log('Rating:', rating);
        console.log('Comment:', comment);

        Swal.fire({
            title: '<span class="feedback-title">Thank you for your Feedback!</span>',
            icon: 'success',
            html: 'Your feedback has been submitted.',
          });
        }
      });s

    // Add hover effect
    const smileyLabelsElements = document.querySelectorAll('.smiley-label');
    smileyLabelsElements.forEach((label) => {
      label.addEventListener('mouseenter', () => {
        label.style.transform = 'scale(1.1)';
      });

      label.addEventListener('mouseleave', () => {
        label.style.transform = 'scale(1)';
      });
    });
  }









  
    // for change password
  $("input[type=password]").keyup(function(){
    var ucase = new RegExp("[A-Z]+");
	var lcase = new RegExp("[a-z]+");
	var num = new RegExp("[0-9]+");
	
	if($("#password1").val().length >= 8){
		$("#8char").removeClass("glyphicon-remove");
		$("#8char").addClass("glyphicon-ok");
		$("#8char").css("color","#00A41E");
	}else{
		$("#8char").removeClass("glyphicon-ok");
		$("#8char").addClass("glyphicon-remove");
		$("#8char").css("color","#FF0004");
	}
	
	if(ucase.test($("#password1").val())){
		$("#ucase").removeClass("glyphicon-remove");
		$("#ucase").addClass("glyphicon-ok");
		$("#ucase").css("color","#00A41E");
	}else{
		$("#ucase").removeClass("glyphicon-ok");
		$("#ucase").addClass("glyphicon-remove");
		$("#ucase").css("color","#FF0004");
	}
	
	if(lcase.test($("#password1").val())){
		$("#lcase").removeClass("glyphicon-remove");
		$("#lcase").addClass("glyphicon-ok");
		$("#lcase").css("color","#00A41E");
	}else{
		$("#lcase").removeClass("glyphicon-ok");
		$("#lcase").addClass("glyphicon-remove");
		$("#lcase").css("color","#FF0004");
	}
	
	if(num.test($("#password1").val())){
		$("#num").removeClass("glyphicon-remove");
		$("#num").addClass("glyphicon-ok");
		$("#num").css("color","#00A41E");
	}else{
		$("#num").removeClass("glyphicon-ok");
		$("#num").addClass("glyphicon-remove");
		$("#num").css("color","#FF0004");
	}
	
	if($("#password1").val() == $("#password2").val()){
		$("#pwmatch").removeClass("glyphicon-remove");
		$("#pwmatch").addClass("glyphicon-ok");
		$("#pwmatch").css("color","#00A41E");
	}else{
		$("#pwmatch").removeClass("glyphicon-ok");
		$("#pwmatch").addClass("glyphicon-remove");
		$("#pwmatch").css("color","#FF0004");
	}
});