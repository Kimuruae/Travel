<?php
require_once("includes/database.php");
include_once("templates/header.php");
 include_once("templates/nav.php");
 
if(isset($_POST["message"])){
  $_SESSION["fullname"] = $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
  $_SESSION["email"] = $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $_SESSION["subject"] = $username = mysqli_real_escape_string($conn, $_POST["username"]);
  $_SESSION["message"] = $passphrase = mysqli_real_escape_string($conn, $_POST["password"]);

  // Check if email already exists
  $check_email_query = "SELECT * FROM `users` WHERE `email` = '$email'";
  $result = $conn->query($check_email_query);

  if ($result->num_rows > 0) {
      $_SESSION["email_exists"] = "This email is already registered.";
      header("Location: signup.php");
      exit();
  } else {
      // Insert new user
      $insert_user = "INSERT INTO `users`(`fullname`, `email`, `username`, `password`) VALUES ('$fullname', '$email', '$username', '$passphrase')";
      
      if ($conn->query($insert_user) === TRUE) {
          header("Location: signup.php");
          // Remove all session variables
          session_unset();
          $_SESSION["success"] = "You have successfully signed up!";
          exit();
      } else {
          echo "Error: " . $insert_user . "<br>" . $conn->error;
      }
  }
}
?>
 
    <!-- Main Container -->
  <div class="container mt-4">
    <h1 class="text-center">Contact Us</h1>
    <p class="text-center">Have questions? We'd love to hear from you. Reach out to us using the form below or find our contact details.</p>
    <div class="row mt-4">
      <!-- Contact Form -->
      <div class="col-md-6">
      <div class="card">
      <div class="card-body">
        <form action="submit_contact_form.php" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <?php if(isset($_SESSION["nameLetter_err"])){ print '<span class="error_form">'.$_SESSION["nameLetter_err"].'</span>'; unset($_SESSION["nameLetter_err"]); } ?>
          
          
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <?php if(isset($_SESSION["wrong_email_format"])){ print '<span class="error_form">'.$_SESSION["wrong_email_format"].'</span>'; unset($_SESSION["wrong_email_format"]); } ?>
            <?php if(isset($_SESSION["invalid_dom"])){ print '<span class="error_form">'.$_SESSION["invalid_dom"].'</span>'; unset($_SESSION["invalid_dom"]); } ?>
          
          
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
          
          
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
          </div>
          <div class="d-grid">
              <input type="submit" name="contact" value="contact us" class="btn btn-primary"></input>
            </div>
        </form>
      </div>
</div>
    </div>
      <!-- Contact Details -->
      <div class="col-md-6">
      <div class="card">
      <div class="card-body">
        <h3>Contact Details</h3>
        <p><strong>Address:</strong> 123 Kenya Street, Nairobi, Kenya</p>
        <p><strong>Phone:</strong> +254 790 613 220</p>
        <p><strong>Email:</strong>tourkenya@gmail.com</p>
        <h3>Follow Us</h3>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><img src="images/facebook.png" alt="Facebook" style="width:30px;"></a></li>
          <li class="list-inline-item"><a href="#"><img src="images/twitter.png" alt="Twitter" style="width:30px;"></a></li>
          <li class="list-inline-item"><a href="#"><img src="images/instagram.png" alt="Instagram" style="width:30px;"></a></li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</div>
<?php include_once("templates/footer.php");?>