function navFunction() {
    var x = document.getElementById("MyNavbar");
    if (x.className === "Navbar") {
      x.className += " responsive";
    } else {
      x.className = "Navbar";
    }
  }