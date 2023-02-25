  function toggleNavbar() {
    var x = document.getElementById("myNavbar");
    if (x.className === "navbar-right") {
        x.className += " responsive";
    } else {
        x.className = "navbar-right";
    }
}