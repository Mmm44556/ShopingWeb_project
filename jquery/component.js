$(function () {
  console.log('Ready!');

  $(".bi-fill").click(function () {
    if ($(this).hasClass('bi-eye-fill')) {
      $(".password").attr('type', 'text');
    } else {
      $(".password").attr('type', 'password');
    }
    $(this).toggleClass('bi-eye-fill').toggleClass('bi-eye-slash-fill');
  });
});
