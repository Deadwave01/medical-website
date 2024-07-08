<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ticket</title>
  <link rel="stylesheet" href="/css/ticket.css"/>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="css/popup.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
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
      <div class="intro__content">
        <?php
        if ($_COOKIE['userRole'] == 'admin' && $_COOKIE['user'] != '') :
        ?>
          <div class="intro__items">
            <a href="#" class="button open-popup">add Ticket</a>
          </div>
        <?php endif; ?>
        <?php if($_COOKIE['userRole'] != 'admin' && $_COOKIE['user'] != ''):?>
          <div id="ticketContainer" class="ticketContainer"></div>
        <?php elseif($_COOKIE['userRole'] == 'admin'):?> 
          <div class="admin">Since you are an administrator, you don't see tickets</div>
        <?php else:?>
          <div class="notuser">Please <a href="register.php">register</a> to view this page.</div>
        <?php endif;?>
      </div>
    </div>
  </div>


  <div class="popup-bg" style="display: none;">
    <div class="popup">
      <img class="close-popup" src="img/close.png" alt="icon">
      <form action="checkTicket.php" method="post">
        <input type="date" name="date" placeholder="Enter the date of admission">
        <input type="time" name="time" placeholder="Enter the time of admission">
        <input name="doctor" class="open-list" placeholder="Enter the surname and name of doctor" required id="dasdp" readonly style="cursor: pointer;">
        <div class="doctorContainer" id="doctorContainer" style="display: none"></div>
        <input type="submit" value="Add">
      </form>
    </div>
  </div>

  <script src="/js/jquery.min.js"></script>
  <script src="/js/main.js"></script>
  <script src="/js/ticket.js"></script>
  <script src="ticketdelete.js"></script>
</body>
</script>
</html>