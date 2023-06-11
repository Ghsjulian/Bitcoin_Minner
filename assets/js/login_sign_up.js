"use strict";
function __ghs(tag) {
  return document.querySelector(tag);
}

__ghs("#_login_btn").onclick = (e) => {
  e.preventDefault();
  var form_data = new FormData(__ghs("#login_form"));
  var u_name = __ghs("#user_name").value;
  var u_pass = __ghs("#user_password").value;
  __ghs("#_login_btn").textContent = "Proccessing...";
  //console.log(u_name + "    " + u_pass);
  setTimeout(() => {
    if (u_name && u_pass) {
      __ghs("#message ").classList.add("success");
      __ghs("#message").textContent = u_name + "  " + u_pass;
    } else {
      __ghs("#message ").classList.add("error");
      __ghs("#message").textContent = "Please Enter Login Info";
    }
    __ghs("#_login_btn").textContent = "Login Now";
  }, 3000);
};

/**** SIGNUP CODE ****/

__ghs("#_signup_btn").addEventListener("click", (e) => {
  e.preventDefault();
  var form_data = new FormData(__ghs("#login_form"));
  var u_name = __ghs("#user_name").value;
  var u_email = __ghs("#user_email").value;
  var u_pass = __ghs("#user_password").value;
  __ghs("#_signup_btn").textContent = "Proccessing...";
  //console.log(u_name + "    " + u_pass);
  setTimeout(() => {
    if (u_name && u_pass && u_email) {
      __ghs("#message ").classList.add("success");
      __ghs("#message").textContent = u_name + "  " + u_pass;
    } else {
      __ghs("#message ").classList.add("error");
      __ghs("#message").textContent = "Please Enter Login Info";
    }
    __ghs("#_signup_btn").textContent = "Signup Now";
  }, 3000);
});
