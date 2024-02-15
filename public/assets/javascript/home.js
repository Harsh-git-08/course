
// changing text in header

// vars
$(document).ready(function(){
    $('#testimonial4').carousel();
});


// FAQs


$(document).ready(function() {
    $(".faqs-container .faq-singular:first-child").addClass("active").children(".faq-answer").slideDown();//Remove this line if you dont want the first item to be opened automatically.
    $(".faq-question").on("click", function(){
      if( $(this).parent().hasClass("active") ){
        $(this).next().slideUp();
        $(this).parent().removeClass("active");
      }
      else{
        $(".faq-answer").slideUp();
        $(".faq-singular").removeClass("active");
        $(this).parent().addClass("active");
        $(this).next().slideDown();
      }
    });
  });

  // Adding padding threw js

  document.getElementById('pad-nav').style.paddingTop = '30px';
  document.getElementById('pad-nav').style.paddingBottom = '30px';
  document.getElementById('second-nav-padding').style.paddingTop = '30px';
  document.getElementById('second-nav-padding').style.paddingBottom = '30px';
  document.getElementById('main-nav').style.height = '6rem';

