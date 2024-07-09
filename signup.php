<?php
require_once("includes/database.php");
include_once("templates/header.php");
include_once("templates/nav.php");
 
 if(isset($_POST["signup"])){
 $_SESSION["fullname"]= $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
 $_SESSION["email"]= $email = mysqli_real_escape_string($conn, $_POST["email"]);
 $_SESSION["passphrase"]= $passphrase = mysqli_real_escape_string($conn, $_POST["password"]);
 unset($_SESSION["error"]);

  // verify that the full name contains only letters, space and single quotation
  if(ctype_alpha(str_replace(" ", "", str_replace("\'", "", $fullname))) === FALSE){
    $_SESSION["nameLetter_err"] = "wrong name format";
    $_SESSION["error"] = "";
}
        // verify that the email has the correct format
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $_SESSION["wrong_email_format"] = "wrong email format";
          $_SESSION["error"] = "";
      }
        // verify that the email address domain is authorized (Strathmore.edu, gmail.com, yahoo.com, etc)
        $val_dom = ["strathmore.edu", "gmail.com", "yahoo.com"];
        $em_arr = explode("@", $email);
        $spot_dom = end($em_arr);
        if(!in_array($spot_dom, $val_dom)){
            $_SESSION["invalid_dom"] = "Invalid email domain " . $spot_dom ;
            $_SESSION["error"] = "";
        }
        // verify that the new email address does not exist already in the database
        $spot_em_ex = "SELECT `email` from `users` WHERE `email` = '$email' LIMIT 1";
        $spot_em_ex_res = $conn->query($spot_em_ex);
        if($spot_em_ex_res->num_rows > 0){
            $_SESSION["email_exists"] = "email exists";
            $_SESSION["error"] = "";
        }
        
        // verify that the new username does not exist already in the database
        $spot_un_ex = "SELECT `username` from `users` WHERE `username` = '$username' LIMIT 1";
        $spot_un_ex_res = $conn->query($spot_un_ex);
        if($spot_un_ex_res->num_rows > 0){
            $_SESSION["username_exists"] = "username exists";
            $_SESSION["error"] = "";
        }
        
        // verify that the password is identical to the repeat password
        if(strcmp($passphrase, $rep_pass) != 0){
          $_SESSION["matching_pass"] = "Passwords not matching";
          $_SESSION["error"] = "";
      }
        
        // verify that the password length is between 6 and 8 characters
        if(strlen($passphrase) < 4 OR strlen($passphrase) > 8){
          $_SESSION["error_pass_len"] = "password length should be between 4 and 8 characters";
          $_SESSION["error"] = "";
      }

      if(!isset($_SESSION["error"])){
                    
$hash_pass = PASSWORD_HASH($rep_pass, PASSWORD_DEFAULT);
$insert_user = "INSERT INTO users (fullname, email, username, password, genderId, roleId) VALUES ('$fullname', '$email', '$username', '$hash_pass', '$genderId', '$roleId')";

if ($conn->query($insert_user) === TRUE) {
    header("Location: signup.php");
        // remove all session variables
    session_unset();
    $_SESSION["success"] = "";
    exit();
} else {
    echo "Error: " . $insert_user . "<br>" . $conn->error;
}
}
}
     /* }

        $insert_message = "INSERT INTO messages (sender_name, sender_email, subject_line, message) VALUES ('$fullname', '$email', '$subject_line', '$text_message')";
        
        if ($conn->query($insert_message) === TRUE) {
            header("Location: view_messages.php");
            exit();
        } else {
            echo "Error: " . $insert_message . "<br>" . $conn->error;
        }
    }*/

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
            <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contact_form" autocomplete="off">
              <div class="mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="fullname"maxlength="50" placeholder="Fullname" required autofocus>
                <?php if(isset($_SESSION["nameLetter_err"])){ print '<span class="error_form">'.$_SESSION["nameLetter_err"].'</span>'; unset($_SESSION["nameLetter_err"]); } ?>


                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email"maxlength="50" placeholder="email" required autofocus>
                <?php if(isset($_SESSION["wrong_email_format"])){ print '<span class="error_form">'.$_SESSION["wrong_email_format"].'</span>'; unset($_SESSION["wrong_email_format"]); } ?>
                <?php if(isset($_SESSION["invalid_dom"])){ print '<span class="error_form">'.$_SESSION["invalid_dom"].'</span>'; unset($_SESSION["invalid_dom"]); } ?>
                <?php if(isset($_SESSION["email_exists"])){ print '<span class="error_form">'.$_SESSION["email_exists"].'</span>'; unset($_SESSION["email_exists"]); } ?>

                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username"maxlength="50" placeholder="username" required >
                <?php if(isset($_SESSION["username"])){?> value="<?php print $_SESSION["username"]; unset($_SESSION["username"]); ?>" <?php } ?>
                <?php if(isset($_SESSION["username_exists"])){ print '<span class="error_form">'.$_SESSION["username_exists"].'</span>'; unset($_SESSION["username_exists"]); } ?>

               <label for="password" class="form-label">Password</label>
               <input type="password" class="form-control" id="password"maxlength="16" placeholder="password" required>
               <?php if(isset($_SESSION["password"])){?> value="<?php print $_SESSION["password"]; unset($_SESSION["password"]); ?>" <?php } ?>
               <?php if(isset($_SESSION["error_password_len"])){ print '<span class="error_form">'.$_SESSION["error_password_len"].'</span>'; unset($_SESSION["error_password_len"]); } ?>
              

                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password"maxlength="16" placeholder="password"required>
                <?php if(isset($_SESSION["confirm-password"])){?> value="<?php print $_SESSION["Confirm-password"]; unset($_SESSION["confirm-password"]); ?>" <?php } ?> 
                <?php if(isset($_SESSION["matching password"])){ print '<span class="error_form">'.$_SESSION["matching password"].'</span>'; unset($_SESSION["matching password"]); } ?>
              </div>

              <div class="d-grid">
                <input type = "submit" name="signup" value="Sign Up" class="btn btn-primary"></input>
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
