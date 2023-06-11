<?php
session_start();
$user_info = $_SESSION['user_info'];
?>

<div id="ghs" data="0">
  <div
    class="w3-container w3-content"
    style="max-width: 100%; margin-top: 50px"
    >
    <div class="w3-row">
      <!-- Left Column -->
      <div class="w3-col m3">
        <div id="side-bar" class="w3-card w3-round w3-white">
          <div class="w3-container">
            <div class="sidebar">
              <li class="search">
                <center>
                  <input type="search" placeholder="Search..." />
                <button id="-btn" type="search">
                  <i class="bi bi-search"></i>
                </button>
              </center>
            </li>
            <li>
              <a href="#"> <i class="bi bi-house-door"></i> Home </a>
            </li>
            <?php
            if ($user_info[0]['user_id']) {
              // code...
              ?>
              <li>
                <a href="#">
                  <i class="bi bi-person-circle"></i> Profile
                </a>
              </li>
              <li>
                <a href="#"> <i class="bi bi-bell"></i> Notification </a>
              </li>
              <li>
                <a href="#"> <i class="bi bi-chat"></i> Messages </a>
              </li>
              <li>
                <a href="server/logout"> <i class="bi bi-box-arrow-right"></i> Logout </a>
              </li>
              <?php
            } else {
              ?>
              <li>
                <a href="pages/login"> <i class="bi bi-shield-lock"></i> Login </a>
              </li>
              <li>
                <a href="pages/signup"> <i class="bi bi-person-plus"></i> Sign Up </a>
              </li>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>