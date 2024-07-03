<?php
include_once("templates/header.php");
 include_once("templates/nav.php");?>
 
    <!-- Main Container -->
  <div class="container mt-4">
    <h1 class="text-center">Contact Us</h1>
    <p class="text-center">Have questions? We'd love to hear from you. Reach out to us using the form below or find our contact details.</p>
    <div class="row mt-4">
      <!-- Contact Form -->
      <div class="col-md-6">
        <form action="submit_contact_form.php" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <!-- Contact Details -->
      <div class="col-md-6">
        <h3>Contact Details</h3>
        <p><strong>Address:</strong> 123 Kenya Street, Nairobi, Kenya</p>
        <p><strong>Phone:</strong> +254 123 456 789</p>
        <p><strong>Email:</strong> info@tourkenya.com</p>
        <h3>Follow Us</h3>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><img src="images/facebook.png" alt="Facebook" style="width:30px;"></a></li>
          <li class="list-inline-item"><a href="#"><img src="images/twitter.png" alt="Twitter" style="width:30px;"></a></li>
          <li class="list-inline-item"><a href="#"><img src="images/instagram.png" alt="Instagram" style="width:30px;"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <?php include_once("templates/footer.php");?>