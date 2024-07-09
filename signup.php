<?php
 require_once("includes/database.php");
include_once("templates/header.php");
 include_once("templates/nav.php");
 
 if(isset($_POST["signup"])){
 $_SESSION["fullname"]= $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
 $_SESSION["email"]= $email = mysqli_real_escape_string($conn, $_POST["email"]);
 $_SESSION["passphrase"]= $passphrase = mysqli_real_escape_string($conn, $_POST["password"]);
 
  // verify that the full name contains only letters, space and single quotation
        // verify that the email has the correct format
        if(!filter_var($email_address, FILTER_VALIDATE_EMAIL)){
          header("Location: ?wrong_email_format");
          exit();
      }
        // verify that the email address domain is authorized (Strathmore.edu, gmail.com, yahoo.com, etc)

        // verify that the new email address does not exist already in the database
        
        // verify that the new username does not exist already in the database
        
        // verify that the password is identical to the repeat password
        
        // verify that the password length is between 6 and 16 characters

        $insert_message = "INSERT INTO messages (sender_name, sender_email, subject_line, message) VALUES ('$fullname', '$email', '$subject_line', '$text_message')";
        
        if ($conn->query($insert_message) === TRUE) {
            header("Location: view_messages.php");
            exit();
        } else {
            echo "Error: " . $insert_message . "<br>" . $conn->error;
        }
    }

 ?>

         <!--Main container-->
    <div id="signup" class="container mt-4">
      <h2>Sign up</h2>
      <p>Sign up to recieve our emails and news.</p>
  </div>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h2 class="text-center mb-4">Sign Up</h2>
            <form>
              <div class="mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="fullname"maxlength="50" placeholder="Fullname" required autofocus>


                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email"maxlength="50" placeholder="email" required autofocus>
                <?php if(isset($_GET["wrong_email_format"])){ print "<span class='error_form'>wrong email format</span>"; }?>

                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username"maxlength="50" placeholder="username" required >

              <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password"maxlength="16" placeholder="password" required>
              

                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password"maxlength="16" placeholder="password"required>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign Up</button>
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
