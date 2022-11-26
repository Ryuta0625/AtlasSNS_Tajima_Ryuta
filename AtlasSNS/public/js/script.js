$(function () {
  $(".drawer").click(function () {
    $(".drawer-list").slideToggle();
    this.classList.toggle("active");
    this.nextElementSibling.classList.toggle("active");
  });
});
