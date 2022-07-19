$(document).ready(function () {
  $("#login").click(function () {
    var usuario = $("#usuario").val();
    var password = $("#password").val();

    if (usuario == "") {
      $("#mensaje1").fadeIn();
      return false;
    } else {
      $("#mensaje1").fadeOut();

      if (password == "") {
        $("#mensaje2").fadeIn();
        return false;
      } else {
        $("#mensaje2").fadeOut();
      }
    }
  });
});
