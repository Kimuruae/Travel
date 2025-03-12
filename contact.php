<?php
session_start(); // Start session at the beginning
require_once("includes/database.php");
include_once("templates/header.php");
include_once("templates/nav.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["contact"])) {
    $sender_name = trim($_POST["name"]);
    $sender_email = trim($_POST["email"]);
    $subject_line = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Validate inputs
    if (!preg_match("/^[a-zA-Z\s]+$/", $sender_name)) {
        $_SESSION["nameLetter_err"] = "Name should contain only letters and spaces.";
    }
    if (!filter_var($sender_email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["wrong_email_format"] = "Invalid email format.";
    }

    if (!isset($_SESSION["nameLetter_err"]) && !isset($_SESSION["wrong_email_format"])) {
        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO `messages` (`sender_name`, `sender_email`, `subject_line`, `message`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $sender_name, $sender_email, $subject_line, $message);

        if ($stmt->execute()) {
            $_SESSION["success"] = "Message sent!";
        } else {
            $_SESSION["db_error"] = "Error sending message. Please try again.";
        }
        $stmt->close();
    }
    header("Location: contact.php");
    exit();
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
                    <?php
                    if (isset($_SESSION["success"])) {
                        echo '<div class="alert alert-success">' . $_SESSION["success"] . '</div>';
                        unset($_SESSION["success"]);
                    }
                    if (isset($_SESSION["db_error"])) {
                        echo '<div class="alert alert-danger">' . $_SESSION["db_error"] . '</div>';
                        unset($_SESSION["db_error"]);
                    }
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contact_form" autocomplete="off">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <?php if (isset($_SESSION["nameLetter_err"])) {
                                echo '<span class="text-danger">' . $_SESSION["nameLetter_err"] . '</span>';
                                unset($_SESSION["nameLetter_err"]);
                            } ?>

                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <?php if (isset($_SESSION["wrong_email_format"])) {
                                echo '<span class="text-danger">' . $_SESSION["wrong_email_format"] . '</span>';
                                unset($_SESSION["wrong_email_format"]);
                            } ?>

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
