window.addEventListener("load", function () {
  $(".detalhes").click(function () {
    var id = $(this).attr("value");
    $.get("../Controllers/DetalhesController.php", { id: id }, function (data) {
      var lista = JSON.parse(data);
      $("#modalDetalhesTitle").html("Transferência " + lista[0]);
      $("#modalDetalhesBody").html(
        "<table class='table table-modal'><tbody id='tbody-modal'><tr><th scope='row'>ID da Transferência</th><td>" +
        lista[0] +
        "</td></tr><tr><th scope='row'>Depositante</th><td>" +
        lista[1] +
        "</td></tr><tr><th scope='row'>Recebedor</th><td>" +
        lista[2] +
        "</td></tr><tr><th scope='row'>Valor</th><td>" +
        lista[3] +
        "</td></tr><tr><th scope='row'>Data da Transferência</th><td>" +
        lista[4] +
        "</td></tr></tbody></table>"
      );
    });
  });
});


var detalhes = function (e) {
  var id = $(e).attr("value");
  $.get("../Controllers/DetalhesController.php", { id: id }, function (data) {
    var lista = JSON.parse(data);
    $("#modalDetalhesTitle").html("Transferência " + lista[0]);
    $("#modalDetalhesBody").html(
      "<table class='table table-modal'><tbody id='tbody-modal'><tr><th scope='row'>ID da Transferência</th><td>" +
      lista[0] +
      "</td></tr><tr><th scope='row'>Depositante</th><td>" +
      lista[1] +
      "</td></tr><tr><th scope='row'>Recebedor</th><td>" +
      lista[2] +
      "</td></tr><tr><th scope='row'>Valor</th><td>" +
      lista[3] +
      "</td></tr><tr><th scope='row'>Data da Transferência</th><td>" +
      lista[4] +
      "</td></tr></tbody></table>"
    );
  });
};
