window.addEventListener("load", function() { $("#mssg-cad-error").hide();
$("#mssg-cad-sucess").hide();});

var deletar = function(e) {
  var value = $(e).attr("value");
  var deletar = new Object();
  deletar.id = value;
  var json = JSON.stringify(deletar);
  $.ajax({
    url: "../Controllers/DeletarController.php",
    type: "POST",
    datatype: json,
    success: function(data) {
      if (data == 1) {
        $("#mssg-cad-sucess").html(
          "Transferencia " + value + " foi excluida do histórico!!"
        );
        $("#mssg-cad-sucess")
          .show()
          .addClass("animate");
        setTimeout(function() {
          window.location.href = "Dashboard.php";
        }, 2500);
      } else {
        $("#mssg-cad-error")
          .show()
          .addClass("animate");
        setTimeout(function() {
          $("#mssg-cad-error")
            .hide()
            .removeClass("animate");
        }, 2500);
      }
    },
    data: json
  });
};
