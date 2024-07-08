<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>storage</title>
    <link rel="stylesheet" href="css/storage.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/popup1.css">
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
                <?php if($_COOKIE['userRole'] == 'admin'):?>
                    <div class="addMedicine">
                        <a href="#" class="button open-popup">add Medicine</a>
                    </div>
                <?php endif;?>    
                <div class="medicineContainer" id="medicineContainer">
                </div>
            </div>
        </div>
    </div>

    <div class="popup-bg" style="display: none;">
      <div class="popup">
        <img class="close-popup" src="img/close.png" alt="icon">
        <form action="storage/checkMedicine.php" method="post">
          <input type="name" name="name" placeholder="Enter the name of the medicine">
          <input type="intval" name="count" placeholder="Enter the count">
          <input type="submit" value="Add">
        </form>
      </div>
    </div>

    <div class="popup-bg1" style="display: none;">
      <div class="popup1">
        <img class="close-popup1" src="img/close.png" alt="icon">
        <form action="storage/updateMedicine.php" method="post" class="formAction">
          <input type="text" name="name" id="name" readonly>
          <input type="intval" name="count" placeholder="Change the count">
          <input type="submit" value="Change">
        </form>
      </div>
    </div>
    
    <script src="/js/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="js/addMedicine.js"></script>
    <script src="/storage/medicine.js"></script>
</body>
</html>