<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
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
      <div class="container">
        <div class="intro__inner">
          <div class="intro__items">
            <div class="suptitle">Health care solution</div>
            <div class="title">Stay healthy and strong!</div>
            <div class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do aliqua.</div>
            <div class="intro__buttons">
                <?php
                if($_COOKIE['user'] == ''):
                ?>
                <a href="register.php" class="btn__items1">Register</a>
                <?php else: ?>
                <a href="personalaccount.php" class="btn__items1">Register</a>
                <?php endif; ?>  
                <a href="#" class="button open-popup">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="popup-bg" style="display: none;">
    <div class="popup">
      <div class="popup__content">
        <img class="close-popup" src="img/close.png" alt="icon">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend. Mi ipsum faucibus vitae aliquet nec ullamcorper. Condimentum id venenatis a condimentum vitae sapien pellentesque habitant. Lectus magna fringilla urna porttitor rhoncus dolor purus non. Amet est placerat in egestas erat. Eget arcu dictum varius duis at consectetur. Venenatis cras sed felis eget velit. Tellus in hac habitasse platea dictumst vestibulum rhoncus est. Lectus arcu bibendum at varius vel pharetra.</p>
        <p>Mattis enim ut tellus elementum sagittis. Metus dictum at tempor commodo ullamcorper. Arcu cursus vitae congue mauris rhoncus. Sodales neque sodales ut etiam sit amet. Non enim praesent elementum facilisis. Suscipit tellus mauris a diam maecenas. Tristique senectus et netus et malesuada fames. Sit amet risus nullam eget felis. Fermentum et sollicitudin ac orci phasellus egestas tellus. Platea dictumst quisque sagittis purus. Id aliquet risus feugiat in ante metus. Risus quis varius quam quisque id. Erat pellentesque adipiscing commodo elit at imperdiet dui. Nunc pulvinar sapien et ligula ullamcorper. Faucibus nisl tincidunt eget nullam. In eu mi bibendum neque egestas congue. Commodo nulla facilisi nullam vehicula ipsum a arcu cursus.</p>
      </div>      
    </div>
  </div>

  <script src="/js/jquery.min.js"></script>
  <script src="/js/main.js"></script>
  </body>
</html>
