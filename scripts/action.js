console.log("hello");
document.addEventListener('DOMContentLoaded', function () {
    // Array of texts to cycle through
    var texts = ["Strategic Play", "Precision Passing", "Defensive Mastery"];
    
    // Get the span element
    var spanElement = document.querySelector('.text-main div h1 span');

    // Counter to keep track of the current text
    var counter = 0;

    // Function to update the text in the span
    function updateText() {
        spanElement.textContent = texts[counter];
        counter = (counter + 1) % texts.length;
    }

    // Update the text every 3 seconds (adjust as needed)
    setInterval(updateText, 2500);
});



$(document).ready(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 600) {
        $('.navbar').addClass('navbar-scrolled');
      } else {
        $('.navbar').removeClass('navbar-scrolled');
      }
    });
  });

 