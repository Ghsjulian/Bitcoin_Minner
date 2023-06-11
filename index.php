

<!DOCTYPE html>
<html>
<head>
  <title>Web World</title>
  <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/responsive.css" />
<link rel="stylesheet" href="assets/css/index.css" />
<link
href="assets/vendor/bootstrap/css/bootstrap.min.css"
rel="stylesheet"
/>
<link
href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
rel="stylesheet"
/>
<link rel="stylesheet" href="assets/css/w3.css" />
<link rel="stylesheet" href="assets/css/login_sign_up.css" />
<link rel="stylesheet" href="assets/css/w3-theme-blue-grey.css" />
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
<?php
include_once('pages/header.php');
include_once('pages/sidebar.php');
?>
<div class="w3-container w3-content"
style="max-width: 1400px; margin-top: 80px">
<!-- The Grid -->
<div class="w3-row">
<?php
include_once('pages/left.section.php');
include_once('pages/middle.section.php');
include_once('pages/right.section.php');
?>
</div>
</div>
<br><br><br>
<?php
//echo __CheakLogin__($_id);
?>
<?php
include_once('pages/footer.php');
?>

<script src="assets/js/login_sign_up5.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>