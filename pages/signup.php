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
<h2>Create Account</h2>
<center>
<strong id="message" class=""></strong>
<form id="login_form" action="" method="POST">
<input
type="text"
name="username"
id="user_name"
placeholder="Enter User Name"
/>
<input
type="email"
name="useremail"
id="user_email"
placeholder="Enter User Email"
/>
<input
type="password"
name="userpassword"
id="user_password"
placeholder="Enter Password"
/>
<button type="submit" id="_signup_btn">Signup Now</button>
<br />
<span>Already Have An Account ? <a href="login">Login</a></span>
</form>
</center>
</div>
<script>
function __ghs(tag) {
return document.querySelector(tag);
}
__ghs("#_signup_btn").addEventListener("click", (e) => {
e.preventDefault();
var form_data = new FormData(__ghs("#login_form"));
form_data.append("action", "signup");
var u_name = __ghs("#user_name").value;
var u_email = __ghs("#user_email").value;
var u_pass = __ghs("#user_password").value;
__ghs("#_signup_btn").textContent = "Proccessing...";
//console.log(u_name + "    " + u_pass);
setTimeout(() => {
if (!u_name && !u_pass && !u_email) {
__ghs("#message ").classList.add("error");
__ghs("#message").textContent = "Please Enter Fill Out This Form";
} else {

fetch("../server/auth.php", {
method: "POST",
body: new FormData(__ghs("#login_form")),
})
.then((res) => {
return res.text();
})
.then((data) => {
alert(data);
});

}
__ghs("#_signup_btn").textContent = "Signup Now";
},
2000);
});
</script>
</div>
</body>
</html>
<?php
}
?>