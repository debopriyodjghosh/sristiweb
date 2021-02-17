<?php
// THROW USER TO LOGIN PAGE IF NOT SIGNED IN
// YOU MIGHT WANT TO DO THIS DIFFERENTLY IF PLANNING TO USE PRETTY URL
$_ADMIN = is_array($_SESSION['user']);
if (!$_ADMIN && basename($_SERVER["SCRIPT_FILENAME"], '.php')!="login") {
  header('Location: login.php');
  die();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>ADMIN PANEL</title>
    <meta name="robots" content="noindex">
    <link href="public/admin.css" rel="stylesheet">
    <script src="public/admin.js"></script>
  </head>
  <body>
    <!-- [NOW LOADING SPINNER] -->
    <div id="page-loader">
      <img id="page-loader-spin" src="public/cube-loader.svg">
    </div>

    <!-- [PAGE WRAPPER] -->
    <div id="page-wrap">
      <?php if ($_ADMIN) { ?>
      <!-- [SIDE BAR] -->
      <nav id="page-sidebar">
        <a href="index.php">
          <span class="ico">&#9788;</span>
          Admin Panel
        </a>
       
		<!--<a href="sristi_page/add_category.php">
          <span class="ico">&#9787;</span>
          Add Category
        </a>-->
		<a href="sristi_page/add_project.php">
          <span class="ico">&#9787;</span>
          Add Project
        </a>
		<!--<a href="sristi_page/add_document.php">
          <span class="ico">&#9787;</span>
          Upload Document
        </a>-->
		<a href="sristi_page/add_image.php">
          <span class="ico">&#9787;</span>
          Upload Image
        </a>
		<!-- <a href="users.php">
          <span class="ico">&#9787;</span>
          Manage Users
        </a>-->
      
	   <a href="www.shibpursristi.org/website">
		<span class="ico">&#9788;</span>
			View Website
		</a>
	
	
	   <a href="www.shibpursristi.org/cpanel">
		<span class="ico">&#9788;</span>
			Cpanel
		</a>
		
		<a href="www.shibpursristi.org/webmail">
		<span class="ico">&#9788;</span>
			Webmail
		</a>
		</nav>
	        <?php } ?>

      <!-- [MAIN CONTENTS] -->
      <div id="page-main">
        <?php if ($_ADMIN) { ?>
        <!-- [NAVIGATION BAR] -->
        <nav id="page-nav">
          <div id="page-button-side" onclick="adm.side();">&#9776;</div>
          <div id="page-button-out" onclick="adm.bye();"> &#9747;</div>
		  
		   
        </nav>
        <?php } ?>

        <!-- [PAGE CONTENTS] -->
        <div id="page-contents">