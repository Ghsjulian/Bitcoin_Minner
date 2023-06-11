<?php
session_start();
$user_info = $_SESSION['user_info'];
if ($user_info[0]['user_id']) {
  // code...
  header("location:../");
} else {
  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <title>Login To Your Account</title>
    <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="../assets/css/responsive.css" />
<link
href="../assets/vendor/bootstrap/css/bootstrap.min.css"
rel="stylesheet"
/>
<link
href="../assets/vendor/bootstrap-icons/bootstrap-icons.css"
rel="stylesheet"
/>
<link rel="stylesheet" href="../assets/css/w3.css" />
<link rel="stylesheet" href="../assets/css/login_sign_up.css" />
<link rel="stylesheet" href="../assets/css/w3-theme-blue-grey.css" />
<link
rel="stylesheet"
href="https://fonts.googleapis.com/css?bimily=Open+Sans"
/>
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
/>
</head>
<body class="w3-theme-l5">
<div
class="w3-container w3-center"
style="max-width: 1000px; margin-top: 80px"
>
<div class="login_area">
<h2>Please Login</h2>
<center>
<strong id="message" class=""> </strong>
<form id="login_form" action="" method="POST">
<input
type="text"
name="user_name"
id="user_name"
placeholder="Enter User Name"
/>
<input
type="password"
name="user_password"
id="user_password"
placeholder="Enter Password"
/>
<button type="submit" id="_login_btn">Login Now</button>
<br />
<span>Don't Have An Account ? <a href="signup">SignUp</a></span>
</form>
</center>
<script type="text/javascript">

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
if (!u_name && !u_pass) {
__ghs("#message ").classList.add("error");
__ghs("#message").textContent = "Please Enter Login Info";
/*
__ghs("#message ").classList.add("success");
__ghs("#message").textContent = u_name + "  " + u_pass;
*/
} else {
fetch("../server/auth.php", {
method: "POST",
body: new FormData(__ghs("#login_form")),
})
.then((res) => {
return res.json();
})
.then((data) => {
if (data.statuss) {
__ghs("#message ").classList.add("success");
__ghs("#message").textContent = data.message;
window.location.href = "../";
} else {
__ghs("#message ").classList.add("error");
__ghs("#message").textContent = data.message;
}
});
}
__ghs("#_login_btn").textContent = "Login Now";
},
3000);
};
</script>
</div>
</div>
</body>
</html>
<?php
}
?>