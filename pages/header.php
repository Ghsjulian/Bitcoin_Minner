<?php
session_start();
$user_info = $_SESSION['user_info'];
?>

<div class="w3-top">
  <span class="logo">Web World</span>
  <div class="nav w3-bar w3-center-align w3-large">
    <a href="http://localhost:8080/blog" class=""><i class="bi bi-house-door"></i></a>
    <?php
    if ($user_info[0]['user_id']) {
      // code...
      ?>
      <a href="#"><i class="bi bi-person-circle"></i
        ></a>
      <a href="#" class="" title="Messages"><i class="bi bi-chat"></i></a>
      <a href="#"><i class="bi bi-bell"></i></a>
      <a href="server/logout"> <i class="bi bi-box-arrow-right"></i></a>

      <?php
    } else {
      ?>
      <a href="pages/login"> <i class="bi bi-shield-lock"></i></a>
      <a href="pages/signup"> <i class="bi bi-person-plus"></i></a>
      <?php
    }
    ?>
    <input type="search" placeholder="Search..." id="search" />
  <button id="search-btn" type="search">
    <i class="bi bi-search"></i>
  </button>
</div>
<span id="menu-btn" class="" href="javascript:void(0);">
  <i class="bi bi-list toggle-sidebar-btn"></i>
</span>
</div>