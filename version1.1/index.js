var iteration = 0;
setInterval(function () {
  iteration++;
  if (iteration % 2 == 0) {
    var img = (document.querySelector("#imgbox").src = "Untitled (1).png");
  } else {
    var img = (document.querySelector("#imgbox").src = "Untitled.png");
  }
}, 1000);

function search_hid() {
  document.querySelector(".navbarhaifour").style.display = "none";
}
function search_show() {
  document.querySelector(".navbarhaifour").style.display = "block";
}
