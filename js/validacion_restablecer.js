

$(document).ready(function () {
  $("#restablecer").click(function () {
    var correo = $("#correo").val();

    if (correo == "") {
      $("#mensaje1").fadeIn();
      return false;

    } else {
      $("#mensaje1").fadeOut();
    }
  });
});

$(document).ready(function () {
  $("#codigo").click(function () {
    var codigo = $("#codigo").val();

    if (codigo == "") {
      $("#mensaje1").fadeIn();
      return false;

    } else {
      $("#mensaje1").fadeOut();
    }
  });
});