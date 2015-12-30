<?php

if(logged_in()===true){
echo "<div class='container-fluid'>
        <div class='navbar-header'>
          <div class='logo'><a href='#'><h3>Senior High System</h3></a></div>
           </div>
          <ul class='nav navbar-nav navbar-right'>
        <li class='dropdown'>
          <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>".$user_data['first_name']." <span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a href='".$user_data['username']."'>Profile</a></li>
            <li><a href='changepassword.php'>Change Password</a></li>
            <li><a href='settings.php'>Settings</a></li>
            <li role='separator' class='divider'></li>
            <li><a href='./logout.php'>Log out</a></li>
          </ul>
       
      </div>";
  }else{
    header('location:login.php');
  }
?>