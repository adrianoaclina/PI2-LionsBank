window.onload = function () {
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 1) {
      console.log("buscando ..");
    }
    var ç = document.querySelector.bind(document);
    if (ajax.readyState == 4 && ajax.status == 200) {
      var resposta = ajax.responseText;
      var lista = JSON.parse(resposta);
      for (var i = 0; i < lista.length; i++) {
        var tbody = ç("#tbody");
        var tr = document.createElement("tr");
        var td1 = document.createElement("td");
        var td2 = document.createElement("td");
        var td3 = document.createElement("td");
        var td4 = document.createElement("td");
        var td5 = document.createElement("td");

        td1.textContent = lista[i].idTransferencia;
        td2.textContent = lista[i].remetente;
        td3.textContent = lista[i].destinatario;
        td4.textContent = lista[i].valor;
        td5.textContent = lista[i].dataT;
        console.log(td1);
        console.log(td2);
        console.log(td3);
        console.log(td4);
        console.log(td5);
        tbody.appendChild(tr);
        tr.appendChild(td1);
        tr.appendChild(td2);
        tr.appendChild(td3);
        tr.appendChild(td4);
        tr.appendChild(td5);

      }
    }
  };
  ajax.open("GET", "../Controllers/DashboardController.php", true);
  ajax.setRequestHeader("Content-type", "application/json");
  ajax.send();
};