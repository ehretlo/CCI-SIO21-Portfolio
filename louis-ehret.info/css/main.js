function afficher_div_masque() {
    var div = document.getElementById("toto");
    if (div.style.display === "none") {
      div.style.display = "block";
    } else {
      div.style.display = "none";
    }
  }