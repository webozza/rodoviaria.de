$ = jQuery;
$(document).ready(function () {
  $('.question').click(function () {
      var answer = $(this).next('.answer');
      answer.slideToggle();
      $('.answer').not(answer).slideUp();
      // Icon Changing
      var icon = $(this).find('i');
      $('.fa.fa-chevron-up').not(icon).removeClass('fa fa-chevron-up').addClass('fa fa-chevron-down');
      icon.toggleClass('fa fa-chevron-down fa fa-chevron-up');
  });
});