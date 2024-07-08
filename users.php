<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/popup.css">
</head>
<body>
    <header class="header">
      <div class="container">
        <div class="header__inner">
          <div class="header__logo">
            <h1>Hospital of Life</h1>
          </div>
          <input type="checkbox" id="nav-toggle" hidden>
          <nav class="nav">
            <label for="nav-toggle" class="nav-toggle" onclick></label>
            <ul>
              <li>
                <?php
                if($_COOKIE['user'] == ''):
                ?>
                  <a href="login.php">Sign In</a>
                  <li><a href="index.php">Home</a>
                  <li><a href="ticket.php">Ticket</a>
                  <li><a href="about.php">About</a>
                  <li><a href="info.php">Info</a>
                <?php else: ?>
                  <a href="personalaccount.php"><?=$_COOKIE['user']?></a>
                  <li><a href="index.php">Home</a>
                  <li><a href="ticket.php">Ticket</a>
                  <li><a href="about.php">About</a>
                  <li><a href="info.php">Info</a>
                  <?php endif;?>  
              <?php if($_COOKIE['user'] != ''):?>
                <?php if($_COOKIE['userRole'] == 'doctor'): ?>
                  <li><a href="storage.php">Storage</a>
                  <li><a href="exit.php">Exit</a>
                <?php elseif($_COOKIE['userRole'] == 'admin'): ?>
                  <li><a href="storage.php">Storage</a>
                  <li><a href="employees.php">Employees</a>
                  <li><a href="users.php">Users</a>
                  <li><a href="exit.php">Exit</a>
                <?php endif;?>
              <?php endif;?>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <div class="intro">
        <div class="content">
            <div class="intro__content">
                <div class="intro__items" style="font-size:48px; font-weight: 700">Users</div>
                <div class="userContainer" id="userContainer"></div>
            </div>
        </div>
    </div>

    <div class="popup-bg" style="display: none">
      <div class="popup">
        <img class="close-popup" src="img/close.png" alt="icon">
        <div>
          <input type="button" class="pa" value="Personal Account"><br>
          <input type="button" class="up" value="Up">
        </div>>
      </div>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/authUser.js"></script>
    <script src="/users/userUp.js"></script>
</body>
</html>