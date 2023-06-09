// Get all the dropdown icons and request details elements
var viewDetailsButtons = document.querySelectorAll('.view_details_button');
var dropdownIcons = document.querySelectorAll('.fa-circle-chevron-down');
var requestDetails = document.querySelectorAll('.request_details');
var viewDetailsText = document.querySelectorAll('.view_details_text');

// Attach event listeners to each dropdown icon
viewDetailsButtons.forEach(function(btn, index){
  btn.addEventListener('click', function(){
    requestDetails[parseInt(index/2)].classList.toggle('show');
    dropdownIcons[parseInt(index/2)].classList.toggle('down');
    viewDetailsText[parseInt(index/2)].classList.toggle('color_of_car_option_header');
  });
});



var acceptButtons = document.querySelectorAll('.buttons form[name="accept_btn"] button[type="submit"]');
var rejectButtons = document.querySelectorAll('.buttons form[name="reject_btn"] button[type="submit"]');

// Attach event listeners to the Accept buttons
acceptButtons.forEach(function(btn){
  btn.addEventListener('click', function(e){
    e.preventDefault(); // Prevent the default form submission
    var form = btn.parentNode; // Get the parent form
    form.submit(); // Submit the form
  });
});

// Attach event listeners to the Reject buttons
rejectButtons.forEach(function(btn){
  btn.addEventListener('click', function(e){
    e.preventDefault(); // Prevent the default form submission
    var form = btn.parentNode; // Get the parent form
    form.submit(); // Submit the form
  });
});