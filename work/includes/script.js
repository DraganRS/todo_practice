function navMenuClick() {
  var x = document.getElementById("navigId");
  if (x.className === "navigation") {
    x.className += " responsive";
  } else {
    x.className = "navigation";
  }
}
