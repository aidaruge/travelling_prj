<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About us</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&family=Oleo+Script:wght@700&family=Quicksand:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="shared.css" />
    <link rel="stylesheet" href="contactus-styles.css">
    <link rel="stylesheet" href="form-styles.css"/>
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
  
    <main class="form">
      <div class="box-content">
        <h2>Send an e-mail to us:</h2>
        <form method="post" name="contact_form" action="contact-form-handler.php">
      <h3>Your Name:</h3>
      <input type="text" name="name" required />
      <br />
      <h3>Email Address:</h3>
      <input type="email" name="email" required />
      <br />
      <h3>Message:</h3>
      <textarea name="message" required></textarea>
      <br />
      <input type="submit" value="Submit" />
    </form>
    <script language="JavaScript">
      var frmvalidator = new Validator("contactform");
      frmvalidator.addValidation("name", "req", "Please provide your name");
      frmvalidator.addValidation("email", "req", "Please provide your email");
      frmvalidator.addValidation(
        "email",
        "email",
        "Please enter a valid email address"
      );
    </script>
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
