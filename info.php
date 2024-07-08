<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Info</title>
    <link rel="stylesheet" href="css/info.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
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
      <div class="container">
        <div class="information">
          <h1>Contacts</h1>
          <p>Telegram: <a href="https://vk.com/ghosttownsymphony">link</a></p>
          <p>Instagram: <a href="https://vk.com/ghosttownsymphony">link</a></p>
          <p>Twitter: <a href="https://vk.com/ghosttownsymphony">link</a></p>
          <p>Youtube: <a href="https://vk.com/ghosttownsymphony">link</a></p>
          <p>Support Service: <a href="https://vk.com/ghosttownsymphony">link</a></p>
        </div>
      </div>
    </div>
  </body>
</html>
