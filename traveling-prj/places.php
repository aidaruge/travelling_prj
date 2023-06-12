<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="shared.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&family=Oleo+Script:wght@700&family=Quicksand:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="shared.css" />
    <link rel="stylesheet" href="places.css" />
    <title>Destinations</title>
  </head>
  <body>
    <header id="header">
      <div id="page-logo">
        <a href="index.php">Travel Goals</a>
      </div>
      <nav class="header-links">
        <ul>
          <li><a href="places.php">Destinations</a></li>
          <li><a href="aboutus.php">About us</a></li>
        </ul>
      </nav>
    </header>
    <main>
    <div class="main-container">
            <?php
            require('db.php');
            $stmt = $conn->prepare('SELECT * FROM destinatii WHERE 1');
            $stmt->execute();
            $result = $stmt->get_result();
            ?>
            <?php
            while($rows=$result->fetch_assoc())
            {
              ?>
              <div class="item-content">
                <img src="<?php echo $rows['image']?>" alt ="img">
                 <div id="content">
                 <h2><?php echo $rows['Orase']?></h2>
                <p><?php echo $rows['Descriere']?></p>
                 </div>
                <div class='actions'><?php echo $rows['Pret']?></div>
              </div>
              <?php
            }
            ?>
        </div>
        <div class="second-container">
          <h2>Pentru o rezervare sau o oferta personalizata nu ezitati sa ne <a href="contact.php">contactati</a></h2>
          <h3><strong>ATENTIE!</strong> Preturile prevazute sunt pentru o singura persoana si includ: transport cu avionul, hotel de 3* sau 4* si mic dejun inclus</h3>
        </div>
    </main>
    <footer>
      <ul id="footer-links">
        <li>
          <a href="https://www.instagram.com" target="_blank">
            <img src="images/icons/insta.png" alt="Instagram"
          /></a>
        </li>
        <li>
          <a href="https://www.facebook.com" target="_blank">
            <img src="images/icons/facebook.png" alt="Facebook"
          /></a>
        </li>
      </ul>
    </footer>
  </body>
</html>
