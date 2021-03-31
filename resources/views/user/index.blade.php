<!DOCTYPE html>
<html lang="en">
  <head>
  
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="D:\PROYEK PABWE\assets\image\logotrans.png">

    <title>Buddyject Home</title>

    <!-- vendor css -->
    <link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="assets/css/dashforge.css">
    <link rel="stylesheet" href="assets/css/dashforge.landing.css">
  </head>
  <body class="home-body">
    <header class="navbar navbar-header navbar-header-fixed bd-b-0">
      <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
      <div class="navbar-brand">
        <a href="" class="df-logo">Buddy<span>Ject</span></a>
        <hr><hr><br>
        <a href="{{ route('logout') }}" class="btn btn-info">Logout</a>
      </div><!-- navbar-brand -->
      <div id="navbarMenu" class="navbar-menu-wrapper">
        <div class="navbar-menu-header">
          <a href="../index.html" class="df-logo">dash<span>forge</span></a>
          <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
        </div><!-- navbar-menu-header -->
        <ul class="nav navbar-menu">
          <li class="nav-label pd-l-15 pd-lg-l-25 d-lg-none">Main Navigation</li>
          <li class="nav-item with-sub">
            <a href="" class="nav-link"><i data-feather="pie-chart"></i> Home</a>
            <ul class="navbar-menu-sub">
              <li class="nav-sub-item"><a href="template/classic/dashboard-one.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Sales Monitoring</a></li>
              <li class="nav-sub-item"><a href="template/classic/dashboard-two.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Website Analytics</a></li>
              <li class="nav-sub-item"><a href="template/classic/dashboard-three.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Cryptocurrency</a></li>
              <li class="nav-sub-item"><a href="template/classic/dashboard-four.html" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Helpdesk Management</a></li>
            </ul>
          </li>
          <li class="nav-item with-sub">
            <a href="{{ route('mywall') }}" class="nav-link"><i data-feather="package"></i> My Wall</a>
            <ul class="navbar-menu-sub">
              <li class="nav-sub-item"><a href="template/classic/app-calendar.html" class="nav-sub-link"><i data-feather="calendar"></i>Calendar</a></li>
              <li class="nav-sub-item"><a href="template/classic/app-chat.html" class="nav-sub-link"><i data-feather="message-square"></i>Chat</a></li>
              <li class="nav-sub-item"><a href="template/classic/app-contacts.html" class="nav-sub-link"><i data-feather="users"></i>Contacts</a></li>
              <li class="nav-sub-item"><a href="template/classic/app-file-manager.html" class="nav-sub-link"><i data-feather="file-text"></i>File Manager</a></li>
              <li class="nav-sub-item"><a href="template/classic/app-mail.html" class="nav-sub-link"><i data-feather="mail"></i>Mail</a></li>
            </ul>
          </li>
          <li class="nav-item with-sub">
            <a href="{{ route('stickynote') }}" class="nav-link"><i data-feather="layers"></i> StickyNotes</a>
            <div class="navbar-menu-sub">
              <div class="d-lg-flex">
                <ul>
                  <li class="nav-label">Authentication</li>
                  <li class="nav-sub-item"><a href="template/classic/page-signin.html" class="nav-sub-link"><i data-feather="log-in"></i> Sign In</a></li>
                  <li class="nav-sub-item"><a href="template/classic/page-signup.html" class="nav-sub-link"><i data-feather="user-plus"></i> Sign Up</a></li>
                  <li class="nav-sub-item"><a href="template/classic/page-verify.html" class="nav-sub-link"><i data-feather="user-check"></i> Verify Account</a></li>
                  <li class="nav-sub-item"><a href="template/classic/page-forgot.html" class="nav-sub-link"><i data-feather="shield-off"></i> Forgot Password</a></li>
                  <li class="nav-label mg-t-20">User Pages</li>
                  <li class="nav-sub-item"><a href="template/classic/page-profile-view.html" class="nav-sub-link"><i data-feather="user"></i> View Profile</a></li>
                  <li class="nav-sub-item"><a href="template/classic/page-connections.html" class="nav-sub-link"><i data-feather="user"></i> Connections</a></li>
                  <li class="nav-sub-item"><a href="template/classic/page-groups.html" class="nav-sub-link"><i data-feather="users"></i> Groups</a></li>
                  <li class="nav-sub-item"><a href="template/classic/page-events.html" class="nav-sub-link"><i data-feather="calendar"></i> Events</a></li>
                </ul>
                </li>
          <li class="nav-item with-sub">
            <a href="{{ route('todolist') }}" class="nav-link"><i data-feather="package"></i> To Do List</a>
            <ul class="navbar-menu-sub">
              <li class="nav-sub-item"><a href="template/classic/app-calendar.html" class="nav-sub-link"><i data-feather="calendar"></i>Calendar</a></li>
            </ul>
          
 
      </div><!-- navbar-right -->
    </header><!-- navbar -->

    <div class="home-slider">
      <div class="home-lead">
        
        <p class="home-text">Welcome to BuddyJect - Your Buddy to manage your Project</p>

        <h6 class="home-headline">Create your <span>New Project.</h6>

        <div class="d-flex wd-lg-350">
          <a href="{{ route('mywall') }}" class="btn btn-brand-01 btn-uppercase flex-fill">Create New Wall</a>
          <a href="{{ route('stickynote') }}" class="btn btn-white btn-uppercase flex-fill mg-l-10">Create New StickyNote</a>
        </div>
      
      </div>
      <div class="home-slider-img">
        <div><img src="" alt=""></div>
        <div><img src="assets/img/home-2.png" alt=""></div>
        <div><img src="assets/img/home-2-dark.png" alt=""></div>
      </div>
      <div class="home-slider-bg-one"></div>
    </div><!-- home-slider -->

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/feather-icons/feather.min.js"></script>
    <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="assets/js/dashforge.js"></script>
    <script>
      $(document).ready(function() {
        'use strict'

        $('[data-toggle="tooltip"]').tooltip()
      });
    </script>
  </body>
</html>