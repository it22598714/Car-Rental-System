/* background4 */
/*
const scrollList = document.querySelector('.scroll_list');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

prevBtn.addEventListener('click', () => {
  scrollList.scrollBy({
    left: -300,
    behavior: 'smooth'
  });
});

nextBtn.addEventListener('click', () => {
  scrollList.scrollBy({
    left: 300,
    behavior: 'smooth'
  });
});


var make_payment_button = document.getElementById('make_payment_button');

make_payment_button.addEventListener('click', function(){
    window.open('Payment.php');
});

*/

  var scrollList = document.querySelector(".scroll_list");
  var prevBtn = document.querySelector(".prev-btn");
  var nextBtn = document.querySelector(".next-btn");

  prevBtn.addEventListener("click", scrollLeft);
  nextBtn.addEventListener("click", scrollRight);

  function scrollLeft() {
    scrollList.scrollBy({
      left: -300, // Adjust this value based on the width of your category item
      behavior: "smooth", // Add smooth scrolling animation
    });
  }

  function scrollRight() {
    scrollList.scrollBy({
      left: 300, // Adjust this value based on the width of your category item
      behavior: "smooth", // Add smooth scrolling animation
    });
  }
