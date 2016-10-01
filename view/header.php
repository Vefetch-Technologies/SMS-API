<?php 
include_once '../controller/default_functions.php';
landing_page_session_check();
$user_details = $_SESSION['user_details'];
print_r($user_details);
$date = date("Y-m-d", time());
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <link rel="stylesheet" href="../css/_all-skins.min.css">
  <link rel="stylesheet" type="text/css" href="../css/count.css">
  <script src="http://code.jquery.com/jquery-1.5.js"></script>
  <script src="../js/jquery-2.2.3.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- header -->
  <header class="main-header">
    <a href="home.php" class="logo">
      <span class="logo-mini"><b>V</b></span>
      <span class="logo-lg"><b>Vefetch</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <span class="count-green"><button-orange >count</button></span>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../img/default.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $user_details['user_name']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="../img/default.png" class="img-circle" alt="User Image">
                <p>
                  Bye <?php echo $user_details['user_name']; ?>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- sidebar -->
  <aside class="main-sidebar">
      <section class="sidebar">
        <ul class="sidebar-menu">
          <!-- <li><a href="home.php"><i class="fa fa-circle-o text-red "></i> <span>Dashboard</span></a></li> -->
          <li><a href="single_sms.php"><i class="fa fa-circle-o text-yellow"></i> <span>Single SMS</span></a></li>
          <li><a href="bulk_sms.php"><i class="fa fa-circle-o text-aqua"></i> <span>Bulk SMS</span></a></li>
          <li><a href="mark_upload.php"><i class="fa fa-circle-o text-red"></i> <span>Mark Upload</span></a></li>
          <!-- <li><a href="sms_history.php"><i class="fa fa-circle-o text-yellow"></i> <span>Sms History</span></a></li> -->
          <li><a href="my_details.php"><i class="fa fa-circle-o text-aqua"></i> <span>My Details</span></a></li>
          
          
        </ul>
      </section>
  </aside>
  <!-- Content -->
  <div class="content-wrapper">
    <section class="content">