<?php
require_once("includes/database.php");
include_once("templates/header.php");
include_once("templates/nav.php");

if (isset($_POST["contact"])) {
    $_SESSION["sender_name"] = $sender_name = mysqli_real_escape_string($conn, $_POST["name"]);
    $_SESSION["sender_email"] = $sender_email = mysqli_real_escape_string($conn, $_POST["email"]);
    $_SESSION["subject_line"] = $subject_line = mysqli_real_escape_string($conn, $_POST["subject"]);
    $_SESSION["message"] = $message = mysqli_real_escape_string($conn, $_POST["message"]);

    // Check if email already exists
    $check_email_query = "SELECT * FROM `messages` WHERE `sender_email` = '$sender_email'";
    $result = $conn->query($check_email_query);

    if ($result->num_rows > 0) {
        $_SESSION["email_exists"] = "Thank you for contacting us";
        header("Location: contact.php");
        exit();
    } else {
        // Insert the message into the database
        $insert_messages = "INSERT INTO `messages`(`sender_name`, `sender_email`, `subject_line`, `message`) VALUES ('$sender_name', '$sender_email', '$subject_line', '$message')";

        if ($conn->query($insert_messages) === TRUE) {
            // Remove all session variables
            session_unset();
            $_SESSION["success"] = "Message sent!";
            header("Location: contact.php");
            exit();
        } else {
            echo "Error: " . $insert_messages . "<br>" . $conn->error;
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
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contact_form" autocomplete="off">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <?php if(isset($_SESSION["nameLetter_err"])) { echo '<span class="error_form">'.$_SESSION["nameLetter_err"].'</span>'; unset($_SESSION["nameLetter_err"]); } ?>

                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <?php if(isset($_SESSION["wrong_email_format"])) { echo '<span class="error_form">'.$_SESSION["wrong_email_format"].'</span>'; unset($_SESSION["wrong_email_format"]); } ?>
                            <?php if(isset($_SESSION["invalid_dom"])) { echo '<span class="error_form">'.$_SESSION["invalid_dom"].'</span>'; unset($_SESSION["invalid_dom"]); } ?>

                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>

                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="d-grid">
                            <input type="submit" name="contact" value="Send" class="btn btn-primary">
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
                    <p><strong>Email:</strong> tourkenya@gmail.com</p>
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
<?php include_once("templates/footer.php"); ?>
