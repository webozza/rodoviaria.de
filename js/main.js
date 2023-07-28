$ = jQuery;
$(document).ready(function () {
  $(".question").click(function () {
    var answer = $(this).next(".answer");
    answer.slideToggle();
    $(".answer").not(answer).slideUp();
    // Icon Changing
    var icon = $(this).find("i");
    $(".fa.fa-chevron-up")
      .not(icon)
      .removeClass("fa fa-chevron-up")
      .addClass("fa fa-chevron-down");
    icon.toggleClass("fa fa-chevron-down fa fa-chevron-up");
  });

  let searchBar = async () => {
    $(".search-field").after(
      '<button><i class="fa-solid fa-magnifying-glass"></i></button>'
    );
    $(".post-search button").click(function () {
      $(".search-form").submit();
    });
    $(".search-field").attr("placeholder", "Busca");
  };
  searchBar();
});
