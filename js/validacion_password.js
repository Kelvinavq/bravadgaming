$(document).ready(function () {
  $("#verificar_passwords").click(function () {

    var password = $("#password").val();
    var password2 = $("#password2").val();

    if (password == "") {
      $("#mensaje1").fadeIn();
      return false;
    } else {
      $("#mensaje1").fadeOut();

      if (password2 == "") {
        $("#mensaje2").fadeIn();
        return false;
      } else {
        $("#mensaje2").fadeOut();
      }
    }

    if (password != password2) {
      $("#mensaje3").fadeIn();
      return false;
    }else{
      $("#mensaje3").fadeOut();
      
    }
  });
});
