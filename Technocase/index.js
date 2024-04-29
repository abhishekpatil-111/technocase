// // alert('WARNING!\n You Are Trying To Access Unknown Server! enter exit() command to get backs');
// //  function greet();
// setTimeout(()=>{
//     // console.log("we Are inside settimeout:");
//     alert('Welcome to TECH-BITS')

//     },7000);
// Rating Initialization
$(document).ready(function() {
    $('#rateMe1').mdbRate();
  });


  // JavaScript to handle the click event of the "View PDF" button
  document.getElementById('viewPdfBtn').addEventListener('click', function() {
    // Make an AJAX request to fetch and display the PDF
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'get_pdf.php', true);
    xhr.responseType = 'blob';

    xhr.onload = function() {
        if (this.status === 200) {
            var blob = this.response;
            var url = URL.createObjectURL(blob);

            // Open the PDF in a new tab
            window.open(url);
        }
    };

    xhr.send();
});