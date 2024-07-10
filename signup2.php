<?php
require_once("includes/database.php");
include_once("templates/header.php");
include_once("templates/nav.php");

if(isset($_POST["signup"])){
    $_SESSION["fullname"] = $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $_SESSION["email"] = $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $_SESSION["username"] = $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $_SESSION["passphrase"] = $passphrase = mysqli_real_escape_string($conn, $_POST["password"]);

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

<!--Main container-->
<div id="signup" class="container mt-4">
  <h2>Sign up</h2>
  <p>Sign up to receive our emails and news.</p>
</div>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h2 class="text-center mb-4">Sign Up</h2>
          <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contact_form" autocomplete="off">
            <div class="mb-3">
              <label for="fullname" class="form-label">Fullname</label>
              <input type="text" class="form-control" name="fullname" id="fullname" maxlength="50" placeholder="Fullname" required autofocus>
              <?php if(isset($_SESSION["nameLetter_err"])){ print '<span class="error_form">'.$_SESSION["nameLetter_err"].'</span>'; unset($_SESSION["nameLetter_err"]); } ?>

              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="email" maxlength="50" placeholder="email" required autofocus>
              <?php if(isset($_SESSION["wrong_email_format"])){ print '<span class="error_form">'.$_SESSION["wrong_email_format"].'</span>'; unset($_SESSION["wrong_email_format"]); } ?>
              <?php if(isset($_SESSION["invalid_dom"])){ print '<span class="error_form">'.$_SESSION["invalid_dom"].'</span>'; unset($_SESSION["invalid_dom"]); } ?>
              <?php if(isset($_SESSION["email_exists"])){ print '<span class="error_form">'.$_SESSION["email_exists"].'</span>'; unset($_SESSION["email_exists"]); } ?>

              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" name="username" id="username" maxlength="50" placeholder="username" required >
              <?php if(isset($_SESSION["username"])){?> value="<?php print $_SESSION["username"]; unset($_SESSION["username"]); ?>" <?php } ?>
              <?php if(isset($_SESSION["username_exists"])){ print '<span class="error_form">'.$_SESSION["username_exists"].'</span>'; unset($_SESSION["username_exists"]); } ?>

              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" maxlength="16" placeholder="password" required>
              <?php if(isset($_SESSION["password"])){?> value="<?php print $_SESSION["password"]; unset($_SESSION["password"]); ?>" <?php } ?>
              <?php if(isset($_SESSION["error_password_len"])){ print '<span class="error_form">'.$_SESSION["error_password_len"].'</span>'; unset($_SESSION["error_password_len"]); } ?>

              <label for="confirm-password" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="confirm-password" maxlength="16" placeholder="password" required>
              <?php if(isset($_SESSION["confirm-password"])){?> value="<?php print $_SESSION["Confirm-password"]; unset($_SESSION["confirm-password"]); ?>" <?php } ?>
              <?php if(isset($_SESSION["matching password"])){ print '<span class="error_form">'.$_SESSION["matching password"].'</span>'; unset($_SESSION["matching password"]); } ?>
            </div>

            <div class="d-grid">
              <input type="submit" name="signup" value="Sign Up" class="btn btn-primary"></input>
            </div>

            <div class="mt-3 text-center">
              <p>Already have an account? <a href="signin.php">Sign In</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once("templates/footer.php");?>
