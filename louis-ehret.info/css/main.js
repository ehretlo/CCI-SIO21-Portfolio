function afficher_div_masque() {
    var div = document.getElementById("toto");
    var afficher = document.querySelector(".afficher");
    if (div.classList.contains("toto-closed")) {
      div.classList.remove("toto-closed");
      div.classList.add("toto-open");
      afficher.textContent = "Masquer";
    } else {
      div.classList.remove("toto-open");
      div.classList.add("toto-closed");
      afficher.textContent = "Afficher plus";
    }
}