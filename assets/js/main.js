"use strict";
function __ghs(tag) {
  return document.querySelector(tag);
}

__ghs(".bi-list").onclick = (e) => {
  e.preventDefault();
  var check = __ghs("#ghs").getAttribute("data");
  if (check == 0) {
    __ghs("#ghs").style.display = "block";
    __ghs("#ghs").style.visibility = "visible";
    __ghs("#ghs").setAttribute("data", 1);
  } else {
    __ghs("#ghs").style.display = "none";
    __ghs("#ghs").style.visibility = "hidden";
    __ghs("#ghs").setAttribute("data", 0);
  }
};

var tag = document.querySelectorAll(".sidebar li a");
tag.forEach((el) => {
  el.onclick = (e) => {
    __ghs("#ghs").style.display = "none";
    __ghs("#ghs").style.visibility = "hidden";
    __ghs("#ghs").setAttribute("data", 0);
  };
});

__ghs("#button").onclick = (e) => {
  e.preventDefault();
  __ghs(".w3-white").style.backgroundColor = "#f00";
  var body = __ghs("body");
  body.style.backgroundColor = "rgba(231,231,231,0.599)";
  __ghs(".editbox").style.display = "block";
};
__ghs(".bi-x").onclick = (e) => {
  e.preventDefault();
  var body = __ghs("body");
  body.style.backgroundColor = "";
  __ghs(".editbox").style.display = "none";
};
